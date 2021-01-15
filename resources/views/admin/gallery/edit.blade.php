@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit gallery</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('gallery.index') }}"> Back</a>
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

    <form action="{{ route('gallery.update',$resource->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form class="form-sample">
                 <div class="row">

                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Program_Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="Program_Name" class="form-control" value="{{ $resource->Program_Name}}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date</label>
                          <div class="col-sm-9">
                            <input type="text" name="Date" class="form-control" value="{{ $resource->Date}}">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Image</label>
                          <div class="col-sm-9">
                            <input type="text" name="Image" class="form-control" value="{{ $resource->Image}}">
                          </div>
                        </div>
                      </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
    @endsection
