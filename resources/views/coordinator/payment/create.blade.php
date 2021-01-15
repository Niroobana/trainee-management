@extends('layouts.admin.master')

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel">Add New Payment</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('FacilitiesPayment.index') }}"> Back</a>
        </div>


<!--@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->

@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
    @php
        Session::forget('success');
    @endphp
</div>
@endif

<form action="{{ route('payment.store') }}" method="POST">
    @csrf


<!--<div class="col-12 grid-margin stretch-card">
<div class="card">
 <div class="card-body"> -->
<div class="modal-body">
<form class="form-sample">
<!--<div class="col-md-6"> -->
<div class="form-group row">
<label class="col-sm-5 col-form-label">Course_name</label>
<!-- <div class="col-sm-14"> -->
<input type="text" name="Course_name"  class="form-control" placeholder="Course_name">
 @if ($errors->has('Course_name'))
<span class="text-danger">{{ $errors->first('Course_name') }}</span>
@endif
 </div>

<!--<div class="col-md-6"> -->
<div class="form-group row">
 <label class="col-sm-5 col-form-label">Duration</label>
     <!-- <div class="col-sm-14"> -->
    <input type="text" class="form-control"  name="Duration" placeholder="Duration">
         @if ($errors->has('Duration'))
    <span class="text-danger">{{ $errors->first('Duration') }}</span>
     @endif
   </div>

<!--<div class="col-md-6"> -->
            <div class="form-group row">
                <label class="col-sm-5 col-form-label">Course_type</label>
                <!-- <div class="col-sm-14"> -->
                <input type="text" class="form-control"  name="Course_type" placeholder="Course_type">
                @if ($errors->has('Course_type'))
                <span class="text-danger">{{ $errors->first('Course_type') }}</span>
            @endif
                </div>

 <!--<div class="col-md-6"> -->
            <div class="form-group row">
                <label class="col-sm-5 col-form-label">Target_group</label>
               <!-- <div class="col-sm-14"> -->
                    <input type="text" class="form-control" name="Target_group" placeholder="Target_group">
                    @if ($errors->has('Target_group'))
                    <span class="text-danger">{{ $errors->first('Target_group') }}</span>
                @endif
                </div>


            <!--<div class="col-md-6"> -->
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Description</label>
                   <!-- <div class="col-sm-14"> -->
                        <textarea type="text" class="form-control" style="height:100px" name="Description" placeholder="Description" > </textarea>
                        @if ($errors->has('Description'))
                        <span class="text-danger">{{ $errors->first('Description') }}</span>
                    @endif
                    </div>
               </form>
    </div>
        <div class="modal-footer">
       <!-- <div class="col-xs-12 col-sm-12 col-md-12 text-center">-->
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
</div>
</div>
</div>
@endsection
