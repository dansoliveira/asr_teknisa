<?php
    class Colaborador extends ControllerBase {
        public function __construct() {
            
        }

        public function get(...$params) {
            require_once '../app/models/entity/ColaboradorEntity.php';
            //require_once '../app/helpers/Constantes.php';

            //$model = $this->model('ColaboradorModel');
            //$salas = $model->agendar();

            $dados = [
                'titulo' => 'CADASTRAR COLABORADOR'
            ];

            $this->view('Colaborador', json_encode($dados));
        }

        public function post(...$params) {
            require_once '../app/models/entity/ColaboradorEntity.php';
            //require_once '../app/helpers/Constantes.php';

            //$model = $this->model('ColaboradorModel');
            //$salas = $model->agendar();

            $dados = [
                'titulo' => 'CADASTRAR COLABORADOR'
            ];

            $this->view('Colaborador', json_encode($dados));
        }
}