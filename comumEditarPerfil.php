<?php
  include("top.php");
  include("navBar.php");
?>

<div class="container-fluid content">

  <!-- BreadCrumb -->
  <div class="breadCrumbHolder my-5">
    <div class="breadCrumb1 breadCrumb d-inline">
        <img src="/imgs/breadCrumb1.svg" class="img-responsive">
        <a href="#" class="overlay-text centeredText">Usuário</a>
    </div>
    <div class="breadCrumb1 breadCrumb d-inline">
        <img src="/imgs/breadCrumb2.svg" class="img-responsive" style="margin-left: -10px;">
        <a href="#" class="overlay-text centeredText">Perfil</a>
    </div>
  </div>

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Editar Informações</h4>
       <form class="m-auto">
        
        <label for="password">Nome:</label>
        <input type="text" class="textInput my-2" name="nome" value="VALOR" />

        <label for="email">Email:</label>
        <input type="email" class="textInput my-2" name="email" value="VALOR" />
        
        <div class="d-flex flex-column justify-content-center align-items-center mt-5">
          <div class="d-flex">
            <a class="btn-primary-lighter px-5 growHover mr-2">Mudar Senha</a>
            <button type="submit" class="btn-primary px-5 ml-2 growHover">Salvar</button>
          </div>
          <a class="simpleLink" href="#">Estou com um problema muito sério, preciso falar com o admin!</a>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
  include("bottom.php");
?>