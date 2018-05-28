<?php
    class ControllerBase {
        public function model($model) {
            require_once '../app/models/' . $model . '.php';
            return new $model();
        }

        public function view($view, $dados = []) {
            if (file_exists('../app/views/' . $view . 'View.php')) {
                require_once '../app/views/cabecalho.php';
                require_once '../app/views/' . $view . 'View.php';
                require_once '../app/views/rodape.php';
            } else {
                // Caso não encontre a view, informar ERRO! Geralmente, o ERROR 404!
                echo 'ERRO: View não encontrada!';
            }
        }
    }
?>