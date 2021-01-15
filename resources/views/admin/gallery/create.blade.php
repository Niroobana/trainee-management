@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New gallery</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('gallery.index') }}"> Back</a>
        </div>
    </div>
</div>

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="container">
<div class="row">
    <div class="col-12">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <ul>

                    @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form class="form-sample">
             <div class="row">
               <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Program_name:</label>
                    <div class="col-sm-9">
                <input type="text" name="Program_name" class="form-control" placeholder="Program_name">
                @if ($errors->has('Program_name'))
                <span class="text-danger">{{ $errors->first('Program_name') }}</span>
            @endif
                   </div>
                 </div>
              </div>
             <div class="col-md-6">
        <div class="form-group row">
            <label class="col-sm-5 col-form-label">Date:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" style="height:50px" name="Date" placeholder="Date">
                @if ($errors->has('Date'))
                <span class="text-danger">{{ $errors->first('Date') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group row">
        <label class="col-sm-5 col-form-label">Image:</label>
        <div class="col-sm-9">
    <input type="file" name="image" class="form-control">
    <div class="col-md-6">
        <button type="submit" class="btn btn-success">Upload</button>
    </div>
</div>
</div>
</div>
<!--<div class="col-md-6">
    <div class="form-group row">
      <label class="exampleFormControlFile1">Choose_Image:</label>
      <div class="col-sm-9">
        <input type="image"class="form-control-Image" style="height:50px" name="Image" placeholder="Image">
        @if ($errors->has('Image'))
        <span class="text-danger">{{ $errors->first('Image') }}</span>
    @endif
</div>
</div>
</div> -->
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
