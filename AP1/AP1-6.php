<?php
class Database
{
    private const SERVER = "mariadb-server";
    private const USERNAME = "root";
    private const PASSWORD = "root";
    private const DB = "AP1";

    private mysqli $conect;

    /**
     *  Constructor para realizar la instancia con la BBDD
     *  y conectarla para poder empezar a trabajar
     */

    public function __construct()
    {
        //conexion a bbdd
        $this->conect = new mysqli(self::SERVER, self::USERNAME, self::PASSWORD, self::DB);
        //verificamos errores
        if($this->conect->connect_error) {
            //si falla detenemos el script y mostramos el aviso
            die("conexión fallida: " . $this->conect->connect_errno . " --> " . $this->conect->connect_error );
            /**
             * Hay que asegurar que la conexión siempre finaliza.
             */
        }
    }

    public function __destruct()
    {
        //Hemos de asegurarnos que la conexión no se queda nunca abierta consumiendo recursos.
        $this->closeConection();
    }


    /**
     * Función que se encarga de cerrar la conexión con la BBDD, evitando el consumo de recursos.
     * @return void
     */
    public function closeConection():void
    {
        $this->conect->close();
    }

    /** getter de la conexión
     * @return mysqli
    */
    public function getConect(): mysqli
    {
        return $this->conect;
    }

    // metodo para realizar una busqueda a partir de una sentencia
    private function query(string $sql=null):bool|mysqli_result|null
    {
        if(is_null($sql)) {
            //Devolvemos un valor nulo para indicar que no no se ha recibido parámetro de busqueda
            return null;
        }else {
            return $this->conect->query($sql);
        }
    }

    /**
     * A partir de una sentencia nos devuelve todos los valores obtenidos.
     * @param string|null $sql
     * @return mysqli_result|bool
     */

    public function select(string $sql=null):mysqli_result|bool|array
    {
        $result= $this->query($sql);
        if(is_null($result)){
            die("No se ha recibido la sentencia correctamente<br>");
        }elseif(!$result){ //En este caso detecta si la consulta falló (por ejemplo, error de sintaxis en el SQL o la tabla no existe)
            die("Se ha producido un fallo realizando la busqueda<br>");
        }else{
            if($result->num_rows<= 0){
                echo "0 resultados obtenidos";
                $this->closeConection();
                return false;
            }else{
                //Si tiene filas → devuelve un array con todos los resultados (fetch_all).
                // MYSQLI_ASSOC → devuelve un array asociativo, es decir, con los nombres de las columnas como claves.
                // Es una constante predefinida
                return $result->fetch_all(MYSQLI_ASSOC);
            }
        }
    }

    public function insert
}


