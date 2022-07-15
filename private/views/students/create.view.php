<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>GRAN AMAUTA DE MOTUPE</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="<?=ASSETS?>/css/font-awesome.css" rel="stylesheet" />
        <!--CUSTOM BASIC STYLES-->
        <link href="assets/css/basic.css" rel="stylesheet" />
        <!--CUSTOM MAIN STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <script src="assets/js/jquery-1.10.2.js"></script>
        </head>

        <div id="wrapper">
        <!-- /. WRAPPER (includes/header) -->
        <nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?=ROOT?>/home">I.E.P. "GRAN AMAUTA DE MOTUPE"</a>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                    <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Principal</a>
                    </li>
					<li>
                     
                    <a href="<?=ROOT?>/courses"><i class="fa fa-university "></i>Cursos</a>

                    </li>
					
					<li>
                        <a href="<?=ROOT?>/students"><i class="fa fa-users "></i>Estudiantes</a>
                    </li>
					<li>
                        <a href="fees.php"><i class="fa fa-inr "></i>Matricula</a>
                    </li>
					 <li>
                        <a href="report.php"><i class="fa fa-file-text "></i>Reportes</a>
                    </li>
					
					 
					
					<li>
                        <a href="setting.php"><i class="fa fa-cogs "></i>Configuracion</a>
                    </li>
					
					 <li>
                        <a href="logout.php"><i class="fa fa-power-off "></i>Salir</a>
                    </li>
					
			
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
    <!-- /. PAGE WRAPPER  -->
        <div id="page-inner">
        <!-- /. PAGE INNER  -->>

                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="<?=ROOT?>/students/create">
                                <i class="fa fa-users fa-5x"></i>
                                <h5>Estudiantes</h5>
                            </a>
                        </div>
                    </div>
    
                    </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER (includes/header) -->

    <div id="footer-sec">
    ©2022 - Todos los derechos reservados
    </div>
   
   <script src="assets/js/jquery-1.10.2.js"></script>	
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom1.js"></script>

</body>
</html>