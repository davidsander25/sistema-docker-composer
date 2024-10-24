<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Usuário<small>(s)</small></h1>
        </div>
      </div>
    </div>
  </section>



  <section class="content">
    <div class="card">
      <div class="card-header">
        <button class="btn btn-primary" data-toggle="modal" data-target="#add-usuario"><i class="fas fa-plus-circle"></i> Adicionar</button>
      </div>
      <div class="card-body">
        <table id="list_usuario" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th></th>
              <th>Nome</th>
              <th>Login</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 0;
            foreach ($lista_usuario as $lista) {
              $i++; ?>
              <tr>
                <td width='3%'><?php echo $i ?></td>
                <td><?php echo $lista['nome'] ?></td>
                <td><?php echo $lista['login'] ?></td>
                <td>
                  <?php
                  if ($lista['status'] == 'S') {
                    echo '<div class="alert-success text-center">Ativo</div>';
                  } else {
                    echo '<div class="alert-danger text-center">Inativo</div>';
                  }
                  ?>
                </td>
                <td width='15%'>
                  <?php if ($lista['login'] != 'admin') { ?>
                    <button class="btn btn-success" 
                    data-toggle="modal" 
                    data-target="#edit-usuario"
                    data-codigo="<?php echo $lista['codigo']?>"
                    data-nome = "<?php echo $lista['nome'] ?>"
                    data-login = "<?php echo $lista['login'] ?>"
                    data-senha = "<?php echo $lista['senha']?>"
                    data-status = "<?php echo $lista['status']?>"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete-usuario" data-codigo="<?php echo $lista['codigo']?>"><i class="fas fa-trash-alt"></i></button>
                  <?php } ?>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>