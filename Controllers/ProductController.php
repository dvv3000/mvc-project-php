<?php

    class ProductController extends BaseController{
        private $productModel;

        public function __construct(){
            $this->loadModel('ProductModel');
            $this->productModel = new ProductModel;
        }


        public function getAllProduct(){

            $select = ['id', 'name', 'price', 'category_id'];
            $products = $this->productModel->getAllProduct($select, $limit = 5);

            return $this->view(
                'frontend.products.index',
                [
                    'products' => $products,
                ]
            );
        }

        public function getProduct(){
            $id = 3;
            $product = $this->productModel->getProduct($id);

            return $this->view(
                'frontend.products.show',
                [
                    'product' => $product
                ]
            );
        }

        public function insertProduct(){
            $data = [
                'id' => 7,
                'name' => "'Iphone 14'",
                'price' => 34000000,
                'category_id' => 0
            ];

            $result = $this->productModel->insertProduct($data);
        }

        public function updateProduct(){
            $data = [
                'id' => 7,
                'name' => "'Iphone 14'",
                'price' => 34000000,
                'category_id' => 0
            ];
            $id = 3;
            $result = $this->productModel->updateProduct($id, $data);
        }

        public function deleteProduct($id){
            $result = $this->productModel->deleteProduct($id);
        }
    }
?>