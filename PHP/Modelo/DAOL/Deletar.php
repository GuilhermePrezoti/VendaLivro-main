<?php 
    namespace PHP\Modelo\DAOL;

    require_once('Conexao.php');

    use PHP\Modelo\DAOL\Conexao;

    class Deletar{
        public function deletar(Conexao $conexao, string $nomeDaTabela, int  $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "delete from $nomeDaTabela where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);
            }catch(Except $erro){
                echo $erro;
            }
        }

        public function deletarTudo(Conexao $conexao, string $nomeDaTabela){
            try{
                $conn = $conexao->conectar();
                $sql = "truncate table $nomeDaTabela";
                $result = mysqli_query($conn, $sql);

                if($result){
                    echo "OK";
                    return;
                }
                echo "NOK";
            }catch(Except $erro){
                echo $erro;
            }
            
        }
    }



?>