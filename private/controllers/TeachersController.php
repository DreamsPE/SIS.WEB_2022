<?php
class TeachersController extends Controller
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

        $teacher =  new Teacher();

        $data = $teacher->findAll();

        $crumbs[] = ['Principal', ''];
        $crumbs[] = ['Docentes', 'teachers'];

        $this->view('teachers\index', [
            'rows' => $data,
            'crumbs' => $crumbs
        ]);


	}

	public function create()
    {

//
        //if (!Auth::logged_in()) {
        //    $this->redirect('login');
        //}
        $teacher =  new Teacher();
        $data = $teacher->findAll();

        $errors =  array();
        $crumbs[] = ['Principal', ''];
        $crumbs[] = ['Docentes', 'teachers'];
        $crumbs[] = ['Nuevo', 'teachers/create'];

        //if (Auth::access('super_admin')) {
            $this->view('teachers\create', [
                'crumbs' => $crumbs,
                'errors' => $errors,
                'rows' => $data
            ]);
        //} else {
        //    $this->view('access-denied');
        //}
    }

    public function store()
    {
        //if (!Auth::logged_in()) {
        //    $this->redirect('login');
        //}

        $errors = array();
        if (count($_POST) > 0 /*&& Auth::access('super_admin')*/) {
            $teacher =  new Teacher();

            if ($teacher->validate($_POST)) {
                $teacher->insert($_POST);
                
                $this->redirect('teachers');
            } else {
                $errors = $teacher->errors;
            }
        }

		$data = $teacher->findAll();

        $crumbs[] = ['Principal', ''];
        $crumbs[] = ['Docente', 'teachers'];
        $crumbs[] = ['Nuevo', 'teachers/create'];

        $this->view('teachers\create', [
            'crumbs' => $crumbs,
            'errors' => $errors,
            'rows' => $data
        ]);
    }

    public function destroy($id=null)
    {   
		// code...
		//if(!Auth::logged_in())
		//{
		//	$this->redirect('login');
		//}
       
		$teacher = new Teacher();
		$errors = array();

		if(count($_POST) > 0 /*&& Auth::access('super_admin')*/)
 		{
            $teacher->delete('Id_Profesor', $id);
 			$this->redirect('teachers');
  		}

 		$row = $teacher->where('Id_Profesor',$id);
 		$crumbs[] = ['Principal',''];
		$crumbs[] = ['Docentes','teachers'];
		$crumbs[] = ['Eliminar','teachers'];

		//if(Auth::access('super_admin')){
			$this->view('teachers\delete',[
				'row'=>$row,
	 			'crumbs'=>$crumbs,
			]);
		//}else{
		//	$this->view('access-denied');
		//}
	}

    public function edit($id = null)
    {
        //if (!Auth::logged_in()) {
        //    $this->redirect('login');
        //}

        $teacher = new Teacher();
        $data = $teacher->findById('Id_Profesor', $id);

        $errors =  array();
        $crumbs[] = ['Dashboard', ''];
        $crumbs[] = ['Docentes', 'teachers'];
        $crumbs[] = ['Modificar', 'teachers'];

        //if (Auth::access('super_admin')) {
            $this->view('teachers\edit', [
                'rows' => $data,
                'crumbs' => $crumbs,
                'errors' => $errors,
            ]);
        //} else {
        //    $this->view('access-denied');
        //}
    }

    public function update($id = null)
    {
        //if (!Auth::logged_in()) {
        //    $this->redirect('login');
        //}

        $errors = array();
        if (count($_POST) > 0 /*&& Auth::access('super_admin')*/) {
            $teacher = new Teacher();
            if ($teacher->validate($_POST)) {
                $teacher->update('Id_Profesor',$id, $_POST);

                //if (isset($_POST['persona_id']) && is_numeric($_POST['persona_id'])) {
                //    $propietario['inmueble_id'] =  $id;
                //    $propietario['persona_id'] =  $_POST['persona_id'];
                //
                //    if (!$inmueble->upd_propietario($propietario)) {
                //        $inmueble->set_propietario($propietario);
                //    }
                //}
                $this->redirect('teachers');
            } else {
                $errors = $teacher->errors;
            }
        }

        $this->redirect('teachers');
    }

}