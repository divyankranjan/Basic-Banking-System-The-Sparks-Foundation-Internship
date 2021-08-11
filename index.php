<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="images/TSB.png" type="image/png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>Basic Banking System: Divyank Ranjan</title>
  <style>
    * {
      font-family: comic sans;
    }

    a:link {
      color: white;
    }

    a:hover {
      color: white;
      text-decoration: none;
    }

    h5 {
      color: teal
    }
    .blog-home2 {
  font-family: "Montserrat", sans-serif;
  color: #8d97ad;
  font-weight: 300;
}

.blog-home2 h1,
.blog-home2 h2,
.blog-home2 h3,
.blog-home2 h4,
.blog-home2 h5,
.blog-home2 h6 {
  color: #3e4555;
}

.blog-home2 .font-weight-medium {
  font-weight: 500;
}

.blog-home2 .bg-light {
  background-color: #f4f8fa !important;
}

.blog-home2 .subtitle {
  color: #8d97ad;
  line-height: 24px;
}

.blog-home2 .text-themecolor {
  color: #316ce8;
}

.blog-home2 h5 {
  line-height: 22px;
  font-size: 18px;
}

.blog-home2 a.link {
  color: #3e4555;
}

.blog-home2 a.link:hover {
  color: #316ce8;
}

.blog-home2 .on-hover {
  -webkit-transition: 0.2s ease-in;
  -o-transition: 0.2s ease-in;
  transition: 0.2s ease-in;
}

.blog-home2 .on-hover:hover {
  -webkit-transform: translateY(-10px);
  -ms-transform: translateY(-10px);
  transform: translateY(-10px);
}

.blog-home2 .date-pos {
  right: 10px;
  top: 10px;
}

.blog-home2 .date-pos span {
  font-size: 30px;
  line-height: 30px;
}
.blog-home2 .bg-info-gradiant {
    background: #188ef4;
    background: -webkit-linear-gradient(legacy-direction(to right), #188ef4 0%, #316ce8 100%);
    background: -webkit-gradient(linear, left top, right top, from(#188ef4), to(#316ce8));
    background: -webkit-linear-gradient(left, #188ef4 0%, #316ce8 100%);
    background: -o-linear-gradient(left, #188ef4 0%, #316ce8 100%);
    background: linear-gradient(to right, #188ef4 0%, #316ce8 100%);
}
  </style>
</head>

<body>
  <nav>
    <div class="container-fluid nav-wrapper  grey darken-3 z-depth-5">
      <a href="index.php" class="brand-logo"><img src="images/logo.png" style="height:100px;width:100px" /></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">Home</a></li>
        
        <li><a href="transactionhistory.php">Transaction History</a></li>
      </ul>
    </div>
  </nav>

  <div class="blog-home2 py-5">
        <div class="container">
         
          <div class="row justify-content-center">
            <div class="header-avzz pt-lg-5 pt-3 text-center mx-auto">
                <h3 class="tittle mb-lg-4 mb-3">Bank of Sparks</h3>
            </div>
        
            
          </div>
          <div class="row mt-4">
            
            <div class="col-md-4 on-hover">
                <div class=" border-0 mb-4">
                  <img class="card-img-top" src="images/transaction2.jpg">
                   <a href="transfermoney.php" class="text-decoration-none linking text-themecolor mt-2 text-center"><p class="mt-3 text-center">Perform Transactions</p></a>
                   </div>
              </div>
           
            <div class="col-md-4 on-hover">
              <div class=" border-0 mb-4">
                <img class="card-img-top" src="images/TSB2.jpg">                
                <a href=" viewdetails.php" class="text-decoration-none linking text-themecolor mt-2 text-center"><p class="mt-3 text-center">View all Customers</p></a>
              </div>
            </div>
           
            <div class="col-md-4 on-hover">
                <div class=" border-0 mb-4">
                  <img class="card-img-top" src="images/th2.jpg">            
                  <a href=" transactionhistory.php" class="text-decoration-none linking text-themecolor mt-2 text-center"><p class="mt-3 text-center">Transaction History</p></a>
                </div>
              </div>
          </div>
        </div>
      </div>

  </div>
  <!--sectio-->


  <footer class="center footer">
    <br>
    <h6 class="info"><b>Divyank Ranjan © 2021 Bank of Sparks</b></h6>
    
  </footer>

  <script src="./js/main.js"></script>
  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>