<?php
    class SalaModel {
        private $arquivoJson;
        private $salas = [];

        public function __construct() {
            $sala1 = new SalaEntity('Sala 403', StatusSala::DISPONIVEL, false, true, true, 5);
            $sala2 = new SalaEntity('Sala 104', StatusSala::RESERVADO, true, false, true, 7);
            $sala3 = new SalaEntity('Auditorio', StatusSala::DISPONIVEL, true, true, true, 15);

            $this->salas = array($sala1, $sala2, $sala3);
        }

        public function pesquisarSalas() {
            return $this->salas;
        }

        public function cadastrarSala($dadosForm) {
            array_push($this->array, new SalaEntity($dadosForm[0], $dadosForm[1], $dadosForm[2], $dadosForm[3], $dadosForm[4], $dadosForm[5]));
        }

        public function recuperarSalaPorId($id) {
            foreach($this->salas as $sala) {
                if ($sala->__get("id") == $id) {
                    return $sala;
                }
            }
        }
    }
?>