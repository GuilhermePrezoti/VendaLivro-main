<?php
    namespace PHP\Modelo;

    require_once('Cadastros/Endereco.php');
    require_once('Cadastros/Cadastro.php');
    require_once('Lojas/Livros.php');
    require_once('Lojas/Loja.php');
    require_once('DAO/Conexao.php');
    require_once('DAO/InserirEndereco.php');
    require_once('DAO/InserirCli.php');
    require_once('DAO/ConsultarIndividual.php');

    use PHP\Modelo\Cadastros\Endereco;
    use PHP\Modelo\Cadastros\CadastroClient;
    use PHP\Modelo\Lojas\Livros;
    use PHP\Modelo\Lojas\Loja;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\InserirEndereco;
    use PHP\Modelo\DAO\CadastrarClient;
    use PHP\Modelo\DAO\Consultar;

    
   
    /*$cadastroCli = new CadastroClient("John",$enderecoCli, "1234567890", "01/01/2001", "reiDelas@gmail.com","123");  
    $livroSample = new Livros("12345678910", "Saraiva");
    $lojaSample  = new Loja($livroSample, 1000);

    echo $cadastroCli->login($cadastroCli,"reiDelas@gmail.com", "123");
    echo $livroSample->getTitulo();
    echo " ".$lojaSample->getUnid();
    echo "<br>".$lojaSample->comprar($cadastroCli, $lojaSample, $livroSample, 10000);
    echo "<br><br> Quantidade do livro em estoque: ";
    echo $lojaSample->getUnid();*/

    echo "<br><br>-------- Teste de Banco de Dados ------------<br><br>";
    $conexao = new Conexao();
    $conexao->conectar();//abrindo conexão con o banco de dados
    echo "<br><br>";

    $enderecoCli = new Endereco(1,"dsfsgsfgs", "São Paulo", "SP", "123456");
    $insertEnderec = new InserirEndereco();
    echo $insertEnderec->Cadastrar($conexao,$enderecoCli);




    $insert = new CadastrarClient();
    echo $insert->CadastrarCli($conexao, "pessoa", "Guizin", $enderecoCli->codigo, "123456", "19/10/2004", "guilherme@gmail.com", "12345");

    
?>