<?php 

/**
* 
*/
  
class DataBase
{
	private $db_host;
	private $db_name;
	private $db_user;
    private $db_pass;
	private $db;
    /**
     * DataBase constructor.
     * @param $bd_host
     * @param $db_name
     * @param $db_pass
     * @param $db_user
     */
    public function __construct()
    {
        $this->db_host = "localhost";
        $this->db_name ="sngestionvote";
        $this->db_user = "root";
        $this->db_pass = "";
    }
    public function getDB(){
        if ($this->db == null){
            $this->db = new \PDO("mysql:dbname=".$this->db_name.";host=".$this->db_host, $this->db_user, $this->db_pass);
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
            return $this->db;
    }
}

 ?>