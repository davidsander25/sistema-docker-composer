<!-- PRODUTO -->

<div class="modal fade" id="add-produto">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Adicionar produto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="FormCadProduto" method="post">
                <div class="modal-body">
                    <div id="resultado"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="produto" class="form-control" placeholder="Produto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span>
                                </div>
                                <input type="text" name="valor" class="form-control" placeholder="Valor">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="marca" class="form-control" placeholder="Marca">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cancelar</button>
                    <button type="submit" name="enviar" value='1' class="btn btn-success"><i class="fas fa-check-circle"></i> Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="edit-produto">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar produto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="FormEditProduto" method="post">
                <div class="modal-body">
                    <div id="resultado"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Produto" name="produto" id="produto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-dollar-sign"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Valor" name="valor" id="valor">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Marca" name="marca" id="marca">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="custom-control custom-switch custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" id="status_produto" name="status">
                                    <label class="custom-control-label" for="status_produto">Status Produto</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="hidden" id="codigo" name="codigo">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cancelar</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="delete-produto">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title">Deletar produto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="resultado"></div>
                <p>Deseja realmente excluir esse produto?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <form id="FormDeleteProduto" method="post">
                    <input type="hidden" id="codigo" name="codigo">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cancelar</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- USUARIO -->
<div class="modal fade" id="add-usuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Adicionar usuário</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="FormCadUsuario" method="post">
                <div class="modal-body">
                    <div id="resultado"></div>
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nome" name="nome">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Login" name="login">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Senha" name="senha">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="edit-usuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar usuário</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="FormEditUsuario" method="post">
                <div class="modal-body">
                    <div id="resultado"></div>
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Login" name="login" id="login">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Senha" name="senha" id="senha">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="custom-control custom-switch custom-switch-on-success">
                                    <input type="checkbox" class="custom-control-input" checked id="status_usuario" name="status">
                                    <label class="custom-control-label" for="status_usuario">Status usuário</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <input type="hidden" id="codigo" name="codigo">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cancelar</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="delete-usuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title">Deletar usuário</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="resultado"></div>
                <p>Deseja realmente excluir esse usuário?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <form id="FormDeleteUsuario" method="post">
                    <input type="hidden" id="codigo" name="codigo">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cancelar</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>