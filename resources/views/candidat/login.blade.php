<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
        @csrf
        <table>
            <tr>
                <td><label for="cin">CIN </label></td>
                <td>: <input type="text" name="cin" id="cin"></td>
            </tr>
            <tr>
                <td><label for="code_dossier">Code de dossier</label></td>
                <td>: <input type="text" name="code_dossier" id="code_dossier"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Valider</button></td>
            </tr>
        </table>
        
    </form>
</body>
</html>