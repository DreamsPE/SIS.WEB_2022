<?php
class Course extends Model{

    protected $table = 'curso';
    protected $allowedColumns = [
        'Id_Curso',
        'Id_Grado',
        'nombreCurso',
        'Detalle',
        'Area',
    ];

    protected $beforeInsert = [
       
    ];

    protected $afterSelect = [
      
    ];

    public function validate($DATA)
    {
        $this->errors = array();

        //verificamos el nombre
        if(empty($DATA['nombreCurso']) || !preg_match('/^[a-zA-Z0-9 ]+$/', $DATA['nombreCurso']))
        {
            $this->errors['nombreCurso'] = "Only letters & spaces allowed in nombreCurso";
        }


        if(count($this->errors) == 0)
        {
            return true;
        }

        return false;
    }
    
}
?>