<?php
  include("top.php");
  include("navBar.php");
?>

<div class="container-fluid  content">

  <!-- Farelo de Pão -->
  <div class="breadCrumbHolder my-5">
    <div class="breadCrumb1 breadCrumb d-inline">
        <img src="/imgs/breadCrumb1.svg" class="img-responsive">
        <a href="#" class="overlay-text centeredText">Deslogado</a>
    </div>
    <div class="breadCrumb1 breadCrumb d-inline">
        <img src="/imgs/breadCrumb2.svg" class="img-responsive" style="margin-left: -10px;">
        <a href="#" class="overlay-text centeredText">Início</a>
    </div>
  </div>

  <!-- Conteúdo -->
  <div class="card shadow p-3 m-1 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex">
      <h4 class="text-center d-inline w-100">Nossos Links </h4>
      <button class="btn-primary growHover p-2"><i class="bi bi-sort-down  pr-2"></i
        >Filtrar</a
      ></button>
    </div>

    
    <table class="table mt-4">
      <thead class="p-2">
        <tr>
          <th>Nome</th>
          <th>Projeto</th>
          <th>Criador</th>
          <th>Link Encurtado</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Link Exemplo</td>
          <td>Ecoleta</td>
          <td>Jorge</td>
          <td>https://3e.com.br/HASHSH/user 
            <a href="#"><i class="bi bi-eye-fill"></i></a>
            <a href="#"><i class="bi bi-clipboard-check-fill"></i></a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<?php
  include("bottom.php");
?>

    


