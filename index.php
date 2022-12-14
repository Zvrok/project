<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
 
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-image:url(https://tse1.mm.bing.net/th?id=OIP.Ug1OswGh6N77UFJ6UZn_fgHaEK&pid=Api&P=0&w=283&h=159);
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #218555;
    font-size: 50px;
  }
  .logo {
    color: #218555;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #218555;
  }
  .carousel-indicators li {
    border-color: #218555;
  }
  .carousel-indicators li.active {
    background-color: #218555;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #218555; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #218555;
    background-color: #fff !important;
    color: #218555;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #218555 !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #218555;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #218555;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #218555 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #218555;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  /*tambahan sendiri*/
  .atas{
    margin-top: 5%;
    margin-right: 0%;
    margin-left: 0%;
    width: 100%;
  }
  .konten{
    height: 500px;
  }
  .navbar-brand>img {
    display: block;
    margin-top: -10px;
}
  #exampleModal{
    margin-top: 100px;
  }
  .carousel-content {
  position: absolute;
  bottom: 50%;
  left: 45%;
  z-index: 20;
  color: white;
  text-shadow: 0 1px 2px rgba(0,0,0,.6);
}
.carousel-content h1 {
  margin-left : auto;
  margin-right:auto;
  text-align  : center;
}
.fade.in {
    opacity: 1;
    padding: 1%;
}



  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#mypage"><img src="img/bumi.png" width="50" height="50"></img></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- <div class="jumbotron text-center">
  <h1>Zvo Company</h1> 
  <p>We specialize in trolling</p> 
  <form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div> -->
<div class="container atas">
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner konten">
      <div class="carousel-content">
        <h1>Zvo Company</h1>
      </div>
      <div class="item active">
        <img src="https://interactive.wttw.com/sites/default/files/explore-chicago-from-the-air-hero_02.jpg" alt="Chicago" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://www.travelinusa.us/wp-content/uploads/sites/3/2014/06/Dove-dormire-a-Los-Angeles.jpg" alt="LA" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="https://res.klook.com/image/upload/Mobile/City/szhx3ytpgfnhpbmsngk0.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2><strong>Zvo Company</strong></h2><br>
      <h4>Kami menggalang donasi untuk reboisasi tanaman.</h4><br>
      <p>Donasi yang anda berikan sebesar apapun akan sangat berarti bagi lingkungan sekitar anda.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Misi kami ingin mempertahankan bumi dengan reboisasi.</h4><br>
      <p><strong>VISION:</strong> kami ingin membantu banyak hutan yang di di tebang secara asal di reboisasi.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
<h4>What we have done</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="img/hutanbakau.jpg" alt="Hutan Bakau" width="400" height="300">
        <p><strong>Hutan Bakau</strong></p>
        <p>Yes, we built Hutan Bakau</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="img/hutanlumut.jpg" alt="Hutan Lumut" width="400" height="300">
        <p><strong>Hutan Lumut</strong></p>
        <p>We built Hutan Lumut</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="img/hutantropis.jpg" alt="Hutan Tropis" width="400" height="300">
        <p><strong>Hutan Tropis</strong></p>
        <p>Yes, Hutan Tropis is ours</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="img/hutanbakau.jpg" alt="Hutan Bakau" width="400" height="300">
        <p><strong>Hutan Bakau</strong></p>
        <p>Yes, we built Hutan Bakau</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="img/hutanlumut.jpg" alt="Hutan Lumut" width="400" height="300">
        <p><strong>Hutan Lumut</strong></p>
        <p>We built Hutan Lumut</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="img/hutanlumut.jpg" alt="Hutan Lumut" width="400" height="300">
        <p><strong>Hutan Lumut</strong></p>
        <p>We built Hutan Lumut</p>
      </div>
    </div>
  </div><br>
  <div class="row text-center slideanim">
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="img/hutanbakau.jpg" alt="Hutan Bakau" width="400" height="300">
        <p><strong>Hutan Bakau</strong></p>
        <p>Yes, we built Hutan Bakau</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="img/hutanlumut.jpg" alt="Hutan Lumut" width="400" height="300">
        <p><strong>Hutan Lumut</strong></p>
        <p>We built Hutan Lumut</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="img/hutantropis.jpg" alt="Hutan Tropis" width="400" height="300">
        <p><strong>Hutan Tropis</strong></p>
        <p>Yes, Hutan Tropis is ours</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="img/hutanbakau.jpg" alt="Hutan Bakau" width="400" height="300">
        <p><strong>Hutan Bakau</strong></p>
        <p>Yes, we built Hutan Bakau</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="img/hutanlumut.jpg" alt="Hutan Lumut" width="400" height="300">
        <p><strong>Hutan Lumut</strong></p>
        <p>We built Hutan Lumut</p>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="thumbnail">
        <img src="img/hutanlumut.jpg" alt="Hutan Lumut" width="400" height="300">
        <p><strong>Hutan Lumut</strong></p>
        <p>We built Hutan Lumut</p>
      </div>
    </div>

  </div><br>

</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/hutanbakau.jpg" alt="Hutan Bakau" width="400" height="300">
        <p><strong>Hutan Bakau</strong></p>
        <p>Yes, we built Hutan Bakau</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/hutanlumut.jpg" alt="Hutan Lumut" width="400" height="300">
        <p><strong>Hutan Lumut</strong></p>
        <p>We built Hutan Lumut</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/hutantropis.jpg" alt="Hutan Tropis" width="400" height="300">
        <p><strong>Hutan Tropis</strong></p>
        <p>Yes, Hutan Tropis is ours</p>
      </div>
    </div>
  </div><br>
  
  <h2>What our customers say</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="book.php" method="post">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="username" name="name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form34">Your name</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="email" name="email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form29">Your email</label>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-tag prefix grey-text"></i>
          <input type="text" id="subject" name="subjectt" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form32">Subject</label>
        </div>

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <textarea type="text" id="message" name="message" class="md-textarea form-control" rows="4"></textarea>
          <label data-error="wrong" data-success="right" for="form8">Your message</label>
        </div>



      </div>
      <div class="modal-footer d-flex justify-content-center">
        <a href="#modalconfirm" data-toggle="modal" on-click="" class="btn btn-unique" type="submit" name="button">Send <i class="fas fa-paper-plane-o ml-1"></i></a>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="modalconfirm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">konfirmasi pembayaran</h4>
      </div>
      <div class="modal-body">
        <form action="book.php" method="">
        <button class="btn btn-default" data-dismiss="modal">Tidak</button>
        <button class="btn btn-default" type="submit" name="buttonconfirm">Ya</button>
        </form>
      </div>
    </div>
  </div>

</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Lorem</p>
          <p><strong>15</strong> Ipsum</p>
          <p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg"  data-toggle="modal" data-target="#exampleModal">DONASI</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg"  data-toggle="modal" data-target="#exampleModal">DONASI</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p>
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg"  data-toggle="modal" data-target="#exampleModal">DONASI</button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Bekasi, Indonesia</p>
      <p><span class="glyphicon glyphicon-phone"></span> +62 85888689467</p>
      <p><span class="glyphicon glyphicon-envelope"></span> zvocompany12@.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>

</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
