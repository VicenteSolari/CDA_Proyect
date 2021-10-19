<!DOCTYPE html>
<html>
    <head>
        <title>ABM PRODUCTOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
       
        <div class="conteiner">
            <div class="jumbotron">
                <div class="card">
                    <h1 class="text-center">ABM Productos</h1>
                </div>
                <div class="card">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <div class="card-body">
                                <button type="center-button" class="right btn btn-primary" data-toggle="modal" data-target="#addProduct">Agregar Producto</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <!-- Data Table -->
        <div class="container">
                <h2>Lista de Productos</h2>
                    <table class="table table-bordered table-sm" >
                    <thead>
                    <tr>
                        <th>Código</th>
                        <th>Producto</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th colspan="2">Operaciones</th>
                    </tr>
                    </thead>
                    <tbody id="table">
                        <script>
                        $.ajax({
                                url: "view.php",
                                type: "GET",
                                cache: false,
                                success: function(data){
                                    $('#table').html(data); 
                                }
                            });
                        </script>
                    </tbody>
                </table>
        </div>
        

        <!--Modal New Product -->
        <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="fupForm" name="form1" method="POST">
                        <div class="modal-body">
                            <!-- Cuerpo de Modal -->
                            <div class="form-group">
                                <label for="nameProduct">Nombre</label>
                                <input type="text" class="form-control" id="nameProduct" aria-describedby="nameHelp" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="descriptionProduct">Descripcion</label>
                                <textarea class="form-control" id="descriptionProduct" placeholder="Ingrese una descripcion"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="typeProduct">Tipo de Producto</label>
                                <select class="custom-select mr-sm-2" id="typeProduct">
                                    <option value="Lampara" selected>Lampara</option>
                                    <option value="Iluminaria">Ilumninaria</option>
                                    <option value="Abertura">Abertura</option>
                                </select>
                            </div>
                            <label class="mr-sm-2" for="priceProduct">Precio</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" id="priceProduct" />
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" id="btnGuardar" class="btn btn-primary">Agregar</button>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Modal Product Edit -->
        <div class="modal fade" id="editProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="editForm" name="form2" method="POST">
                        <div class="modal-body">
                        <!-- Cuerpo de Modal -->
                            <div class="form-group">
                                <label for="nameProductEdit">Nombre</label>
                                <input type="text" class="form-control" id="nameProductEdit" aria-describedby="nameHelp" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="descriptionProductEdit">Descripcion</label>
                                <textarea class="form-control" id="descriptionProductEdit" placeholder="Ingrese una descripcion"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="typeProductEdit">Tipo de Producto</label>
                                <select class="custom-select mr-sm-2" id="typeProductEdit">
                                    <option value="Lampara">Lampara</option>
                                    <option value="Iluminaria">Ilumninaria</option>
                                    <option value="Abertura">Abertura</option>
                                </select>
                            </div>
                            <label class="mr-sm-2" for="priceProductEdit">Precio</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" id="priceProductEdit" />
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" id="btnGuardarEditado" class="btn btn-primary">Guardar</button>
                            </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Product -->
        <script>

            $(document).ready(function() {
                $(document).on("click", "#btnEditarProducto", function(event) {
                    
                    var button = $(event.currentTarget);         /* Button that triggered the modal */
              
                    // Loads modal with product's data-

                    $("#nameProductEdit").val(button.data('name'));
                    $("#descriptionProductEdit").val(button.data('description'));
                    $("#typeProductEdit").val(button.data('type'));
                    $("#priceProductEdit").val(button.data('price'));
                    $("#btnGuardarEditado").val(button.val());
                    
                });
                
                $(document).on("click", "#btnGuardarEditado", function() { 

                    $.ajax({
                        url: "edit.php",
                        type: "POST",
                        cache: false,
                        data:{
                            id: $('#btnGuardarEditado').val(),
                            nombre: $('#nameProductEdit').val(),
                            desc: $('#descriptionProductEdit').val(),
                            tipo: $('#typeProductEdit').val(),
                            precio: $('#priceProductEdit').val(),
                        },
                        success: function(dataResult){
                            var dataResult = JSON.parse(dataResult);

                            if(dataResult.statusCode==200){
                                // $('#update_country').modal().hide();
                                alert('Data updated successfully !');
                                //location.reload();					
                            }
                        }
                    });
                }); 
            });
        </script>
                           
        <!-- Save Product -->
        <script>
            $(document).ready(function() {
                $('#btnGuardar').on('click', function() {
                    var nombre = $('#nameProduct').val();
                    var desc = $('#descriptionProduct').val();
                    var tipo = $('#typeProduct').val();
                    var precio = $('#priceProduct').val();
                
                    if(nombre!="" && desc!="" && precio!=""){
                        $.ajax({
                            url: "save.php",
                            type: "POST",
                            data: {
                                nombre: nombre,
                                desc: desc,
                                tipo: tipo,
                                precio: precio				
                            },
                            cache: false,
                            success: function(dataResult){
                                var dataResult = JSON.parse(dataResult);

                                if(dataResult.statusCode==200){
                                    alert("Producto agregado con éxito"); 
                                }
                                else if(dataResult.statusCode==201){
                                    alert("Ocurrio un error!");
                                }
                                
                            }
                            
                        });
                        window.location.reload();		
                    }
                    else{
                        alert("Por favor, complete todos los campos para continuar.");
                    }
                });
            });
        </script>

        <!-- Delete Product -->
        <script>
            $(document).ready(function() {
                $(document).on("click", "#btnEliminar", function() {
                   
                    var idProducto = ($(this).val());
                    
                    if (window.confirm("Realmente quiere eliminar el producto con código" + ' "' + idProducto + '"?')) {
                        $.ajax({
                            url: "delete.php",
                            type: "POST",
                            cache: false,
                            data:{
                                id: idProducto
                            },
                            success: function(dataResult){
                                
                                alert("El producto fue eliminado con éxito");
                                window.location.reload();						

                                
                            }
                        });
                    }
                    
                });
            });
        </script>

        
    </body>
</html>