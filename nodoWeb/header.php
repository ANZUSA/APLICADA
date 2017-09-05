
<!DOCTYPE html>
<html>
<head>
<title>HOBBIE SPORT</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>
<body>
<div class="header">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                 <div class="header-left">
                     <div class="logo">
                        <a href="index.php"><img src="images/LOGOHS.png" alt=""/></a>
                     </div>
                     <div class="menu">
                          <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
                            <ul class="nav" id="nav">
                                <li><a href="shop.php">TIENDA</a></li>
                              
                                <li><a href="category.php">CATEGORIAS</a></li>
                               
                                <li><a href="shop.php">COMPAÑIA</a></li>
                                <li><a href="contact.php">CONTACTO</a></li>                                
                                <div class="clear"></div>
                            </ul>
                            <script type="text/javascript" src="js/responsive-nav.js"></script>
                    </div>                          
                    <div class="clear"></div>
                </div>
                <div class="header_right">
                  <!-- start search-->
                      <div class="search-box">
                            <div id="sb-search" class="sb-search">
                                <form>
                                    <input class="sb-search-input" placeholder="INGRESA UNA CATEGORIA" type="search" name="search" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search"> </span>
                                </form>
                            </div>
                        </div>
                        <!----search-scripts---->
                        <script src="js/classie.js"></script>
                        <script src="js/uisearch.js"></script>
                        <script>
                            new UISearch( document.getElementById( 'sb-search' ) );
                            
                        </script>
                        <!----//search-scripts---->
                    <ul class="icon1 sub-icon1 profile_img">
                     <li><a class="active-icon c1" href="#"> </a>
                        <ul class="sub-icon1 list">
                          <div class="product_control_buttons">
                          
                                <a href="closeSession.php" value="CERRAR SESSION"><img src="images/close_edit.png" alt="" /></a>
                          </div>
                           <div class="clear"></div>
                          <li class="list_img"><img src="images/1HS.png" alt=""/></li>
                          <li class="list_desc"><h4><a href="#">HOBBIE SPORT</a></h4><span class="actual"><?php echo $_SESSION["SESSION"]; ?></span></li>
                          <div class="login_buttons">
                             <div class="check_button"><a href="shopping_cart.php">CARRITO</a></div>
                          

                             <div class="login_button"><a href="login.php">Login</a></div>
                             <div class="clear"></div>
                          </div>
                          <div class="clear"></div>
                        </ul>
                     </li>
                   </ul>
                   <div class="clear"></div>
           </div>
          </div>
         </div>
        </div>
    </div>

</body>
</html>
