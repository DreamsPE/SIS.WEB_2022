<?php
$this->view('includes/header')
?>
                    <div class="col-md-12">
                        <h1 class="page-head-line">Home</h1>
                        <h1 class="page-subhead-line">Bienvenido: <strong>I.E.P. "GRAN AMAUTA DE MOTUPE" [En Linea]</strong>. </h1>

                    </div>
                <!-- /. ROW  -->
                <div class="row">
				
				    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="<?=ROOT?>/students">
                                <i class="fa fa-uniF0C0 fa-5x"></i>
                                <h5>Estudiantes</h5>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="fees.php">
                                <i class="fa fa-uniF19D fa-5x"></i>
                                <h5>Matricula</h5>
                            </a>
                        </div>
                    </div>
					
					
					<div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="report.php">
                                <i class="fa fa-uniF15C fa-5x"></i>
                                <h5>Reportes</h5>
                            </a>
                        </div>
                    </div>
                  

                </div>
                <!-- /. ROW  -->
<?php
$this->view('includes/footer')
?>
