<?php
class DModel {
    protected $db = array();
    
    public function __construct()
    {
        $conn ='mysql:dbname=website; host=localhost; charset=utf8';
        $user ='root';
        $pass ='';
        $this->db = new Database($conn,$user,$pass);
    }
}
?>