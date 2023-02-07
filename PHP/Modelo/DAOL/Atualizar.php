<?php 
    namespace PHP\Modelo\DAOL;

    require_once('Conexao.php');
    require_once('Consultar.php');
    require_once('Inserir.php');


    use PHP\Modelo\DAOL\Conexao;
    use PHP\Modelo\DAOL\Consultar;
    use PHP\Modelo\DAOL\Inserir;

    class Atualizar{
        
      public function update(Conexao $conexao, string $campo, string $novoDado, string $codigo, string $nomeDaTabela){
        try{
            $conn = $conexao->conectar();
            $sql = "update $nomeDaTabela set $campo = '$novoDado' where codigo = '$codigo'";
            $result = mysqli_query($conn,$sql);

            mysqli_close($conn);

            if($result){
                echo "<br> Atualizado com sucesso!";
                return;
            }
            echo "<br> Error.";
        }catch(except $erro){
            echo $erro;
        }
      }
      
      public function compra(Conexao $conexao, Consultar $verif, Inserir $insert, int $codigo){
            try{

              $teste = $verif -> consultarEstoque($conexao, $codigo);
              if ($teste >= 1){

                $conn = $conexao ->conectar();
                $sql = "update livros set unid = unid - 1  where codigo = '$codigo'";
                mysqli_query($conn, $sql);
                echo "<br>Inserido no carrinho!";

              }else{

                $insert->reserva($conexao, $codigo);
                echo "<br> Codigo do livro desejado reservado em sistema!";
              }
              
              

            }catch(except $erro){
              echo $erro;
            }
      }
        
    }
?>