<!DOCTYPE html>
<html lang="en">
<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "pharma1";
  
      $conn = mysqli_connect($servername,$username,$password,$database);
      if(!$conn){
          echo 'Not connected';
      }else{
          // echo 'Connected Sucsessfully';
      }
      $sql = "SELECT * FROM `drugs` WHERE `Drug Name` LIKE 'Bioderma';";
      $result = mysqli_query($conn, $sql);
  
      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $mrp = $row['MRP'];
        $name = $row['Drug Name'];
      } else {
        echo "0 results";
      }
  
      mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bioderma</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">
    
      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>
    
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="afterlogin.php" class="js-logo-clone">Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="afterlogin.php">Home</a></li>
                <li><a href="shop.php">Store</a></li>
                
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="has-children">
                    <a href="#">Logout</a>
                    <ul class="dropdown">
                      <li><a href="index.php">Yes, logout</a></li>
                      <li><a href="shop-single.php">Keep me logged in</a></li>
                      
  
                    </ul>
                  </li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-one"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a
              href="shop.php">Store</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Bioderma, 500ml</strong></div>
        </div>
      </div>
    </div>
      
    <div class="site-section">
    <form action="cart.php" method="post">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="border text-center">
              <img src="images/product_01.png" alt="Image" class="img-fluid p-5">
            </div>
          </div>
          <div class="col-md-6" >
            <h2 class="text-black">Bioderma, 500ml</h2>
            <p>Bioderma Sensibio H2O Daily Soothing Cleanser, Make up Pollution & Impurities Remover Face Eyes Sensitive skin, 500ml</p>
            

            <p><del>Rs.399.00</del>  <strong class="text-primary h4" color="text-black"><?php echo 'Rs.'.$mrp; ?></strong></p>
            <input type="hidden" name="Dname" id="Dname" value="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>" >
            <input type="hidden" name="Dmrp" id="Dmrp" value="<?php echo htmlspecialchars($mrp, ENT_QUOTES); ?>">
            
            
            <input type="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary" id='but1' value='Add to Cart'></p>
            
            </div>
            
            <tbody>
                
                  <th scope="row">Bioderma Laboratories is a privately owned French pharmaceutical company that specialises in medication for dermatological and hair/scalp conditions, as well as for Pediatry and cell regeneration.[4] It was founded in 1977, in Aix en Provence, where its headquarters still reside. However, in 2001, the company opened its first specialised biometrology lab for skincare research and development in Lyon. Its primary business sector is Dermatology, with products such as ABCDerm, Atoderm, Cicabio, Créaline, Hydrabio, Matriciane, Matricium, Sébium, White Objective, secure (skin care), Nodé (hair care) and Photoderm (sun care).</th>
                  
                
              </tbody>

            
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              
                    <table class="table custom-table">
              
                      <tbody>
                        <tr>
                          <td>HPIS CODE</td>
                          <td class="bg-light">999_200_40_0</td>
                        </tr>
                        <tr>
                          <td>HEALTHCARE PROVIDERS ONLY</td>
                          <td class="bg-light">No</td>
                        </tr>
                        <tr>
                          <td>LATEX FREE</td>
                          <td class="bg-light">Yes, No</td>
                        </tr>
                        <tr>
                          <td>MEDICATION ROUTE</td>
                          <td class="bg-light">Topical</td>
                        </tr>
                      </tbody>
                    </table>
              
                  </div>
              
                </div>
              </div>
  
      
            </div>
          </div>
        </div>
      </div></form>

   


    <footer class="site-footer" style="background-color: aqua;" >
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
  
              <div class="block-7">
                <h3 class="footer-heading mb-4">About Us</h3>
                <p>We are the fastest growing sellers in the Pharma Industry.</p>
  
              </div>
  
            </div>
            <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
              <h3 class="footer-heading mb-4">Quick Links</h3>
              <ul class="list-unstyled">
                <li><a href="#">Supplements</a></li>
                <li><a href="#">Vitamins</a></li>
                <li><a href="#">Diet &amp; Nutrition</a></li>
                <li><a href="#">Tea &amp; Coffee</a></li>
              </ul>
            </div>
  
            <div class="col-md-6 col-lg-3">
              <div class="block-5 mb-5">
                <h3 class="footer-heading mb-4">Contact Info</h3>
                <ul class="list-unstyled">
                  <li class="address">The Great Street,Mumbai,India.</li>
                  <li class="phone"><a href="tel://23923929210">+91 7793954548</a></li>
                  <li class="email">pharmacyyindia@gmail.com</li>
                </ul>
              </div>

          </div>
        </div>
        
      </footer>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made
             by Hemant, Shriniwas, Akshath and Bhanu</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>

      </div>
    </div>
    </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>