<?php
    class ColaboradorEntity implements JsonSerializable{
        private $nome = '';
        private $email = '';
        private $telefone = '';

        public function __construct($nome, $email, $telefone) {
            $this->nome = $nome;
            $this->email = $email;
            $this->telefone = $telefone;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }
        
        public function getTelefone($telefone) {
            return $this->telefone;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
        public function jsonSerialize() {
            return ['nome' => $this->nome,
            'email' => $this->email,
            'telefone' => $this->telefone];
        }

        public static function criarViaJson($jsonDecoded) {
            return new self($jsonDecoded['nome'], 
            $jsonDecoded['email'], 
            $jsonDecoded['telefone']);
        }
}
?>