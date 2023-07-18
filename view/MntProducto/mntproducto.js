var tabla;

function init(){
    $("#producto_form").on("submit", function(e){
        guardaryeditar(e);
    });
}

$(document).ready(function(){

    $('#cat_id').select2({
        dropdownParent: $("#modalmantenimiento")
    });

    $.post("../../controller/categoria.php?op=combo", function(data){
        $("#cat_id").html(data);
    });

    tabla=$('#productos_data').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
                   'copyHtml5',
                   'excelHtml5',
                   'csvHtml5',
                   'pdf' 
                 ],
        "ajax":{
            url:'../../controller/producto.php?op=listar',
            type: "get",
            dataType: "json",
            error: function(e){
                console.log(e.responseText);
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 5,
        "order": [[0, "asc"]],
        "language":{
            "sProcessing": "Procesando",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar: ",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate":{
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevius": "Anterior"
            },
            "oAria":{
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    }).DataTable();
});

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#producto_form")[0]);
    $.ajax({
        url: "../../controller/producto.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
            $('#producto_form')[0].reset();
            $("#modalmantenimiento").modal('hide');
            $('#productos_data').DataTable().ajax.reload();

            swal.fire(
                'Registrado!',
                'El registro ha sido correcto.',
                'success'
            )
        }
    });
}

function editar(prod_id){
    $('#mdltitulo').html('Editar Registro');

    $.post("../../controller/producto.php?op=mostrar", {prod_id:prod_id}, function(data){
        data = JSON.parse(data);
        $('#prod_id').val(data.prod_id);
        $('#cat_id').val(data.cat_id).trigger('change');
        $('#prod_nom').val(data.prod_nom);
        $('#prod_descrip').val(data.prod_descrip);
        $('#prod_cant').val(data.prod_cant);
    });

    $('#modalmantenimiento').modal('show');
}

function eliminar(prod_id){
    swal.fire({
        title: 'ADMIN',
        text: "Esta seguro de Eliminar el registro?",
        icon: 'error',
        showCancelButton: true,
        confirmButtonText: 'Si, Eliminar',
        cancelButtonText: 'No, Cancelar',
        reverseButtons: true
    }).then((result)=>{
        if(result.isConfirmed){
            $.post("../../controller/producto.php?op=eliminar",{prod_id:prod_id},function (data){

            });

            $('#productos_data').DataTable().ajax.reload();
            swal.fire(
                'Eliminar!',
                'El registro ha sido eliminado.',
                'success'
            )
        }
    })
}

$(document).on("click", "#btnnuevo", function(){
    $('#mdltitulo').html('Nuevo Registro');
    $('#cat_id').val('').trigger('change');
    $('#producto_form')[0].reset();
    $('#prod_id').val('');
    
    $('#modalmantenimiento').modal('show');
});

init();