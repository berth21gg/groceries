<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Nuevo mensaje</h1>
    <p>Nombre: {{ $contact->fullname }}</p>
    <p>Email: {{ $contact->email}}</p>
    <p>Mensaje: {{ $contact->message}}</p>
</body>
</html>
