
<!doctype html>

<html class="no-js" lang="en">



    <head>

        <!-- META DATA -->

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

        <link rel="stylesheet" href="assets/css/hover-min.css">

		

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

        
        <!--dataTable-->

		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
		

    </head>

	

    <body style = "font-family: 'Montserrat', sans-serif;">
    
    <?php
      session_start();
      if (!(isset($_SESSION['sesion_iniciada']))  )
      {
        echo "<script>location.href = './login.html'</script>";
      }else{
        if (!($_SESSION['Administrador'] == true)){
            echo "<script>location.href = './Usuario.php'</script>";
        }
      }
?>

		<!--header start-->

		<div id="contenidoHeader">

		</div>

		<!-- header-slider-area start -->

		<section class="contacto" style="background-color: #1F405F;">

		<div class="container">

			<div class="row" style="color: black;">

            <div class="col-xs-12" >
                
            <div class="panel panel-default" style="padding: 15px;">

            
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Administrar Archivos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" onclick="ListarClientes()">Administrar Usuarios</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-solicitudes-tab" data-toggle="pill" href="#pills-solicitudes" role="tab" aria-controls="pills-solicitudes" aria-selected="false" onclick="ListarSolicitudes()">Solicitudes</a>
                </li>
                

                </ul>
                <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active in" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
        
                    <button class="btn btn-success" type="button" onclick="showOpt('Create')">
                        Crear Directorio
                    </button>
    
                    <button class="btn btn-primary" type="button" onclick="showOpt('Upload')">
                        Subir Archivo
                    </button>
    
                    <button class="btn btn-danger" type="button" onclick="showOpt('Delete')">
                        Eliminar Folder
                    </button>
    
                    </p>
    
                    <div class="collapse" id="collapseCreate">
                    <div class="card card-body">
                    <div class="form-group">
                    <button type="hidden" id="event_result">
                    </button>
                    <label for="add" style="color: black">CREAR NUEVO DIRECTORIO</label>
                    <input  required type="text" class="form-control" id="add" placeholder="DIRECTORIO">
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn text-center" style="background-color: #1F405F; color: white;" onclick="CrearDir()">
                        CREAR DIRECTORIO
                    </button>
                    </div>
                    </div>
                    </div>
    
                    <div class="collapse" id="collapseUpload">
                    <div class="card card-body">
                    <div class="custom-file">
                            <label class="custom-file-label" for="file">Choose file...</label>
                            <input type="file" class="custom-file-input" id="file" required>
                    </div>
                        <div class="text-center">
                        <button type="submit" class="btn text-center" style="background-color: #1F405F; color: white;" onclick="subirArchivo()">
                            SUBIR ARCHIVO
                        </button>   
                    </div> 
                    </div>
                    </div>
    
                    <div class="collapse" id="collapseDelete">
                    <div class="card card-body">
                       Delete
                    </div>
                    </div>
                    </div>
                    </div>
                

                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                <div class="row" style="color: black;">
                    <div class="col-xs-12" >
                
                <div class="panel panel-default" style="padding: 15px;">
                    <div class="panel-heading">
    
                        <h2>
    
                        USUARIOS                        
                        </h2>
    
                    </div>
    
                        <div id="listaUsers" style="padding: 15px; overflow-x: scroll" class="panel-body">
                        <table class="table table-sm" id="tablaClientes">
                            <thead>
                                <tr>
                                <th ></th>
                                <th scope="col">#</th>
                                <th scope="col">USUARIO</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">APELLIDO</th>
                                <th scope="col">EMPRESA</th>
                                <th scope="col">DIRECCION</th>
                                <th scope="col">TELEFONO</th>
                                <th scope="col">E-MAIL</th>
                                </tr>
                            </thead>
                            <tbody id="tbodyClientes">
                                
                            </tbody>
                        </table>
                        </div>

                        <button class="btn btn-success" type="button" onclick="showOpt('Create')">
                        Crear Usuario
                    </button>
    
                   
    
                    <button class="btn btn-danger buttonUsuarios" type="button" onclick="showOpt('Delete')" disabled>
                        Eliminar Usuario
                    </button>    
    
                    </div>

                    
                </div>   
                   

                
        </div>

        
        </div>
            
        <div class="tab-pane fade" id="pills-solicitudes" role="tabpanel" aria-labelledby="pills-solicitudes-tab">

<div class="row" style="color: black;">
    <div class="col-xs-12" >

<div class="panel panel-default" style="padding: 15px;">
    <div class="panel-heading">

        <h2>

        SOLICITUDES                        
        </h2>

    </div>

        <div id="listaSolicitudes" style="padding: 15px; overflow-x: scroll " class="panel-body">
        <table class="table " id="tablaSolicitudes">
            <thead>
                <tr>
                <th></th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">DIRECCION</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">E-MAIL</th>
                </tr>
            </thead>
            <tbody id="tbodySolicitudes">
                
            </tbody>
        </table>
        </div>

        <button class="btn btn-success buttonSolicitud" type="button" onclick="showOpt('Create')"
        data-toggle="modal" data-target="#modalSolicitud" disabled>
            Aceptar Solicitud
        </button>

        <button class="btn btn-danger buttonSolicitud" type="button" onclick="showOpt('Upload')" 
        data-toggle="modal" data-target="#modalRechazar" disabled>
            Rechazar Solicitud
        </button>

    </div>

    
</div> 
		</div>		

        </div>
        </section><!--/.about-us-->

		<!-- footer-copyright start -->

				<div id="contenidoFooter">

				</div>
		<!-- footer-copyright end -->


        <div class="modal fade bd-example-modal-lg" id="modalSolicitud" tabindex="-1" role="dialog" aria-labelledby="modalSolicitudTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Aceptacion de Solicitud</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="form-group">

                    <label for="Usuario" style="color: black">Usuario</label>

                    <input  required type="text" class="form-control" id="Usuario" aria-describedby="Usuario" placeholder="USUARIO">

                </div>

                <div class="form-group">

                    <label for="Contraseña" style="color: black">Contraseña</label>

                    <input  required type="text" class="form-control" id="Contraseña" aria-describedby="Contraseña" placeholder="CONTRASEÑA">

                </div>
                <div class="form-group">
                    <label for="selectPermisos">Seleccione Tipo de Usuario</label>
                    <select class="form-control" id="selectPermisos">
                    <option value="1">Administrador</option>
                    <option value="2">Proveedor</option>
                    </select>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                    <button type="button" class="btn btn-success" onclick="aceptarSolicitud()">ACEPTAR</button>
                </div>
                </div>
            </div>
            </div>




            <div class="modal fade " id="modalRechazar" tabindex="-1" role="dialog" aria-labelledby="modalRechazarTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered " role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Rechazar Solicitud</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>al rechazar la solicitud, la solicitud se eliminara</h5>
                    <br>
                    <h4>¿Esta Seguro de Rechazar la solicitud?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                    <button type="button" class="btn btn-danger" onclick="rechazarSolicitud()">RECHAZAR</button>
                </div>
                </div>
            </div>
            </div>






		<!-- jaquery link -->



		<script src="assets/js/jquery.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->

        

        <!--modernizr.min.js-->

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

		

		

		<!--bootstrap.min.js-->

        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

		

		<!-- bootsnav js -->

		<script src="assets/js/bootsnav.js"></script>

		

		<!-- for manu -->

		<script src="assets/js/jquery.hc-sticky.min.js" type="text/javascript"></script>



		

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

        <!--dataTable-->      

        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        
        <script src="https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"></script>

        <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script> 
        
        
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>      

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

    function subirArchivo() {

    let photo = document.getElementById("file").files[0];
    let formData = new FormData();

    formData.append("image", photo);
    formData.append("direccion", $("#event_result").val());

    $.ajax({
        url: "./Subir.php",
        type: "POST",
        data:  formData,
        contentType: false,
                cache: false,
        processData:false,
    
        success:  location.reload()
            
            });
    }

    function CrearDir() {
            $.ajax({
            url : './CrearDir.php', 
            type : 'POST',
            dataType:'json', 
            data:  {direccion: $("#event_result").val(),
                    nombre: $("#add").val()},
            success : location.reload()

                })
            }

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
            var path = data.instance.get_path(data.node,'/');
                $('#event_result').val(path);
            }).jstree({ 'core' : {
                'data' : 
                    dato
            } });
            }

    function showOpt(Accion) {
            var opt = Accion;
            switch (opt) {
                case "Create":
                    $("#collapseCreate").show( "slow");
                    $("#collapseUpload").hide( "slow");
                    $("#collapseDelete").hide( "slow");
                    break;
                case "Upload":
                    $("#collapseUpload").show( "slow");
                    $("#collapseCreate").hide( "slow");
                    $("#collapseDelete").hide( "slow");
                    break;
                case "Delete":
                    $("#collapseDelete").show( "slow");
                    $("#collapseUpload").hide( "slow");
                    $("#collapseCreate").hide( "slow");
                    break;
            }
    }

    function logOut() {
        $.ajax({
            url : './LogOut.php',
            type : 'POST',
            dataType:'json', // add json datatype to get json
            data: "",
            success : swal("Correo enviado!", "Hemos recibido tu mensaje y nos contactaremos lo antes posible contigo!", "success")
        
        })
    }
    
</script>

<script>
    var tablaClientes;
    function ListarClientes(){
        $.ajax({
            url : './listadoClientes.php',
            type : 'POST',
            dataType:'json', // add json datatype to get json
            data: "",
            success : function (params) {
                ListadoClientes(params);
            }
        })
    }
    
    function ListadoClientes(listado) {
        var contador = 1;
        var Listado = listado;
        var rowClientes;
        if (tablaClientes){
            tablaClientes.destroy();
    }
        $( "#tbodyClientes" ).html("")
        Listado.forEach(element => {
            var Table = '<tr> <td>'+ element.IdUsuario +'</td>'+
                                 '<td>'+ contador +'</td>'+
                                 '<td>'+ element.Usuario +'</td>'+
                                 '<td>'+ element.Nombre +'</td>'+
                                 '<td>'+ element.Apellido +'</td>'+
                                 '<td>'+ element.Empresa +'</td>'+
                                 '<td>'+ element.Direccion +'</td>'+
                                 '<td>'+ element.Telefono +'</td>'+
                                 '<td>'+ element.Correo +'</td>'+
                         '</tr>';
            $( "#tbodyClientes" ).append( Table );
            contador++;
        });
        tablaClientes = $('#tablaClientes').DataTable( {
            select: true,
            responsive: true,
            "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            }
        ],
            "language": {
						"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
					}} );
                    tablaClientes
        .on( 'select', function ( e, dt, type, indexes ) {
            $('.buttonUsuarios').prop('disabled', false);  
            var rowClientes = tablaClientes.rows( indexes ).data().toArray();
            console.log(rowClientes)
        } )
        .on( 'deselect', function ( e, dt, type, indexes ) {
            $('.buttonUsuarios').prop('disabled', true); 
        } );
        $("#tablaClientes" ).css({"margin":"0px","width":"100%"})
    }

</script>

<script>
    var rowSolicitud;
    var tablasolicitud;
    function ListarSolicitudes(){
        $.ajax({
            url : './listadoSolicitudes.php',
            type : 'POST',
            dataType:'json', // add json datatype to get json
            data: "",
            success : function (params) {
                ListadoSolicitudes(params);
            }
        })
    }

    function ListadoSolicitudes(listado) {
        var Listado = listado;
        if (tablasolicitud){
        tablasolicitud.destroy();
    }
        $( "#tbodySolicitudes" ).html("")
        Listado.forEach(element => {
            var Table = '<tr> '
                                +'<td>'+ element.IdSolicitud +'</td>'
                                +'<td>'+ element.Nombre +'</td>'+
                                 '<td>'+ element.Apellido +'</td>'+
                                 '<td>'+ element.Empresa +'</td>'+
                                 '<td>'+ element.Direccion +'</td>'+
                                 '<td>'+ element.Telefono +'</td>'+
                                 '<td>'+ element.Correo +'</td>'+
                         '</tr>';
            $( "#tbodySolicitudes" ).append( Table );
        });
        tablasolicitud = $('#tablaSolicitudes').DataTable( {
            select: true,
            responsive: true,
            scrollx: true,
            "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            }
        ],
            "language": {
						"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
					}} );
                    tablasolicitud
        .on( 'select', function ( e, dt, type, indexes ) {
            $('.buttonSolicitud').prop('disabled', false); ""
            rowSolicitud = tablasolicitud.rows( indexes ).data().toArray()[0];
        } )
        .on( 'deselect', function ( e, dt, type, indexes ) {
            $('.buttonSolicitud').prop('disabled', true); 
        } );
        $("#tablaSolicitudes" ).css({"margin":"0px","width":"100%"})
    }


    function aceptarSolicitud() {
        objSolicitud = {id: rowSolicitud[0], 
                        nombre: rowSolicitud[1], 
                        apellido: rowSolicitud[2],
                        empresa: rowSolicitud[3],
                        direccion: rowSolicitud[4],
                        telefono: rowSolicitud[5],
                        correo: rowSolicitud[6],
                        usuario: $("#Usuario").val(),
                        contrasena: $("#Contraseña").val(),
                        rol: $("#selectPermisos").val() };
        var data = JSON.stringify(objSolicitud);
        $.ajax({
            url : './aceptarSolicitud.php',
            type : 'POST',
            dataType:'json', // add json datatype to get json
            data: {Solicitud : data},
            success : location.reload()
        })
    } 
    function rechazarSolicitud() {
        objSolicitud = {id: rowSolicitud[0]};
        var data = JSON.stringify(objSolicitud);
        $.ajax({
            url : './rechazarSolicitud.php',
            type : 'POST',
            dataType:'json', // add json datatype to get json
            data: {Solicitud : data},
            success : location.reload()
        })
    }
</script>

    

<noscript><img height="1" width="1" style="display:none"

  src="https://www.facebook.com/tr?id=1138039353263292&ev=PageView&noscript=1"

/></noscript>

<!-- End  Code --></html>







