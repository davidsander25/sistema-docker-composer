  <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Produto<small>(s)</small></h1>
          </div>
        </div>
      </div>
    </section>


    <section class="content">
      <div class="card">
        <div class="card-header">
          <button class="btn btn-primary" data-toggle="modal" data-target="#add-produto"><i class="fas fa-plus-circle"></i> Adicionar</button>
        </div>
        <div class="card-body">
          <table id="list_produto" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th></th>
                <th>Produto</th>
                <th>Marca</th>
                <th>Valor</th>
                <th>Status</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 0;
              foreach ($lista_produto as $lista) {
                $i++; ?>
                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $lista['desc_produto'] ?></td>
                  <td><?php echo $lista['marca'] ?></td>
                  <td><?php echo "R$ ".$lista['valor'] ?></td>
                  <td>
                    <?php
                    if ($lista['status'] == 'S') {
                      echo '<div class="alert-success text-center">Ativo</div>';
                    } else {
                      echo '<div class="alert-danger text-center">Inativo</div>';
                    }
                    ?>
                  </td>
                  <td>
                    <button 
                      class="btn btn-success" 
                      data-toggle="modal" 
                      data-target="#edit-produto"
                      data-codigo="<?php echo $lista['codigo']?>"
                      data-produto = "<?php echo $lista['desc_produto'] ?>"
                      data-marca = "<?php echo $lista['marca'] ?>"
                      data-valor = "<?php echo $lista['valor']?>"
                      data-status = "<?php echo $lista['status']?>"
                    ><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete-produto" data-codigo="<?php echo $lista['codigo']?>"><i class="fas fa-trash-alt"></i></button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>