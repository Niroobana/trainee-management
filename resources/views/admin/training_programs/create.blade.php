@extends('layouts.admin.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Training_program</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.training_programs.index') }}"> Back</a>
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

<form action="{{ route('admin.training_programs.store') }}" method="POST">
    @csrf

    <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form class="form-sample">
             <div class="row">

                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Program_name</label>
                    <div class="col-sm-9">
                     <input type="text" name="Program_name" class="form-control" placeholder="Program_name">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-5 col-form-label">Date</label>
                      <div class="col-sm-9">
                        <input type="text" name="Date" class="form-control" placeholder="Date">
                      </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Location</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="Location" placeholder="Location">
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Program_type</label>
                       <div class="col-sm-9">
                          <select class="form-control" name="id">
                            <option value="">Diploma</option>
                            <option>Certificate</option>
                            <option>Other</option>
                          </select>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Duration</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  name="Duration" placeholder="Duration">
                    </div>
                </div>
            </div>
        <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-5 col-form-label">Content</label>
                    <div class="col-sm-9">
                        <input type="text"class="form-control"  name="Content" placeholder="Content" >
                </div>
            </div>
        </div>
    </div>
    <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">Target_group</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"  name="Target_group" placeholder="Target_group">
                </div>
            </div>
        </div>
   <div class="col-md-6">
            <div class="form-group row">
                <label class="col-sm-5 col-form-label">No_of_trainees</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control"  name="No_of_trainees">
                </div>
            </div>
         </div>
        </div>
        <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">No_of_resources</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control"  name="No_of_resources">
                </div>
            </div>
         </div>
         <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-5 col-form-label">No_of_staffs</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="No_of_staffs">
                </div>
            </div>
        </div>
    </div>
        </form>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </div>
    </div>
    </div>

</form>
@endsection
