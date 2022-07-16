<?php
class Course extends Model{

    protected $table = 'curso';
    protected $allowedColumns = [
        'Id_Curso',
        'Id_Grado',
        'nombreCurso',
        'Detalle',
    ];

    protected $beforeInsert = [
       
    ];

    protected $afterSelect = [
        'get_gradseccion',
    ];

    public function validate($DATA)
    {
        $this->errors = array();

        //verificamos el nombre
        //if(empty($DATA['nombreCurso']) || !preg_match('/^[a-zA-Z0-9 ]+$/', $DATA['nombreCurso']))
        //{
        //    $this->errors['nombreCurso'] = "Only letters & spaces allowed in nombreCurso";
        //}


        if(count($this->errors) == 0)
        {
            return true;
        }

        return false;
    }

    public function get_gradseccion($data)
    {
        $grades  = new Course();
        foreach ($data as $key => $row) {
                        
            $query = "select * from grado where Id_Grado = :Id_Grado";
            $result=$grades->query($query,['Id_Grado' => $row->Id_Grado]);
            $data[$key]->get_grades = is_array($result) ? $result[0] : false;
        }
        return $data;
    }
}
?>