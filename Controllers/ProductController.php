<?php

    class ProductController extends BaseController{
        private $productModel;

        public function __construct(){
            $this->loadModel('ProductModel');
            $this->productModel = new ProductModel;
        }


        public function index(){

            $select = ['id', 'name', 'price', 'category_id'];
            $products = $this->productModel->getAll($select, $limit = 5);

            return $this->view(
                'frontend.products.index',
                [
                    'products' => $products,
                ]
            );
        }

        public function show(){

            return $this->view(
                'frontend.products.show',
                
            );
        }
    }
?>