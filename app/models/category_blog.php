
<?php
    class category_blog extends DModel{
        public function __construct()
        {
            parent::__construct();
        }
        public function category_blog($table){
            $sql    = "SELECT * FROM $table ORDER BY id_category_blog DESC ";
            return $this->db->select($sql);
            
        }
        public function category_blog_home($table){
            $sql    = "SELECT * FROM $table ORDER BY id_category_blog DESC ";
            return $this->db->select($sql);
            
        }
        public function category_blog_home_byid($table,$table_blog,$id){
            $sql    = "SELECT * FROM $table,$table_blog where $table.id_category_blog=$table_blog.id_category_blog 
            AND $table_blog.id_category_blog='$id' ORDER BY $table_blog.id_category_blog DESC";
            return $this->db->select($sql);
        
    }
        public function blog_home_all($table_blog){
            $sql    = "SELECT * FROM $table_blog ORDER BY id_blog DESC ";
            return $this->db->select($sql);
            
        }   
    }


?>