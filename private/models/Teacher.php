<?php
class Teacher extends Model{

    protected $table = 'profesor';
    protected $allowedColumns = [
        'Id_Profesor',
        'NombreProfesor',
        'ApellidoProfesor',
        'TelefonoProfesor',
        'DireccionProfesor',
    ];

    protected $beforeInsert = [
       
    ];

    protected $afterSelect = [
      
    ];

    public function validate($DATA)
    {
        $this->errors = array();

        //verificamos el nombre
        //if(empty($DATA['Nombre']) || !preg_match('/^[a-zA-Z0-9 ]+$/', $DATA['Nombre']))
        //{
        //    $this->errors['Nombre'] = "Only letters & spaces allowed in Nombre";
        //}


        if(count($this->errors) == 0)
        {
            return true;
        }

        return false;
    }
    
}
?>