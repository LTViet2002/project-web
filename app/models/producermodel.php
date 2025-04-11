
<?php
    class producermodel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }
        public function producer($table){
            $sql    = "SELECT * FROM $table ORDER BY id_producer DESC ";
            return $this->db->select($sql);
            
        }
        public function producerbyid($table,$cond){
            $sql    = "SELECT * FROM $table WHERE $cond";
            return $this->db->select($sql);
            
        }
        public function insertproducer($table_category,$data){
            return $this->db->insert($table_category,$data);
        }
        public function updateproducer($table_category,$data,$cond){
            return $this->db->update($table_category,$data,$cond);
        }
        public function deleteproducer($table_category,$cond){
            return $this->db->delete($table_category,$cond);
        }
    }


?>
