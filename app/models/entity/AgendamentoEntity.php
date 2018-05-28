<?php
    class AgendamentoEntity implements JsonSerializable{
        private $sala;
        private $colaborador;

        public function __construct($sala, $colaborador) {
            $this->sala = $sala;
            $this->colaborador = $colaborador;
        }

        public function getSala() {
            return $this->sala;
        }

        public function setSala($sala) {
            $this->sala = $sala;
        }

        public function getColaborador() {
            return $this->colaborador;
        }

        public function setColaborador($colaborador) {
            $this->colaborador = $colaborador;
        }

        public function jsonSerialize() {
            return ['sala' => $this->sala,
            'colaborador' => $this->colaborador];
        }

        public static function criarViaJson($jsonDecoded) {
            return new self($jsonDecoded['sala'], 
            $jsonDecoded['colaborador']);
        }
    }
?>