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
        <a href="#" class="overlay-text centeredText">Início</a>
    </div>
  </div>


  <!-- Messages -->
  <!-- <div class="message d-flex alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fas fa-info-circle mr-2"></i>
    <p class="my-auto ml-4">Usuário criado com sucesso!</p>
    <button  type="button" data-bs-dismiss="alert"><i class="fas fa-times"></i></button>
  </div> -->


  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Todos os Links
        <button class="btn-primary d-inline float-end h5" type="button" data-bs-toggle="collapse" data-bs-target="#filter" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-sort-amount-down fa-xs"></i>Filtrar</button>
      </h4>

      <!-- filtro -->
      <div class="collapse" id="filter">
        <form class="card card-body m-auto filterCard">
            <div class="d-flex inputs">
                <div class="d-flex flex-column">
                    <label for="filterByCreator">Filtrar por Criador</label>
                    <input type="text" class="textInput my-2" name="filterByCreator" placeholder="Nome" />
                </div>
                <div class="d-flex flex-column">
                    <label for="filterByProject">Filtrar por Project</label>
                    <input type="text" class="textInput my-2" name="filterByProjeto" placeholder="Nome" />
                </div>
                <div class="d-flex flex-column">
                    <label for="filterByName">Filtrar por Nome</label>
                    <input type="text" class="textInput my-2" name="filterByName" placeholder="Nome" />
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn-primary px-4 mt-2 mb-2 growHover">Filtrar</button>
            </div>
        </form>
      </div>

      <table class="table mt-4 pb-3">
        <thead class="p-2">
          <tr>
            <th>Nome</th>
            <th>Projeto</th>
            <th>Criador</th>
            <th>Link Encurtado</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Link Exemplo</td>
            <td>Ecoleta</td>
            <td>Jorge</td>
            <td class="position-relative">
              <p class="d-inline" style="white-space: nowrap;">
              https://3e.com.br/HASHSH/user 
              </p>
              <div  class="float-end smallBtnsTable">
                <a href="#" class="btn-secondary-small"><i class="bi bi-eye-fill"></i></a>
                <button class="btn-secondary-small"><i class="fas fa-copy"></i></button>
              </div>
            </td>
            <td class="optionsBtns text-center">
              <a href="#" class="btn btn-primary tableBtn d-inline"><i class="fas fa-edit mr-1"></i>Editar</a>
              <a href="#" class="btn btn-delete tableBtn d-inline"><i class="fas fa-trash mr-1"></i>Deletar</a>
            </td>
          </tr>
          <tr>
            <td>Link Exemplo</td>
            <td>Ecoleta</td>
            <td>Jorge</td>
            <td class="position-relative">
              <p class="d-inline" style="white-space: nowrap;">
              https://3e.com.br/HASHSH/user 
              </p>
              <div  class="float-end smallBtnsTable">
                <a href="#" class="btn-secondary-small"><i class="bi bi-eye-fill"></i></a>
                <button class="btn-secondary-small"><i class="fas fa-copy"></i></button>
              </div>
            </td>
            <td class="optionsBtns text-center">
              <a href="#" class="btn btn-primary tableBtn d-inline"><i class="fas fa-edit mr-1"></i>Editar</a>
              <a href="#" class="btn btn-delete tableBtn d-inline"><i class="fas fa-trash mr-1"></i>Deletar</a>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="pagination">
        <a href="#"><i class="fas fa-caret-left"></i></a>
        <p class="p-1 mx-2">01</p>
        <a href="#" ><i class="fas fa-caret-right"></i></a>
      </div>
      
    </div>



  </div>
</div>
<?php
  include("bottom.php");
?>

    

