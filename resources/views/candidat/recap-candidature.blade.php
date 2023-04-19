<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recapitulatif</title>
    <style>
        span{
            line-height: 52px;
            text-align: center;
            list-style-type: none;
        }
        span{
            color: rgb(250, 14, 14);
        }
        .header {
        position: relative;
        }

        .left-image {
        position: absolute;
        left: 0;
        width: 100;
        height: 100;
        top: 0;
        }

        .right-image {
        position: absolute;
        right: 0;
        width: 100;
        height: 100;
        top: 0;
        }
    </style>
</head>
<body>
    

    <div class="header">
        <img src="ump-logo.jpg" alt="ump" class="left-image">
        <img src="fso-logo.png" alt="fso" class="right-image">
      </div>
    <br><br><br><br><br><br><br><br><br>
    <div>
        <center>
            <h2>N° Dossier : {{$candidat->num_dossier}}</h2>
            <p style="text-align: right" >{{$candidat->created_at}}</p>
        </center>
    <br><br>
       
           
          <table style="border-collapse: collapse; width: 100%;">
            <thead style="background-color: grey; color: white;">
              <tr>
                <th style="padding: 10px;">Nom</th>
                <th style="padding: 10px;">Note S1</th>
                <th style="padding: 10px;">Note S2</th>
                <th style="padding: 10px;">Note S3</th>
                <th style="padding: 10px;">Note S4</th>
                <th style="padding: 10px;">Note S5</th>
                <th style="padding: 10px;">Note S6</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-top: 1px solid grey;">
                <td style="padding: 10px;">{{ $candidat->nom.' '.$candidat->prenom}}</td>
                <td style="padding: 10px;">{{ $candidat->moyenne_S1 }}</td>
                <td style="padding: 10px;">{{ $candidat->moyenne_S2 }}</td>
                <td style="padding: 10px;">{{ $candidat->moyenne_S3 }}</td>
                <td style="padding: 10px;">{{ $candidat->moyenne_S4 }}</td>
                <td style="padding: 10px;">{{ $candidat->moyenne_S5 }}</td>
                <td style="padding: 10px;">{{ $candidat->moyenne_S6 }}</td>
              </tr>
            </tbody>
          </table>
    <hr>
          <br><br><br><br><br><br>
    <b>Fillière choisies :</b> <br>
    @foreach ($masters as $master)
    <ul>
        <li>{{ $master->title }}</li>
    </ul>
    @endforeach
    <br><br><br><br><br><br><br><br>
   <h3 style="text-align: right;">Signature : </h3>
</footer>
</div>
</body>
</html>