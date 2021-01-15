@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show gallery</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('gallery.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Program_name:</strong>
                    {{ $resource->First_Name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date:</strong>
                    {{ $resource->Gender}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    {{ $resource->Last_Name }}
                </div>
            </div>


    </div>
@endsection
