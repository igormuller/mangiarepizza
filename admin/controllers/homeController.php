<?php
class homeController extends controller {
    
    public function __construct() {
        parent::__construct();
        $usuario = new Usuario();
        if (!$usuario->isLogged()){
            header("Location: ".BASE_URL."/login");
        }
    }
    
    public function index() {
        $dados = array(
            'pizzas' => 0,
            'pessoas' => 0
        );
        
        $pizzas = new Pizza();
        $dados['pizzas'] = count($pizzas->getPizzas());
        $pessoa = new Pessoa();
        $dados['pessoas'] = count($pessoa->getPessoas());
        $this->loadTemplate('home', $dados);
    }
    
}
?>