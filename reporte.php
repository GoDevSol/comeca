<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Group Global Trading and Services - Inicio</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        
        <link href="css/style.css" rel="stylesheet">
    </head>

    <?php
    session_start();
      if (!isset($_SESSION['sesion_iniciada'])) 
      {
        echo "<script>location.href = './login.html'</script>";
      }
    ?>    

    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');

body{
	font-family: 'Roboto', sans-serif;
}
* {
	margin: 0;
	padding: 0;
}
i {
	margin-right: 10px;
}

/*------------------------*/
input:focus,
button:focus,
.form-control:focus{
	outline: none;
	box-shadow: none;
}
.form-control:disabled, .form-control[readonly]{
	background-color: #fff;
}
/*----------step-wizard------------*/
.d-flex{
	display: flex;
}
.justify-content-center{
	justify-content: center;
}
.align-items-center{
	align-items: center;
}

/*---------signup-step-------------*/
.bg-color{
	background-color: #333;
}
.signup-step-container{
	padding: 20px 0px;
	padding-bottom: 60px;
}




    .wizard .nav-tabs {
        position: relative;
        margin-bottom: 0;
        border-bottom-color: transparent;
    }

    .wizard > div.wizard-inner {
            position: relative;
    margin-bottom: 50px;
    text-align: center;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 70%;
    margin: 0 10%;
    left: 0;
    right: 0;
    top: 15px;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 30px;
    height: 30px;
    line-height: 30px;
    display: inline-block;
    border-radius: 50%;
    background: #fff;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 16px;
    color: #0e214b;
    font-weight: 500;
    border: 1px solid #ddd;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
        background: #8ab0c3;
    color: #fff;
    border-color: #8ab0c3;
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}
.wizard .nav-tabs > li.active > a i{
	color: #8ab0c3;
}

.wizard .nav-tabs > li {
    width: 12%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: red;
    transition: 0.1s ease-in-out;
}



.wizard .nav-tabs > li a {
    width: 30px;
    height: 30px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
    background-color: transparent;
    position: relative;
    top: 0;
}
.wizard .nav-tabs > li a i{
	position: absolute;
    top: -15px;
    font-style: normal;
    font-weight: 400;
    white-space: nowrap;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 12px;
    font-weight: 700;
    color: #000;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 20px;
}


.wizard h3 {
    margin-top: 0;
}
.prev-step,
.next-step{
    font-size: 13px;
    padding: 8px 24px;
    border: none;
    border-radius: 4px;
    margin-top: 30px;
}
.next-step{
    background-color: #030f27 ;
    color: white;
}
.submit{
    font-size: 13px;
    padding: 8px 24px;
    border: none;
    border-radius: 4px;
    margin-top: 30px;
}
.submit{
    background-color: #030f27 ;
    color: white;
}

.step-head{
    font-size: 20px;
    text-align: center;
    font-weight: 500;
    margin-bottom: 20px;
}
.term-check{
	font-size: 14px;
	font-weight: 400;
}
.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 40px;
    margin-bottom: 0;
}
.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: 40px;
    margin: 0;
    opacity: 0;
}
.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: 40px;
    padding: .375rem .75rem;
    font-weight: 400;
    line-height: 2;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}
.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: 38px;
    padding: .375rem .75rem;
    line-height: 2;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 .25rem .25rem 0;
}
.footer-link{
	margin-top: 30px;
}
.all-info-container{

}
.list-content{
	margin-bottom: 10px;
}
.list-content a{
	padding: 10px 15px;
    width: 100%;
    display: inline-block;
    background-color: #f5f5f5;
    position: relative;
    color: #565656;
    font-weight: 400;
    border-radius: 4px;
}
.list-content a[aria-expanded="true"] i{
	transform: rotate(180deg);
}
.list-content a i{
	text-align: right;
    position: absolute;
    top: 15px;
    right: 10px;
    transition: 0.5s;
}
.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    background-color: #fdfdfd;
}
.list-box{
	padding: 10px;
}
.signup-logo-header .logo_area{
	width: 200px;
}
.signup-logo-header .nav > li{
	padding: 0;
}
.signup-logo-header .header-flex{
	display: flex;
	justify-content: center;
	align-items: center;
}
.list-inline li{
    display: inline-block;
}
.pull-right{
    float: right;
}
/*-----------custom-checkbox-----------*/
/*----------Custom-Checkbox---------*/
input[type="checkbox"]{
    position: relative;
    display: inline-block;
    margin-right: 5px;
}
input[type="checkbox"]::before,
input[type="checkbox"]::after {
    position: absolute;
    content: "";
    display: inline-block;   
}
input[type="checkbox"]::before{
    height: 16px;
    width: 16px;
    border: 1px solid #999;
    left: 0px;
    top: 0px;
    background-color: #fff;
    border-radius: 2px;
}
input[type="checkbox"]::after{
    height: 5px;
    width: 9px;
    left: 4px;
    top: 4px;
}
input[type="checkbox"]:checked::after{
    content: "";
    border-left: 1px solid #fff;
    border-bottom: 1px solid #fff;
    transform: rotate(-45deg);
}
input[type="checkbox"]:checked::before{
    background-color: #18ba60;
    border-color: #18ba60;
}






@media (max-width: 767px){
	.sign-content h3{
		font-size: 40px;
	}
	.wizard .nav-tabs > li a i{
		display: none;
	}
	.signup-logo-header .navbar-toggle{
		margin: 0;
		margin-top: 8px;
	}
	.signup-logo-header .logo_area{
		margin-top: 0;
	}
	.signup-logo-header .header-flex{
		display: block;
	}
}


    </style>

    <body>




        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="index.html">
                                    <h3>GROUP GLOBAL TRADING</h3>
                                    <h3>AND SERVICES, S.A.</h3>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4" style="padding: 0px;">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Horarios</h3>
                                            <p>Lunes - Viernes, 8:00 - 17:00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3" style="padding: 0px;">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Teléfono</h3>
                                            <p>+502 2292-3610</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5" style="padding: 0px;">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Correo</h3>
                                            <p>ventas@groupglobaltradingservices.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

             <!-- Nav Bar Start -->
             <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.html" class="nav-item nav-link ">Inicio</a>                                
                                <a href="about.html" class="nav-item nav-link">Acerca de</a>
                                <a href="service.html" class="nav-item nav-link">Servicios</a>
                                <a href="experience.html" class="nav-item nav-link ">Experiencia</a>
                                <a href="contact.html" class="nav-item nav-link">Contáctenos</a>                                
                                <a href="login.html" onclick="logOut()" class="nav-item nav-link active">Logout</a>
                            </div>
                            
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->  
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Reporte</h2>
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


          <!-- login Start -->
<div class="wow">
        <section class="signup-step-container">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <div class="wizard">
                            <div class="wizard-inner">
                                <div class="connecting-line"></div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>PASO 1</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>PASO 2</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>PASO 3</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>PASO 4</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"><span class="round-tab">5</span> <i>PASO 5</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab"><span class="round-tab">6</span> <i>PASO 6</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab"><span class="round-tab">7</span> <i>PASO 7</i></a>
                                    </li>                                    

                                    
                                </ul>
                            </div>
            
                            <form  enctype="multipart/form-data" role="form" method="POST" action="tutorial/tuto2.php" class="login-box">
                                <div class="tab-content" id="main_form">
                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                        <h4 class="text-center">INFORMACION GENERAL</h4>
                                        <div class="row">
                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>Fecha Y Hora</label> 
                                                    <input class="form-control step1" type="datetime-local"  id="FechaActualHide" disabled> 
                                                    <input hidden  type="datetime-local"  name="FechaActual" id="FechaActual">                                                     
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Tecnico</label> 
                                                    <input class="form-control step1" type="text"  name="TecnicoName" id="TecnicoName" placeholder="">  
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                                <div class="form-group">
                                                    <label>¿Lo acompaña un segundo tecnico?</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="tecAuxiliar" id="AuxTecSi" value="SI">
                                                            <label class="form-check-label" for="AuxTecSi">
                                                              SI
                                                            </label>
                                                          </div>
                                                          <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="tecAuxiliar" id="AuxTecNo" value="NO" checked>
                                                            <label class="form-check-label" for="AuxTecNo">
                                                              NO
                                                            </label>
                                                          </div>                                                          
                                                    </div>
                                                    <div class="form-group" id="NombreAuxiliar">                                                        
                                                        <label>Nombre del Tecnico Auxiliar</label> 
                                                        <input class="form-control" type="text" name="AuxiliarName" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <hr>
                                                <div class="form-group">
                                                    <label>Responsable</label> 
                                                    <input class="form-control" type="text" name="Responsable" id="Responsable" placeholder=""> 
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <hr>
                                                <div class="form-group">
                                                    <label>Motivo de visita</label> 
                                                    <input class="form-control" type="text" name="MotivoVisita" id="MotivoVisita" placeholder=""> 
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <hr>
                                                <div class="form-group">
                                                    <label>Nombre del Cliente</label> 
                                                    <input class="form-control" type="text" name="ClienteNombre" id="ClienteNombre" placeholder=""> 
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <hr>
                                                <div class="form-group">
                                                    <label>Ubicacion</label> 
                                                    <input class="form-control" type="text" name="Ubicacion" id="Ubicacion" placeholder=""> 
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <hr>
                                                <div class="form-group">
                                                    <label>Tipo de Trabajo</label> 
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="TipoTrabajo" id="TipoTrabajo1" value="Garantia" checked>
                                                        <label class="form-check-label" for="TipoTrabajo1">
                                                          Garantia
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="TipoTrabajo" id="TipoTrabajo2" value="Mantto. Preventivo">
                                                        <label class="form-check-label" for="TipoTrabajo2">
                                                          Mantto. Preventivo
                                                        </label>
                                                      </div>
                                                      <div class="form-check disabled">
                                                        <input class="form-check-input" type="radio" name="TipoTrabajo" id="TipoTrabajo3" value="Mantto. Correctivo">
                                                        <label class="form-check-label" for="TipoTrabajo3">
                                                            Mantto. Correctivo
                                                        </label>
                                                      </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="default-btn next-step">Pagina Siguiente</button></li>
                                        </ul>
                                    </div>



                                    <!-- PASO 2 -->

                                    <div class="tab-pane" role="tabpanel" id="step2">
                                        <h4 class="text-center">DATOS DEL EQUIPO</h4>
                                        <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="form-group">
                                                <label>Modelo Del Motor</label> 
                                                <input class="form-control" type="text" name="ModeloMotor" placeholder=""> 
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <hr>
                                                <label>Serie del Motor</label> 
                                                <input class="form-control" type="text" name="SerieMotor" placeholder=""> 
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <hr>
                                            <div class="form-group">
                                                <label>CPL</label> 
                                                <input class="form-control" type="text" name="CPL" placeholder=""> 
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <hr>
                                            <div class="form-group">
                                                <label>Modelo del Generador</label> 
                                                <input class="form-control" type="text" name="ModeloGenerador" placeholder=""> 
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <hr>
                                            <div class="form-group">
                                                <label>Serie del Generador</label> 
                                                <input class="form-control" type="text" name="SerieGenerador" placeholder=""> 
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <hr>
                                            <div class="form-group">
                                                <label>KWL</label> 
                                                <input class="form-control" type="text" name="KWL" placeholder=""> 
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <hr>
                                            <div class="form-group">
                                                <label>Modelo De Control</label> 
                                                <input class="form-control" type="text" name="ModeloControl" placeholder=""> 
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <hr>
                                            <div class="form-group">
                                                <label>Spec</label> 
                                                <input class="form-control" type="text" name="Spec" placeholder=""> 
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <hr>
                                            <div class="form-group">
                                                <label>Horómetro</label> 
                                                <input class="form-control" type="number" name="Horometro" placeholder=""> 
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-12">
                                            <hr>
                                            <div class="form-group">
                                                <label>Numero de Arranques</label> 
                                                <input class="form-control" type="number" name="NumeroArran" placeholder=""> 
                                            </div>
                                        </div>
                                       </div>
                                        
                                        
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="default-btn prev-step">Pagina Anterior</button></li>                                            
                                            <li><button type="button" class="default-btn next-step">Pagina Siguiente</button></li>
                                        </ul>
                                    </div>








                                    <!-- PASO 3 -->

                                    <div class="tab-pane" role="tabpanel" id="step3">
                                        <h4 class="text-center">INSPECCIONES A REALIZAR</h4>
                                         <div class="row">
                                        
                                        
                                        

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>1. Arranque de comprobacion del Generador</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta1" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta1"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta1"  value="NA">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs1">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs1" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>2. Revision de revoluciones RPM y Frecuencia Hz</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta2" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta2"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta2"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs2">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs2" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>3. Mediciones de Voltaje AC (Ajuste si aplica)</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta3" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta3"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta3"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs3">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs3" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>4. Comprobacion de sensor de bajo nivel de refrigerante</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta4" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta4"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta4"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs4">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs4" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>5.  Comprobacion de sensor o Switch nivel de refrigerante </label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta5" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta5"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta5"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs5">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs5" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>6. Comprobacion de sensor o Switch de temperatura</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta6" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta6"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta6"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs6">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs6" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>7. Obtencion de Capture File </label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta7" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta7"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta7"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs7">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs7" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>8. Reseteo de fallas en el control </label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta8" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta8"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta8"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs8">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs8" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>9. Inspeccion por fugas de aceite y refrigerante</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta9" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta9"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta9"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs9">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs9" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>10. Inspeccion de bandas del motor y aspas de ventilador </label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta10" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta10"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta10"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs10">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs10" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>11. Drenado del filtro separador de combustible</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta11" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta11"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta11"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs11">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs11" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>12. Revision de niveles de aceite</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta12" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta12"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta12"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs12">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs12" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>13. Revision de niveles de electrolito y conexiones</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta13" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta13"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta13"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs13">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs13" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>14. Revision de nivel de refrigerante y pruebas de concentracion</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta14" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta14"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta14"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs14">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs14" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>15. Revision del calentador de camisas</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta15" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta15"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta15"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs15">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs15" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>16. Revision del cargador de Baterias</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta16" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta16"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta16"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs16">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs16" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>17. Revision del indicador de restriccion del filtro de aire</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta17" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta17"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta17"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs17">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs17" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>18.  Revision de las lineas de combustible y nivel del tanque </label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta18" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta18"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta18"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs18">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs18" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>19.  Revision del sistema de escape</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta19" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta19"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta19"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs19">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs19" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>20. Revision y limpieza de conexiones electricas del generador</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta20" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta20"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta20"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs20">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs20" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>21. Prueba general del equipo. (con o sin carga)</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta21" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta21"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta21"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs21">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs21" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>22. Cambio de aceite (Si el cliente o el equipo lo requiere)</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta22" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta22"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta22"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs22">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs22" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>23. Cambio de filtro (s) de aceite</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta23" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta23"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta23"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs23">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs23" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>24.  Cambio de filtro (s) de combustible</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta24" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta24"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta24"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs24">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs24" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>25. Cambio de filtro (s) de aire </label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta25" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta25"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta25"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs25">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs25" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>26. Cambio de filtro (s) de refrigerante (Cuando aplica)</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta26" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta26"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta26"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs26">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs26" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>27. Objetos Extraños en Generador</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta27" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta27"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta27"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs27">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs27" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>28. Puente Rectificador Giratorio</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta28" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta28"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="pregunta28"  value="N/A">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obs28">                                                        
                                                        <label>Observaciones</label> 
                                                        <input class="form-control" type="text" name="Obs28" placeholder=""> 
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        
                                           </div>
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="default-btn prev-step">Pagina Anterior</button></li>                                            
                                            <li><button type="button" class="default-btn next-step">Pagina Siguiente</button></li>
                                        </ul>
                                    </div>

                                    <!-- PASO 4 -->

                                    <div class="tab-pane" role="tabpanel" id="step4">
                                        <h4 class="text-center">REPARACION EFECTUADA</h4>
                                        <div class="row">
                                            <div class="col-md-12">                                                
                                                <div class="form-group">
                                                    <label>Queja</label> 
                                                    <input class="form-control" type="text"  name="Queja" id="Queja" placeholder=""> 
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                                <div class="form-group">
                                                    <label>Causa</label> 
                                                    <input class="form-control" type="text"  name="Causa" id="Causa" placeholder=""> 
                                                </div>
                                            </div>

                                            <div class="col-md-12">                                                
                                                
                                                <div class="form-group">
                                                    <label>Correción</label> 
                                                    <input class="form-control" type="text"  name="Correccion" id="Correccion" placeholder=""> 
                                                </div>
                                            </div>


                                        </div>
                                        
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="default-btn prev-step">Pagina Anterior</button></li>                                            
                                            <li><button type="button" class="default-btn next-step">Pagina Siguiente</button></li>
                                        </ul>
                                    </div>


                                    <div class="tab-pane" role="tabpanel" id="step5">
                                        <h4 class="text-center">CONDICIONES FINALES DE ENTREGA</h4>
                                        <div class="row">

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>1. Temperatura de Refrigerante</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados1" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados1"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados1"  value="NA">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obsdos1">                                                        
                                                        <div class="row">
                                                            <div class="col-md-2" id="Obsdos1-temp">
                                                                <label>Temperatura °F</label> 
                                                                <input class="form-control" type="number" name="ObsdosN1" placeholder=""> 
                                                            </div>
                                                            <div class="col-md-10">
                                                                <label>Observaciones</label> 
                                                                <input class="form-control" type="text" name="Obsdos1" placeholder=""> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>2. Temperatura de Aceite </label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados2" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados2"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados2"  value="NA">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obsdos2">                                                        
                                                        <div class="row">
                                                            <div class="col-md-2" id="Obsdos2-temp">
                                                                <label>Temperatura °F</label> 
                                                                <input class="form-control" type="number" name="ObsdosN2" placeholder=""> 
                                                            </div>
                                                            <div class="col-md-10">
                                                                <label>Observaciones</label> 
                                                                <input class="form-control" type="text" name="Obsdos2" placeholder=""> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>3. Temperatura de Gases de Escape</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados3" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados3"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados3"  value="NA">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obsdos3">                                                        
                                                        <div class="row">
                                                            <div class="col-md-2" id="Obsdos3-temp">
                                                                <label>Temperatura °C</label> 
                                                                <input class="form-control" type="number" name="ObsdosN3" placeholder=""> 
                                                            </div>
                                                            <div class="col-md-10">
                                                                <label>Observaciones</label> 
                                                                <input class="form-control" type="text" name="Obsdos3" placeholder=""> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>4. Temperatura de multiple de admision</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados4" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados4"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados4"  value="NA">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obsdos4">                                                        
                                                        <div class="row">
                                                            <div class="col-md-2" id="Obsdos4-temp">
                                                                <label>Temperatura °C</label> 
                                                                <input class="form-control" type="number" name="ObsdosN4" placeholder=""> 
                                                            </div>
                                                            <div class="col-md-10">
                                                                <label>Observaciones</label> 
                                                                <input class="form-control" type="text" name="Obsdos4" placeholder=""> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>5. Presión de Aceite</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados5" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados5"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados5"  value="NA">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obsdos5">                                                        
                                                        <div class="row">
                                                            <div class="col-md-2" id="Obsdos5-temp">
                                                                <label>Presion PSI</label> 
                                                                <input class="form-control" type="number" name="ObsdosN5" placeholder=""> 
                                                            </div>
                                                            <div class="col-md-10">
                                                                <label>Observaciones</label> 
                                                                <input class="form-control" type="text" name="Obsdos5" placeholder=""> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>6. Voltaje de Alternador </label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados6" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados6"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados6"  value="NA">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obsdos6">                                                        
                                                        <div class="row">
                                                            <div class="col-md-2" id="Obsdos6-temp">
                                                                <label>Temperatura (V)</label> 
                                                                <input class="form-control" type="number" name="ObsdosN6" placeholder=""> 
                                                            </div>
                                                            <div class="col-md-10">
                                                                <label>Observaciones</label> 
                                                                <input class="form-control" type="text" name="Obsdos6" placeholder=""> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>7. Caída de Voltaje en Arranque</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados7" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados7"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados7"  value="NA">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obsdos7">                                                        
                                                        <div class="row">
                                                            <div class="col-md-2" id="Obsdos7-temp">
                                                                <label>Temperatura V</label> 
                                                                <input class="form-control" type="number" name="ObsdosN7" placeholder=""> 
                                                            </div>
                                                            <div class="col-md-10">
                                                                <label>Observaciones</label> 
                                                                <input class="form-control" type="text" name="Obsdos7" placeholder=""> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>8. Instrumentos de Tablero</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados8" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados8"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados8"  value="NA">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obsdos8">                                                        
                                                        <div class="row">                                                            
                                                            <div class="col-md-10">
                                                                <label>Observaciones</label> 
                                                                <input class="form-control" type="text" name="Obsdos8" placeholder=""> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>9. Oscilación de Gobernador</label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados9" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados9"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados9"  value="NA">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obsdos1">                                                        
                                                        <div class="row">                                                            
                                                            <div class="col-md-10">
                                                                <label>Observaciones</label> 
                                                                <input class="form-control" type="text" name="Obsdos9" placeholder=""> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>10. Ruidos Extraños </label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados10" value="BUENO" checked>
                                                            <label class="form-check-label" for="inlineRadio1">BUENO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados10"  value="MALO">
                                                            <label class="form-check-label" for="inlineRadio2">MALO</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntados10"  value="NA">
                                                            <label class="form-check-label" for="inlineRadio3">N/A</label>
                                                          </div>                                                                                                                
                                                    </div>
                                                    <div class="form-group" id="Obsdos10">                                                        
                                                        <div class="row">                                                            
                                                            <div class="col-md-10">
                                                                <label>Observaciones</label> 
                                                                <input class="form-control" type="text" name="Obsdos10" placeholder=""> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        
                                </div>

                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="default-btn prev-step">Pagina Anterior</button></li>                                            
                                            <li><button type="button" class="default-btn next-step">Pagina Siguiente</button></li>
                                        </ul>
                                    </div>


                                    <div class="tab-pane" role="tabpanel" id="step6">
                                        <h4 class="text-center">GENERADOR</h4>
                                        
                                        <div class="row">

                                            <div class="col-md-12">
<hr>                                                
                                                <div class="form-group">
                                                    <label>1. Voltaje</label> 
                                                    <div class="row">                                                            
                                                        <div class="col-md-4">
                                                            <label>L1-L2</label> 
                                                            <input class="form-control" type="number" name="preguntadosGenL1" placeholder=""> 
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>L2-L3</label> 
                                                            <input class="form-control" type="number" name="preguntadosGenL2" placeholder=""> 
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>L1-L3</label> 
                                                            <input class="form-control" type="number" name="preguntadosGenL3" placeholder=""> 
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>L1-N</label> 
                                                            <input class="form-control" type="number" name="preguntadosGenLN1" placeholder=""> 
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>L2-N</label> 
                                                            <input class="form-control" type="number" name="preguntadosGenLN2" placeholder=""> 
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>L3-N</label> 
                                                            <input class="form-control" type="number" name="preguntadosGenLN3" placeholder=""> 
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <hr>                                                
                                                <div class="form-group">
                                                    <label>2. Frecuencia</label> 
                                                    <div class="row">                                                            
                                                        <div class="col-md-12">
                                                            <label>Hz</label> 
                                                            <input class="form-control" type="number" name="preguntadosGen2" placeholder=""> 
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <hr>                                                
                                                <div class="form-group">
                                                    <label>3. Corriente en Amperios </label> 
                                                    <div class="row">                                                            
                                                        <div class="col-md-4">
                                                            <label>Fase 1</label> 
                                                            <input class="form-control" type="number" name="preguntadosGen21" placeholder=""> 
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Fase 2</label> 
                                                            <input class="form-control" type="number" name="preguntadosGen22" placeholder=""> 
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Fase 3</label> 
                                                            <input class="form-control" type="number" name="preguntadosGen23" placeholder=""> 
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <hr>                                                
                                                <div class="form-group">
                                                    <label>4. Factor de Potencia </label>                                                             
                                                    <div class="row">                                                            
                                                        <div class="col-md-12">
                                                            <label>%</label> 
                                                            <input class="form-control" type="number" name="preguntadosGen4" placeholder=""> 
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <hr>                                                
                                                <div class="form-group">
                                                    <label>5. Kilovatios / Hora </label> 
                                                    
                                                    <div class="row">                                                            
                                                        <div class="col-md-12">
                                                            <label>kWh</label> 
                                                            <input class="form-control" type="number" name="preguntadosGen5" placeholder=""> 
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <hr>                                                
                                                <div class="form-group">
                                                    <label>6. Simular Falla de Energía Comercial </label>                                                                                                       
                                                    <input class="form-control" type="text" name="preguntadosGen6" placeholder=""> 
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <hr>                                                
                                                <div class="form-group">
                                                    <label>7. Posición de Interruptor </label> 
                                                    
                                                    <div class="form-group tecnico">                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntadosGen7" value="ON" checked>
                                                            <label class="form-check-label" for="inlineRadio1">ON</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="preguntadosGen7"  value="OFF">
                                                            <label class="form-check-label" for="inlineRadio2">OFF</label>
                                                          </div>
                                                                                                                
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="default-btn prev-step">Pagina Anterior</button></li>                                            
                                            <li><button type="button" class="default-btn next-step">Pagina Siguiente</button></li>
                                        </ul>
                                    </div>



                                    <div class="tab-pane" role="tabpanel" id="step7">
                                        <h4 class="text-center">CONCLUSIONES Y RECOMENDACIONES</h4>
                                        
                                        <div class="contenedor">
                                        
                                        <div class="list-content">
                                            <a href="#listone" data-toggle="collapse" aria-expanded="false" aria-controls="listone">Fotografia 1<i class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listone">
                                                <div class="list-box">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">                                                                
                                                                <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="inputImg1" id="inputImg1">
                                                                <label class="custom-file-label" for="inputImg1">Seleccione la imagen</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">                                                            
                                                            <img id="img1" src="#" alt="your image"  width="200" height="200"/>                                                            
                                                        </div>
                                                        <div class="col-md-12">                                                            
                                                            <label>Descripción</label> 
                                                            <input class="form-control" type="text" name="foto1" placeholder=""> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <a href="#listtwo" data-toggle="collapse" aria-expanded="false" aria-controls="listtwo">Fotografia 2 <i class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listtwo">
                                                <div class="list-box">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">                                                                
                                                                <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="inputImg2" id="inputImg2">
                                                                <label class="custom-file-label" for="inputImg2">Seleccione la imagen</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">                                                            
                                                            <img id="img2" src="#" alt="your image"  width="200" height="200"/>                                                            
                                                        </div>

                                                        <div class="col-md-12">                                                            
                                                            <label>Descripción</label> 
                                                            <input class="form-control" type="text" name="foto2" placeholder=""> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-content">
                                            <a href="#listthree" data-toggle="collapse" aria-expanded="false" aria-controls="listthree">Fotografia 3 <i class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listthree">
                                                <div class="list-box">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">                                                                
                                                                <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="inputImg3" id="inputImg3">
                                                                <label class="custom-file-label" for="inputImg3">Seleccione la imagen</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">                                                            
                                                            <img id="img3" src="#" alt="your image"  width="200" height="200"/>                                                            
                                                        </div>

                                                        <div class="col-md-12">                                                            
                                                            <label>Descripción</label> 
                                                            <input class="form-control" type="text" name="foto3" placeholder=""> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <a href="#listfour" data-toggle="collapse" aria-expanded="false" aria-controls="listfour">Fotografia 4 <i class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listfour">
                                                <div class="list-box">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">                                                                
                                                                <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="inputImg4" id="inputImg4">
                                                                <label class="custom-file-label" for="inputImg4">Seleccione la imagen</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">                                                            
                                                            <img id="img4" src="#" alt="your image"  width="200" height="200"/>                                                            
                                                        </div>

                                                        <div class="col-md-12">                                                            
                                                            <label>Descripción</label> 
                                                            <input class="form-control" type="text" name="foto4" placeholder=""> 
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-content">
                                            <a href="#listfive" data-toggle="collapse" aria-expanded="false" aria-controls="listfive">Audio<i class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listfive">
                                                <div class="list-box">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">                                                                
                                                                <div class="custom-file">
                                                                    <input type="file" name="fileAudio" value="" onchange="PreviewAudio(this, $('#audioPreview'))" class="custom-file-input" id="inputfive" />
                                                                <label class="custom-file-label" for="inputfive">Seleccione audio</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        


                                                        <div class="col-md-6">                                                            
                                                            <audio controls="controls" id="audioPreview" style="display:none">
                                                                <source src="" type="audio/mp4" />
                                                          </audio>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-content">
                                            <a href="#listsix" data-toggle="collapse" aria-expanded="false" aria-controls="listsix">Video<i class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listsix">
                                                <div class="list-box">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-6">
                                                            <div class="form-group">                                                                
                                                                <div class="custom-file">                                                                
                                                                <input type="file" name="file[]" class="custom-file-input file_multi_video" accept="video/*">
                                                                <label class="custom-file-label" for="inputvide">Seleccione video</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">                                                            
                                                            <video width="200" controls>
                                                                <source src="mov_bbb.mp4" id="video_here">
                                                                  Your browser does not support HTML5 video.
                                                              </video>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    
                                
                                        
                                        






                                            <div class="col-md-12">                                                
                                                <div class="form-group">
                                                    <label>Conclusiones y Recomendaciones</label> 
                                                    <textarea class="form-control" type="text" name="conclu" placeholder=""> </textarea>
                                                </div>
                                            </div>


                                            <div class="col-md-12"> 
                                                <hr>                                               
                                                <div class="form-group">
                                                    <label>Pendientes</label> 
                                                    <input class="form-control" type="text" name="pendien" placeholder=""> 
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">                                                    
                                                <hr>
                                                <label>Firma</label> 
                                            </div>   
                                                
                                                
                                                <div class="col-md-12" style="text-align: center">
                                                     <canvas id="draw-canvas" width="400" height="200" style="border: 2px solid #d9d9d9;">
                                                         No tienes un buen navegador.
                                                     </canvas>

                                                     <textarea style="display: none;" id="firma" name="firma" class="form-control" rows="5"></textarea>
                                                 </div>                                            
                                            <div class="col-md-12">                                                    
                                                    <input type="button" class="btn btn-danger" id="draw-clearBtn" value="Borrar Firma"></input>                                    
                                            </div>                                    
                                            
                                            <div class="col-md-12">
                                                <hr>
                                                <div class="form-group">
                                                    <label>Fecha de Salida:</label> 
                                                    <input class="form-control" type="datetime-local" id="fechaFin" name="fechaFin"> 
                                                </div>
                                            </div>
                                            

                                            <div class="col-md-12">
                                                <hr>
                                                <div class="form-group">
                                                    <label>Correo del Cliente:</label> 
                                                    <input class="form-control" type="text" name="correo" placeholder=""> 
                                                </div>
                                            </div>


                                        </div>
                                    

                                        
                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="default-btn prev-step">Pagina Anterior</button></li>                                            
                                            <li><button type="submit" class="default-btn submit" id="Informe">Mandar Informe</button></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
<!-- login End -->


<!-- Footer Start -->
<div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="footer-contact">
                    <h2>Contacto</h2>
                    
                    <p><i class="fa fa-address-card"></i>Group Global Trading And Services, S.A.</p>
                    <p><i class="fa fa-map-marker-alt"></i>3ra. Avenida 9-50 zona 11, Guatemala, Guatemala</p>
                    <p><i class="fa fa-phone-alt"></i>+502 2292-3610</p>
                    <p><i class="fa fa-university"></i>NIT:  8886403-0</p>                                
                    <p><i class="fa fa-envelope"></i>ventas@groupglobaltradingservices.com</p>
                    <div class="footer-social">                                    
                        <a href=""><i class="fab fa-facebook-f"></i></a>                                    
                    </div>
                </div>
            </div>                                                
            <div class="col-md-6 col-lg-6">
                <div class="newsletter">
                    <h2>Necesito información</h2>
                    <p>
                        Si necesitas que te contactemos para cotizar nuestros servicios, escribenos y con gusto nos pondremos en contacto contigo.
                    </p>
                    <div>
                        <form>
                            <input type="email" class="form-control" placeholder="Correo">
                            <br>
                            <textarea class="form-control"  placeholder="Mensaje"></textarea>
                            <br>                                    
                            <button class="btn">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="container copyright">
        <div class="row">
            <div class="col-md-12">
                <p>&copy; <a href="#">GGTS</a>, All Right Reserved.</p>
            </div>
            <div class="col-md-12">
                <p>Designed By <a href="https://htmlcodex.com">Jenner Orozco</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<a href="#" class="back-to-top" id="backtop"><i class="fa fa-chevron-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>





<script>

    // ------------step-wizard-------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);
        $("#backtop").click()

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});



</script>



<script>
    $("#NombreAuxiliar").hide();
    $(document).ready(function(){
        $('.tecnico input[type="radio"]').click(function(){
            if ($(this).attr("value") == "SI"){
                $("#NombreAuxiliar").show();
            }else{                
                $("#NombreAuxiliar").hide();
            }
        });
    });


    for (let i = 1; i < 8; i++) {
    $("#Obsdos"+i+"-temp").show();
    $('input[name ="preguntados'+i+'"]').click(function(){
            if ($(this).attr("value") == "NA"){
                $("#Obsdos"+i+"-temp").hide();
            }else{                
                $("#Obsdos"+i+"-temp").show();
            }
        });
        
    }

    

    
    
</script>







<script>

    

(function() { // Comenzamos una funcion auto-ejecutable

// Obtenenemos un intervalo regular(Tiempo) en la pamtalla
window.requestAnimFrame = (function (callback) {
    return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                window.oRequestAnimationFrame ||
                window.msRequestAnimaitonFrame ||
                function (callback) {
                     window.setTimeout(callback, 1000/60);
        // Retrasa la ejecucion de la funcion para mejorar la experiencia
                };
})();

// Traemos el canvas mediante el id del elemento html
var canvas = document.getElementById("draw-canvas");
var ctx = canvas.getContext("2d");




var drawImage = document.getElementById("draw-image");
var clearBtn = document.getElementById("draw-clearBtn");

clearBtn.addEventListener("click", function (e) {
    clearCanvas();    
}, false);
    

//var dataUrl = canvas.toDataURL();


var drawing = false;
var mousePos = { x:0, y:0 };
var lastPos = mousePos;
canvas.addEventListener("mousedown", function (e)
{
    var tint = document.getElementById("color");
    var punta = document.getElementById("puntero");
    drawing = true;
    lastPos = getMousePos(canvas, e);
}, false);
canvas.addEventListener("mouseup", function (e)
{
    drawing = false;
    var dataUrl = canvas.toDataURL();
    
    
    document.getElementById("firma").value = dataUrl;

}, false);
canvas.addEventListener("mousemove", function (e)
{
    mousePos = getMousePos(canvas, e);
}, false);


canvas.addEventListener("touchstart", function (e) {
    mousePos = getTouchPos(canvas, e);
e.preventDefault(); // Prevent scrolling when touching the canvas
    var touch = e.touches[0];
    var mouseEvent = new MouseEvent("mousedown", {
        clientX: touch.clientX,
        clientY: touch.clientY
    });
    canvas.dispatchEvent(mouseEvent);
}, false);
canvas.addEventListener("touchend", function (e) {
e.preventDefault(); // Prevent scrolling when touching the canvas
    var mouseEvent = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(mouseEvent);
}, false);
canvas.addEventListener("touchleave", function (e) {
// Realiza el mismo proceso que touchend en caso de que el dedo se deslice fuera del canvas
e.preventDefault(); // Prevent scrolling when touching the canvas
var mouseEvent = new MouseEvent("mouseup", {});
canvas.dispatchEvent(mouseEvent);
}, false);
canvas.addEventListener("touchmove", function (e) {
e.preventDefault(); // Prevent scrolling when touching the canvas
    var touch = e.touches[0];
    var mouseEvent = new MouseEvent("mousemove", {
        clientX: touch.clientX,
        clientY: touch.clientY
    });
    canvas.dispatchEvent(mouseEvent);
}, false);


function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();

    return {
        x: mouseEvent.clientX - rect.left,
        y: mouseEvent.clientY - rect.top
    };
}


function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
        x: touchEvent.touches[0].clientX - rect.left, // Popiedad de todo evento Touch
        y: touchEvent.touches[0].clientY - rect.top
    };
}

// Draw to the canvas
function renderCanvas() {
    if (drawing) {
  var tint = "#000000";
  var punta = "2";
  ctx.strokeStyle = tint.value;
  ctx.beginPath();
        ctx.moveTo(lastPos.x, lastPos.y);
        ctx.lineTo(mousePos.x, mousePos.y);
  console.log(punta.value);
    ctx.lineWidth = punta.value;
        ctx.stroke();
  ctx.closePath();
        lastPos = mousePos;
    }
}

function clearCanvas() {
    canvas.width = canvas.width;
}

// Allow for animation
(function drawLoop () {
    requestAnimFrame(drawLoop);
    renderCanvas();
})();

})();

</script>


<script>
   function readURL(input,index) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();    
    reader.onload = function(e) {
      $('#img'+index).attr('src', e.target.result);
    }    
    reader.readAsDataURL(input.files[0]);
  }
}

for (let index = 1; index < 5; index++) {
    $("#inputImg"+index).change(function() {
                readURL(this,index);
        });
    
}

var m = new Date();
var dia = m.getDay().toLocaleString()
var mes = (m.getMonth() + 1).toLocaleString()
var hour = (m.getHours()).toLocaleString()
var minutes = (m.getMinutes()).toLocaleString()

if (dia.length < 2){    
   dia =  "0" +  dia 
}
if (mes.length < 2){    
   mes =  "0" +  mes
}

if (hour.length < 2){    
    hour =  "0" +  hour 
}
if (minutes.length < 2){    
    minutes =  "0" +  minutes
}
var dateString = m.getFullYear() +"-"+ (mes) +"-"+ dia + "T" + hour + ":" + minutes;


$("#FechaActual").val(dateString);
$("#FechaActualHide").val(dateString);




function PreviewAudio(inputFile, previewElement) {

if (inputFile.files && inputFile.files[0] && $(previewElement).length > 0) {

    $(previewElement).stop();

    var reader = new FileReader();

    reader.onload = function (e) {

        $(previewElement).attr('src', e.target.result);
        var playResult = $(previewElement).get(0).play();

        if (playResult !== undefined) {
            playResult.then(_ => {
                // Automatic playback started!
                // Show playing UI.

                $(previewElement).show();
            })
                .catch(error => {
                    // Auto-play was prevented
                    // Show paused UI.

        $(previewElement).hide();
                    alert("File Is Not Valid Media File");
                });
        }
    };

    reader.readAsDataURL(inputFile.files[0]);
}
else {
    $(previewElement).attr('src', '');
    $(previewElement).hide();
    alert("File Not Selected");
}
}



$(document).on("change", ".file_multi_video", function(evt) {
  var $source = $('#video_here');
  $source[0].src = URL.createObjectURL(this.files[0]);
  $source.parent()[0].load();
});


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

</body>
</html>


