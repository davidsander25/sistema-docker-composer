var endereco = window.location.protocol + "//" + window.location.host;
$(function () {
    $("#list_produto").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#list_produto_wrapper .col-md-6:eq(0)');
    $("#list_usuario").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#list_usuario_wrapper .col-md-6:eq(0)');
});

// PRODUTO
$('#add-produto').on('show.bs.modal', function (event) {
    $("#add-produto #FormCadProduto").on('submit', function (e) {
        e.preventDefault();
        var form = new FormData($("#add-produto #FormCadProduto")[0]);
        form.append('enviar','1');
        $.ajax({
            url: endereco + "/produto/cadastro",
            type: 'POST',
            data: form,
            processData: false,
            cache: false,
            contentType: false,
            success: function (result) {
                $("#add-produto #resultado").html(result);
                console.log(result);
            },
            error: function () {
                $("#add-produto #resultado").html("Error ao comunicar com a pagina de edicao");
            }
        });
    });

});

$('#edit-produto').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var codigo = button.data('codigo');   
    var produto = button.data('produto');   
    var marca = button.data('marca');   
    var valor = button.data('valor') ;  
    var status = button.data('status');   

    $("#edit-produto input#codigo").val(codigo);
    $("#edit-produto input#produto").val(produto);
    $("#edit-produto input#marca").val(marca);
    $("#edit-produto input#valor").val(valor);

    if(status == 'S'){
        $("#status_produto").attr("checked", true);
    }else{
        $("#status_produto").attr("checked", false);
    }

    $("#edit-produto #FormEditProduto").on('submit', function (e) {
        e.preventDefault();
        var form = new FormData($("#edit-produto #FormEditProduto")[0]);
        form.append('enviar','1');
        $.ajax({
            url: endereco + "/produto/editar",
            type: 'POST',
            data: form,
            processData: false,
            cache: false,
            contentType: false,
            success: function (result) {
                $("#edit-produto #resultado").html(result);
            },
            error: function () {
                $("#edit-produto #resultado").html("Error ao comunicar com a pagina de edicao");
            }
        });
    });

});
$('#delete-produto').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var codigo = button.data('codigo');   

    $("#delete-produto input#codigo").val(codigo);

    $("#delete-produto #FormDeleteProduto").on('submit', function (e) {
        e.preventDefault();
        var form = new FormData($("#delete-produto #FormDeleteProduto")[0]);
        form.append('enviar','1');
        $.ajax({
            url: endereco + "/produto/deletar",
            type: 'POST',
            data: form,
            processData: false,
            cache: false,
            contentType: false,
            success: function (result) {
                $("#delete-produto #resultado").html(result);
                console.log(result);
            },
            error: function () {
                $("#delete-produto #resultado").html("Error ao comunicar com a pagina de edicao");
            }
        });
    });

});


// USUARIO

$('#add-usuario').on('show.bs.modal', function (event) {
    $("#add-usuario #FormCadUsuario").on('submit', function (e) {
        e.preventDefault();
        var form = new FormData($("#add-usuario #FormCadUsuario")[0]);
        form.append('enviar','1');
        $.ajax({
            url: endereco + "/usuario/cadastro",
            type: 'POST',
            data: form,
            processData: false,
            cache: false,
            contentType: false,
            success: function (result) {
                $("#add-usuario #resultado").html(result);
                console.log(result);
            },
            error: function () {
                $("#add-usuario #resultado").html("Error ao comunicar com a pagina de edicao");
            }
        });
    });

});

$('#edit-usuario').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var codigo = button.data('codigo');   
    var nome = button.data('nome');   
    var login = button.data('login');   
    var senha = button.data('senha') ;  
    var status = button.data('status');   

    $("#edit-usuario input#codigo").val(codigo);
    $("#edit-usuario input#nome").val(nome);
    $("#edit-usuario input#login").val(login);
    $("#edit-usuario input#senha").val(senha);

    if(status == 'S'){
        $("#status_usuario").attr("checked", true);
    }else{
        $("#status_usuario").attr("checked", false);
    }

    $("#edit-usuario #FormEditUsuario").on('submit', function (e) {
        e.preventDefault();
        var form = new FormData($("#edit-usuario #FormEditUsuario")[0]);
        form.append('enviar','1');
        $.ajax({
            url: endereco + "/usuario/editar",
            type: 'POST',
            data: form,
            processData: false,
            cache: false,
            contentType: false,
            success: function (result) {
                $("#edit-usuario #resultado").html(result);
            },
            error: function () {
                $("#edit-usuario #resultado").html("Error ao comunicar com a pagina de edicao");
            }
        });
    });

});

$('#delete-usuario').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var codigo = button.data('codigo');   

    $("#delete-usuario input#codigo").val(codigo);

    $("#delete-usuario #FormDeleteUsuario").on('submit', function (e) {
        e.preventDefault();
        var form = new FormData($("#delete-usuario #FormDeleteUsuario")[0]);
        form.append('enviar','1');
        $.ajax({
            url: endereco + "/usuario/deletar",
            type: 'POST',
            data: form,
            processData: false,
            cache: false,
            contentType: false,
            success: function (result) {
                $("#delete-usuario #resultado").html(result);
            },
            error: function () {
                $("#delete-usuario #resultado").html("Error ao comunicar com a pagina de edicao");
            }
        });
    });

});