<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </head>
  
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">abc</a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about.html">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Items
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">All Day Dining</a></li>
                <li><a class="dropdown-item" href="#">Soups</a></li>
                <li><a class="dropdown-item" href="#">Salaad</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something other</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact.html">Contact</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
          <!-- for sign in and sign up in navbar  -->
          <div class="mx-2">
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#signupModal">SignUp</button>
          </div>
        </div>
      </div>
    </nav>

<!-- logIn Modal -->   
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login in pkgCoder </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- adding form for login model -->
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- SignUp Modal  -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModal" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="signuModalLabel">SignUp in pkgCoder</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
       <!-- adding form for signup model -->
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Enter your name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="cexampleInputEmail1" class="form-label">Confirm Email </label>
          <input type="email" class="form-control" id="cexampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Set Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Create Account</button>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
<!-- ..........food menu..... -->
<div class="wrapper">
    <div>
        <h1><i class='fas fa-shopping-cart'>..</i></h1>
    </div>
    <div class="title">
        <h4><span>fresh food for good health</span>our menu</h4>
    </div>
    <div class="menu">
        <div class="single-menu">
            <img src="images/manchow.jpg" alt="">
            <div class="menu-content">
                <h4>Manchow &nbsp;<span> ₹145</span></h4>
                <p>With vegetables <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, atque.</p>
            </div><br> <br>
            <button type="submit" name="add" class="add"> Add <i class="fas fa-shopping-cart"></i> </button>
        </div>
        <div class="single-menu">
            <img src="images/manchow_chicken.jpg" alt="">
            <div class="menu-content">
                <h4> Manchow &nbsp;<span>₹185</span></h4>
                <p>With chicken <br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, atque.</p>
            </div>
            <button type="submit" name="add" class="add"> Add <i class="fas fa-shopping-cart"></i> </button>
        </div>
        <div class="single-menu">
            <img src="images/sweat_corn.jpg" alt="">
            <div class="menu-content">
                <h4>sweat corn <span>₹45</span></h4>
                <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
            </div>
            <button type="submit" name="add" class="add"> Add <i class="fas fa-shopping-cart"></i> </button>
        </div>
        <div class="single-menu">
            <img src="images/sweat_corn_chicken.jpg" alt="">
            <div class="menu-content">
                <h4>sweat corn (with chicken)<span>₹95</span></h4>
                <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
            </div>
            <button type="submit" name="add" class="add"> Add <i class="fas fa-shopping-cart"></i> </button>
        </div>
        <div class="single-menu">
            <img src="images/aloo_matar_samosa.jpg" alt="">
            <div class="menu-content">
                <h4>Aloo matar samosa <span>₹65</span></h4>
                <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
            </div>
            <button type="submit" name="add" class="add"> Add <i class="fas fa-shopping-cart"></i> </button>
        </div>
        <div class="single-menu">
            <img src="images/Dahi-Ke-Kabab.jpg" alt="">
            <div class="menu-content">
                <h4>Dahi kabab <span>₹105</span></h4>
                <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
            </div>
            <button type="submit" name="add" class="add"> Add <i class="fas fa-shopping-cart"></i> </button>
        </div>
        <div class="single-menu">
            <img src="images/paneer_tikka.jpg" alt="">
            <div class="menu-content">
                <h4>Paneer tikka <span>₹125</span></h4>
                <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
            </div>
            <button type="submit" name="add" class="add"> Add <i class="fas fa-shopping-cart"></i> </button>
        </div>
        <div class="single-menu">
            <img src="images/greek_salaad.jpg" alt="">
            <div class="menu-content">
                <h4>greek salaad <span>₹65</span></h4>
                <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
            </div>
            <button type="submit" name="add" class="add"> Add <i class="fas fa-shopping-cart"></i> </button>
        </div>
    </div>
</div>
   

<!-- Adding footer  -->
<footer class="container">
  <p class="float-right"><a href="#">Back to top</a></p>
  <p>© 2021 Pintu Kr Gupta, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
</footer>
<!-- Adding php  -->
<?php
  $con =mysqli_connect('localhost','root');
  mysqli_select_db($con,'foodorderkart');
  if($con){
    echo "connection successful";
  }


?>

<script type="text/javascript">
 var noti =document.querySelector('h1');
 var select =document.querySelector('.select');
 var button=document.querySelector('button');
 for(but of button){
  but.addEventListener('click',(e)=>{
      var add=Number(noti.getAttribute('data-count')||0);
      noti.setAttribute('data-count',add+1);
      noti.classList('zero');
  })
 }
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
