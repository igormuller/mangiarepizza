<?php

class Pizza_Pedido extends model {
    
    private $id_pizza, $id_pedido, $quantidade, $id_massa;
    
    
    public function add() {
        $sql = $this->db->prepare(""
                . "INSERT INTO pizza_pedido SET "
                    . "id_pizza = :id_pizza, "
                    . "id_pedido = :id_pedido, "
                    . "quantidade = :quantidade, "
                    . "id_massa = :id_massa");
        $sql->bindValue(":id_pizza", $this->getId_pizza());
        $sql->bindValue(":id_pedido", $this->getId_pedido());
        $sql->bindValue(":quantidade", $this->getQuantidade());
        $sql->bindValue(":id_massa", $this->getId_massa());
        $sql->execute();
    }
    
    public function update() {
        $sql = $this->db->prepare(""
                . "UPDATE pizza_pedido SET "
                    . "quantidade = :quantidade "
                . "WHERE "
                    . "id_pedido = :id_pedido AND "
                    . "id_pizza = :id_pizza AND "
                    . "id_massa = :id_massa");
        $sql->bindValue(":id_pedido", $this->getId_pedido());
        $sql->bindValue(":id_pizza", $this->getId_pizza());
        $sql->bindValue(":id_massa", $this->getId_massa());
        $sql->bindValue(":quantidade", $this->getQuantidade());
        $sql->execute();
    }
    
    public function remove($id_pedido, $id_pizza, $id_massa) {
        $sql = $this->db->prepare("DELETE FROM pizza_pedido "
                . "WHERE "
                    . "id_pedido = :id_pedido AND "
                    . "id_pizza = :id_pizza AND "
                    . "id_massa = :id_massa");
        $sql->bindValue(":id_pedido", $id_pedido);
        $sql->bindValue(":id_pizza", $id_pizza);
        $sql->bindValue(":id_massa", $id_massa);
        $sql->execute();
    }
    
    public function getPizzaPedidoIdPedidoIdPizzaIdMassa($id_pedido, $id_pizza, $id_massa) {
        $sql = $this->db->prepare("SELECT "
                    . "* "
                . "FROM "
                    . "pizza_pedido "
                . "WHERE "
                    . "id_pedido = :id_pedido AND "
                    . "id_pizza = :id_pedido AND "
                    . "id_massa = :id_massa");
        $sql->bindValue(":id_pedido", $id_pedido);
        $sql->bindValue(":id_pizza", $id_pizza);
        $sql->bindValue(":id_massa", $id_massa);
        $sql->execute();
        
        $array = array();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }

    public function getPizzaPedidoIdPedido($id_pedido) {
        $sql = $this->db->prepare(""
                . "SELECT "
                    . "pp.*, "
                    . "pizza.nome AS pizza, "
                    . "massa.nome AS massa "
                . "FROM "
                    . "pizza_pedido pp "
                . "LEFT JOIN "
                    . "pizza USING (id_pizza) "
                . "LEFT JOIN "
                    . "massa USING (id_massa) "
                . "WHERE "
                    . "pp.id_pedido = :id_pedido");
        $sql->bindValue(":id_pedido", $id_pedido);
        $sql->execute();
        
        $array = array();
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        return $array;
    }
    
    /*
     * Getters and Setters
     */
    function getId_pizza() {
        return $this->id_pizza;
    }

    function getId_pedido() {
        return $this->id_pedido;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getId_massa() {
        return $this->id_massa;
    }

    function setId_pizza($id_pizza) {
        $this->id_pizza = $id_pizza;
    }

    function setId_pedido($id_pedido) {
        $this->id_pedido = $id_pedido;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setId_massa($id_massa) {
        $this->id_massa = $id_massa;
    }


}