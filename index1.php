<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrstap.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</head>
<body>
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-home me-3"></i>W.Travele</h2>
        </a>
        <div class="mr-auto"></div>
<a href="index1.php"><button class="btn text-primary"><i class="fa fa-home"></i> Home</button></a>
<a href=""><button class="btn text-primary"><i class="fa fa-bars"></i> Menu</button></a>
<a href=""><button class="btn text-primary"><i class="fa fa-phone"></i> contact</button></a>
<a href=""><button class="btn text-primary"><i class="fa fa-close"></i> Close</button></a>
<a href=""><button class="btn text-primary"><i class="fa fa-arrow-right"></i> Login</button></a>
</nav>
<div class="container-fluid">
    <div class="row R">
         <div class="col-md-12 ">
            <div class="a">
            <h2 class="header">Welcome to world Travel </h2>
            <h6 style="text-align:center">Experience a stylish and comfortable Travel </h6>
            </div>    
        </div>
    </div>

<div class="container-fluid mr-0 ml-0  mt-3">
    <div class="fom">
  <h2>Book yourself an affordable  ticket</h2>
  
  <form>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text">Destinations</span>
      </div>
      <select name="from" id="from" class="form-control">
          <option value="">From</option>
          <option value="Kapenguria">Kapenguria</option>
          <option value="Kitale">Kitale</option>
          <option value="Kakamega">Kakamega</option>
          <option value="Kisumu">Kisumu</option>
          <option value="Kisii">Kisii</option>
          <option value="Eldoret">Eldoret</option>
      </select>
      <select name="to" id="from" class="form-control">
          <option value="">To</option>
          <option value="Kapenguria">Kapenguria</option>
          <option value="Kitale">Kitale</option>
          <option value="Kakamega">Kakamega</option>
          <option value="Kisumu">Kisumu</option>
          <option value="Kisii">Kisii</option>
          <option value="Eldoret">Eldoret</option>
      </select>
    </div>  
  </form>

        <form>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Traveling on</span>
            </div>
            <input class="form-control" type="date" id="date" name="traveldate" placeholder="Traveling on">
            </div> 
        
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Returning on</span>
            </div>
            <input class="form-control" type="date" id="date" name="traveldate" placeholder="Returning on (optional)">
            </div>
        </form>
            <a href="availablebuses.php"><input type="button" id="bus_id" value="search for available buses"></a>
        </div>
  </div>

</div>
</div><br><br><br>
<div class=container-fluid>
    <li  ><h2 style="margin-top:25px;">Services we offer</h2></li>
    <div class="row S">
        <div class="col-md-4 " id="s1">
            <h4 class="hs1">Passanger Travel services</h4>
            Our passenger travel services are available in most of the major regional urban centers.
            <p>Our major destinations are:Nairobi, Kampala,Kigali,Dodoma,Adis-Ababa</p>

        </div>
        <div class="col-md-4 " id="s2">
            <h4 class="hs2">Parcel delivery service</h4>
            <p>We pride on modern efficient parcel delivery infrasturecture that implements the new packaging and transportation technologies.</p>

        </div>
        <div class="col-md-4" id="s3">
            <h4 class="hs3">Cargo transportation</h4>
            <p>we offer excellent timely cargo delivery East, South and Central Africa</p>

        </div>
        
    </div>
</div>


    
</body>
<footer>
<div class="jumbotron-fluid  bg-secondary">
    <div class="row">
        <div class="col-md-3 ml- 0">
            <h4>Quick Links</h4>
            <div class="ml-5">
            <a style="color:white" href="">About Us</a><br>
            <a style="color:white" href="">Our services</a><br>
            <a style="color:white" href="">Destinations</a><br>
            <a style="color:white" href="">contact us</a><br>
            <a style="color:white" href="">FAQs</a><br>
            </div>
        </div>
        <div class="col-md-3">
            <h4>We are on social media</h4>
            <li class="fa fa-facebook text-white" style="font-size:large;  margin-left:20px; padding:10px; background-color:blue; border-radius:10px"></li>
            <li class="fa fa-twitter text-primary" style="font-size:large; margin-left:20px; padding:10px; background-color:white; border-radius:10px"></li>
            <li class="fa fa-instagram" style="font-size:large; margin-left:20px; padding:10px; background-color:pink; border-radius:10px"></li>
        </div>
        <div class="col-md-3">

        </div>
    </div>
</div>
<hr style="border:3px solid white">
</footer>
</html>