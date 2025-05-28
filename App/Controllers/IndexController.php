<?php

    namespace App\Controllers;

    class indexController {

        public function index() {
            $dados = ['Sofá', 'Cadeira', 'Cama'];
            $this->render('index', $dados);
        }

        public function sobreNos() {
            $dados = ['Notebook', 'Iphone', 'Tv'];
            $this->render('sobreNos', $dados);
        } 

        public function render($view, $dados) {
            require_once "../App/Views/index/".$view.".phtml";
        }
    }

?>