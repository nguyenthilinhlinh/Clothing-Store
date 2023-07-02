@extends('admin.maincontent')
@section('useraccount')
<!-- Main content -->
<section class="content">
    <div class="card" style="width: 70%">
        <div class="card-header row">
            <h3 class="card-title col-lg-4">Account Manage</h3>
            <div class="col-lg-4"></div>
            <button type="button" class="btn btn-light btn-outline-light col-lg-4"><a href="#" data-toggle="modal" data-target="#modal-lg-c" class="card-link">Register New Account</a></button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table>
                <tr>
                    <th>Admin Account</th>
                    <th>Customer Account</th>
                </tr>
                <tr>
                    <td>
                        <table border="1">
                            <tr>
                                <th>Id</th>
                                <th>Email</th>
                                <th>Created Date</th>
                                <th>Status</th>
                            </tr>
                            @foreach($admins as $a)
                            <tr>
                                <td>{{$a->id}}</td>
                                <td>{{$a->email}}</td>
                                <td>{{$a->created_date}}</td>
                                <td>{{$a->status}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </td>
                    <td style="vertical-align: top;">
                        <table border="1">
                            <tr>
                                <th>Id</th>
                                <th>Email</th>
                                <th>Created Date</th>
                                <th>Status</th>
                            </tr>
                            @foreach($guests as $g)
                            <tr>
                                <td>{{$g->id}}</td>
                                <td>{{$g->email}}</td>
                                <td>{{$g->created_date}}</td>
                                <td>{{$g->status}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </td>
                </tr>
            </table>


        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->
{{-- ADD DIALOG --}}
<div class="modal fade" id="modal-lg-c">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Register New Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class=" row justify-content-center align-items-center" style="margin-bottom: 3em;">
                    <a class="btn btn-primary col-md-4" href="{{ route('admin.signup') }}"> Admin Account</a>
                </div>
                <div class=" row justify-content-center align-items-center">
                    <a class="btn btn-primary col-md-4" href="{{url('/signups')}}">New Customer Account</a>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
{{-- UPDATE DIALOG --}}
<form method="POST" action="{{route('updateCategory')}}" enctype="multipart/form-data">
    <div class="modal fade" id="modal-lg-c2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Chanage Account Information</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @csrf
                <div class="modal-body row">

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="">
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" name="email" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                            <div class="col-md-6">
                                <input type="radio" name="status" id="">Available<br>
                                <input type="radio" name="status" id="">Unavailable
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
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
<!-- /.modal -->

@push('active-script')
<script>
    $('#account').addClass('active');
    $('#nav_manage').addClass('active');
</script>
@endpush
@endsection