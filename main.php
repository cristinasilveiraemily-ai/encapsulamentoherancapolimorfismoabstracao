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
abstract class Funcionario{
    public $nome;
    protected $cpf;
    private$numReg;

  public function __construct($nome, $cpf, $numReg){
  $this->nome = $nome;
  $this->cpf = $cpf;
   $this->numReg = $numReg;
}

public function apresentar(){
    return "Nome: $this->nome\nCPF: $this->cpf\nNumero de registro: $this->numReg\n";
  }

  abstract public function promover($salario, $aumentoPorcentual);
  }

class RecursosHumanos extends Funcionario{
  public function promover($salario, $aumentoPorcentual){
  return $salario = $salario + ($salario * $aumentoPorcentual / 100);
  }
}

$bruna = new RecursosHumanos("Bruna", 12345678900, 123456);
echo $bruna->apresentar();
echo $bruna->promover(1000, 10);