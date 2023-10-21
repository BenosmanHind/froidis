<p> <b>{{$data['name']}} </b> , a envoyé  un message depuis Froidis</p>
<p>email : {{$data['email']}}</p>
<p>Numéro : {{$data['phone']}}</p>
<p>Société : <b>{{$data['company']}}</b></p>
<p>Adresse : {{$data['address']}}</p>
<p>------------------------------------------</p>
<table style="border-collapse: collapse; width: 100%;">
    <thead>
      <tr>
        <th colspan="5" style="border: 1px solid #000;">Informations chambre froide</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style="border: 1px solid #000;">Volume(m³)</td>
        <td style="border: 1px solid #000;">Dimension(m)</td>
        <td style="border: 1px solid #000;">Nombre de chambre</td>
        <td style="border: 1px solid #000;">Température voulue</td>
        <td style="border: 1px solid #000;">Type denrées</td>
      </tr>
      <tr>
        <td style="border: 1px solid #000;">{{$data['volume']}}</td>
        <td style="border: 1px solid #000;">{{$data['dimension']}}</td>
        <td style="border: 1px solid #000;">{{$data['nbr_chambre']}}</td>
        <td style="border: 1px solid #000;">{{$data['temperature']}}</td>
        <td style="border: 1px solid #000;">{{$data['type_denre']}}</td>
      </tr>
    </tbody>
</table>
<p>------------------------------------------</p>
<h3>Proposition et autres informations :</h3>
<p> {{$data['note']}}</p>
