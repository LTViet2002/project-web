<?php
    class membermodel extends DModel{
        public function __construct()
        {
            parent::__construct();
        }
        public function insertmember($table_member,$data){
            return $this->db->insert($table_member,$data);
        }
        public function login($table_member,$username,$password){
            $sql    = "SELECT * FROM $table_member WHERE email_member=? AND password_member=?";
            return $this->db->affectedRows($sql,$username,$password);
            
        }
        public function getlogin($table_member,$username,$password){
            $sql    = "SELECT * FROM $table_member WHERE email_member=? AND password_member=?";
            return $this->db->selectUser($sql,$username,$password);
        }
        public function member($table_member){
            $sql    = "SELECT * FROM $table_member ORDER BY id_member DESC ";
            return $this->db->select($sql);
        }
        public function memberbyid($table_member,$cond){
            $sql    = "SELECT * FROM $table_member WHERE $cond";
            return $this->db->select($sql);
            
        }
        public function updatemember($table_member,$data,$cond){
            return $this->db->update($table_member,$data,$cond);
        }
    }


?>