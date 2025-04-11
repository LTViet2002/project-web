
<?php
    class usermodel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }
        public function user($table){
            $sql    = "SELECT * FROM $table ORDER BY id_member DESC ";
            return $this->db->select($sql);
            
        }
        public function userbyid($table,$cond){
            $sql    = "SELECT * FROM $table WHERE $cond";
            return $this->db->select($sql);
            
        }
        
        public function deleteuser($table_user,$cond){
            return $this->db->delete($table_user,$cond);
        }
    }


?>
