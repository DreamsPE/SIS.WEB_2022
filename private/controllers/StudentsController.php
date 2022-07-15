<?php
class StudentsController extends Controller
{
    
	public function index()
	{
		// code...
		//if(!Auth::logged_in())
		//{
			//$this->redirect('login');
		//}
		
		// code...
		$this->view('students\index');
	}

	public function create()
    {
    
        $this->view('students\create');

	}
}