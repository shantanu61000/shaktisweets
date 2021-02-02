<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shaktisweets | Best sweet shop in Nallasopara - Vasai - Virar</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="shared/nav/styles/nav.css">
    <link rel="stylesheet" href="shared/footer/styles/footer.css">
   

</head>
<body>
<div class="modal fade show" id="phone-login-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h1>Shaktisweets.in</h1>
                <div id="firebaseui-auth-container"></div>
                <div id="loader">Loading...</div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade show" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="login-modal-title">Shaktisweets.in</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="form-group">
                <label for="phone" class="down">Phone</label>
                <input type="number" class="form-control" id="phone">
            </div>
            <div class="form-group disable-otp d-none">
                <label for="otp" class="down">OTP</label>
                <input type="text" class="form-control" id="otp">
            </div>
            <div class="form-group d-flex align-items-center">                
                <input type="checkbox" checked id="remember-me">                   
                <label for="remember-me" class="remember-me">Remember me</label>               
            </div>
            <div class="form-group">
                <button class="form-control get-otp-btn" type="button" id="get-otp-btn"> 
                    <div class="spinner-border d-none get-otp-spinner" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>  
                    Get OTP
                </button>
                <p class="response otp-sent-msg pt-2"></p>
            </div>
            <div class="form-group">
                <button class="form-control sign-in-btn d-none" type="button" id="sign-in-btn">Login</button>
            </div>
        </form>     
      </div>
      
    </div>
  </div>
</div>

<div class="content">
    <?php
        include "shared/nav/nav.php";
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0 hero-image">
                <h2>Making your life sweeter</h2>
            </div>
        </div>
    </div>
   <section class="we-serve">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6">
                <h2>WE SERVE</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-5 pr-0">                
                <div class="somosa">  </div>
                <div class="prod-info-left">
                    <h4>Samosa</h4>
                    <p>#evergreensnack</p>
                    <button class=" btn add-to-cart-btn"> Add to cart </button>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-5  pl-0">
                <div class="jalebi"></div>                    
                <div class="prod-info-right">
                    <h4>Jalebi</h4>
                    <p>#indiasfavorite</p>
                    <button class=" btn add-to-cart-btn"> Add to cart </button>
                </div>                
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-5 pr-0">
                <div class="malai-barfi"> </div>
                <div class="prod-info-left">
                    <h4>Malai Barfi</h4>
                    <p>#bestsweet</p>
                    <button class=" btn add-to-cart-btn"> Add to cart </button>
                </div>                    
            </div>

            <div class="col-12 col-sm-6 col-md-5 pl-0">
                <div class="imarti"> </div>                   
                <div class="prod-info-right">
                   <h4>Imarti</h4>
                    <p>#jalebikabhai</p>
                    <button class=" btn add-to-cart-btn"> Add to cart </button>
                </div>                   
            </div>

            <div class="col-12 col-sm-6 col-md-5 pr-0">
                <div class="lawang-latta"> </div>
                <div class="prod-info-left">
                    <h4>Lawang Latta</h4>
                    <p>#anekswaad</p>
                    <button class="btn add-to-cart-btn"> Add to cart </button>
                </div>                    
            </div>
            <div class="d-none d-sm-block col-sm-6 col-md-5 pr-0"></div>
        </div>
    </section>

    <section>
        <div class="contianer">
            <div class="row">
                <div class="col-12 d-sm-none discount">
                    <h2> Get Discounts upto 40% on Bulk Order </h2>
                </div>
            </div>
        </div>
    </section>

    <?php
        include "shared/footer/footer.php";
    ?>
</div>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>
    <!-- Add Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-auth.js"></script>
    <script src="js/main.js"></script>
    <script src="js/auth.js"></script>
</body>
</html>