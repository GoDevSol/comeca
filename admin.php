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
    <script src="https://cdn.tiny.cloud/1/eg0vvn7j0kjqewmssh5u35lubh602ajdv1b8q4sug0vffpgc/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
            <li class="nav-item">
               <a class="nav-link" id="pills-post-picture-tab" data-toggle="pill" href="#pills-post-picture" role="tab" aria-controls="pills-post-picture" aria-selected="false" >Foto Post</a>
            </li>

            
            <li class="nav-item">
               <a class="nav-link" id="pills-post-tab" data-toggle="pill" href="#pills-post" role="tab" aria-controls="pills-post" aria-selected="false"  onclick="ListarPost();">Administrar Post</a>
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
                        <button class="btn btn-danger" type="button" onclick="DeleteDir()">
                        Eliminar Folder
                        </button>
                        <button class="btn btn-info" type="button" onclick="VisualizarDir()">
                        Visualizar Archivo
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
                              <input type="file" class="custom-file-input" id="file" required>
                           </div>
                           <div class="text-center">
                              <button type="submit" class="btn text-center" style="background-color: #1F405F; color: white;" onclick="subirArchivo()">
                              SUBIR ARCHIVO
                              </button>   
                           </div>
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
                                 <th scope="col">EMPRESA</th>
                                 <th scope="col">DIRECCION</th>
                                 <th scope="col">E-MAIL</th>
                              </tr>
                           </thead>
                           <tbody id="tbodyClientes">
                           </tbody>
                        </table>
                     </div>
                     <button class="btn btn-success" type="button" 
                        data-toggle="modal" data-target="#modalCreacion" >
                     Crear Usuario
                     </button>
                     <button class="btn btn-danger buttonUsuarios" type="button"
                        data-toggle="modal" data-target="#modalEliminar" disabled>
                     Eliminar Usuario
                     </button>    
                     <button class="btn btn-info buttonUsuarios" type="button" 
                        data-toggle="modal" data-target="#modalDescargas" onclick="LlamarDescargas()" disabled>
                     Descargas Usuario
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
                                 <th scope="col">EMPRESA</th>
                                 <th scope="col">DIRECCION</th>
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


         <div class="tab-pane fade" id="pills-post-picture" role="tabpanel" aria-labelledby="pills-post-picture">
            <div class="row" style="color: black;border-style: solid;border-width: 1px;margin-left: 10px;    padding: 25px;">                                    
                     <div class=" col-xs-6" >
                     <div class="custom-file">
                                 <input accept="image/*" type='file' class="custom-file-input" id="imgInp" required>
                              </div>
                              <div class="text-center">
                                 <button id="butonFile" type="submit" disabled class="btn text-center" style="background-color: #1F405F; color: white;" onclick="subirArchivoPost()">
                                 ACTUALIZAR FOTO
                                 </button>   
                              </div>

                              <img id="blah" src="" alt="your image" />
                     </div>

                     <div class=" col-xs-6" >
                        <img src="./assets\images\banner\banner8.jpg" alt="">
                     </div>
            </div>


         </div>



        <div class="tab-pane fade" id="pills-post" role="tabpanel" aria-labelledby="pills-post-tab">        
            <div class="panel panel-default" style="padding: 15px;">
                <div class="panel-heading" style="margin-bottom:15px">
                    <h2>
                         ADMINISTRACIÓN DE POST                        
                    </h2>
                </div>

                
                

                <div class="row" style="color: black;">                
                    

                    <div class=" col-lg-3" >

                    <div class="row" style="color: black;padding-left: 10px;">                
                    
                     <button onclick="NewPost()" type="button" class="btn btn-success">Crear</button>
                    
                    <button onclick="ShowPost()" type="button" class="btn btn-info">Guardar</button>
                    <button onclick="EliminarPost()" type="button" class="btn btn-danger">Eliminar</button>
                    
                    </div>                    


                    <div class="list-group" style="margin-top: 10px" id="ListAction">                        
                        
                    </div>



                    </div>
                    <div class=" col-lg-9" >
                    <textarea id="image-tools">                            
                        </textarea>

                    </div>
                </div>
            </div>            
        </div>
      </section>
      <!--/.about-us-->
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
                        <option value="2">Distribuidor</option>
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
      <div class="modal fade bd-example-modal-lg" id="modalCreacion" tabindex="-1" role="dialog" aria-labelledby="modalCreacionTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
            <form id="form" method="POST" action="" onsubmit="return aceptarCreacion(this);">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLongTitle">Creacion de Usuario</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="form-group">
                        <label for="Name" style="color: black">NOMBRE </label>
                        <input  required type="text" class="form-control" id="Name" aria-describedby="Name" placeholder="NOMBRE">
                     </div>
                     <div class="form-group">
                        <label for="Empresa" style="color: black">EMPRESA</label>
                        <input  required type="text" class="form-control" id="Empresa" aria-describedby="Empresa" placeholder="EMPRESA">
                     </div>
                     <div class="form-group">
                        <label for="Direccion" style="color: black">DIRECCION</label>
                        <input required type="text" class="form-control" id="Direccion" aria-describedby="Direccion" placeholder="DIRECCION">
                     </div>
                     <div class="form-group">
                        <label for="Mail" style="color: black">E-MAIL</label>
                        <input required type="email" class="form-control" id="Mail" placeholder="E-MAIL">
                     </div>
                     <div class="form-group">
                        <label for="UsuarioCreacion" style="color: black">Usuario</label>
                        <input  required type="text" class="form-control" id="UsuarioCreacion" aria-describedby="UsuarioCreacion" placeholder="USUARIO">
                     </div>
                     <div class="form-group">
                        <label for="ContraseñaCreacion" style="color: black">Contraseña</label>
                        <input  required type="text" class="form-control" id="ContraseñaCreacion" aria-describedby="ContraseñaCreacion" placeholder="CONTRASEÑA">
                     </div>
                     <div class="form-group">
                        <label for="selectPermisosCreacion">Seleccione Tipo de Usuario</label>
                        <select class="form-control" id="selectPermisosCreacion">
                           <option value="1">Administrador</option>
                           <option value="2">Distribuidor</option>
                        </select>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                     <button type="submit" class="btn btn-success">ACEPTAR</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div class="modal fade " id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Usuario</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <h5>al este usuario se perderá toda su información</h5>
                  <br>
                  <h4>¿Esta Seguro de Eliminar Este Usuario?</h4>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                  <button type="button" class="btn btn-danger" onclick="eliminarUsuario()">ELIMINAR</button>
               </div>
            </div>
         </div>
      </div>


      <div class="modal fade " id="modalPost" tabindex="-1" role="dialog" aria-labelledby="modalPostTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Guardar Post</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <form id="formPost" method="POST" action="" onsubmit="return SavePost(this);">
                  <div class="modal-body" >               

                        <div class="form-group">
                           <label for="Titulo" style="color: black">TITULO </label>
                           <input  required type="text" class="form-control" id="TituloPost" aria-describedby="Name" placeholder="Titulo Post">
                        </div>
                        <div class="form-group">
                           <label for="Imagen" style="color: black">IMAGEN</label>
                           <input  required type="text" class="form-control" id="ImagenPost" aria-describedby="Empresa" placeholder="Url Image">
                        </div>                  
                  </div>
                  <div class="modal-footer">                     
                     <button type="button"  class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                     <button  type="submit" class="btn btn-success" >GUARDAR</button>
                  </div>
                  </form>   
            </div>
            
         </div>
      </div>                        




      <div class="modal fade " id="modalDescargas" tabindex="-1" role="dialog" aria-labelledby="modalDescargasTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Descargas del Usuario</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div id="listaDescargas" style="padding: 15px; overflow-x: scroll" class="panel-body">
                     <table class="table table-sm" id="tablaDescargas">
                        <thead>
                           <tr>
                              <th ></th>
                              <th scope="col">#</th>
                              <th scope="col">NOMBRE DEL ARCHIVO</th>
                              <th scope="col">FECHA DE DESCARGA</th>
                           </tr>
                        </thead>
                        <tbody id="tbodyDescargas">
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
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
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
      <!--dataTable-->      
      <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"></script>
      <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script> 
      <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>      
   </body>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
      var input;
      $("#contenidoHeader").load("headerLogOut.html", function() {
      
      input = document.getElementById("busqueda");
      
      input.addEventListener("keyup", function(event) {  	
      
       	if (event.keyCode === 13) {    			
      
      	busqueda()}
      
      
   });
});
      
      
      $("#contenidoFooter").load("footerLogOut.html"); 


      function busqueda(){
      
      if (input.value){
   
      location.href = './busqueda.html?busqueda=' + input.value;
   
      }else{
   
         alert("Ingresa un valor para realizar la busqueda")
   
      }
   
   }

   imgInp.onchange = evt => {
      const [file] = imgInp.files
      if (file) {
         blah.src = URL.createObjectURL(file)         
         butonFile.disabled = false;
         }
      }
   </script>
   <script>

     


      
      
      
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
          timeout: 60000,
          async: true,
          processData:false,    
          success: function (param) {
                              console.log(param)
                              location.reload()
                          }
              
              });
      }


      function subirArchivoPost() {
      
      let photo = document.getElementById("imgInp").files[0];
      let formData = new FormData();
      
      formData.append("image", photo);      
      
      $.ajax({
          url: "./ActualizarFotoPost.php",
          type: "POST",
          data:  formData,
          contentType: false,
          cache: false,
          timeout: 60000,
          async: true,
          processData:false,    
          success: function (param) {
                              console.log(param)                        
                              location.reload()
                          }
              
              });
      }
      
      function CrearDir() {
              $.ajax({
              url : './CrearDir.php', 
              type : 'POST',
              dataType:'json', 
              
              data:  {direccion: $("#event_result").val(),
              nombre: $("#add").val()},
              success: location.reload()
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
              
      function DeleteDir() {
          
            
            var result = confirm("¿Esta seguro de querer elimiar el siguiente archivo o directorio? " + $('#event_result').val());
            if (result == true) {
              $.ajax({
              url : './DeleteDir.php', 
              type : 'POST',
              dataType:'json', 
              data:  {direccion: $("#event_result").val()},
              success : location.reload()
      
                  })
            } else {
              
            }
            
            
              
      }

      function VisualizarDir() {

         window.open("https://comeca.com.gt/"+ "Directorio/" + $("#event_result").val(), "Preview", "width=300, height=200")
              
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
              console.log(path)
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
                      break;
                  case "Upload":
                      $("#collapseUpload").show( "slow");
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
              success : ""
          
          })
      }
      
   </script>
   <script>
      var tablaClientes;
      var tablaDescargas;
      var rowClientes;
      function ListarClientes(){
          $.ajax({
              url : './listadoClientes.php',
              type : 'POST',
              dataType:'json', // add json datatype to get json
              data: "",
              success : function (params) {
                  ListadoClientes(params);
                  $('.buttonUsuarios').prop('disabled', true); 
              }
          })
      }
      
      function ListadoClientes(listado) {
          
          var contador = 1;
         
          var Listado = listado;
         
         
         
          if (tablaClientes){
              tablaClientes.destroy();
      }
          $( "#tbodyClientes" ).html("")
          Listado.forEach(element => {
              var Table = '<tr> <td>'+ element.IdUsuario +'</td>'+
                                   '<td>'+ contador +'</td>'+
                                   '<td>'+ element.Usuario +'</td>'+
                                   '<td>'+ element.Nombre +'</td>'+
                                   '<td>'+ element.Empresa +'</td>'+
                                   '<td>'+ element.Direccion +'</td>'+
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
              rowClientes = tablaClientes.rows( indexes ).data().toArray()[0];
              console.log(rowClientes)
          } )
          .on( 'deselect', function ( e, dt, type, indexes ) {
              $('.buttonUsuarios').prop('disabled', true); 
          } );
          $("#tablaClientes" ).css({"margin":"0px","width":"100%"})
      }
      
      
      function eliminarUsuario() {
          objEliminar = {
              id: rowClientes[0]
              };
          var data = JSON.stringify(objEliminar);
          $.ajax({
              url : './eliminarUsuario.php',
              type : 'POST',
              dataType:'json', // add json datatype to get json
              data: {Eliminar : data},
              success : location.reload()
          })
      }
      
      function aceptarCreacion() {
        var  objCreacion = { 
          Name: document.getElementById("Name").value,
      
          Empresa: document.getElementById("Empresa").value,
      
          Direccion: document.getElementById("Direccion").value,
      
          Mail: document.getElementById("Mail").value,
      
          usuario: document.getElementById("UsuarioCreacion").value,
          
          contrasena: document.getElementById("ContraseñaCreacion").value,
          
          rol: document.getElementById("selectPermisosCreacion").value };
          
          $.ajax({
              url : './aceptarCreacion.php',
              type : 'POST',
              dataType:'json',
              data: objCreacion,
              success : console.log("Ok")
          })
          
      } 
      
      function LlamarDescargas() {
          objDescargas = {
              id: rowClientes[0]
              };
          var data = JSON.stringify(objDescargas);
          $.ajax({
              url : './DescargasUsuario.php',
              type : 'POST',
              dataType:'json', // add json datatype to get json
              data: {Descargas : data},
              success : function (params) {
                  ListadoDescargas(params);
              }
          })
      }
      
      function ListadoDescargas(listado) {
          
          var contador = 1;
         
          var Listado = listado;
      
          if (tablaDescargas){
              tablaDescargas.destroy();
      }
          $( "#tbodyDescargas" ).html("")
          Listado.forEach(element => {
              var Table = '<tr> <td>'+ element.IdUsuario +'</td>'+
                                   '<td>'+ contador +'</td>'+
                                   '<td>'+ element.FileName +'</td>'+
                                   '<td>'+ element.FechaDescarga +'</td>'+
                           '</tr>';
              $( "#tbodyDescargas" ).append( Table );
              contador++;
          });
          tablaDescargas = $('#tablaDescargas').DataTable( {
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
                     
          $("#tablaDescargas" ).css({"margin":"0px","width":"100%"})
      }
   </script>
   <script>
      var rowSolicitud;
      var PostId = 0;
      var Image = "";
      var Title = "";
      
      var tablasolicitud;
      
      function ListarSolicitudes(){
          $.ajax({
              url : './listadoSolicitudes.php',
              type : 'POST',
              dataType:'json', // add json datatype to get json
              data: "",
              success : function (params) {
                  ListadoSolicitudes(params);
                   $('.buttonSolicitud').prop('disabled', true); 
              }
          })
      }

      function ListarPost(){
            $.ajax({
                url : './listarPost.php',
                type : 'POST',
                dataType:'json', // add json datatype to get json
                data: "",
                success : function (params) {
                    var listado = document.getElementById("ListAction")
                    listado.innerHTML = ""
                    params.forEach(element => {               
                        listado.innerHTML += '<button type="button" class="list-group-item list-group-item-action" onclick="LoadPostById('+ element.Id +')">' + element.Title +'</button>'                        
                    })                                        
                    
                }
            })
     }

     function LoadPostById(Id){
            $.ajax({
                url : './listarPost.php',
                type : 'POST',
                dataType:'json', // add json datatype to get json
                data: "",
                success : function (params) {                    
                    params.forEach(element => {                     
                       if (element.Id == Id){
                          console.log(element)
                        Image =  element.Image;
                        Title =  element.Title;
                        PostId =  Id;
                        tinymce.get('image-tools').setContent(element.HTML);

                       }
                       
                    })                                        
                    
                }
            })
     }

     function NewPost(){
      PostId =  0;
      tinymce.get('image-tools').setContent("");
      }

      function ShowPost(){
         if (tinymce.get('image-tools').getContent() == ""){
            alert("Ingrese algun contenido en la seccion de Post.")
            return
         }
         if  (PostId !=  0){
            document.getElementById("TituloPost").value = Title
            document.getElementById("ImagenPost").value =Image  
         } else{
            document.getElementById("TituloPost").value = ""
            document.getElementById("ImagenPost").value =""
         }
                
         
         $('#modalPost').modal('toggle');

      }




      function SavePost(){

         

         if(PostId == 0){

         var  objCreacion = { 
          Title: document.getElementById("TituloPost").value,
      
          HTML: tinymce.get('image-tools').getContent(),
      
          Image: document.getElementById("ImagenPost").value
        }
          
          $.ajax({
              url : './SavePost.php',
              type : 'POST',
              dataType:'json',
              data: objCreacion,
              success : function (){
               
               ListarPost();
              }
          })

         

         }else{

            var  objCreacion = { 
            Id: PostId,
            Title: document.getElementById("TituloPost").value,         
            HTML: tinymce.get('image-tools').getContent(),         
            Image: document.getElementById("ImagenPost").value
        }
          
          $.ajax({
              url : './SavePostChange.php',
              type : 'POST',
              dataType:'json',
              data: objCreacion,
              success : function (){               
               ListarPost();
              }
          })

         }
         ListarPost();
         $('#modalPost').modal('toggle');
         return false;
         
      }


      function EliminarPost(){
         if(PostId == 0){
            alert("No ha seleccionado ningun Post para eliminar.")

         }else{
            $.ajax({
              url : './EliminarPost.php',
              type : 'POST',
              dataType:'json',
              data: {Id: PostId},
              success : ListarPost()
          })
         }

         ListarPost()
      
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
                                   '<td>'+ element.Empresa +'</td>'+
                                   '<td>'+ element.Direccion +'</td>'+
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
                          empresa: rowSolicitud[2],
                          direccion: rowSolicitud[3],
                          correo: rowSolicitud[4],
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


     
      


tinymce.init({
    selector: 'textarea#image-tools',
    height: 500,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table paste imagetools wordcount'
    ],
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
  });
      
   </script>
   <!-- End  Code -->
</html>