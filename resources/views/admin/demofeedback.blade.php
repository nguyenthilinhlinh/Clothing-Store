@extends('admin.maincontent')
@section('feedback')
<div class="container">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Feedback</h3>
    </div>
    <div class="card-body">
      <div id="fbTbl"></div>
    </div>
  </div>
</div>
{{-- DELETE CONFIRM DIALOG --}}
<div class="modal fade" id="modal-warning-fb">
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
                  <button type="submit" class="btn btn-outline-dark delBtn" data-dismiss="modal">Delete</button>              
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
    $('#feedback').addClass('active');
    $('#nav_manage').addClass('active');
</script>
@endpush
@endsection