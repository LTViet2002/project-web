<?php
    class homemodel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }
        public function detail_blog_home($table_category_blog,$table_blog,$cond){
            $sql    = "SELECT * FROM $table_category_blog,$table_blog WHERE $cond ORDER BY $table_category_blog.id_category_blog DESC";
            return $this->db->select($sql);
        }
        public function detail_product_home($table_category,$table_product,$cond){
            $sql    = "SELECT * FROM $table_category,$table_product WHERE $cond ORDER BY $table_category.id_category DESC";
            return $this->db->select($sql);
        }
        public function product_1($table_product){
            $sql    = "SELECT * FROM $table_product ORDER BY id_product DESC LIMIT 6";
            return $this->db->select($sql);
        }
        
    }


?>