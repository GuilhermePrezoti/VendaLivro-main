<?php

    namespace PHP\Modelo\DAO;

    class Conexao{

        public function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root', '', 'Livraria');
                if($conn){
                    echo "Conectado com sucesso!";
                    return $conn;
                }
                echo "<br> Não entrou!";
            }
            catch(Exception $erro)
            {
                echo $erro;
            }
        }//fim do conectar

    }//fim da classe
?>