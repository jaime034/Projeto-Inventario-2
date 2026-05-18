? EXERCÍCIO 1 — Captura de dados com POST (PHP)
?? Objetivo: Aprender a receber dados enviados por formulário usando POST.


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$nome  = $_POST['nome'] ?? '';
	$idade = $_POST['idade'] ?? '';

	echo "Nome: $nome <br>";
	echo "Idade: $idade";

} else {
	echo "Acesso não permitido";
}


CENÁRIO 2 — Enviar dados via formulário HTML (POST)
?? Exemplo de formulário HTML


exercicio1.php

	<label>Nome:</label>
	<input type="text" name="nome"><br><br>

	<label>Idade:</label>
	<input type="number" name="idade"><br><br>

	<button type="submit">Enviar</button>
</form>


SELECT * FROM nome_da_tabela; 
Usando SELECT * com PHP (PDO)

$sql = "SELECT * FROM produtos";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);



Exercícios 2
Conceitos:
Diferença entre GET e POST
Uso de exit para controle de fluxo

<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
	echo "Acesso não permitido";
	exit;
}

$nome  = $_POST['nome'] ?? '';
$idade = $_POST['idade'] ?? '';

echo "Nome: $nome <br>";
echo "Idade: $idade";




Exercicio 3 : 
CÓDIGO EM PORTUGOL (para o aluno converter em PHP)

algoritmo "MensagemBoasVindas"

var
   nome : caractere

inicio

   // Simula o recebimento de dados (POST)
   escreva("Digite seu nome: ")
   leia(nome)

   // Verificação se o nome foi informado
   se (nome <> "") entao
  	escreva("Bem-vindo(a), ", nome, "!")
   senao
  	escreva("Nome não informado")
   fimse

fimalgoritmo
