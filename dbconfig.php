<?php
    class Database {
        private $pdo;

        public function __construct($host, $dbname, $username, $password) {
            $con = new PDO('mysql:host='.$host.'; dbname='.$dbname.';', $username, $password);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public function queyr($show) {
            $stmy = $this->pdo->prepare($show);
            $stmt->execute();

            if ($show) {
                $data = $stmt->fetchAll();
                return $data;
            }
        }
             
        
    }


?>