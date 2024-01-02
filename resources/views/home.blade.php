<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC TECH</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kumbh+Sans">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/styles.css')}}> 
    
</head>
<body>
    @include('widgets.navbar')

    <div class="home w-100 d-flex align-items-center justify-content-center">
        <div class="row w-100 d-flex align-items-center ps-5 ">
            <div class="col-6">
                <h1 class="fw-bolder font-light pb-3" style="font-size: 75px;">Gear Up!</h1>
                <h6 class=" font-light pb-3" style="font-size: 24px;">Maximize Performance, Minimize <br>Price.</h6>
                <a href="#products"> <button type="button" class="my-bt fw-bold" style="font-size: 14px;">BROWSE PRODUCT</button> </a>
              </div>
              <div class="col-6 ps-5">
                <img src="{{ asset('images/illustration.png')}}" style="max-width: 90%;" alt="Illustration">
              </div>
          </div>
    </div>
    @include('widgets.contents')
    @include('widgets.about')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>