@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit resource</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.resource.index') }}"> Back</a>
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

    <form action="{{ route('admin.resource.update',$resource->id) }}" method="PATCH">
        @csrf

        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form class="form-sample">
                 <div class="row">

                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">First_Name</label>
                        <div class="col-sm-9">
                          <input type="text" name="First_Name" class="form-control" value="{{ $resource->First_Name}}">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Last_Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="Last_Name" class="form-control"  value="{{ $resource->Last_Name}}">
                        </div>
                      </div>
                    </div>

                </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Gender</label>
                       <div class="col-sm-9">
                          <select class="form-control">
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">NIC</label>
                        <div class="col-sm-9">
                            <input type="text" name="NIC" class="form-control"  value="{{ $resource->NIC}}">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"  name="Email"  value="{{ $resource->Email}}">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Designation</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="Designation"  value="{{ $resource->Designation}}">
                          </div>
                        </div>
                      </div>
                    <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="Address"  value="{{ $resource->Address}}">
                              </div>
                            </div>
                          </div>
                </div>
                <div class="row">
              <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Department</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="Department"  value="{{ $resource->Department}}">
              </div>
            </div>
          </div>

        <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Mobile_no</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="Mobile_no"  value="{{ $resource->Mobile_no}}">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Grade</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Grade"  value="{{ $resource->Grade}}">
                  </div>
                </div>
              </div>


                <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Experience</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="Experience"  value="{{ $resource->Experience}}">
                      </div>
                    </div>
                  </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
    @endsection
