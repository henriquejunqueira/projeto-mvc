<?php 

    class UsuarioDAO extends Model{
        
        public function list(){
            
            try{
                
                $conexao = $this->db;
            
                $sql = "SELECT * FROM usuarios";
                
                //$query = $conexao->prepare($sql);
                
                //$result = $query->execute();
                
                //$registro = $result->fetchAll(PDO::FETCH_ASSOC);
                
                $stmt = $conexao->query($sql);
               
                $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                $usuarios = [];
                if($registros){
                    
                    foreach ($registros as $registro){
                        $usuario = new Usuario();
                        $usuario->setNome($registro['nome']);
                        $usuario->setDataNascimento($registro['dataNascimento']);
                        $usuario->setTelefone($registro['telefone']);
                        $usuario->setEndereco($registro['endereco']);
                        $usuario->setCidade($registro['cidade']);
                        $usuario->setUf($registro['uf']);
                        
                        $usuarios[] = $usuario;
                    }
                }
                
                return $usuarios;
                
                
            }catch(PDOException $erro){
                echo "Falha na conexão: " . $erro->getMessage();
            }
            
        }
        
        public function create(){
            $conexao = $this->db;
            
            $sql = "INSERT INTO usuarios SET nome = $nome, dataNascimento = $dataNascimento, telefone = $telefone, endereco = $endereco, cidade = $cidade, uf = $uf";

            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            
            header("Location: index.php");
        }
        
        
    }
?>