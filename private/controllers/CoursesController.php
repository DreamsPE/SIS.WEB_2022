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
		

		//if (!Auth::logged_in()) {
        //    $this->redirect('login');
        //}

        $course =  new Course();

        $data = $course->findAll();

        $crumbs[] = ['Principal', ''];
        $crumbs[] = ['Asignaturas', 'courses'];

        $this->view('courses\index', [
            'rows' => $data,
            'crumbs' => $crumbs
        ]);


	}

	public function create()
    {
        //if (!Auth::logged_in()) {
          //  $this->redirect('login');
        //}

        $course =  new Course;
        $data  = $course->findAll();

        $errors =  array();
        $crumbs[] = ['Principal', ''];
        $crumbs[] = ['Asignaturas', 'courses'];
        $crumbs[] = ['Nuevo', 'courses/create'];

        //if (Auth::access('super_admin')) {
            $this->view('courses\create', [
                'crumbs' => $crumbs,
                'errors' => $errors,
                'rows' => $data
            ]);
        //} else {
           // $this->view('access-denied');
        //}
    }

    public function store()
    {
        //if (!Auth::logged_in()) {
        //    $this->redirect('login');
        //}

        $errors = array();
        //if (count($_POST) > 0 && Auth::access('super_admin')) {
            $course = new Course();
            
            if ($course->validate($_POST)) {
                $_POST['date'] = date("Y-m-d H:i:s");
                
                $course->insert($_POST);
                $this->redirect('condominios');
            } else {
                $errors = $course->errors;
            }
        //}
        $crumbs[] = ['Principal', ''];
        $crumbs[] = ['Asignaturas', 'Courses'];
        $crumbs[] = ['Nuevo', 'courses/create'];

        $this->view('condominios\create', [
            'crumbs' => $crumbs,
            'errors' => $errors
        ]);
    }
}