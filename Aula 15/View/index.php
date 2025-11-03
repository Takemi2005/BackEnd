<?php
namespace Aula_15;
require_once __DIR__ . "\\..\\Controller\\BebidaController.php";
$controller = new BebidaController();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   $acao = $_POST['acao'] ?? '';
   if($acao === 'criar') {
      $controller->criar(
         $_POST['nome'],
         $_POST['categoria'],    
         $_POST['volume'],
         $_POST['valor'],
         $_POST['qtde']  
      );
   } elseif ($acao === 'deletar') {
    $controller->deletar($_POST['nome']);
   }
}
$bebidas = $controller->ler(); 
?>

<!-- Formulario de html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Bebida</title>
</head>
<body>
    <h1>Formulario para preenchimento de bebidas:</h1>

    <form method="POST">
    <input type="hidden">
    <input type="text" name="nome" placeholder="Nome de bebidas:" required>
    <select name="categoria">
        <option value="">Selecione a categoria</option>
        <option value="Refrigerante">Refrigerante</option>
        <option value="Cerveja">Cerveja</option>
        <option value="Vinho">Vinho</option>
        <option value="Destilado">Destilado</option>
        <option value="Agua">Água</option>
        <option value="Suco">Suco</option>
        <option value="Energético">Energético</option>                
    <select>
    <input type="text" name="volume" placeholder="Volume (ex: 300ml):" required>
    <input type="number" name="valor" step="0.01" placeholder="Valor (ex: 5.50):" required>
    <input type="number" name="qtde" placeholder="Quantidade em estoque:" required>
    <button type="submit">Cadastrar</button>
    </form>

</body>
</html>
