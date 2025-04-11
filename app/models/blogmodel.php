
<?php
    class blogmodel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }
        public function blog($table,$table_category){
            $sql    = "SELECT * FROM $table,$table_category where $table.id_category_blog=$table_category.id_category_blog ORDER BY id_blog DESC";
            return $this->db->select($sql);
        }
        public function blogs($table){
            $sql    = "SELECT * FROM $table ORDER BY id_blog DESC LIMIT 2";
            return $this->db->select($sql);
            
        }
        
        public function blogbyid($table,$cond){
            $sql    = "SELECT * FROM $table WHERE $cond ";
            return $this->db->select($sql);
            
        }
        public function insertblog($table_blog,$data){
            return $this->db->insert($table_blog,$data);
        }
        public function updateblog($table_blog,$data,$cond){
            return $this->db->update($table_blog,$data,$cond);
        }
        public function deleteblog($table_blog,$cond){
            return $this->db->delete($table_blog,$cond);
        }
        public function category_blog($table){
            $sql    = "SELECT * FROM $table ORDER BY id_category_blog DESC ";
            return $this->db->select($sql);
            
        }
        public function blog_1($table_blog){
            $sql    = "SELECT * FROM $table_blog ORDER BY id_blog DESC LIMIT 6";
            return $this->db->select($sql);
        }
    }


?>