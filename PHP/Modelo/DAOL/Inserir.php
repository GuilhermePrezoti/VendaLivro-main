<?php 
    namespace PHP\Modelo\DAOL;

    require_once('Conexao.php');

    use PHP\Modelo\DAOL\Conexao;

    class Inserir{
        public function cadastrar(Conexao $conexao, string $nomeDaTabela, string $titulo, float $cost, int $unid){
            try{
                $conn = $conexao->Conectar();
                $sql = "insert into $nomeDaTabela(codigo, titulo, cost, unid) values ('','$titulo','$cost','$unid')";
                $result = mysqli_query($conn,$sql);//Execut as ações no BD
                mysqli_close($conn);

                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br> Não inserido!";
                
            }catch(Except $erro){
                echo $erro;
            }
        }


        public function reserva(Conexao $conexao,  int $codigo){
            $conn = $conexao->Conectar();
                $sql = "insert into reserva(cod, codigo) values ('', '$codigo')";
                $result = mysqli_query($conn,$sql);//Execut as ações no BD
                mysqli_close($conn);

                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br> Não inserido!";
        }
    }
?>