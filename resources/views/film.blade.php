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

 <header>
   <div class="container">
     <div class="row">
       <div class="col p-2">
         <div class="link">
           <span><a href="http://127.0.0.1:8000">home</a></span>

         </div>
       </div>
     </div>
   </div>
 </header>

 <main>
   <div class="container">
     <div class="row">
       <div class="col text-center mt-3">
        <h1> {{$title}}</h1>
       </div>
     </div>
     <div class="row">
       <div class="col mt-4">
         
          <ul>
            @foreach ($film as $films)
              

                <li>
                  <h4>{{$films['title']}}</h1>
                  
                </li>
                <li>
                  diretto :
                  {{$films['direct']}}
                </li>
                <li>
                  year :
                  {{$films['year']}}
                </li>

              
            @endforeach
         </ul>
       </div>
       

 </main>
</body>
</html>