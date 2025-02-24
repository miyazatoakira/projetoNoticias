<?php
# Script de roteamento
class Rota {

    private $rotas = [
        '/projetoNoticias/' => 'Location: http://localhost/projetoNoticias/app/views/user/index.html',
        '/projetoNoticias/public/' => 'Location: http://localhost/projetoNoticias/app/views/user/index.html',
        '/projetoNoticias/docs/' =>'Location: http://localhost/projetoNoticias/docs/README.html',
        '/projetoNoticias/app/' => 'Location: http://localhost/projetoNoticias/app/views/user/index.html',
        '/projetoNoticias/app/views/' => 'Location: http://localhost/projetoNoticias/app/views/user/index.html'
    ];

    public function __construct(){

        foreach($this->rotas as $chave => $valor) {

            if($_SERVER['REQUEST_URI'] == $chave) {
                header($valor);
                exit;
            }

        }
    }
    
}
?>