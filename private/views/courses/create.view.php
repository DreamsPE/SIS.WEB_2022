<?php
$this->view('includes/header')
?>          
            <script type="text/javascript" src="assets/js/validation/jquery.validate.min.js"></script>	
                <div class="col-sm-8 col-sm-offset-2">            
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        </div>


						<form action="branch.php" method="post" id="signupForm1" class="form-horizontal">
                        <div class="panel-body">
                            <div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Branch </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="branch" name="branch" value=""  />
								</div>
							</div>
							
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Password"> Address </label>
								<div class="col-sm-10">
	                            <textarea class="form-control" id="address" name="address"></textarea >
								</div>
							</div>
							
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Confirm"> Detail</label>
								<div class="col-sm-10">
									    <textarea class="form-control" name="detail" id="detail"></textarea >
								</div>
							</div>
						
						    <div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
								<input type="hidden" name="id" value="">
								<input type="hidden" name="action" value="">
								
								<button type="submit" name="save" class="btn btn-primary">Save </button>
								</div>
						    </div>
                        </div>
					    </form>
                    </div>
                </div>
<?php
$this->view('includes/footer')
?>
