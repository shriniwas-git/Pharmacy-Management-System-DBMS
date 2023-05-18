
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
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['Dname'];
        $mr=$_POST['Dmrp'];
    }
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['fname'])){
        
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $name1 = $_POST['Dname1'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $c_email = $_POST['c_email'];
      $c_phone = $_POST['c_phone'];
      $notes = $_POST['notes'];
      $price = $_POST['amt'];
      $quant = $_POST['quant'];
  }
    // if($name && $mr){
    // echo $name;
    // echo $mr;
    // }
    if(isset($_POST['fname']) && isset($_POST['lname'])){
      $sql = "INSERT INTO `billing` (`S.No`, `First Name`, `Last Name`, `City`, `Address`, `Email`, `Phone`, `Notes`, `Drug Name`, `Quantity`, `Amount`) VALUES (NULL, '$fname', '$lname', '$city', '$address', '$c_email', '$c_phone', '$notes', '$name1', '$quant', '$price');";
    $RESULT = mysqli_query($conn,$sql);
    echo var_dump($name);

if(!$RESULT){
    echo 'Sorry query not excecuted';
}else{
  header("Location: thankyou.php");
}
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cart</title>
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
                <li><a href="afterlogin.php">Home</a></li>
                <li class="active"><a href="shop.php">Store</a></li>
                
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="has-children">
                    <a href="#">Logout</a>
                    <ul class="dropdown">
                      <li><a href="index.php">Yes, logout</a></li>
                      <li><a href="afterlogin.php">Keep me logged in</a></li>
                      
  
                    </ul>
                  </li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> 
            <strong class="text-black">Cart</strong>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
               
                <tbody>
                  <tr id="id1">
                    
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $name;?></h2>
                    </td>
                    <td class="product-price"><?php echo 'Rs.' . $mr; ?></td>
                    <td class="product-quantity">
                      <div class="input-group mb-3" style="max-width: 220px;">
                        <input id="btn22" type="number" min="0" max="5" class="form-control text-center" value='0' placeholder="">
                      </div>
                      <input type="hidden" id="Dqty" name="Dqty" value="">
                    </td>
                    <td class="product-total">
                      <?php echo 'Rs.' . ($mr * 0); ?>
                    </td>

                    <script>
                      document.getElementById("btn22").addEventListener("change", function() {
                        document.getElementById("Dqty").value = this.value;

                        // Get the price of the item
                        var price = <?php echo $mr; ?>;

                        // Calculate the total for the item
                        total = price * this.value;
                        
                        // Update the total for the item in the table
                        document.querySelector('#id1 .product-total').textContent = 'Rs.' + total;
                      });
                    </script>
                    <td><button class="btn btn-outline-primary js-btn-plus" onclick="myFunction()">X</button></td>                  </tr>

                </tbody></script>
              </table>
              <script>
                function myFunction() {
                  const element = document.getElementById("id1");
                  element.remove();
                  document.querySelector('#tot11 .new').textContent = '0';
                  document.querySelector('#tot1 .new1').textContent = '0';
                }
                </script>
            </div>
          </form>
        </div>
                
                
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              
              <div class="col-md-6">
              <button class="btn btn-primary btn-lg btn-block" onclick="window.location='shop.php'">Continue Shopping</button>
              </div>
            </div>
            
                  
                
          </div>
          <form action="checkout.php" method="post">
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
              <input type="hidden" name="dname" value="<?php echo $name;?>">
                  <input type="hidden" id="t1" name="t1">
                  <script>
                  document.getElementById("t1").value = total;
                </script>
                
                
                
    
                <div class="row">
                <div class="row mb-5">
                  <div class="col-md-12">
                  <!-- <a  style="color: #080710;" href="index.php" onclick="window.location='checkout.php'"><input type="submit" id='but1' value='Submit'></a> -->
                  <!-- <input id="submit" type="submit" name="submit" value="Proceed to checkout"> -->
                    <!-- <button href="#bill" class="btn btn-primary btn-lg btn-block" >Proceed To
                      Checkout</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div></form>
        </div>
      </div>
    </div>
    <form action="cart.php" method="post">
    <div id="bill" class="site-section">
      <div class="container">
        
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Billing Details</h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group">
                <label for="city" class="text-black">City <span class="text-danger">*</span></label>
                <select id="city" name="city" class="form-control">
                  <option value="1">Select a city</option>
                        <option value="Raipur">Raipur</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Bangalore">Bangalore</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Pune">Pune</option>
                        <option value="Nagpur">Nagpur</option>
                        <option value="Chennai">Chennai</option>
                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="fname" class="text-black">First Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="fname" name="fname">
                </div>
                <div class="col-md-6">
                  <label for="lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="lname" name="lname">
                </div>
              </div>
    
              
    
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="address" class="text-black">Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                </div>
              </div>
    
              
    
              
    
              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email" class="text-black">Email Address <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" id="c_email" name="c_email">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                  <input type="hidden" name="amt" id="amt">
                  <!-- <script>
                    document.getElementById("amt").value = document.querySelector('#tot1 .new1').textContent;
                    document.getElementById("btn22").addEventListener("change", function() {
                        document.getElementById("Dqty").value = this.value;

                        // Get the price of the item
                        var price = <?php echo $mr; ?>;

                        // Calculate the total for the item
                        total = price * this.value;
                        document.getElementById("amt").value = price*this.value;
                        
                        
                        
                      });
                  </script> -->
                </div>
              </div>
    
              
    
    
              
    
              <div class="form-group">
                <label for="notes" class="text-black">Order Notes</label>
                <textarea name="notes" id="notes" cols="30" rows="5" class="form-control"
                  placeholder="Write your notes here..."></textarea>
              </div>
    
            </div>
          </div>
         
    
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <tr id="tot11">
                        <td><?php echo $name;?></td>
                        <td class="new"></td>
                        <script>
                        
                      
                        document.getElementById("btn22").addEventListener("change", function() {
                        document.getElementById("Dqty").value = this.value;

                        // Get the price of the item
                        var price = <?php echo $mr; ?>;

                        // Calculate the total for the item
                        total = price * this.value;
                        
                        // Update the total for the item in the table
                        document.querySelector('#tot11 .new').textContent = 'Rs.' + total;
                        
                      });
                      <?php
                            if (isset($_POST['total'])) {
                                $price = $_POST['total'];
                                
                            }
                            ?>
                      </script>
                      </tr>
                      
                       <!-- <tr>
                      //   <td>Bioderma <strong class="mx-2">x</strong> 1</td>
                      //   <td>Rs.270.00</td>
                      // </tr> -->
                      
                      <tr id="tot1">
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="new1"></td>
                        <script>
                        
                      
                        document.getElementById("btn22").addEventListener("change", function() {
                        document.getElementById("Dqty").value = this.value;

                        // Get the price of the item
                        var price = <?php echo $mr; ?>;

                        // Calculate the total for the item
                        total = price * this.value;
                        
                        // Update the total for the item in the table
                        document.querySelector('#tot1 .new1').textContent = 'Rs.' + total;
                        
                      });
                      </script>
                      </tr>
                    </tbody>
                  </table>
                  <input type="hidden" name="Dname1" id="Dname1" value="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>" >
                  <input type="hidden" name="quant" id="quant" value="" >
                  <script>
                        
                      
                        document.getElementById("btn22").addEventListener("change", function() {
                        document.getElementById("Dqty").value = this.value;
                        document.getElementById("quant").value = this.value;
                  
                        
                      });
                      </script>
                  <div class="border mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button"
                        aria-expanded="false" aria-controls="collapsebank">Cash on Delivery</a></h3>
    
                    <div class="collapse" id="collapsebank">
                      <div class="py-2 px-4">
                        <p class="mb-0">We recieve payments only through cash.</p>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <!-- <input type="submit"><button  onclick="window.location='thankyou.php'">Place
                      Order</button></input> -->
                      <a  style="color: #080710;" href="thankyou.php" ><input type="submit" class="btn btn-primary btn-lg btn-block" value='Place Order'></a>
                  </div>
    
                </div>
              </div>
            </div>
    
          </div>
        </div>
        
      </div>
    </div></form>
    <script>
  // Update the hidden field value based on user input
  document.getElementById("btn22").addEventListener("change", function() {
    document.getElementById("amt").value = this.value * <?php echo $mr; ?>;
  });
</script>


    <footer class="site-footer" style="background-color: aqua;">
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
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made
             by Hemant, Shriniwas, Akshath and Bhanu</a>
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
  <script src="cart.js">
</script>
</body>

</html>