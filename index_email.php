<?php 

// CONECTANDO COM O BANCO DE DADOS
require 'config.php';

		
// SELECIONANDO DADOS NO BANCO DE DADOS

$sql = $pdo->query("SELECT * FROM lista_emails");

if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

include("protect.php");

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista Emails</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">
  <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap"
      rel="stylesheet"
    />
</head>

<body  class="p-3 mb-2 bg-light text-dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img id="logo" src="images/logo.png" alt="Logo U" /> O Canvas de Usabilidade</a>
      <button type="button" class="btn btn-secondary">Administrador Logado: <?php echo $_SESSION['username'];?></button>
      <a href="logout.php" class="btn btn-danger">Deslogar da Pagina Admin</a>
    </div>
   </nav>

  <main class="container mt-5">
    <div> <h2> Bem vindo ao Painel administrativo! <?php echo $_SESSION['username']; ?></h2></div>
  
  <a href="index.php" class="btn btn-dark"> Voltar  Para Index OCAU </a>

    <div class="bg-light p-5 rounded">
      <h1>Emails Cadastrado na Newsletter</h1>

      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Email</th>
    </tr>
  </thead >
  <tbody>
  <?php foreach($lista as $lista_emails): ?>
    <tr>
      <th scope="row"><?php echo $lista_emails['id']; ?></th>
      <td><?php echo $lista_emails['email'];?></td>
      <td>
            <a href="editar.php?id=<?php echo $lista_emails['id']; ?>" class="btn btn-secondary"> Editar </a>
            
        </td>
        <td><a href="apagar.php?id=<?php echo $lista_emails['id']; ?>" class="btn btn-danger"> Apagar </a></td>
    </tr>
  <?php endforeach; ?> 
  </tbody>
</table>
  </main>
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
</body>

</html>