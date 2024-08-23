<!DOCTYPE html>
<html>
  <head>
    <title>User Login with Database</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="images/tb-logo-design.jpg"
    />
    <!-- Styles -->
    <link href="index.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
<body>

  <nav class="navbar bg-body-tertiary">
    <div class="sub__container container-fluid" style="background-color:#142d3e;"> 
      
      <a class="navbar-brand" href="#">
        <img src="images/tb-logo-design.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        TALENTBRAINY 
        <marquee>Let's Enhance Your Skill</marquee>
      </a>

      <a href="./home.php">Sign in </a>

    </div>
    <div class="pagesList container-fluid" style="background-color: rgb(125, 199, 221);">
      <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./careerPage.php">career</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./coursesPage.php">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./aboutUs.php" aria-disabled="false">About Us</a>
          </li>
        </li>
      </ul>
      <a href="#" class="user_menu">
        <i class="fa-solid fa-list"></i>
      </a>
    </div>
  </nav>

  <div  class="coursesPage m-3" aria-disabled="true">
    <div class="card" style="width: 18rem;">
      <img src="./images/Web development logo.jpeg" class="card-img-top" alt="Web-development-logo">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="./images/python logo.png" class="card-img-top" alt="Web-development-logo">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="./images/Digital Marketing logo.jpeg" class="card-img-top" alt="Web-development-logo">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
</body>

<footer>
    <p> &copy 2024 BhaskarManikanta_Magapu </p>
</footer>

     <!-- Scripts -->
     <script src="./index.js"></script>
     <script
       src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
       crossorigin="anonymous"
     ></script>
     <script
       src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
       integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
       crossorigin="anonymous"
     ></script>
     <script
       src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
       integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
       crossorigin="anonymous"
     ></script>
   
 </html>