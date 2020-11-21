<?php
    class Database{
        // DB Params
        private $host = '';
        private $db_name = 'myblog';
        private $username = 'api';
        private $password = 'rest';
        private $conn;

        // Db connect
        public function connect(){
            $this->conn = null;

            try{
                $this->conn = new PDO('msql:host='. $this->host .';dbname ='.$this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'connection Error: '. $e->getMessage();
            }

            return $this->conn;
        }
    }

?>