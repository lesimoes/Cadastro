<?php
//conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//message
include_once 'includes/message.php'
?>

<div class ="row">
    <div class=" col s12 m6 push-m3">
        <h3 class="light">Clientes</h3>
      <table class="striped">
          <thead>
            <tr>
                <th> Nome:</th>
                <th> Sobrenome:</th>
                <th> Email:</th>
                <th> idade:</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $sql = "SELECT * FROM clientes";
          $resultado = mysqli_query($conn,$sql);
          while ($dados = mysqli_fetch_array($resultado)):
          ?>
            <tr>
                <td><?php echo $dados['nome']; ?></td>
                <td><?php echo $dados['sobrenome']; ?></td>
                <td><?php echo $dados['email']; ?></td>
                <td><?php echo $dados['idade']; ?></td>
                <td><a href="editar.php?id=<?php echo $dados['id']; ?>"class ="btn-floating orange"><i class="material-icons">edit</i> </a> </td>

                <td><a href="#modal<?php echo $dados['id']; ?>"class ="btn-floating red modal-trigger"><i class="material-icons">delete</i> </a> </td>

                <!-- Modal Structure -->
                <div id="modal<?php echo $dados['id']; ?>" class="modal">
                    <div class="modal-content">
                        <h5>Opa! </h5>
                        <p>Tem Certeza que deseja Excluir esse Cliente?</p>
                    </div>
                    <div class="modal-footer">

                        <form action="php_action/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                            <button type="submit" name="btn-deletar" class="btn red">Sim, Quero Deletar</button>
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                        </form>
                    </div>
                </div>
            </tr>
          <?php endwhile;   ?>

          </tbody>
      </table>
        <br>
        <a href="adicionar.php" class="btn">Adicionar Cliente!!!</a>


</div>


<?php
//footer
include_once 'includes/footer.php';
?>
