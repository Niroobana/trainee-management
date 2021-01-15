@extends('layouts.admin.master')
@section('content')

<<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit facilities_payment</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('FacilitiesPayment.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('FacilitiesPayment.update',$course->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course_name:</strong>
                <input type="text" name="Course_name" class="form-control" placeholder="Course_name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Duration:</strong>
                <textarea class="form-control" style="height:50px" name="Duration" placeholder="Duration"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Course_type:</strong>
                <textarea class="form-control" style="height:50px" name="Course_type" placeholder="Designation"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Target_group:</strong>
                <textarea class="form-control" style="height:100px" name="Target_group"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Decription:</strong>
                <textarea class="form-control" style="height:50px" name="Decription" ></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection
