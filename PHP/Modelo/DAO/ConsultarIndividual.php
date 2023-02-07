<?php
    namespace PHP\Modelo\DAO;
        
    require_once('Conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        public function consultarIndividual(Conexao $conexao, string $nomeDaTabela, int $cod)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeDaTabela where codigo = '$cod'";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cod"] == $cod){
                        echo "<br>Código: ".$dados["cod"]."<br>Nome: ".$dados["nome"]."<br>Endereco: ".$dados["endereco"]. "<br>Telefone: ".$dados["telefone"]. "<br>Data de Nascimento: ".$dados["dataDeNascimento"]."<br>Login: ".$dados["login"]."<br>Senha: ".$dados["senha"];
                        return;

                    }//fim do if

                }//fim do while

                echo "Código digitado não foi encontrado!";

            }//fim do try

            catch(Exception $erro)
            {
                echo $erro;
            }//fim do catch

        }//fim da função

        public function consultarTudo(Conexao $conexao, string $nomeDaTabela)
        {
            try
            {
                $conn   = $conexao->conectar();
                $sql    = "select * from $nomeDaTabela";
                $result = mysqli_query($conn);

                while($dados = mysqli_fatch_array($result))
                {
                    echo "<br>Código: ".$dados["cod"]."<br>Nome: ".$dados["nome"]."<br>Endereco: ".$dados["endereco"]. "<br>Telefone: ".$dados["telefone"]. "<br>Data de Nascimento: ".$dados["dataDeNascimento"]."<br>Login: ".$dados["login"]."<br>Senha: ".$dados["senha"];
                    return;
                }//fim do while

            }//fim do try

            catch(Exception $erro)
            {
                return $erro;
            }//fim do catch

        }//fim da função

    } //fim da class   
?>                                      