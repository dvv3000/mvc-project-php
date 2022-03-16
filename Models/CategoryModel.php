<?php
    class CategoryModel extends BaseModel{
        const TABLE = 'categories';

        public function getAll($select=['*'], $limit=50){
            return $this->all(self::TABLE, $select, $limit);
        }
    }
?>