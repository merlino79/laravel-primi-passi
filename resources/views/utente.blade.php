<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>

  <header class="p-2 ">
    <spam>
    <a href="http://127.0.0.1:8000">Home</a>
  </spam>
  </header>

  <main>
    <div class="container my-2">
      <div class="row">
        <div class="col">
          utente:


    <ul>
          @foreach ($utenti as $utente)  

            @if(!strpos($utente['email'], "@") || !strpos($utente['email'], "."))
            <p>non puoi accedere</p>
            @else
               <p>puoi entrare</p>  
            @endif

             <li>
              {{$utente['email']}}
            </li>
          @endforeach

         
     </ul>        
        </div>
      </div>
    </div>
    
  </main>
  
  

    

     

   
       
     
    
          
         
       

   





        
    
  
</body>
</html>