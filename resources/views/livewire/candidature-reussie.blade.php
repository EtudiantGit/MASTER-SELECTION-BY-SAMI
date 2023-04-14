<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css')}} ">
    <title>Candidature</title>
</head>
<body class="d-flex justify-content-center p-4 pt-4">
    <div class="card">
        <div class="card-header bg-success text-white">Candidature terminée</div>
        <div class="card-body">
           Salut<b>{{ request()->name }}</b> Votre candidature a été effectuée avec succès <br>
           Nous allons traiter votre demande ultérieuremet <b>{{ request()->email }}</b> <br>
            Les résultats de pré-selections serons publiés sur le site de la faculté le 28/06/2023 <br><br>
            <a href="/" class="btn btn-sm btn-primary">Suivi de candidature</a>
        </div>
    </div>
    
</body>
</html>