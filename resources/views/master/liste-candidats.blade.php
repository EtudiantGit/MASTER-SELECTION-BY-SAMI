<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $master->title }}</title>
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
    <center>
        <h2>Liste des candidats au master <span>{{$master->title}}</span></h2>
        <h3>Département {{$master->departement->nom}}</h3>
    </center>
    <br><br>
    <table style="border-collapse: collapse; width: 100%;">
        <thead style="background-color: grey; color: white;">
        <tr>
            <th style="padding: 10px;">CIN</th>
            <th style="padding: 10px;">NOM</th>
            <th style="padding: 10px;">PRENOM</th>
            <th style="padding: 10px;">E-mail</th>
            <th style="padding: 10px;">SCORE</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($master->candidats->all() as $candidat)
        <tr style="border-top: 1px solid grey;">
            <td style="padding: 10px;">{{$candidat->cin}}</td>
            <td style="padding: 10px;">{{$candidat->nom}}</td>
            <td style="padding: 10px;">{{$candidat->prenom}}</td>
            <td style="padding: 10px;">{{$candidat->email}}</td>
            <td style="padding: 10px;">{{$candidat->pivot->score}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    
</body>
</html>