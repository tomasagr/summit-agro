<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Solicito el cambio de password</title>

  <style>
    body {
      font-family: Helvetica;
    }

    #emailContent {
      text-align: center;
    }
  </style>
</head>
<body>
  <div id="emailContent">
     <p>Solicito el cambio de password</p>
     <p>Usuario: <b>{{$user->first_name}} {{$user->last_name}}</b></p>
     <p>Email: <b>{{$user->email}}</b></p>
     <p>Password: <b>{{$user->pass}}</b></p>
  </div>
</body>
</html>