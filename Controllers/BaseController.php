<?php
    class BaseController{

        const VIEW_FOLDER_NAME = 'Views/';
        const MODEL_FOLDER_NAME = 'Models/';

        protected function view($viewPath, array $data = []){

            foreach($data as $key => $value){
                $$key = $value;
            }
            
            require_once (self::VIEW_FOLDER_NAME . str_replace('.', '/',$viewPath) . '.php');
        }

        protected function loadModel($modelPath){
            require_once (self::MODEL_FOLDER_NAME . str_replace('.', '/',$modelPath) . '.php');
        }
    }
?>