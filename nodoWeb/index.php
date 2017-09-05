
<!DOCTYPE HTML>
<html>
<head>
<?php
include("header.php");

?>
</head>
<body>
	
	<div class="banner">
	<!-- start slider -->
       <div id="fwslider">
         <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
               <img src="images/shop.jpg" class="img-responsive" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h1 class="title" style="color:#ff3300;">HOBBIE<br>SPORT</h1>
                        <!-- /Text title -->
                        <div class="button"><a href="#">COMPAÑIA</a></div>
                    </div>
                </div>
               <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
               <img src="images/sport.jpg" class="img-responsive" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h1 class="title" style="color:#ff3300;">TODO EN<br>DEPORTES</h1>
                       	<div class="button" ><a href="#">COMPAÑIA</a></div>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
       </div>
       <!--/slider -->
      </div>
	  <div class="main">
		<div class="content-top">
			<h2>ARTICULOS</h2>
			<p>TODO LO QUE NECESITAS PARA TU HOBBIE FAVORITO</p>
			<div class="close_but"><i class="close1"> </i></div>
				<ul id="flexiselDemo3">
				<li><img src="images/b1.jpg" /></li>
				<li><img src="images/b2.jpg" /></li>
				<li><img src="images/b3.jpg" /></li>
				<li><img src="images/b4.jpg" /></li>
				<li><img src="images/f2.jpg" /></li>
				<li><img src="images/F2.png" /></li>
				<li><img src="images/f4.jpg" /></li>
				<li><img src="images/f5.jpg" /></li>
				
				<li><img src="images/ft1.jpg" /></li>
				<li><img src="images/R2.jpg" /></li>
				<li><img src="images/R5.jpg" /></li>
				<li><img src="images/p1.png" /></li>





			</ul>
		<h3>DEPORTES EXTREMOS Y MAS</h3>
			<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
	<div class="content-bottom">
		<div class="container">
			<div class="row content_bottom-text">
			  <div class="col-md-7">
				<h3 >HIBBIE SPORT<br>TIENDA</h3>
				<p class="m_1">A través de HOBBIE SPORT, deseo participar en la democratización de la práctica deportiva en el más amplio sentido. Hoy en día, el deporte es un auténtico vector de vínculo social y una de las claves en salud y bienestar. En nuestra web encontrarás más de 70 disciplinas deportivas diferentes, todas tratadas por igual.﻿</p>
				<p class="m_2">Practicar tu deporte preferido con el mejor material es una garantía de seguridad y de rendimiento... pero también es una manera de divertirse. He creado HOBBIE SPORT para que disfrutes de ofertas excepcionales de material deportivo de gran calidad. HOBBIE SPORT está dirigido a aquellos que practican deporte de manera ocasional y para los más apasionados, que se preocupan de equiparse en las mejores condiciones... ¡Y con la mejor relación calidad/precio!</p>
			  </div>
			</div>
		</div>
	</div>
	<div class="features">
		<div class="container">
			<h3 class="m_3">CARACTERISTICAS</h3>
			<div class="close_but"><i class="close1"> </i></div>
			  <div class="row">
				<div class="col-md-3 top_box">
				  <div class="view view-ninth"><a href="single.html">
                    <img src="images/pic1.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>PARA LOS FUTBOLEROS</h2>
                        <p>GRANDES DESCUENTOS EN TACOS.</p>
                      </div>
                   </a> </div
                  </div>
                  <h4 class="m_4"><a href="#">Futbol</a></h4>
                  <p class="m_5">Profesional y Hobbie</p>
                </div>
                <div class="col-md-3 top_box">
					<div class="view view-ninth"><a href="single.html">
                    <img src="images/pic2.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>PARA LOS AMANTES DEL MAR</h2>
                        <p>GRANDES DESCUENTOS EN TABLAS.</p>
                      </div>
                    </a> </div>
                   <h4 class="m_4"><a href="#">Surfing</a></h4>
                   <p class="m_5">Profesional y Hobbie</p>
				</div>
				<div class="col-md-3 top_box">
					<div class="view view-ninth"><a href="single.html">
                    <img src="images/pic3.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>PARA LOS QUE BUSCAN NUEVAS RUTAS</h2>
                        <p>GRANDES DESCUENTOS EN BICICLETAS.</p>
                      </div>
                    </a> </div>
                   <h4 class="m_4"><a href="#">Ciclismo</a></h4>
                   <p class="m_5">Profesional y Hobbie</p>
				</div>
				<div class="col-md-3 top_box1">
					<div class="view view-ninth"><a href="single.html">
                    <img src="images/pic4.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>PARA LOS MAS EXTREMOS</h2>
                        <p>GRANDES DESCUENTOS EN DECKS.</p>
                      </div>
                     </a> </div>
                   <h4 class="m_4"><a href="#">Skateboard</a></h4>
                   <p class="m_5">Profesional y Hobbie</p>
				</div>
			</div>
		 </div>
	    </div>
		<?php 
include("footer.php");
		?>
</body>	
</html>