<?php
class pedidoController extends controller {
    
    public function __construct() {
        parent::__construct();
        $usuario = new Usuario();
        if (!$usuario->isLogged()){
            header("Location: ".BASE_URL."/login");
        }
    }
    
    public function index() {
        $dados = array(
            'pedidos' => array()
        );
        
        $pedido = new Pedido();
        $dados['pedidos'] = $pedido->getPedidos();
        $this->loadTemplate('pedido', $dados);
    }
    
    public function add() {
        $dados = array(
            'pessoas' => array(),
            'status_pedido' => array()
        );
        $pessoa = new Pessoa();
        $status = new Status_Pedido();
        
        if (isset($_POST['id_pessoa']) && !empty($_POST['id_pessoa'])) {
            $pedido = new Pedido();
            $pedido->setId_pessoa($_POST['id_pessoa']);
            $pedido->setId_status_pedido($_POST['id_status_pedido']);
            
            if (isset($_POST['observacao']) && !empty($_POST['observacao'])) {
                $pedido->setObservacao($_POST['observacao']);
            }
            
            $id_pedido = $pedido->add();
            header("Location: ".BASE_URL."/pedido/edit/".$id_pedido);
            
        }
        
        $dados['pessoas'] = $pessoa->getPessoas();
        $dados['status_pedido'] = $status->getStatus_pedido();
        
        $this->loadTemplate('pedidoAdd',$dados);
    }
    
    public function edit($id_pedido) {
        $dados = array(
            'info' => '',
            'pessoas' => array(),
            'status_pedido' => array(),
            'pedido' => array(),
            'pizza_pedido' => array()
        );
        $pessoa = new Pessoa();
        $status = new Status_Pedido();
        $pedido = new Pedido();
        $pp = new Pizza_Pedido;
        
        if (isset($_POST['id_pessoa']) && !empty($_POST['id_pessoa'])) {
            $pedido->setId_pessoa($_POST['id_pessoa']);
            $pedido->setId_status_pedido($_POST['id_status_pedido']);
            if (isset($_POST['observacao']) && !empty($_POST['observacao'])) {
                $pedido->setObservacao($_POST['observacao']);
            }
            $pedido->setId_pedido($id_pedido);
            $pedido->update();
            $dados['info'] = "Pedido editado com sucesso!";
        }
        
        if (isset($_POST['id_pizza']) && !empty($_POST['id_pizza'])) {
            $pp->setId_pedido($id_pedido);
            $pp->setId_pizza($_POST['id_pizza']);
            $pp->setQuantidade($_POST['quantidade']);
            $pp->setId_massa($_POST['id_massa']);
            $pp->add();
        }
        
        $dados['pessoas'] = $pessoa->getPessoas();
        $dados['status_pedido'] = $status->getStatus_pedido();
        $dados['pedido'] = $pedido->getPedido($id_pedido);
        $dados['pizza_pedido'] = $pp->getPizzaPedidoIdPedido($id_pedido);
        $this->loadTemplate('pedidoEdit',$dados);
    }
    
    public function remove($id_pedido) {
        if (isset($id_pedido) && !empty($id_pedido)) {
            $pedido = new Pedido();
            $pizza_pedido = new Pizza_Pedido();

            if (count($pizza_pedido->getPizzaPedidoIdPedido($id_pedido)) === 0) {
                $pedido->remove($id_pedido);
            }
            
        }
        
        header("Location: ".BASE_URL."/pedido");
    }
    
}
?>