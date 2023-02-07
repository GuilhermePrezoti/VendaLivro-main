<?php 
    namespace PHP\Modelo\DAOL;

    class Conexao{
        public function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','' , 'Livraria');
                if($conn){//testa se conectou
                    return $conn;
                }
                else{
                    echo "<br> Erro";
                }
                
            }catch(Except $erro){
                echo $erro;
            }
        }
    }

?>