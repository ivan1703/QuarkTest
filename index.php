<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <!-- Bootstrap CSS -->
    <title>Quark</title>
  </head>
  <body>
<div id="before-load">
  <!-- Иконка Font Awesome -->
  <i class="fa fa-spinner fa-spin"></i>
</div>
   <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Quark</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav animate side-nav">
          <li class="nav-item">
            <a class="nav-link" href="php/test.php">Новые товары
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Создатели проекта</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">написать разработчикам</a>
          </li>
        </ul>
     </div>
    </nav><!-- навигация -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/1.png" alt="Первый слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/2.png" alt="Второй слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/3.png" alt="Третий слайд">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/4.jpg" alt="Четвертый слайд">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!-- слайдер с фото-->

  <div class="conteiner">
  <div class="row">
    <div class = "col-lg-4">
  <div class="card">
  <div class="card-body">
      <img class="card-img-top" src="img/1.png">
  </div>
</div>
    </div>
    <div class = "col-lg-4">
       <div class="card">
  <div class="card-body">
      <img class="card-img-top" src="img/2.png">
  </div>
</div>
    </div>
    <div class = "col-lg-4">
       <div class="card">
  <div class="card-body">
      <img class="card-img-top" src="img/3.png">
  </div>
</div>
    </div>
  </div>
  <form class = "container">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <br>
  <button type="submit" class="btn btn-primary"> Войти </button>
</form>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery-migrate-1.4.1.min.js"></script>
    <script>
$(window).load(function() {
  $('#before-load').find('i').fadeOut().end().delay(400).fadeOut('slow');
});
</script>
  </body>
</html>