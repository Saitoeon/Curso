<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tienda</title>
    <link rel="stylesheet" href="estilos/home.css">
      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container-expanded">
        <div class="row">
            <div class="col-sm-10 col-xs-12 col-lg-10 navDiv">
                <?php include('navbar.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="imgs/sears.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="imgs/sears.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="imgs/sears.jpg" alt="Third slide">
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
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="imgs/2653621.jpg" alt="Card image cap" height="300px">
                  <div class="card-body">
                    <!-- h5 class="card-title">Card title</h5 -->
                    <p class="card-text">Iphone 6 32Gb Color Space Gray R9 (Telcel)</p>
                  </div>
                  <div class="card-body">
                    <a href="#" class="card-link">Agregar a carrito</a>
                    <a href="#" class="card-link">Detalle</a>
                  </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="imgs/2653621.jpg" alt="Card image cap" height="300px">
                  <div class="card-body">
                    <!-- h5 class="card-title">Card title</h5 -->
                    <p class="card-text">Iphone 6 32Gb Color Space Gray R9 (Telcel)</p>
                  </div>
                  <div class="card-body">
                    <a href="#" class="card-link">Agregar a carrito</a>
                    <a href="#" class="card-link">Detalle</a>
                  </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                  <img class="card-img-top" src="imgs/2653621.jpg" alt="Card image cap" height="300px">
                  <div class="card-body">
                    <!-- h5 class="card-title">Card title</h5 -->
                    <p class="card-text">Iphone 6 32Gb Color Space Gray R9 (Telcel)</p>
                  </div>
                  <div class="card-body">
                    <a href="#" class="card-link">Agregar a carrito</a>
                    <a href="#" class="card-link">Detalle</a>
                  </div>
                </div>
            </div>
        </div> 
        
        <div class="row footer">
            <?php include('footer.php'); ?>
        </div>
    </div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>