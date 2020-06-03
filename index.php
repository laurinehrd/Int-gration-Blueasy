<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="main.min.css">
    <title>Blueasy</title>
  </head>
  <body>
<!-- NAVBAR -->
  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand font-weight-bold d-flex align-items-center text-uppercase nav-blueasy" href="#">Blu<span class="blue">e</span>asy</a>
          <div class="d-flex justify-content-around">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
              <div class="navbar-nav font-weight-bold">
                <a class="px-4 nav-item nav-link active text-white text-uppercase" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="px-4 nav-item nav-link text-white text-uppercase" href="#services">Services</a>
                <a class="px-4 nav-item nav-link text-white text-uppercase" href="#features">Features</a>
                <a class="px-4 nav-item nav-link text-white text-uppercase" href="#portfolio">Portfolio</a>
                <a class="px-4 nav-item nav-link text-white text-uppercase" href="#contact">Contact</a>
              </div>
            </div>
          </div>
        </div>
    </nav>
  </header>

<!-- HERO -->
  <div class="banner container-fluid d-flex align-items-center justify-content-center">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6">
        <h1 class="py-2 text-uppercase text-white bg-dark text-center">"I'm looking for the unexpected.</h1>"
      </div>
      <div class="col-lg-8">
        <h1 class="py-2 text-uppercase text-white bg-dark text-center">I'm looking for things i've never seen before."</h1>
      </div>
    </div>
  </div>


<!-- SERVICES -->
  <div class="container-fluid services bg-primary">
    <div class="row">
      <div class="container my-5 p-0">
        <div class="row">
          <h2 class="text-uppercase font-weight-light text-white mb-4 ml-3" id="services">Services</h2>
        </div>
        <div class="row mt-3">
          <div class="col-lg-3 text-white">
            <img src="images/icone-coffee.png" alt="icone coffee"/>
            <h3 class="text-uppercase my-3 lead">Coffee</h3>
            <p class="text-justify p-services">Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie.<br>Tiramisu applicake jujubes.</p>
          </div>
          <div class="col-lg-3 text-white">
            <img src="images/icone-instant.png" alt="icone appareil photo"/>
            <h3 class="text-uppercase my-3 lead">Instant</h3>
            <p class="text-justify p-services">Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie.<br>Tiramisu applicake jujubes.</p>
          </div>
          <div class="col-lg-3 text-white">
            <img src="images/icone-serious.png" width="48px" height="48px" alt="icone serious"/>
            <h3 class="text-uppercase my-3 lead">Serious</h3>
            <p class="text-justify p-services">Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie.<br>Tiramisu applicake jujubes.</p>
          </div>
          <div class="col-lg-3 text-white">
            <img src="images/icone-frame.png" alt="icone tableau"/>
            <h3 class="text-uppercase my-3 lead">Frame</h3>
            <p class="text-justify p-services">Apple pie icing sweet. Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie.<br>Tiramisu applicake jujubes.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- PORTFOLIO -->
    <div class="container-fluid bg-white">
      <div class="row mb-5">
        <div class="container my-4 p-0">
          <div class="row">
            <div class="col-lg-6 p-0">
              <h2 class="text-uppercase font-weight-light text-gray ml-3 h-gray" id="portfolio">Portfolio</h2>
            </div>
            <div class="col-lg-6 p-0" >
              <ul class="nav nav-portfolio justify-content-end" id="nav-portfolio">
                <li class="px-2 nav-item">
                  <a class="nav-link active text-gray text-uppercase font-weight-bold" href="#">All</a>
                </li>
                <li class="px-2 nav-item">
                  <a class="nav-link text-gray text-uppercase font-weight-bold" href="#">Panoramas</a>
                </li>
                <li class="px-2 nav-item">
                  <a class="nav-link text-gray text-uppercase font-weight-bold" href="#">Portraits</a>
                </li>
                <li class="px-2 nav-item">
                  <a class="nav-link text-gray text-uppercase font-weight-bold" href="#">Macro</a>
                </li>
                <li class="px-2 nav-item">
                  <a class="nav-link text-gray text-uppercase font-weight-bold" href="#">Journal</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row mt-5 mb-4">
            <div class="col-lg-3 gallery">
              <img class="portfolio" src="images/portfolio1.jpg" alt="image pont"/>
              <div class="overlay">
                <div class="d-flex justify-content-center align-items-center h-100 display-4">+</div>
              </div>
            </div>
            <div class="col-lg-3 gallery">
              <img src="images/portfolio2.jpg" alt="image pont brume"/>
              <div class="overlay">
                <div class="d-flex justify-content-center align-items-center h-100 display-4">+</div>
              </div>
            </div>
            <div class="col-lg-3 gallery">
              <img src="images/portfolio3.jpg" alt="image paysage brume"/>
              <div class="overlay">
                <div class="d-flex justify-content-center align-items-center h-100 display-4">+</div>
              </div>
            </div>
            <div class="col-lg-3 gallery">
              <img src="images/portfolio4.jpg" alt="image ile brume"/>
              <div class="overlay">
                <div class="d-flex justify-content-center align-items-center h-100 display-4">+</div>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-lg-3 gallery">
              <img src="images/portfolio5.jpg" alt="image cabane"/>
              <div class="overlay">
                <div class="d-flex justify-content-center align-items-center h-100 display-4">+</div>
              </div>
            </div>
            <div class="col-lg-3 gallery">
              <img src="images/portfolio6.jpg" alt="image surf"/>
              <div class="overlay">
                <div class="d-flex justify-content-center align-items-center h-100 display-4">+</div>
              </div>
            </div>
            <div class="col-lg-3 gallery">
              <img src="images/portfolio7.jpg" alt="image montagne"/>
              <div class="overlay">
                <div class="d-flex justify-content-center align-items-center h-100 display-4">+</div>
              </div>
            </div>
            <div class="col-lg-3 gallery">
              <img src="images/portfolio8.jpg" alt="image haute montagne"/>
              <div class="overlay">
                <div class="d-flex justify-content-center align-items-center h-100 display-4">+</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--SECTION-->
  <div class="container-fluid bg-gray">
    <div class="row">
      <div class="container my-5">
        <div class="row">
          <div class="col-lg-6 p-0 pr-5">
            <h2 class="text-uppercase font-weight-light text-white">Just defaut section</h2>
            <p class="text-white mt-4">Bear claw marzipan bear claw applicake I love muffin. Lemon drops gummi <br>bears pastry gummi bears sesame snaps I love unerdwear.com. Soufflé <br>cotton candy dessert candy ice cream wafer gummies cheesecake brownie.<br><br>Muffin chupa chups jelly beans sweet pie applicake. Croissant chocolate <br>cake I love pudding. Ice cream I love powder pudding apple pie <br>marshmallow. Cupcake marzipan oat cake bonbon I love candy canes toffee.</p>
            <button type="button" class="btn btn-outline-dark rounded-0 text-uppercase font-weight-bold w-25 p-2 mt-4">Visit me</button>
          </div>
          <div class="col-lg-6 pr-0 pl-4 d-flex justify-content-end">
            <video src="images/video.mp4" controls class="w-100"/>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--TWITTER-->
  <div class="container-fluid bg-primary">
    <div class="row">
      <div class="container my-5">
        <div class="row">
          <div class="col-lg-3 p-0">
            <h2 class="text-uppercase font-weight-light text-white mb-4">Twitter</h2>
          </div>
          <div class="col-lg-9 d-flex justify-content-end p-0">
            <a href="#"><i class="fab fa-twitter text-white lead"></i></a>
          </div>
        </div>
        <div class="row">
          <p class="text-white p-twitter">Unercwear cookie liquorice. Cake donut cupcake lollipop soufflé candy. Chocolate oat cake <br><span class="font-weight-bold"><a href="#" class="text-decoration-none text-white">@cheesecake</span></a> Tootsie roll.</p>
        </div>
      </div>
    </div>
  </div>

<!--WHO IS-->
  <div class="container-fluid bgwho-is">
    <div class="row">
      <div class="container my-5">
        <div class="row">
          <h2 class="text-uppercase font-weight-light text-white">Who is John doe?</h2>
        </div>
        <div class="row mt-4">
          <div class="col-lg-6 p-0">
            <p class="text-white">Bear claw marzipan bear claw applicake I love muffin. Lemon drops gummi bears pastry gummi bears sesame snaps I love unerdwear.com. Soufflé cotton candy dessert candy ice cream wafer gummies cheesecake brownie.<br><br>Muffin chupa chups jelly beans sweet pie applicake. Croissant chocolate cake I love pudding. Ice cream I love powder pudding apple pie marshmallow. Cupcake marzipan oat cake bonbon I love candy canes toffee.</p>
          </div>
          <div class="col-lg-6 p-0">
            <p class="text-white">Pudding dessert jujubes tiramisu gingerbread croissant tiramisu applicake. Sesame snaps sugar plum cotton candy chocolate bonbon lemon drops candy canes cotton candy. Cake toffee pie bear claw pastry.</p>
            <a href="#"><img class="image-fluid p-2" src="images/icone-twitter-rec.png" alt="icone twitter"/></a>
            <a href="#"><img class="image-fluid p-2" src="images/icone-google-rec.png" alt="icone google"/></a>
            <a href="#"><img class="image-fluid p-2" src="images/icone-ballon-rec.png" alt="icone ballon"/></a>
            <a href="#"><img class="image-fluid p-2" src="images/icone-tasse-rec.png" alt="icone tasse"/></a>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--TESTIMONIALS-->
  <div class="container-fluid bg-white">
    <div class="row">
      <div class="container my-5">
        <div class="row">
          <div class="col-lg-3 p-0">
            <h2 class="text-uppercase font-weight-light text-gray h-gray">Testimonials</h2>
          </div>
          <div class="col-lg-9 d-flex justify-content-end">
            <img class="image-fluid p-2" src="images/icone-citation.png" alt="icone citation"/>
          </div>
        </div>
        <div class="row mb-3 mt-4">
          <p class="text-gray lead">Applicake chocolate cake wafer toffee pie soufflé wafer. Tart marshmellow wafer macaroon <br>cheesecake jelly. Gingerbread cookie soufflé sweet roll sweet roll jelly-o.</p>
        </div>
        <div class="row">
          <p class="font-weight-bold blue">-Walter White</p>
        </div>
      </div>
    </div>
  </div>

<!--CONTACT-->
  <div class="container-fluid bg-contact">
    <div class="row">
      <div class="container my-5">
        <div class="row">
          <h2 class="text-uppercase font-weight-light text-white" id="contact">Contact</h2>
        </div>
        <div class="row">
          <div class="col-lg-5 p-0">
            <form>
              <div class="form-group w-75 pt-4">
                <label for="name" class="text-uppercase">Full name</label>
                <input type="text" class="form-control rounded-0" id="fullname" aria-describedby="fullname">
              </div>
            </form>
          </div>
          <div class="col-lg-7 p-0">
            <p class="text-white pt-5">Jujubes bear claw croissant wafer sweet lemon drops brownie chocolate bar. Sweet lollipop halvah tootsie roll cake fruitcake. Chocolate cake chocolate bar gingerbread lollipop tart. Jujubes bear claw donut chupa chups.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 p-0">
            <form>
              <div class="form-group w-75 pt-4">
                <label for="exampleInputEmail1" class="text-uppercase">Email</label>
                <input type="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
            </form>
          </div>
          <div class="col-lg-7 p-0">
            <p class="text-white pt-4">Linda Newman<br>W325 State Road 123<br>Mondovi, WI(Wisconsin) 98746-54321<br>(715) 946 - 1234</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 p-0">
            <form>
              <div class="form-group pt-4">
                <label for="exampleFormControlTextarea1" class="text-uppercase">Message</label>
                <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="8"></textarea>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 p-0 mt-3">
            <button type="button" class="btn btn-message btn-outline-light rounded-0 text-uppercase w-50 p-3">Message</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--FOOTER-->
    <footer class="bg-dark">
      <div class="container d-flex justify-content-center align-items-around h-100 flex-column pt-5 pb-4">
        <div class="row">
          <div class="col-lg-10 p-0">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link text-secondary p-0 mx-2 font-weight-bold" href="#header">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary p-0 mx-2 font-weight-bold" href="#services">SERVICES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary p-0 mx-2 font-weight-bold" href="#portfolio">PORTFOLIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-secondary p-0 mx-2 font-weight-bold none" href="#contact">CONTACT</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 text-secondary font-weight-bold d-flex justify-content-end">
            <p class="p-services">2013 ©</p>
          </div>
        </div>
      </div>
    </footer>


    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
      $( document ).ready(function() {
      $('#navbar .nav-link').click(function(e) {
      e.stopPropagation();
      $('#navbar .nav-link').removeClass('active');
      $(this).addClass('active');
      });
      $('#nav-portfolio .nav-link').click(function(e) {
      e.stopPropagation();
      $('#nav-portfolio .nav-link').removeClass('active');
      $(this).addClass('active');
      });
      });
    </script>
  </body>
</html>
