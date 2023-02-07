<?php
    
    
    namespace PHP\Modelo;

    require_once('DAOL/Conexao.php');
    require_once('DAOL/Inserir.php');
    require_once('DAOL/Consultar.php');
    require_once('DAOL/Atualizar.php');
    require_once('DAOL/Deletar.php');

    use PHP\Modelo\DAOL\Conexao;
    use PHP\Modelo\DAOL\Inserir;
    use PHP\Modelo\DAOL\Consultar;
    use PHP\Modelo\DAOL\Atualizar;
    use PHP\Modelo\DAOL\Deletar;
    
    $connect = new Conexao();
    $insert = new Inserir();
    $print = new Consultar();
    $del = new Deletar();
    $update = new Atualizar();
    
    $connect->conectar();
    $print ->consultarTudo($connect, 'livros');
    //$insert->cadastrar($connect, 'livros', 'Morro dos Ventos Uivantes', 40.99, 20);
    //$update ->update($connect, 'titulo', 'Crepusculo', 1, 'livros');
    //$del ->deletar($connect, 'livros', 1);
    //$del ->deletarTudo($connect, 'livros');
    $update ->compra($connect, $print, $insert, 3);



?>