@extends('admin.maincontent')
@section('category')
<!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header row">
                <h3 class="card-title col-lg-4">Category</h3>
                <div class="col-lg-4"></div>
                <button type="button" class="btn btn-light btn-outline-light col-lg-4"><a href="#" data-toggle="modal" data-target="#modal-lg-c" class="card-link">Create New Category</a></button>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div id="catTbl"></div>                
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
{{-- ADD DIALOG --}}
<form method="POST" action="{{route('createCategory')}}" enctype="multipart/form-data">
    <div class="modal fade" id="modal-lg-c">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Create New Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="text" id="category_name" name="category_name" placeholder="Product Name" /><br>
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
    <!-- /.modal -->
</form>
{{-- UPDATE DIALOG --}}
<form method="POST" action="{{route('updateCategory')}}" enctype="multipart/form-data">
    <div class="modal fade" id="modal-lg-c2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @csrf
                <div class="modal-body row">
                    <div class="col-md-2" style="margin-bottom: 3rem;">
                        <label style="margin-bottom: 1.5rem;" for="">Name</label><br>
                        <label for="">Status</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" style="margin-bottom: 1.5rem;" id="category_name_old" name="category_name" placeholder="Category Name" value="" /><br>
                        <input type="radio" name="status" value="1"> Available <br>
                        <input type="radio" name="status" value="0"> Unavailable
                        <input type="hidden" id="id" name="id">
                    </div>
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
    <!-- /.modal -->
</form>
{{-- DELETE CONFIRM DIALOG --}}
<div class="modal fade" id="modal-warning-c">
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
                <button type="button" class="btn btn-outline-dark "><a class='delBtn'>Delete</a></button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</div>
@push('active-script')
<script>
    $('#cat').addClass('active');
    $('#nav_manage').addClass('active');
</script>
@endpush
@endsection
