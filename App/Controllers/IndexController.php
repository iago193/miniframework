<?php

    namespace App\Controllers;

    use MF\Controller\Action;
    use App\Models\Info;

    //Models
    use App\Models\Produto;
    use MF\Model\Container;

    class IndexController extends Action {

        public function index() {

            $produto = Container::getModel('Produto');

            $produtos = $produto->getProdutos();

            $this->view->dados = $produtos;

            $this->render('index', 'layout1');
        }

        public function sobreNos() {

            $info = Container::getModel('Info');

            $infor = $info->getInfo();

            $this->view->dados = $infor;

            $this->render('sobreNos', 'layout2');
        }
    }
?>
