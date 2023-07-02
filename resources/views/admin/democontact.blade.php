@extends('admin.maincontent')
@section('contact')
<div class="container">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Contact</h3>
    </div>
    <div class="card-body">
      <div class="jsgrid-grid-header jsgrid-header-scrollbar">
        <table class="jsgrid-table">
          <tr class="jsgrid-header-row">
            <th style="width: 10px;" class="jsgrid-header-cell jsgrid-header-sortable">Id</th>
            <th style="width: 50px;" class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable">Name</th>
            <th style="width: 50px;" class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable">Email</th>
            <th style="width: 50px;" class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable">Phone</th>
            <th style="width: 50px;" class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable">Subject</th>
            <th style="width: 50px;" class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable">Message</th>
            <th style="width: 40px;" class="jsgrid-header-cell jsgrid-header-sortable">Created Date</th>
            {{-- <th style="width: 100px;" class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable">Country</th> --}}
            <th style="width: 40px;" class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable">Option</th>
          </tr>
        </table>
      </div>
      <div class="jsgrid-grid-body">
        <table class="jsgrid-table">
          <tbody>
            @foreach($contacts as $ct)
            @if($ct->id%2!=0)
            <tr class="jsgrid-row">
              <td style="width: 10px;" class="jsgrid-cell">{{$ct->id}}</td>
              <td style="width: 50px;" class="jsgrid-cell">{{$ct->contact_name}}</td>
              <td style="width: 50px;" class="jsgrid-cell">{{$ct->email}}</td>
              <td style="width: 50px;" class="jsgrid-cell">{{$ct->phone}}</td>
              <td style="width: 50px;" class="jsgrid-cell">{{$ct->subject}}</td>
              <td style="width: 50px;" class="jsgrid-cell">{{$ct->message}}</td>
              <td style="width: 40px;" class="jsgrid-cell jsgrid-align-center">{{$ct->created_date}}</td>
              <td style="width: 40px;" class="jsgrid-cell jsgrid-align-center">
                <a href="#" class="ajax-get-cat" value="{{$ct->id}}" data-toggle="modal" data-target="#modal-lg-c2">Edit </a> |
                <a href="#" class="ajax-get-cat" value="{{$ct->id}}" data-toggle="modal" data-target="#modal-warning-c">Delete</a>
              </td>
            </tr>
            @endif
            @if($ct->id%2==0)
            <tr class="jsgrid-alt-row">
              <td style="width: 10px;" class="jsgrid-cell">{{$ct->id}}</td>
              <td style="width: 50px;" class="jsgrid-cell">{{$ct->contact_name}}</td>
              <td style="width: 50px;" class="jsgrid-cell">{{$ct->email}}</td>
              <td style="width: 50px;" class="jsgrid-cell">{{$ct->phone}}</td>
              <td style="width: 50px;" class="jsgrid-cell">{{$ct->subject}}</td>
              <td style="width: 50px;" class="jsgrid-cell">{{$ct->message}}</td>
              <td style="width: 40px;" class="jsgrid-cell jsgrid-align-center">{{$ct->created_date}}</td>
              <td style="width: 40px;" class="jsgrid-cell jsgrid-align-center">
                <a href="#" class="ajax-get-cat" value="{{$ct->id}}" data-toggle="modal" data-target="#modal-lg-c2">Edit </a> |
                <a href="#" class="ajax-get-cat" value="{{$ct->id}}" data-toggle="modal" data-target="#modal-warning-c">Delete</a>
              </td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@push('active-script')
<script>
    $('#contact').addClass('active');
    $('#nav_manage').addClass('active');
</script>
@endpush
@endsection