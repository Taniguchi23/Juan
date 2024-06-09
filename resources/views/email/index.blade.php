<!DOCTYPE html>
<html>
<head>
    <title>Web-tuts.com</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>

    <p>Este mensaje fue enviado por: <b>{{ $mailData['nombre'] }}</b></p>
    <p>su email es: <b>{{ $mailData['correo'] }}</b></p>
    <p>El servicio desea contratar: <b>{{ $mailData['servicio'] }}</b></p>
    <p>Empresa: <b>{{ $mailData['empresa'] }}</b></p>
    <p>RUC: <b>{{ $mailData['ruc'] }}</b></p>
    <p>Mensaje: <b>{{ $mailData['mensaje'] }}</b></p>
    <p>Enviado el:  <b>{{ date('d/m/Y', time()); }}</b></p>
    <p>Enviado por:  <b>{{ $remitente }}</b></p>
    <p>Muchas Gracias.</p>
</body>
</html>