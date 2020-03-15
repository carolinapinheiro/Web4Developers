<?php   
// conectar com a base dados
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "shopweb4developers");  
 ?> 

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Checkout</title>
    
    <!-- Bootstrap core CSS -->
    <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/confirm.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </head>

  <!-- body -->
  <body>
     
    <div class="container"> <!-- div container -->
        <div class="py-4 text-center text-white"><!-- div py-5 -->
            <h1>Checkout</h1>
        </div><!-- fim div py-5 -->

    <div class="col-md-12 order-md-1"><!-- div col-md-8 order-md-1 -->
      <h4 class="mb-3 text-white">Billing address</h4>
      <form class="needs-validation"  method="post" action="payment.html">
        <div class="row"><!-- div row -->
          <div class="col-md-6 mb-3"><!-- div col-md-6 mb-3 -->
            <label for="firstName" class="text-white">First name</label>
            <input type="text" class="form-control" id="firstName"  required>
            <div class="invalid-feedback"><!-- div invalid-feedback -->
              Valid first name is required.
            </div><!-- fim div invalid-feedback -->
          </div><!-- fim div col-md-6 mb-3 -->

          <div class="col-md-6 mb-3"><!-- div col-md-6 mb-3 -->
            <label for="lastName" class="text-white">Last name</label>
            <input type="text" class="form-control" id="lastName"  required>
            <div class="invalid-feedback"><!-- div invalid-feedback -->
              Valid last name is required.
            </div><!-- fim div invalid-feedback -->
          </div><!-- fim div col-md-6 mb-3 -->
        </div>

        <div class="mb-3"><!-- div mb-3 -->
          <label for="email" class="text-white">Email</label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback"><!-- div invalid-feedback -->
            Please enter a valid email address for shipping updates.
          </div><!-- fim div invalid-feedback -->
        </div><!--fim div mb-3 -->

        <div class="mb-3"><!-- div mb-3 -->
          <label for="address" class="text-white">Address</label>
          <input type="text" class="form-control" id="address" required>
          <div class="invalid-feedback"><!-- div invalid-feedback -->
            Please enter your shipping address.
          </div><!-- fim div invalid-feedback -->
        </div><!--fim div mb-3 -->

        <div class="mb-3"><!-- div mb-3 -->
          <label for="address2" class="text-white">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" >
        </div><!--fim div mb-3 -->

        <div class="row"><!-- div row -->
          <div class="col-md-5 mb-3"><!-- div col-md-5 -->
            <label for="country" class="text-white">Country</label>
            <input type="text" class="form-control" id="address2">
            <div class="invalid-feedback"><!-- div invalid-feedback -->
              Please select a valid country.
            </div><!--fim div invalid-feedback -->
          </div><!--fim div col-md-5 -->
     
          <div class="col-md-3 mb-3"><!-- div col-md-3 -->
            <label for="zip" class="text-white">Codigo Postal</label>
            <input type="text" class="form-control" id="cdp"  required>
          </div><!-- fim div col-md-3 -->
        </div><!--fim div row -->
        
        <hr class="mb-4">

        <div class="row"><!-- div row -->
          <div class="col-md-3 mb-3"><!-- div col-md-6 -->

       <input type="submit" class="btn btn-warning btn-lg btn-block"> 
      </form>
    </div><!-- im div col-md-6 -->
</div><!-- fim div row -->

<!-- footer ------------------------------------------------------------- -->

<div class="footer text-white" id="contacts"> <!-- div foooter -->
          <div class="container"><!-- div container -->
            <hr class="hrFooter">
                 <img class="imgFooter" src="imagens/logoBrancoSmall.png"><br>
                    <br>
                    <p class="mail">web4developers@gmail.com</p><br>
    
                    <div class="icons">
                         <i style='font-size:24px' class='fab'>&#xf16d;</i>
                         <i style='font-size:24px' class='fab'>&#xf082;</i>
                         <i style='font-size:24px' class='fab'>&#xf081;</i>
                         <i style='font-size:24px' class='fab'>&#xf08c;</i>
                         <i style='font-size:24px' class='fab'>&#xf092;</i>
                    </div>

                    <p class="copyright">Copyright © 2020 Web4Developers</p>
          </div><!-- fim div container -->
     </div><!--fim div foooter -->

<!-- SCRIPTS ------------------------------------------------------------->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</body>

</html>