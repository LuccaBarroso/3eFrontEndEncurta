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
  <div class="card shadow m-1 bg-body rounded-lg border-0 d-inline">
    <p class="solicitationHeader text-center">Nome</p>
    <div class="incomeMessages m-2">
        <button class="btnFinalizar btn-primary">Finalizar Solicitação</button>
        <div class="msg left">
            <i class="fas fa-user my-auto"></i>
            <p class="my-auto">Msg de exemplo</p>
        </div>
        <div class="msg right">
            <p class="my-auto">Msg de exemplo</p>
            <i class="fas fa-cog my-auto"></i>
        </div>
    </div>
    <form class="textMsg d-flex">
        <input type="text" class="textInput">
        <button type="submit" class="btn-primary my-auto growHover d-inline"><i class="fas fa-paper-plane"></i></button>
    </form>
  </div>
</div>
<?php
  include("bottom.php");
?>