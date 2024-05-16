<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use TheHocineSaad\LaravelAlgereography\Models\Wilaya;

class InformationController extends Controller
{
    //
    public function index(){
        $wilayas = Wilaya::all();
        return view('professional.informations',compact('wilayas'));
    }

    public function update(Request $request , $id){
        try {
            $validated = $request->validate([
                'carte' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:2048',
                'name' => 'required|string|max:255',
                'entreprise' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'wilaya' => 'required|string|max:255',
                'phone' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'NIF' => 'required|string|max:255',
            ], [
                'email.email' => 'L\'e-mail doit être une adresse e-mail valide.',
                'wilaya.required' =>'La wilaya est obligatoire',
                'entreprise.required' =>'L\'entreprise est obligatoire',
                'address.required' =>'L\'adresse est obligatoire',
                'name.required' => 'Le nom est obligatoire',
                'email.required' => 'L\'e-mail est obligatoire',
                'phone.required' => 'Le téléphone est obligatoire',
                'carte.required' => 'La carte professionnelle est obligatoire',
                'NIF.required' => 'Le NIF est obligatoire',
            ]);

            $user = User::findOrFail($id);

            if ($request->hasFile('carte')) {
                $oldCartePath = 'public/professional/cartes/'.$user->professional->carte;
                if (Storage::exists($oldCartePath)) {
                    Storage::delete($oldCartePath);
                }
                $path = $request->file('carte')->store('public/professional/cartes');
                $filename = basename($path);
            }

            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'status' => 1,
            ]);

            $professional = Professional::where('user_id', $user->id)->firstOrFail();
            $carte = isset($filename) ? $filename : $user->professional->carte;
            $professional->update([
                'entreprise' => $request->entreprise,
                'address' => $request->address,
                'phone' => $request->phone,
                'wilaya' => $request->wilaya,
                'NIF' => $request->NIF,
                'RC' => $request->RC,
                'carte' => $carte,
            ]);
            $professional->save();
            return redirect('/professional/my-informations')->with('success', 'Profil professionnel mis à jour avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Une erreur s\'est produite lors de la mise à jour du profil professionnel. Veuillez réessayer.']);
        }

    }

}
