@extends('layouts.app')

@section('content')
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th class="text-center" colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td class="text-primary text-center"><i class="fa fa-external-link-square" id="view-product"></i></td>
                    <td class="text-secondary text-center"><i class="fa fa-pencil-square" id="edit-product" data-id="{{$product->id }}"></i></td>
                    <td class="text-danger text-center"><i class="fa fa-trash" id="delete-product"></i></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row d-flex justify-content-center">
        {{ $products->links("pagination::bootstrap-4") }}
    </div>

    <div id="modal-view-product" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-light">View product</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    <div class="form-group">
                        <label for="name">Name product</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="price">Price product</label>
                        <input type="text" name="price" class="form-control" id="money">
                    </div>

                    <div class="form-group">
                        <label for="description">Description product</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-edit-product" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <h5 class="modal-title text-light">Edit product</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    <form action="" method="POST" name="form-update-product">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="idProduct">

                        <div class="form-group">
                            <label for="name">Name product</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="price">Price product</label>
                            <input type="text" name="price" class="form-control" id="money">
                        </div>

                        <div class="form-group">
                            <label for="description">Description product</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-update-product">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script>

        $('#content').on('click', '#view-product', function() {

            var name = $(this).closest('tr').find('td').eq(0).text();
            var description = $(this).closest('tr').find('td').eq(1).text();
            var price = $(this).closest('tr').find('td').eq(2).text();

            $('#modal-view-product').find("input[name='name']").val(name);
            $('#modal-view-product').find("input[name='price']").val(price);
            $('#modal-view-product').find("textarea[name='description']").html(description);
            $('#modal-view-product').modal('show');
        });

        $('#content').on('click', '#edit-product', function() {

            var idProduct = $(this).attr('data-id');
            var name = $(this).closest('tr').find('td').eq(0).text();
            var price = $(this).closest('tr').find('td').eq(2).text();
            var description = $(this).closest('tr').find('td').eq(1).text();

            $('#modal-edit-product').find("input[name='idProduct']").val(idProduct);
            $('#modal-edit-product').find("input[name='name']").val(name);
            $('#modal-edit-product').find("input[name='price']").val(price);
            $('#modal-edit-product').find("textarea[name='description']").html(description);
            $('#modal-edit-product').modal('show');
        });

        $('#content').on('click', '.btn-update-product', function() {

            var idProduct = $('#modal-edit-product').find("input[name='idProduct']").val();

            $.ajax({
                url: "produtos/" + idProduct,
                type: "PUT",
                data: $('form[name="form-update-product"]').serialize(),
                dataType: "json"

            }).done(function(resposta) {
                alert('foi');

            }).fail(function() {
                alert('falhou');

            }).always(function() {
                alert('terminou');
            });
        });


    </script>
@endsection
