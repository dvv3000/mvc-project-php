<h1>./Core/Database</h1>

<?php
    class Database{
        const HOST = 'localhost';
        const USERNAME = 'root';
        const PASSWORD = '';
        const DB_NAME = 'mvcproject';

        // private $connect;

        public function connect(){
            $connect = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DB_NAME);
            
            mysqli_set_charset($connect, 'utf8');
            
            if(!$connect){
                return false;
            }
            return $connect;
        }
    }
?>