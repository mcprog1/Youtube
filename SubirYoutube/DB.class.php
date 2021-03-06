<?php
class DB {
    // Database configuration
    private $dbHost     = 'localhost';
    private $dbUsername = 'root';
    private $dbPassword = '';
    private $dbName     = 'youtube';
    private $tblName    = 'videos';
    
    function __construct(){
        // Connect database
        if(!isset($this->db)){
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
    
    function getRow($id = ''){
        $con = !empty($id)?" WHERE id = $id ":" ORDER BY id DESC LIMIT 1 ";
        $sql = "SELECT * FROM $this->tblName $con";
        $query = $this->db->query($sql);
        $result = $query->fetch_assoc();
        if($result){
            return $result;
        }else{
            return false;
        }
    }
    
    function insert($data){
        if(!empty($data) && is_array($data)){
            $columns = '';
            $values  = '';
            $i = 0;
            foreach($data as $key=>$val){
                $pre = ($i > 0)?', ':'';
                $columns .= $pre.$key;
                $values  .= $pre."'".$this->db->real_escape_string($val)."'";
                $i++;
            }
            $query = "INSERT INTO ".$this->tblName." (".$columns.") VALUES (".$values.")";
            $insert = $this->db->query($query);
            return $insert?$this->db->insert_id:false;
        }
    }
    
    function update($id, $youtube_video_id){
        $sql = "UPDATE  $this->tblName SET youtube_video_id = '".$youtube_video_id."' WHERE id = ".$id;
        $update = $this->db->query($sql);
        return $update?true:false;
    }
}