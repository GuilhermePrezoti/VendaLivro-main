<?php

    namespace PHP\Modelo\Lojas;    

    class Livros{
    
        private string $cod;
        private string $titulo;
    

        public function __construct(string $cod, string $titulo){
            $this->cod = $cod;
            $this->titulo = $titulo;
            
        }

        /**
         * @return string
         */
        public function getCod(): string {
            return $this->cod;
        }
        
        /**
         * @param string $cod 
         * @return self
         */
        public function setCod(string $cod): self {
            $this->cod = $cod;
            return $this;
        }

        /**
         * @return string
         */
        public function getTitulo(): string {
            return $this->titulo;
        }
        
        /**
         * @param string $titulo 
         * @return self
         */
        public function setTitulo(string $titulo): self {
            $this->titulo = $titulo;
            return $this;
        }
    
	
    }
?>