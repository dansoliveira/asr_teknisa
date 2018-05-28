<?php
    class Sala extends ControllerBase {
        public function __construct() {
            
        }

        /*
         * Ao ser acionado via requisição GET, retorna os agendamentos já realizados.
         */
        public function get(...$params) {
            require_once '../app/models/entity/SalaEntity.php';
            require_once '../app/helpers/Constantes.php';

            // echo 'SalaController::Params-> ';
            //  var_dump($params);
            //  echo '<br>';
            
            $model = $this->model('SalaModel');
            $salas = $model->pesquisarSalas();
    
            $dados = [
                'titulo' => 'SALAS',
                'salas' => $salas
            ];

            $this->view('Sala', json_encode($dados));
        }

        /*
         * Já que o PHP não permite o Overloading de métodos, optou-se por utilizar múltiplos
         * parâmetros, convertidos em um array de parâmetros.
         * Qtd. Params. | Ação
         * 0            | Incluir uma nova sala
         * 1            | Editar uma sala existente
         */
        public function post(...$params) {
            require_once '../app/models/entity/SalaEntity.php';
            require_once '../app/helpers/Constantes.php';

            var_dump($_POST);
            $nomeView;
            
            switch (count($params)) {
                case 0:
                    $nomeView = 'CadastrarSala';
                    $model = $this->model('SalaModel');
                    $salas = $model->cadastrarSala($params);
    
                    $dados = [
                        'titulo' => 'SALAS',
                        'salas' => $salas
                    ];
                    break;
                
                case 1:
                    $nomeView = 'EditarSala';
                    $model = $this->model('SalaModel');
                    $salas = $model->recuperarSalaPorId($params[0]);
    
                    $dados = [
                        'titulo' => 'SALAS',
                        'salas' => $salas
                    ];
                    break;
            }

            $this->view($nomeView, json_encode($dados));
        }

        public function delete(...$params) {
            require_once '../app/models/entity/SalaEntity.php';
            require_once '../app/helpers/Constantes.php';

            $model = $this->model('SalaModel');
            $salas = $model->pesquisarSalas();
    
            $dados = [
                'titulo' => 'SALAS',
                'salas' => $salas
            ];

            $this->view('DeletarSala');
        }
}