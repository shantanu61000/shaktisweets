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
            <div class="col-12 col-sm-6 col-md-5 pr-0" style="overflow: hidden;">                
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
        </div>

    </section>



    <?php
        include "shared/footer/footer.php";
    ?>

    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>