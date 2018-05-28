<?php
    class SalaEntity implements JsonSerializable{
        private $id;
        private $nome;
        private $status;
        private $temComputador;
        private $temProjetor;
        private $temVideoConferencia;
        private $qtdCadeiras;

        public function __construct($nome, $status, $temComputador, $temProjetor, $temVideoConferencia, $qtdCadeiras) {
            $this->id = rand(0, 100) * 4 / 100;
            $this->nome = $nome;
            $this->status = $status;
            $this->temComputador = $temComputador;
            $this->temProjetor = $temProjetor;
            $this->temVideoConferencia = $temVideoConferencia;
            $this->qtdCadeiras = $qtdCadeiras;
        }

        public function __get($property) {
            if (property_exists($this, $property)) {
                return $this->$property;
            }
        }

        public function __set($property, $value) {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }
        }

        public function jsonSerialize() {
            return ['nome' => $this->nome,
            'status' => $this->status,
            'temComputador' => $this->temComputador,
            'temProjetor' => $this->temProjetor,
            'temVideoConferencia' => $this->temVideoConferencia,
            'qtdCadeiras' => $this->qtdCadeiras];
        }

        public static function criarViaJson($jsonDecoded) {
            return new self($jsonDecoded['nome'], 
            $jsonDecoded['status'], 
            $jsonDecoded['temComputador'], 
            $jsonDecoded['temProjetor'], 
            $jsonDecoded['temVideoConferencia'],
            $jsonDecoded['qtdCadeiras']);
        }
}
?>