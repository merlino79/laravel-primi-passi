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

    

     @if(!strpos($_email, "@") || !strpos($_email, ".")){
       <p>non puoi accedere</p>
     @else
      <p>puoi entrare</p>  
     }
    utente:


    <ul>
          @foreach ($utenti as $utente)

        <li>

          {{$utente['name']}} 
         
        </li>  
        <li>
           {{$utente['email']}} 
        </li>
        
        
      
         
         
       
         @endforeach
     </ul>        
    
          
         
       

   





        
    
  </main>
</body>
</html>