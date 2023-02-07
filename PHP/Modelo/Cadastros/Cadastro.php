<?php
    namespace PHP\Modelo\Cadastros;

    require_once("Endereco.php");

    use PHP\Modelo\Cadastros\Endereco;

    class CadastroClient{
        private string $nome;
        private Endereco $endereco;
        private string $telefone;
        private string $dataDeNascimento;
        private string $login;
        private string $senha;


        public function __construct(string $nome, Endereco $endereco, string $telefone, string $dataDeNascimento, string $login, string $senha){
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->dataDeNascimento = $dataDeNascimento;
            $this->login = $login;
            $this->senha = $senha;
        }//fim do construtor

        public function getNome() : string
        {
            return $this->nome;
        }//fim do Get
        public function setNome(string $nome) : void
        {
            $this->nome = $nome;
        }//fim do Set




        public function getTelefone() : string
        {
            return $this->telefone;
        }//fim do Get
        public function setTelefone(string $telefone) : void
        {
            $this->telefone = $telefone;
        }//fim do Set





        public function getDataDeNascimento() : string
        {
            return $this->dataDeNascimento;
        }//fim do Get
        public function setDataDeNascimento(string $dataDeNascimento) : void
        {
            $this->dataDeNascimento = $dataDeNascimento;
        }//fim do Set





        public function getLogin() : string
        {
            return $this->login;
        }//fim do Get
        public function setLogin(string $login) : void
        {
            $this->login = $login;
        }//fim do Set





        public function getSenha() : string
        {
            return $this->senha;
        }//fim do Get
        public function setSenha(string $senha) : void
        {
            $this->senha = $senha;
        }//fim do Set


        public function login( CadastroClient $cont , string $usuario, string $pass){
            if($cont-> getLogin()== $usuario && $cont-> getSenha() == $pass){
                echo "Logado com sucesso!<br><br>";
                return;
            }
            echo "Erro";
            
        }







    }//fim da class


?>