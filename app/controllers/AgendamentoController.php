<?php
    class Agendamento extends ControllerBase {
        public function __construct() {
            
        }

        /*
         * Ao ser acionado via requisição GET, retorna os agendamentos já realizados
         */
        public function get(...$params) {
            require_once '../app/models/entity/SalaEntity.php';
            require_once '../app/models/entity/AgendamentoEntity.php';
            require_once '../app/helpers/Constantes.php';

            $model = $this->model('AgendamentoModel');
            $agendamentos = $model->pesquisarAgendamentos();

            $dados = [
                'titulo' => 'AGENDAMENTO DE SALA',
                'agendamentos' => $agendamentos
            ];

            $this->view('Agendamento', json_encode($dados));
        }

        /* 
         * Ao ser acionado, iniciará o processo de agendamento
         */
        public function post(...$params) {
            require_once APPROOT . '/models/entity/SalaEntity.php';
            require_once APPROOT . '/models/entity/ColaboradorEntity.php';
            require_once APPROOT . '/helpers/Constantes.php';

            $sala1 = new SalaEntity('NomeDaSala1', StatusSala::RESERVADO, false, true, true, 5);
            $colaborador1 = new ColaboradorEntity('Júnior', 'junior@teknisa.com', '11 1111-4444');

            $model = $this->model('AgendamentoModel');
            $agendamentoRealizado = $model->realizarAgendamento($sala1, $colaborador1);

            $dados = [
                'titulo' => 'PESQUISAR SALA',
                'resultado' => $agendamentoRealizado
            ];

            $this->view('AgendamentoPesquisar', json_encode($dados));
        }
}