<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  <title>laravel_welcome</title>
</head>
<body>
  <header>

    <div class="container">

      <div class="row">
        <div class="col">
           <div class="link">
                <ul class="d-flex">
                <li class="me-sm-5">
                  <a href="http://127.0.0.1:8000/utente">utente</a>
                </li>
                <li>
                  <a href="http://127.0.0.1:8000/utente">film</a>
                </li>
              </ul>
          </div>
        </div>
      </div>
    </div>

  </header>

  <main>
    <h1 class="text-center my-2">
         {{$title}}
     </h1>

    
    

   

  </main>
  

</body>
</html>