<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    require_once('Cadastros/Endereco.php');

    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\Cadastros\Endereco;

    class CadastrarClient{
        public function CadastrarCli(Conexao $conexao, string $nomeTabela, string $nome, int $endereco, string $telefone, string $dataDeNascimento, string $login, string $senha)
        {
            try{
                $conn   = $conexao->conectar();
                $sql    = "insert into $nomeTabela (cod, nome, endereco, telefone, dataDeNascimento, login, senha) values ('', '$nome', '$endereco', '$telefone', '$dataDeNascimento', '$login', '$senha')";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "Dados do Cliente Inserido!";
                    return;
                }
                return "Dados do Cliente não foram inseridos!";
            }//fim do try
            catch(Exception $erro)
            {
                return $erro;
            }//fim do catch

        }//fim da função

    }//fim da class

?>
