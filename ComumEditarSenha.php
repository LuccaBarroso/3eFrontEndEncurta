<?php
  include("top.php");
  include("navBar.php");
?>

<div class="container-fluid content">

  <!-- BreadCrumb -->
  <div class="breadCrumbHolder my-5">
    <div class="breadCrumb1 breadCrumb d-inline">
        <img src="/imgs/breadCrumb1.svg" class="img-responsive">
        <a href="#" class="overlay-text centeredText">Deslogado</a>
    </div>
    <div class="breadCrumb1 breadCrumb d-inline">
        <img src="/imgs/breadCrumb2.svg" class="img-responsive" style="margin-left: -10px;">
        <a href="#" class="overlay-text centeredText">Perfil</a>
    </div>
    <div class="breadCrumb1 breadCrumb d-inline">
        <img src="/imgs/breadCrumb4.svg" class="img-responsive" style="margin-left: -10px;">
        <a href="#" class="overlay-text centeredText">Mudar Senha</a>
    </div>
  </div>

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Fazer Login</h4>
       <form class="m-auto">
        
        <label for="password">Senha Antiga:</label>
        <input type="password" class="textInput my-2" name="oldPass" value="VALOR" />
        
        <label for="password">Nova Senha:</label>
        <input type="password" class="textInput my-2" name="newPass" value="VALOR" />
        
        <label for="password">Confirmar Nova Senha:</label>
        <input type="password" class="textInput my-2" name="repeatNewPass" value="VALOR" />


        
        <div class="d-flex justify-content-center flex-column align-items-center mt-5">
          <button type="submit" class="btn-primary px-5 mb-2 growHover">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
  include("bottom.php");
?>