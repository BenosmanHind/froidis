<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TheHocineSaad\LaravelAlgereography\Models\Wilaya;

class InformationController extends Controller
{
    //
    public function index(){
        $wilayas = Wilaya::all();
        return view('professional.informations',compact('wilayas'));
    }

    public function update(Request $request , $id){
       try{
            $validated = $request->validate([
                'carte' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:2048',
                'name' => ['required', 'string', 'max:255'],
                'entreprise' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'wilaya' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'NIF' => ['required', 'string', 'max:255'],
                'RC' => ['required', 'string', 'max:255'],
            ],
            [

                'email.email' => 'e-mail doit être une adresse e-mail valide.',
                'wilaya.required' =>'wilaya est obligatoire',
                'entreprise.required' =>'entreprise est obligatoire',
                'address.required' =>'adresse est obligatoire',
                'name.required' => 'nom est obligatoire',
                'email.required' => 'e-mail est obligatoire',
                'phone.required' => 'telephone est obligatoire',
                'carte.required' => 'Rc ou carte artisan est obligatoire',
                'NIF.required' => 'NIF est obligatoire',
                'RC.required' => 'Numero RC est obligatoire',
                'carte.mimes' => 'jpeg,png,jpg,gif,pdf',

            ]);

            $user = User::findOrFail($id);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'status' => 1,
            ]);

            $professional = Professional::where('user_id', $user->id)->firstOrFail();
            $professional->update([
                'entreprise' => $request->entreprise,
                'address' => $request->address,
                'phone' => $request->phone,
                'wilaya' => $request->wilaya,
                'NIF' => $request->NIF,
                'RC' => $request->RC,
            ]);
            $hasFile = $request->hasFile('carte');
            if ($request->hasFile('carte')) {
                $destination = 'public/professional/cartes';
                $path = $request->file('carte')->store($destination);
                $storageName = basename($path);
                $professional->carte = $storageName;
            }
             $professional->save();
            return redirect('/professional')->with('success', 'Profil professionnel mis à jour avec succès.');

        }
        catch (\Exception $e) {
            dd($e->getMessage()); // Afficher le message d'erreur
        }

    }

}
