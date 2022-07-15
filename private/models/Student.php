<?php
class Student extends Model{

    protected $table = 'estudiante';
    protected $allowedColumns = [
        'Id_Estudiante',
        'Nombre',
        'Dni',
        'Sexo',
        'Correo',
    ];

    protected $beforeInsert = [
       
    ];

    protected $afterSelect = [
      
    ];

    public function validate($DATA)
    {
        $this->errors = array();

        //verificamos el nombre
        if(empty($DATA['Nombre']) || !preg_match('/^[a-zA-Z0-9 ]+$/', $DATA['Nombre']))
        {
            $this->errors['Nombre'] = "Only letters & spaces allowed in Nombre";
        }


        if(count($this->errors) == 0)
        {
            return true;
        }

        return false;
    }
    
}
?>