<?php
    /*
     * Responsável por criar e carregar os controllers
     * Formato da URL - /controller/parametros
     */
    class AppBase {
        protected $controllerAtual = 'Agendamento';
        protected $metodoAtual = 'GET';
        protected $params = [];

        public function __construct() {
            $this->metodoAtual = $_SERVER['REQUEST_METHOD'];
            $url = $this->getURL();
            
            $this->recuperaControllerURL($url);
            
            require_once '../app/controllers/' . $this->controllerAtual . 'Controller.php';
            $this->controllerAtual = new $this->controllerAtual; // Forma genérica para instanciar o respectivo controller
            
            $this->recuperaParametrosURL($url);
            // Aciona o método (GET, POST, DELETE) do Controller responsável
            call_user_func_array([$this->controllerAtual, $this->metodoAtual], $this->params);
        }

        // Recebe a referência da variável URL, para então, realizar as operações em cima dela
        public function recuperaControllerURL(&$url) {
            if (file_exists('../app/controllers/' . ucwords($url[0]) . 'Controller.php')) {
                $this->controllerAtual = ucwords($url[0]);
                unset($url[0]);
            }
        }

        public function recuperaParametrosURL(&$url) {
            $this->params = $url ? array_values($url) : [];
        }

        /*
         * Recupera o conteúdo passado via param url?= e trata, 
         * separando em um array cada parte da string que estiver
         * separado por barra (/), removendo todos os caracteres
         * não permitidos numa URL.
         */
        public function getURL() {
            $isset = false;
            $url;

            switch($this->metodoAtual) {
                case "GET":
                    if (isset($_GET['url'])) {
                        $isset = true;
                        $url = rtrim($_GET['url'], '/');
                    }
                    break;
                
                case "DELETE":
                    parse_str(file_get_contents("php://input"),$deleteUrl);
                    if (isset($deleteUrl)) {
                        $isset = true;
                        $url = rtrim($deleteUrl, '/');
                    }
                    break;

                case "POST":
                    if (isset($_GET['url'])) {
                        $isset = true;
                        $url = rtrim($_GET['url'], '/');
                    }
                    break;
            }

            if ($isset) {
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);

                return $url;
            }
        }
    }
?>