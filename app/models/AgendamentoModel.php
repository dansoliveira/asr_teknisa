<?php
    require_once 'entity/AgendamentoEntity.php';
    require_once 'entity/ColaboradorEntity.php';
    class AgendamentoModel {
        private $arquivoJson;

        public function __construct() {
            
        }

        public function pesquisarAgendamentos() {
            $sala1 = new SalaEntity('NomeDaSala1', StatusSala::RESERVADO, false, true, true, 5);
            $sala2 = new SalaEntity('NomeDaSala2', StatusSala::RESERVADO, true, false, true, 7);
            $sala3 = new SalaEntity('NomeDaSala3', StatusSala::RESERVADO, true, true, false, 10);

            $colaborador1 = new ColaboradorEntity('Júnior', 'junior@teknisa.com', '11 1111-4444');
            $colaborador2 = new ColaboradorEntity('Petterson', 'petterson@teknisa.com', '31 3333-4444');
            $colaborador3 = new ColaboradorEntity('Daniel', 'daniel@teknisa.com', '31 0000-0000');

            $agendamento1 = new AgendamentoEntity($sala1, $colaborador1);
            $agendamento2 = new AgendamentoEntity($sala2, $colaborador2);
            $agendamento3 = new AgendamentoEntity($sala3, $colaborador3);

            return array($agendamento1, $agendamento2, $agendamento3);
        }

        public function pesquisarSalasDisponiveis($filtro) {
            $sala1 = new SalaEntity('Sala 403', StatusSala::DISPONIVEL, false, true, true, 5);
            $sala2 = new SalaEntity('Sala 104', StatusSala::DISPONIVEL, true, false, true, 7);
            $sala3 = new SalaEntity('Auditorio', StatusSala::DISPONIVEL, true, true, true, 15);

            return array($sala1, $sala2, $sala3);
        }

        public function realizarAgendamento($sala, $colaborador) {
            $agendamento1 = new AgendamentoEntity($sala1, $colaborador1);

            return true;
        }
    }
?>