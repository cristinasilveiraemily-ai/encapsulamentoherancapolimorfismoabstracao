// <?php
// class Pessoa{
//     public $nome;
//     private $CPF;

//   public function __construct($nome, $CPF){
//      $this->nome = $nome;
//      $this->CPF = $CPF;
//   }
//   public function apresentar(){
//   return "nome: $this->nome\nCPF: $this->CPF\n";
//   }
//   public function SetnovoCPF(){
//     $this->CPF = $novoCPF;
//     return "CPF alterado com sucesso!";
//   }
//   public function getCPF(){
//     return $this->CPF;
// }
//   }
// class funcionario extends Pessoa{
//   public $nome;
//   private $CPF;
//   protected $numreg;

//   public function __construct($nome, $CPF, $numreg){
//     parent::__construct($nome, $CPF);
//      $this->numreg = $numreg;
//   }
// abstract class Funcionario{
//     public $nome;
//     protected $cpf;
//     private$numReg;

//   public function __construct($nome, $cpf, $numReg){
//   $this->nome = $nome;
//   $this->cpf = $cpf;
//    $this->numReg = $numReg;
// }

// public function apresentar(){
//     return "Nome: $this->nome\nCPF: $this->cpf\nNumero de registro: $this->numReg\n";
//   }

//   abstract public function promover($salario, $aumentoPorcentual);
//   }

// class RecursosHumanos extends Funcionario{
//   public function promover($salario, $aumentoPorcentual){
//   return $salario = $salario + ($salario * $aumentoPorcentual / 100);
//   }
// }

// $bruna = new RecursosHumanos("Bruna", 12345678900, 123456);
// echo $bruna->apresentar();
// echo $bruna->promover(1000, 10);

// quetao 1
// class Usuario{
//     private $nome;
//     private $email;

//     public function __construct($nome, $email){
//         $this->nome = $nome;
//         $this->email = $email;
//     }
//     public function getNome(){
//         return $this->nome;
//     }
//     public function setNome($nome){
//         $this->nome = $nome;
//     }
//     public function getEmail(){
//         return $this->email;
//     }
//     public function setEmail($email){
//         $this->email = $email;
//     }
//     public function exibirDados(){
//         return "Nome: $this->nome\nEmail: $this->email\n";
//     }
// }
// class Administrador extends Usuario{
//     private $nivelAcesso;

//     public function __construct($nome, $email, $nivelAcesso){
//         parent::__construct($nome, $email);
//         $this->nivelAcesso = $nivelAcesso;
//     }
//     public function getNivelAcesso(){
//         return $this->nivelAcesso;
//     }
//     public function setNivelAcesso($nivelAcesso){
//         $this->nivelAcesso = $nivelAcesso;
//     }
//     public function exibirDados(){
//         return parent::exibirDados() . "Nivel de acesso: $this->nivelAcesso\n";
//     }
// }
// $joao = new Administrador("Joao", "joao@email.com", "Basico");
// $joao->setNivelAcesso("Adimin");
// echo $joao->exibirDados();

// ?>
// <?php
// class Produto{
//     protected $nome;
//     protected $preco;

//     public function __construct($nome, $preco){
//         $this->nome = $nome;
//         $this->preco = $preco;
//     }
//     public function getNome(){
//         return $this->nome;
//     }
//     public function setNome($nome){
//         $this->nome = $nome;
//     }
//     public function getPreco(){
//         return $this->preco;
//     }
//     public function setPreco($preco){
//         $this->preco = $preco;
//     }
//     public function mostrarProduto(){
//         return "Nome: $this->nome\nPreço: R$ $this->preco\n";
//     }
// }
// class Notebook extends Produto{
//     private $memoriaRAM;

//     public function __construct($nome, $preco, $memoriaRAM){
//         parent::__construct($nome, $preco);
//         $this->memoriaRAM = $memoriaRAM;
//     }
//     public function getMemoriaRAM(){
//         return $this->memoriaRAM;
//     }
//     public function setMemoriaRAM($memoriaRAM){
//         $this->memoriaRAM = $memoriaRAM;
//     }
//     public function mostrarProduto(){
//         return parent::mostrarProduto() . "Memória RAM: $this->memoriaRAM\n";
//     }
// }
// $dell = new Notebook("Dell Inspiron", 4500, "8GB");
// $dell->setMemoriaRAM("16GB");
// echo $dell->mostrarProduto();

// ?>
// <?php

// class Funcionario{
//     private $nome;
//     private $salario;

//     public function __construct($nome, $salario){
//         $this->nome = $nome;
//         $this->salario = $salario;
//     }
//     public function getNome(){
//         return $this->nome;
//     }
//     public function setNome($nome){
//         $this->nome = $nome;
//     }
//     public function getSalario(){
//         return $this->salario;
//     }
//     public function setSalario($salario){
//         $this->salario = $salario;
//     }
//     public function mostrarFuncionario(){
//         return "Nome: $this->nome\nSalário: R$ $this->salario\n";
//     }
// }
// class Desenvolvedor extends Funcionario{
//     private $linguagemPrincipal;

//     public function __construct($nome, $salario, $linguagemPrincipal){
//         parent::__construct($nome, $salario);
//         $this->linguagemPrincipal = $linguagemPrincipal;
//     }
//     public function getLinguagemPrincipal(){
//         return $this->linguagemPrincipal;
//     }
//     public function setLinguagemPrincipal($linguagemPrincipal){
//         $this->linguagemPrincipal = $linguagemPrincipal;
//     }
//     public function mostrarFuncionario(){
//         return parent::mostrarFuncionario() . "Linguagem Principal: $this->linguagemPrincipal\n";
//     }
// }
// $joao = new Desenvolvedor("emily", 5000, "PHP");
// $joao->setSalario(1200);
// echo $joao->mostrarFuncionario();

// ?>
  <?php

//4

// class Pessoa{
//     protected $nome;
//     protected $idade;

//     public function __construct($nome, $idade){
//         $this->nome = $nome;
//         $this->idade = $idade;
//     }

//     public function setNome($nome){
//         $this->nome = $nome;
//     }

//     public function getNome(){
//         return $this->nome;
//     }

//     public function setIdade($idade){
//         $this->idade = $idade;
//     }

//     public function getIdade(){
//         return $this->idade;
//     }

//     public function apresentar(){
//         return "Nome: $this->nome\nIdade: $this->idade\n";
//     }
// }