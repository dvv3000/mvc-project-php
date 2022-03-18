<?php
    echo("Product model loaded <br/>");


    class ProductModel extends BaseModel {
        const TABLE = 'products';

        public function getAllProduct($select=['*'], $limit=50) {
            
            return $this->getAll(self::TABLE, $select, $limit);
        }

        public function getProduct($id) {
            return $this->get(self::TABLE, $id);
        }

        public function insertProduct($data){
            return $this->insert(self::TABLE, $data);
        }

        public function updateProduct($id, $data) {
            return $this->update(self::TABLE, $id, $data);
        }

        public function deleteProduct($id){
            return $this->delete(self::TABLE, $id);
        }
    }
?>