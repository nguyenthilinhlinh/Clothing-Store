@extends('admin.maincontent')
@section('product')
<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header row">
            <h3 class="card-title col-lg-3">Products</h3>
            <div class="col-lg-4"></div>
            <button type="button" class="btn btn-light btn-outline-light col-lg-4"><a href="#" data-toggle="modal" data-target="#modal-lg" class=" card-link">Add New Product</a></button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="prdTbl"></div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
<!-- /.content-wrapper -->

<!-- UPDATE -->
<form method="POST" action="{{route('updateProduct')}}" enctype="multipart/form-data">
    <div class="modal" id="modal-lg-2">
        <div class="modal-dialog modal-lg" style='width:auto'>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @csrf
                <div class="modal-body row">
                    <div class="col-md-6 row">
                        <div>
                            <div class="row">
                                <label class="col-md-6">Product Name</label>
                                <input class="col-md-6" type="text" id="product_name_selected" name="product_name" style="margin-bottom: 1em;" placeholder="Product Name" value="" />
                            </div>
                            <div class="row"> 
                                <label class="col-md-6">Category</label>
                                <div class="col-md-6 form-group">
                                    <select id="category_selected" class="custom-select" name="category_id" style="margin-bottom: 1em;">
                                        @foreach($Category as $c)
                                        <option class="option" value="{{$c->id}}">{{$c->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-6">Price</label>
                                <input class="col-md-6" type="number" id="price_selected" name="price" placeholder="Price" value="" style="margin-bottom: 1em;" />
                            </div>
                            <div class="row">
                                <label class="col-md-6">Quantity</label>
                                <input class="col-md-6" type="number" id="quantity_selected" name="quantity" placeholder="Quantity" value="" style="margin-bottom: 1em;">
                            </div>
                            <div class="row">
                                <label class="col-md-6">Status</label>
                                <div class="col-md-6 form-group">
                                    <select id="status_selected" class="custom-select" name="status" style="width: 13em;">
                                        <option class="option" value="0">Unavailable</option>
                                        <option class="option" value="1">Available</option>
                                        <option class="option" value="2">Available / Main Product </option>
                                        <option class="option" value="3">Available / Home Page </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-6">Description</label>
                                <textarea class="col-md-6" rows="3" cols="auto" type="" id="description_selected" placeholder="Description" name="description" value="" style="margin-bottom: 1em;"></textarea>
                            </div>
                            <div class="col-md-3">
                                <input type="hidden" id="id_selected" name='id'>
                                <input type="hidden" id="asset" name='asset' value="{{asset('storage/img/')}}">
                                <button id="imgpkr" type="button" class="btn btn-primary" data-toggle="modal" data-target="#imagePicker" style="width:200px; margin:5px auto;">Image Update</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 row" id="images-container" style="height:500px; overflow:scroll"></div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</form>

<!-- ADD -->
<form method="POST" action="{{route('createProduct')}}" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table>
                        <tr>
                            <td><label for="">Product Name: </label></td>
                            <td><input type="text" id="product_name" name="product_name" style="margin: 5px 0 10px 0;" /></td>
                        </tr>
                        <tr>
                            <td><label>Category: </label></td>
                            <td><select class="custom-select" name="category_id">
                                    @foreach($Category as $c)
                                    <option value="{{$c->id}}">{{$c->category_name}}</option>
                                    @endforeach
                                </select></td>
                        </tr>
                        <tr>
                            <td><label for="">Price: </label></td>
                            <td><input type="number" id="price" name="price" style="margin: 5px 0 10px 0;" /></td>
                        </tr>
                        <tr>
                            <td><label for="">Quantity: </label></td>
                            <td><input type="number" name="quantity" style="margin: 5px 0 10px 0;"></td>
                        </tr>
                        <tr>
                            <td><label for="">Description: </label></td>
                            <td><input type="text" name="description" style="margin: 5px 0 10px 0;"></td>
                        </tr>
                        <tr>
                            <td><label for="">Photo: </label></td>
                            <td><input input type="file" multiple="multiple" name="photos[]" style="margin: 5px 0 10px 0;"></td>
                        </tr>
                    </table>
                    <!-- <label for="">Product Name: </label>
                    <input type="text" id="product_name" name="product_name" /><br>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="custom-select" name="category_id">
                            @foreach($Category as $c)
                            <option value="{{$c->id}}">{{$c->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="">Price: </label>
                    <input type="number" id="price" name="price" style="margin: 5px 0 10px 0;" /><br>
                    <label for="">Quantity: </label>
                    <input type="number" name="quantity" style="margin: 5px 0 10px 0;"><br>
                    <label for="">Description: </label>
                    <input type="text" name="description" style="margin: 5px 0 10px 0;"><br>
                    <input input type="file" multiple="multiple" name="photos[]" style="margin: 5px 0 10px 0;"><br> -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add New Product</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</form>
<!-- /.modal -->

<!-- Delete -->
<!-- /.modal -->
<div class="modal fade" id="modal-warning">
    <div class="modal-dialog">
        <div class="modal-content bg-warning">
            <div class="modal-header">
                <h4 class="modal-title">Delete this Entry</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure?&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-dark "><a class="delBtn">Delete</a></button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Image Picker -->
<form action="{{route('updateImage')}}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="modal" tabindex="-1" aria-labelledby="imagePicker" aria-hidden="true" id="imagePicker">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="wall row"></div>
                    <div>
                        <br>
                        <p>New Image Selected</p>
                        <div class="row" id="preview"></div>
                    </div>
                    <div class="custom-file mb-3 col-md-5">
                        <input type="file" class="custom-file-input" id="updimg" multiple="multiple" name="photos[]">
                        <label class="custom-file-label" for="validatedCustomFile">Add Images</label>
                    </div>
                </div>
                <div class="modal-footer row">
                    <input type="submit" class="btn btn-primary" value="Save changes">
                    <button id="delImg" type="button" class="btn btn-primary" data-dismiss="modal">Delete Images</button>
                    <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="imgpkr" id="imgpkr_prdid">
</form>
@push('active-script')
<script>
    $('#prd').addClass('active');
    $('#nav_manage').addClass('active')
</script>
@endpush
@endsection