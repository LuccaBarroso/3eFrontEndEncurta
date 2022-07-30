<?php
  include("top.php");
  include("navBar.php");
?>
    
    <div class="content pt-4">
      <div class="breadCrumb">
        <img src="/imgs/breadCrumb1.svg" alt="">
      </div>
      <div class="card shadow p-3 my-5 bg-body rounded-lg border-0 d-inline">
        <div class="d-flex">
          <h4 class="text-center d-inline w-100">Nossos Links </h4>
          <button class="btn-primary growHover p-2"><i class="bi bi-sort-down  pr-2"></i
            >Filtrar</a
          ></button>
        </div>

        <table class="table m-2 mt-5">
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

    


