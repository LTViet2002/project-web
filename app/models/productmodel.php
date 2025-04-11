
<?php
    class productmodel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }
        public function productid($table,$table_category,$table_producer){
            $sql    = "SELECT * FROM $table,$table_category,$table_producer 
            where $table.id_category=$table_category.id_category 
            AND $table.id_producer=$table_producer.id_producer ORDER BY id_product DESC";
            return $this->db->select($sql);
        }
        // public function productidproducer($table,$table_producer){
        //     $sql    = "SELECT * FROM $table,$table_producer where $table.id_producer=$table_producer.id_producer";
        //     return $this->db->select($sql);
        // }
        
        public function product($table){
            $sql    = "SELECT * FROM $table ORDER BY id_product DESC ";
            return $this->db->select($sql);
        }

        public function productbyid($table,$cond){
            $sql    = "SELECT * FROM $table WHERE $cond";
            return $this->db->select($sql);
        }
        public function insertproduct($table_product,$data){
            return $this->db->insert($table_product,$data);
        }
        public function updateproduct($table_product,$data,$cond){
            return $this->db->update($table_product,$data,$cond);
        }
        public function deleteproduct($table_product,$cond){
            return $this->db->delete($table_product,$cond);
        }
    }


?>
