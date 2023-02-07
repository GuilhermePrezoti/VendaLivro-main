<?php
    
    namespace PHP\Modelo\Cadastros;
    
    class Endereco{
        public int $codigo;
        private string $rua;
        private string $cidade;
        private string $estado;
        private string $cep;

        public function __construct(int $codigo,string $rua, string $cidade, string $estado, string $cep){
            $this->codigo    = $codigo;
            $this->rua       = $rua;
            $this->cidade    = $cidade;
            $this->estado    = $estado;
            $this->cep       = $cep;
        }//fim do construtor



        public function __get($nomeVariavel) : string
        {
            return $this->$nomeVariavel;
        }//fim do get

        public function __set(string $var, string $valor ) : void
        {
            $this->$var = $valor;
        }//fim do set

        public function __toString() : string 
        {
            return "<br>Rua: ".$this->rua. "<br>Cidade: ".$this->cidade. "<br>Estado: ".$this->estado. "<br>CEP: ".$this->cep;
        }//fim do toString

    }//fim da class    

?>