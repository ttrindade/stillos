<?php

    use models\Conexao;
    use entity\ClienteEntity;

    class Clientes extends Conexao {
        
         /* 
            Classe para a manipulação da camada model dos usuarios
        */
        
        private $conexao;
        
        function __construct() {
            /* Estabelecendo conexão com o banco de dados */
            $this->conexao = $this->conectar();
        }
        
        
        public function adicionar($Nome, $CPF, $Endereco, $CEP) {
            try {
               
                //Preparando a query SQL 
                $stmt = $this->conexao->prepare("INSERT INTO Clientes 
                            (Nome, CPF, Endereco, CEP) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("isssss", $Nome, $CPF, $Endereco, $CEP);
    
                return $stmt->execute();    
                
            } catch(Exception $e) {
                echo 'Ops...Erro ao cadastrar cliente!!!'.PHP_EOL.$e->getMessage();
            }
        }
        
            
        public function excluir($id) {
            try {
                //Preparando a query SQL
                $stmt = $this->conexao->prepare("DELETE FROM Clientes WHERE id = ?");
                $stmt->bind_param("i", $id);
                
                return $stmt->execute();
                
            } catch(Exception $e) {
                echo 'Ops...Erro ao excluir cliente!!!'.PHP_EOL.$e->getMessage();
            }
        }
        
        
        public function consultar() {
            try{
                //Preparando a query SQL
                $query = "SELECT * FROM Clientes " ;
                
                $Clientes = array(); //Armazena os objetos eventos
                
                if ($result = $this->conexao->query($query)) {
                    while ($row = $result->fetch_row()) { //Percorrendo os resultados
                        array_push($Clientes, new ClienteEntity(
                            $row[0], //id
                            $row[1], //Nome
                            $row[2], //CPF
                            $row[3], //Endereco
                            $row[4] //CEP
                        ));
                    }
                    
                    $result->close();
                }
                
                return $Eventos;
                
            } catch(Exception $e) {
                echo 'Ops...Erro ao consultar cliente!!!'.PHP_EOL.$e->getMessage();
            }
        }
    }

?>
