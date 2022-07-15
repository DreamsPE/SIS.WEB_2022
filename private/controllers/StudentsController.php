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
		//$this->view('courses\index');

		//if (!Auth::logged_in()) {
        //    $this->redirect('login');
        //}

        $course =  new Student();

        $data = $course->findAll();

        //$crumbs[] = ['Dashboard', ''];
        //$crumbs[] = ['Condominio', 'condominios'];

        $this->view('students\index', [
            'rows' => $data//,
            //'crumbs' => $crumbs
        ]);


	}

	public function create()
    {
    
        $this->view('students\create');

	}
}