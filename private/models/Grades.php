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
        $persona  = new Persona();
        foreach ($data as $key => $row) {
                        
            $query = "select * from personas pe inner join propietarios pr on pe.id = pr.persona_id
            where pr.inmueble_id = :inmueble_id";
            $result=$persona->query($query,['inmueble_id' => $row->id]);
            $data[$key]->lucas = is_array($result) ? $result[0] : false;
        }
        return $data;
    }
}
?>