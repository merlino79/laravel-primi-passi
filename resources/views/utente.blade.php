<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <main>
    utente:


    <ul>
        @foreach ($utenti as $utente)
          @foreach ( as )
            
          @endforeach
          
            
       
        <li>
          {{$utente['name']}} 
        </li>
          
         
        @endforeach

    </ul>
    
  </main>
</body>
</html>