<?php
  include("top.php");
  include("navBar.php");
?>

<div class="container-fluid content">

  <!-- BreadCrumb -->
  <div class="breadCrumbHolder my-5">
    <div class="breadCrumb1 breadCrumb d-inline">
        <img src="/imgs/breadCrumb1.svg" class="img-responsive">
        <a href="#" class="overlay-text centeredText">Admin</a>
    </div>
    <div class="breadCrumb1 breadCrumb d-inline">
        <img src="/imgs/breadCrumb3.svg" class="img-responsive" style="margin-left: -10px;">
        <a href="#" class="overlay-text centeredText">Solicitações</a>
    </div>
  </div>

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100 pb-5">Solicitações</h4>
       <form class="m-auto">

       <div class="row justify-content-md-center">
       <div class="solicitation text-center col-sm shadow m-1 bg-body rounded-lg border-0 d-inline">
            <h4 class="solicitationHeader">NOME</h4>
            <p>Preciso que seja registra-do um novo usuário ...</p>
            <button class="btn-primary mx-auto"><i class="fas fa-plus m-auto pr-1"></i>Abrir</button>
        </div>
        <div class="solicitation text-center col-sm shadow m-1 bg-body rounded-lg border-0 d-inline">
            <p>Preciso que seja registra-do um novo usuário ...</p>
            <button class="btn-gray mx-auto">Finalizado</button>
        </div>
       </div>

      </form>
    </div>
  </div>
</div>
<?php
  include("bottom.php");
?>