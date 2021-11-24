<!doctype html>

<html class="no-js" lang="en">



    <head>

       
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		

		



        <!--font-family-->

		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

		

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

		

		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">



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

        <!--jstree-->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />

    </head>

	

	<body style = "font-family: 'Montserrat', sans-serif;">

    <?php
      session_start();
      if (!(isset($_SESSION['sesion_iniciada']))  )
      {
        echo "<script>location.href = './login.html'</script>";
      }else{
        if (($_SESSION['Administrador'] == true)){
            echo "<script>location.href = './admin.php'</script>";
        }
      }
?>

		<div id="contenidoHeader">

		</div>

		<!-- header-slider-area start -->

		<section class="contacto" style="background-color: #1F405F;">

		<div class="container">

		<div class="row" style="color: black;">

            <div class=" col-lg-5 col-md-6 col-xs-12 " >
                
                <div class="panel panel-default" style="padding: 15px;">
                    <div class="panel-heading">

                    <h2>

                    ARCHIVOS DEL SERVIDOR
                    
                    </h2>

                    </div>

                    <div id="using_json" style="padding: 15px;" class="panel-body">

                      <!-- in this example the tree is populated from inline HTML -->
       
                    </div>

                </div>
            </div> 
            <div class="col-lg-7 col-md-6 col-xs-12 ">
                    <div class="panel panel-default" style="padding: 15px;">
                    <p>
        
                    <button class="btn btn-success" type="button" onclick="descargarArchivo()">
                        Descargar
                    </button>

                    <button class="btn btn-info" type="button" onclick="VisualizarDir()">
                        Visualizar Archivo
                        </button>

                    
    
                    </p>
    
                </div>
            </div>
		</div>		

        </div>
        </section><!--/.about-us-->

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

        <!--jstree-->      

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>



	</body>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
<script>
    $("#contenidoHeader").load("headerLogOut.html"); 
    $("#contenidoFooter").load("footerLogOut.html"); 
</script>

<script>

	var input = document.getElementById("busqueda");

	input.addEventListener("keyup", function(event) {  	

  	if (event.keyCode === 13) {    			

		busqueda()

	}}

	);

	function busqueda(){

		if (input.value){

		location.href = './busqueda.html?busqueda=' + input.value;

		}else{

			alert("Ingresa un valor para realizar la busqueda")

		}

	}

    function VisualizarDir() {

    window.open("https://comeca.com.gt/"+ "Directorio/" + path, "Preview", "width=300, height=200")
        
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


<script>
        var path;
        
        $.ajax({
            url : './CreacionArbol.php',
            type : 'POST',
            dataType:'json', // add json datatype to get json
            data: ({url: " Directorio"}),
            success : 
            function (datc) {
                CrearArbol(datc)
            } 
        })
            

    function CrearArbol(dato){   
                $('#using_json').on('changed.jstree', function (e, data) {
            path = data.instance.get_path(data.node,'/');
                $('#event_result').val(path);
            }).jstree({ 'core' : {
                'data' : 
                    dato
            } });
            }
    

    function logOut() {
        $.ajax({
            url : './LogOut.php',
            type : 'POST',
            dataType:'json', // add json datatype to get json
            data: "",
            success : ""
        
        })
    }
    
</script>

<script>
    function descargarArchivo() {
        if (!(path.includes("."))) {
            alert("Debe seleccionar un archivo")
            return
        }

        let a = document.createElement('a')
        a.href = "Directorio/"+path
        a.download = ("Directorio/"+path).split('/').pop()
        document.body.appendChild(a)
        a.click()
        document.body.removeChild(a)

        $.ajax({
            url : './descargas.php',
            type : 'POST',
            dataType:'json', // add json datatype to get json
            data: {path: path},
            success : console.log("ok")
        
        }) 
    }
</script>

<noscript><img height="1" width="1" style="display:none"

  src="https://www.facebook.com/tr?id=1138039353263292&ev=PageView&noscript=1"

/></noscript>

<!-- End  Code --></html>







