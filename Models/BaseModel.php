<?php
    class BaseModel extends Database {
        protected $connect;

        public function __construct(){
            $this->connect = $this->connect();
        }

        public function all($tableName, $select, $limit){

            $columns = implode(', ', $select);

            $sql = "SELECT ${columns} FROM $tableName LIMIT ${limit}";
            $result = $this->_query($sql);
            $data = [];
            while($row = mysqli_fetch_assoc($result)) {
                array_push($data, $row);
            }
            return $data;
        }

        public function find($id){
            
        }

        # Them du lieu vao bang
        public function store(){

        }
        
        # Cap nhat du lieu vao bang
        public function update(){

        }

        # Xoa du lieu 
        public function delete(){

        }

        private function _query($sql){
            return mysqli_query($this->connect, $sql);
        }
    }
?>
