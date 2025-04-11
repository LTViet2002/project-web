
<?php
    class categorymodel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }
        public function category($table){
            $sql    = "SELECT * FROM $table ORDER BY id_category DESC ";
            return $this->db->select($sql);
            
        }


        public function category_home($table){
            $sql    = "SELECT * FROM $table ORDER BY id_category DESC ";
            return $this->db->select($sql);
            
        }
        
        
        public function category_home_byid($table,$table_product,$id){
                $sql    = "SELECT * FROM $table,$table_product where $table.id_category=$table_product.id_category 
                AND $table_product.id_category='$id' ORDER BY $table_product.id_category DESC";
                return $this->db->select($sql);
            
        }
        public function product_home($table_product){
            $sql    = "SELECT * FROM $table_product ORDER BY id_product DESC";
            return $this->db->select($sql);
            
        }


        public function categorybyid($table,$cond){
            $sql    = "SELECT * FROM $table WHERE $cond";
            return $this->db->select($sql);
            
        }
        public function insertcategory($table_category,$data){
            return $this->db->insert($table_category,$data);
        }
        public function updatecategory($table_category,$data,$cond){
            return $this->db->update($table_category,$data,$cond);
        }
        public function deletecategory($table_category,$cond){
            return $this->db->delete($table_category,$cond);
        }
    }


?>
