<?php
    class CategoryController extends BaseController {
        private $CategoryModel;

        public function __construct(){
            $this->loadModel('CategoryModel');
            $this->CategoryModel = new CategoryModel();
        }


        public function index(){

            $categories = $this->CategoryModel->getAll();
            return $this->view(
                'frontend.categories.index',
                [
                    'categories' => $categories
                ]
            );
        }

        public function show(){
            echo __METHOD__;
        }
    }
?>