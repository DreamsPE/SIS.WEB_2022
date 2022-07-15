<?php
$this->view('includes/header')
?>
                    <div class="col-md-12">
                        <h1 class="page-head-line">Estudiantes  
				
						<a href="<?=ROOT?>/students/create" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add </a>
				
						</h1>

<link href="assets/css/datatable/datatable.css" rel="stylesheet" />
		<div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Branch  
                        </div>
                        <div class="panel-body">
                             <div class="table-sorting table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Id_Curso</th>
                                            <th>NombreCurso</th>
                                            <th>Detalle</th>
											<th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
					
                                    
<?php if ($rows) : ?>
<?php foreach ($rows as $row) : ?>

    <tr>
        <td><button class=""><i class="fa fa-uniF08B"></i></button></td>
        <td><?= $row->Id_Estudiante ?></td>
        <td><?= $row->Nombre ?></td>
        <td><?= $row->Sexo?></td>
        <td>
            <a href="<?= ROOT ?>/condominios/edit/<?= $row->id ?>">
                <button class=" "><i class="fa fa-uniF044"></i></button>
            </a>

            <a href="<?= ROOT ?>/condominios/destroy/<?= $row->id ?>">
                <button class=""><i class="fa fa-bin"></i></button>
            </a>
        </td>
    </tr>

<?php endforeach; ?>
<?php else : ?>
<h4>No se encontro registro</h4>
<?php endif; ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
	<script src="assets/js/dataTable/jquery.dataTables.min.js"></script>
     <script>
         $(document).ready(function () {
             $('#tSortable22').dataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": true });
	
         });
		 
	
    </script>
    
<?php
$this->view('includes/footer')
?>
 