<?php 
class Pessoa{
    public $nome;
    public $cpf;
    public $contato;

    public function __construct($nome, $cpf, $contato){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->contato = $contato;        
    }

    public function __destruct() 
	{ 
	    print "Removido: {$this->nome}, cpf {$this->cpf}, contato {$this->contato}<br>\n"; 
	} 

    public function exibirdados(){
        print 'Nome: ';
        print $this->nome;
        print "<br>";
        
        print 'Cpf: ';
        print $this->cpf;
        print "<br>";

        print 'Contato: ';
        print $this->contato;
        print "<br>";
        print "<br>";        
    }
}



class SalaVirtual{
    public $id;
    public $disciplina;
    public $turno;
    private $alunos;

    public function __construct($id, $disciplina, $turno){
        $this->id = $id;
        $this->disciplina = $disciplina;
        $this->turno = $turno;
    }

    public function __destruct() 
	{ 
	    print "Removido: Sala {$this->id}, disciplina {$this->disciplina}, período {$this->turno}<br>\n"; 
	} 

    public function exibirdados(){
        print 'Sala: ';
        print $this->id;
        print "<br>";
        
        print 'Disciplina: ';
        print $this->disciplina;
        print "<br>";

        print 'Período: ';
        print $this->turno;
        print "<br>";
        print "<br>";        
    }

    public function adicionarAluno( Pessoa $p ) 
    { 
        $this->alunos[] = $p; 
    } 

    public function listarAlunos() 
    { 
        return $this->alunos; 
    }

}
// CRIAÇÃO DOS ALUNOS
$p1 = new Pessoa('Paula', 4855779883, 1999999999);

$p2 = new Pessoa('Tobias', 456487797, 2199999999);

$p3 = new Pessoa('Tiguelha', 564458794, 20999999999);

$p4 = new Pessoa('Matias', 87998321, 17999999999);

$p5 = new Pessoa('Ariel', 4896774132, 8949798879);

// CRIAÇÃO DAS SALAS
$s1 = new SalaVirtual(01, 'Português', 'Noturno');

$s2 = new SalaVirtual(02, 'Matemática', 'Integral');

$s3 = new SalaVirtual(03, 'Informática', 'Noturno');


// AGREGAÇÃO DOS ALUNOS AS SALAS
$s1->adicionarAluno($p1);
$s1->adicionarAluno($p2);

$s2->adicionarAluno($p3);

$s3->adicionarAluno($p4);
$s3->adicionarAluno($p5);

// EXIBE AS INFORMAÇÕES DAS SALAS
$s1->exibirdados();
print 'Alunos: <br>';
foreach ($s1->listarAlunos() as $aluno) 
{ 
    print $aluno->exibirdados(); 
} echo '<br>';

$s2->exibirdados();
print 'Alunos: <br>';
foreach ($s2->listarAlunos() as $aluno) 
{ 
    print $aluno->exibirdados(); 
} echo '<br>';

$s3->exibirdados();
print 'Alunos: <br>';
foreach ($s3->listarAlunos() as $aluno) 
{ 
    print $aluno->exibirdados(); 
}
?>