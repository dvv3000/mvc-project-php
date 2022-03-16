<?php
    echo("Product model loaded <br/>");


    class ProductModel extends BaseModel {
        const TABLE = 'products';

        public function getAll($select=['*'], $limit=50) {
            
            return $this->all(self::TABLE, $select, $limit);
        }

        public function findById($id) {
            return __METHOD__;
        }

        public function delete(){
            return __METHOD__;
        }
    }
?>