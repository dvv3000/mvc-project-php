<?php
    class BaseModel extends Database {
        protected $connect;

        public function __construct(){
            $this->connect = $this->connect();
        }

        public function getAll($tableName, $select, $limit){

            $columns = implode(', ', $select);

            $sql = "SELECT ${columns} FROM $tableName LIMIT ${limit}";
            $result = $this->_query($sql);
            $data = [];
            while($row = mysqli_fetch_assoc($result)) {
                array_push($data, $row);
            }
            return $data;
        }

        public function get($tableName, $id){
            $sql = "SELECT * FROM ${tableName} WHERE id = ${id}";
            $result = $this->_query($sql);
            while($row = mysqli_fetch_assoc($result)){
                return $row;
            }
        }

        # Them du lieu vao bang
        public function insert($tableName, $data){
            $columns = implode(', ', array_keys($data));
            $row = implode(', ', array_values($data));
            $sql = "INSERT INTO ${tableName} (${columns}) VALUES ($row)";

            $result = $this->_query($sql);
            return $result;
        }
        
        # Cap nhat du lieu vao bang
        public function update($tableName, $id, $data){
            $set = '';
            foreach($data as $key => $value){
                $set = $set . "$key = $value,";
            }
            $set = substr($set, 0, -1);

            $sql = "UPDATE ${tableName} SET ${set} WHERE id = ${id}";
    
            $result = $this->_query($sql);
            return $result;
        }

        # Xoa du lieu 
        public function delete($tableName, $id){
            $sql = "DELETE FROM ${tableName} WHERE id = ${id}";

            $result = $this->_query($sql);
            return $result;
        }

        private function _query($sql){
            return mysqli_query($this->connect, $sql);
        }
    }
?>
