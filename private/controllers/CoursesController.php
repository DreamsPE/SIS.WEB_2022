<?php
class CoursesController extends Controller
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

        $course =  new Course();

        $data = $course->findAll();

        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Condominio', 'condominios'];

        $this->view('courses\index', [
            'rows' => $data,
            'crumbs' => $crumbs
        ]);


	}

	public function create()
    {
    
        $this->view('courses\create');

	}
}