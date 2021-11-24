<?php
session_start();
include_once('./Connection.php'); 

?>
<!doctype html>
<html class="no-js" lang="en">
   <head>
      <!-- META DATA -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <!--font-family-->
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
      <!-- TITLE OF SITE -->
      <title>COMECA</title>
      <!-- for title img -->
      <link rel="shortcut icon" type="image/icon" href="assets/images/logo/logocomecainvertido.png"/>
      <!--font-awesome.min.css-->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!--linear icon css-->
      <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
      <!--animate.css-->
      <link rel="stylesheet" href="assets/css/animate.css">
      <!--hover.css-->
      <!--vedio player css-->
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <!--owl.carousel.css-->
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link href="assets/css/owl.theme.default.min.css" rel="stylesheet"/>
      <!--bootstrap.min.css-->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- bootsnav -->
      <link href="assets/css/bootsnav.css" rel="stylesheet"/>
      <!--style.css-->
      <link rel="stylesheet" href="assets/css/style.css">
      <!--responsive.css-->
      <link rel="stylesheet" href="assets/css/responsive.css">
      <link rel="stylesheet" href="./assets/owl/owl.carousel.min.css">
      <link rel="stylesheet" href="./assets/owl/owl.theme.default.min.css">
   </head>
   <body style = "font-family: 'Montserrat', sans-serif;">
      <!--header start-->
      <div id="contenidoHeader">
      </div>

      <section class="Post">
         <div class="container">
            <br>
         <div class="row" style="margin-right: 0px;margin-left: 0px;">
            <div class="col-xs-5 " style="text-align:center;padding: 0px; padding-top: 35px;">
               <h2 class="responsiveTitleh2" style="font-weight: 700;">BLOG</h2>
               <h5 class="responsiveTitleh5">NOTICIAS | TIPS | TENDENCIA </h5>
            </div>
            <div class="col-xs-7" style="text-align:center; background-color: #F37A1F;">
               <img src=".\assets\images\STIHL_LOGO.jpg" alt="" class="fullImage">
            </div>
         </div>
         <!--/.row-->					
         <section class="header-slider-area">
            <div class="single-slide-item slide-8" style="padding-top: 140px;"></div>
            <div class="row1 col-container"   style="border-style: solid;    margin-top: 10px;    border-width: 1px;width: 100%;">
               <div class="col-sm-3 col2- col-xs-0" id="PostImage" style=";background-size: cover; background: #F37A1F;">
                  <br>
               </div>
               <div class="col-xs-12 col2-" style="background-color: #fcfcfc;padding: 25px;     overflow-wrap: anywhere;" id="PostPrincipal">
               </div>
            </div>
            <div style="text-align:left">
            <hr>
            <?php 
            if(isset($_GET['Id'])){

               echo '<div class="fb-share-button" data-href="https://comeca.com.gt/Post.php ' . $_GET['Id'] .'" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fcomeca.com.gt%2FPost.php%3F5&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>   ';
            } else{
               echo '<div class="fb-share-button" data-href="https://comeca.com.gt/Post.php" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fcomeca.com.gt%2FPost.php%3F5&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>   ';

            }
            
            ?>
            </div>
            
            <div class="service-content-one" style="text-align:left; margin-bottom:0px">
               <h4 style="font-weight: bold;" >TEMAS DESTACADOS </h4>
            </div>
         </section>
         <div style="text-align:left; margin-bottom 50px;">
            <div class="owl-carousel owl-theme" id="carruselPost">
            </div>

            
            

            <?php 

$VariableID = 0;

if (isset($_SESSION['sesion_iniciada']))
{
   $link = Conectarse(); 
   echo '<div class="row" style="margin-top: 10px;margin-bottom: 10px;">';
   echo '      <div class="col-xs-4" style="background-color: #ee7f2a;color:white; text-align:center;">';
   echo '         <h4 style="padding: 10px;">DISTRIBUIDORES AUTORIZADOS</h4>';
   echo '      </div>';
   echo '      <div class="col-xs-8" style="background-color: #383944;color:white; text-align:center">';
   echo '         <h4 style="padding: 10px;">COMENTARIOS</h4>';
   echo '      </div>';
   echo '   </div>';

 
   if(isset($_GET['Id'])){
      $VariableID = $_GET['Id'];
      $where = [['IdPost','=', $_GET['Id'] ]];

      if ($valor = QueryColumnsWhere($link,'Comentario',['*'],$where,"")){    

         foreach ($valor as $value) {

            $where2 = [['IdUsuario','=', $value['IdUsuario'] ]];
            if ($valor2 = QueryColumnsWhere($link,'Usuarios',['*'],$where2,"")){    

               foreach ($valor2 as $value2) {

                  echo '<div class="row" style="margin-top: 10px;margin-bottom: 10px;    padding: 10px; border-style: solid;border-width: 1px;border-radius: 10px;">';
                  echo '<div class="col-xs-4" style="    border-right: solid;border-width: 1px;text-align:center">';
                  
                  echo ' <p style="font-weight: bold; font-size: 17px;" class="fw-bold">'. $value2['Nombre'] .'</p>';
                  echo ' <p style="font-size: 13px;" class="fw-bold">'. $value2['Empresa'] .'</p>';
                  echo ' <p style="font-size: 13px;" class="fw-bold">'. $value2['Direccion'] .'</p>';
                  echo ' <p style="font-size: 13px;" class="fw-bold">'. $value2['Correo'] .'</p>';
                  

                  echo '</div>';
                  echo '<div class="col-xs-8" style="">';
                  
                  
                  
                  echo '<p>' . $value['Comentario'] . '</p>';
                  
                  
                  echo '</div>';
                  echo '</div>';                  
                  
               }

               
            } 
            
         }

         
      } 
   }else {
   


      if ($valor = QueryColumnsOrderFirst($link,'Post',['*'])){    

         $where = [['IdPost','=', $valor[0]['Id'] ]];

         $VariableID = $valor[0]['Id'];

         if ($valor2 = QueryColumnsWhere($link,'Comentario',['*'],$where,"")){    

            foreach ($valor2 as $value2) {
               $where2 = [['IdUsuario','=', $value2['IdUsuario'] ]];
            
               if ($valor3 = QueryColumnsWhere($link,'Usuarios',['*'],$where2,"")){    

               foreach ($valor3 as $value3) {

                  echo '<div class="row" style="margin-top: 10px;margin-bottom: 10px;    padding: 10px; border-style: solid;border-width: 1px;border-radius: 10px;">';
                  echo '<div class="col-xs-4" style="    border-right: solid;border-width: 1px;text-align:center">';
                  
                  echo ' <p style="font-weight: bold; font-size: 17px;" class="fw-bold">'. $value3['Nombre'] .'</p>';
                  echo ' <p style="font-size: 13px;" class="fw-bold">'. $value3['Empresa'] .'</p>';
                  echo ' <p style="font-size: 13px;" class="fw-bold">'. $value3['Direccion'] .'</p>';
                  echo ' <p style="font-size: 13px;" class="fw-bold">'. $value3['Correo'] .'</p>';
                  

                  echo '</div>';
                  echo '<div class="col-xs-8" style="">';
                  
                  
                  
                  echo '<p>' . $value2['Comentario'] . '</p>';
                  
                  
                  echo '</div>';
                  echo '</div>';                  
                  
               }

               
            } 
            }

            
         } 
         
      } 
      
   }

   

   

   Desconectarse($link);






   echo '<hr>';
   echo '<div class="row" style="margin-top: 10px;margin-bottom: 10px;    padding: 10px; border-style: solid;border-width: 1px;border-radius: 10px;">';
   echo '<div class="col-xs-4" style="    border-right: solid;border-width: 1px;text-align:center">';
   echo ' <p style="font-weight: bold; font-size: 17px;" class="fw-bold">'. $_SESSION['Nombre'] .'</p>';
   echo ' <p style="font-size: 13px;" class="fw-bold">'. $_SESSION['Empresa'] .'</p>';
   echo ' <p style="font-size: 13px;" class="fw-bold">'. $_SESSION['Direccion'] .'</p>';
   echo ' <p style="font-size: 13px;" class="fw-bold">'. $_SESSION['Correo'] .'</p>';
   echo '</div>';

   
   echo '<div class="col-xs-8" style="">';
   echo '<div class="row">';
      echo '<div class="col-xs-11" style="">';
         echo '<div class="form-group">                  ';
            echo '<textarea id="comentario" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>';
         echo '</div>';
      echo '</div>';
      echo '<div class="col-xs-1" style="padding: 0px;">';

      
         echo '<button onclick="Comentar()" type="button" class="btn btn-primary btn-lg btn-block"><span class="lnr lnr-plus-circle"></span></button>';
      echo '</div>';
   echo '</div>';
   echo '</div>';
   echo '</div>';




}






 ?>

            
            
            
            
         </div>
      </section>
      <!-- footer-copyright start -->
      <div id="contenidoFooter">
      </div>
      <!-- footer-copyright end -->
      <!-- jaquery link -->
      <script src="assets/js/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <!--modernizr.min.js-->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
      <!--bootstrap.min.js-->
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
      <!-- bootsnav js -->
      <!-- for manu -->
      <!-- vedio player js -->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
      <!-- isotope js -->
      <!-- <script src="assets/js/masonry.min.js"></script>
         <script src="assets/js/isotop-custom.js"></script> -->
      <!--owl.carousel.js-->
      <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
      <!-- counter js -->
      <script src="assets/js/jquery.counterup.min.js"></script>
      <script src="assets/js/waypoints.min.js"></script>
      <!--Custom JS-->        
      <script type="text/javascript" src="assets/js/custom.js"></script>
      <script src="./assets/owl/owl.carousel.min.js"></script>
   </body>
   <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v10.0" nonce="ZNkJ73XG"></script>


   <script>
      var input
      $("#contenidoHeader").load("header.html", () => {
      input = document.getElementById("busqueda");
      input.addEventListener("keyup", function(event) {  	
      if (event.keyCode === 13) {    			
      busqueda()
      }}
      );
      }
      );
      $("#contenidoFooter").load("footer.html"); 
   </script>
   <script>
      function busqueda(){
      	if (input.value){
      	location.href = './busqueda.html?busqueda=' + input.value;
      	}else{
      		alert("Ingresa un valor para realizar la busqueda")
      	}
      }
      function getQueryStringValue (key) {  
			var string = unescape(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + escape(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"))
			if (string == ""){
				string = "0"
			}
    		return string   
		}	
      
      function ListarPost(){
            $.ajax({
                url : './listarPost.php',
                type : 'POST',
                dataType:'json', // add json datatype to get json
                data: "",
                success : function (params) {
      
                  var listar = document.getElementById("PostPrincipal")
                  var listarImage = document.getElementById("PostImage")
                  
                  if (!(/[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)/.test(params.slice(-1).pop().Image))){
                     //params.slice(-1).pop().Image = './Directorio/POST/country-road.jpg'
                     }
                  
                  
                  
                     listar.innerHTML += params.slice(-1).pop().HTML                        
                     //listarImage.style.backgroundImage  = "url('"+ params.slice(-1).pop().Image +"')"
                     IdPost = getQueryStringValue("Id")
                    
                     var listado = document.getElementById("carruselPost")
                    
                    params.forEach(element => { 
                       
                     if (element.Id == IdPost){
                        listar.innerHTML = element.HTML                        
                        if (!(/[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)/.test(element.Image))){
                        element.Image = './Directorio/POST/country-road.jpg'
                     }
                        //listarImage.style.backgroundImage  = "url('"+ element.Image +"')"
                     }

                     


                     if (!(/[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)/.test(element.Image))){
                        element.Image = './Directorio/POST/country-road.jpg'
                     }

                     
                        listado.innerHTML += '<div onclick="location.href = ' + "'Post.php?Id=" + element.Id +  "'" + '"><div class="service-single text-center"><img src="' + element.Image + '" alt="image of service" style="height: 250px;" class="mini-img"><div class="producto-txt-seguridad "><h2><a href="#">' + element.Title + '</a></h2></div></div></div>'                        
                    }) 
      
                    $('.owl-carousel').owlCarousel({
                     loop:true,
                     margin:40,
                     responsiveClass:true,
                     responsive:{
                        0:{
                              items:2,
                              nav:true,
                              loop:false
                        },
                        600:{
                              items:3,
                              nav:true,
                              loop:false
                        },
                        1000:{
                              items:3,
                              nav:true,
                              loop:false
                        }
                     }
                  })                                       
                    
                }
            })
      }
      
      ListarPost();
      
      
      
      
      function Comentar() {
          objSolicitud = {comentario: $("#comentario").val()};          
          var data = {
               comentario: document.getElementById("comentario").value,
               idPost: <?php echo $VariableID;?>
               }

               $.ajax({

               type: "POST",

               url: "./Comentar.php",

               data: data,

               success:  location.reload()		

               });	
      } 
      
      
      
      
      
      
      
      function down(){
      	var y = $(window).scrollTop();  //your current y position on the page
      	$(window).scrollTop(y+150);
      }
      
      $('.menu').bind('touchstart', function(event){
             event.stopPropagation(); /*Make all touch events stop at the .filters ul.children container element*/
      });
      
      $(".navbar-collapse a").click(function () {
                   $(".navbar-collapse").fadeOut(300); /*Close filters drop-downs if user taps on any link in drop-down*/
         });
      
      
      
      
      
      
      
      
      
      
      
      
      
      
   </script>	<!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174929820-1"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'UA-174929820-1');
   </script>
   <!--  Code -->
   <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1138039353263292');
      fbq('track', 'PageView');
   </script>
   <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1138039353263292&ev=PageView&noscript=1"
      /></noscript>
   <!-- End  Code -->
</html>