<?php

    namespace PHP\Modelo\Lojas;

    require_once("Livros.php");
    require_once("Cadastros/Cadastro.php");

    use PHP\Modelo\Lojas\Livros;
    use PHP\Modelo\Cadastros\CadastroClient;

    class Loja{

        private int $unid;
        private Livros $livros;
        private CadastroClient $cad;

        public function __construct(Livros $livros, int $unid){
            $this->livros = $livros;
            $this->unid = $unid;
        }
        
    
        /**
         * @return int
         */
        public function getUnid(): int {
            return $this->unid;
        }
        
        /**
         * @param int $unid 
         * @return self
         */
        public function setUnid(int $unid): self {
            $this->unid = $unid;
            return $this;
        }


        public function comprar(CadastroClient $cad, Loja $loj, Livros $livros, int $qnt){
            if($loj->getUnid() >= $qnt){
                $loj->setUnid($loj->getUnid() - $qnt);
                return;
            }else{
                echo "<br><br>Quantidade desejada  de $qnt unidades não disponivel! <br> Livro ".$livros->getTitulo()." reservado em nome de: ".$cad->getNome();
            }
        }
    }