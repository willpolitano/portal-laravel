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
                    <td class="text-danger text-center"><i class="fa fa-trash" id="delete-product" data-id="{{$product->id }}"></i></td>
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
                        <input type="text" name="name" class="form-control" disabled="disabled">
                    </div>

                    <div class="form-group">
                        <label for="price">Price product</label>
                        <input type="text" name="price" class="form-control" id="money" disabled="disabled">
                    </div>

                    <div class="form-group">
                        <label for="description">Description product</label>
                        <textarea class="form-control" name="description" rows="3" disabled="disabled"></textarea>
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

    <div id="modal-delete-product" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-light">Delete product</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    <h5>Want to delete this product?</h5>

                    <form action="" method="POST" name="form-delete-product">
                        @csrf
                        @method('DELETE')

                        <input type="hidden" name="idProduct">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-delete-product">Delete</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>                </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/product.js') }}"></script>
@endsection
