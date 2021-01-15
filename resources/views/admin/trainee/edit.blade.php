@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit trainee</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.trainee.index') }}"> Back</a>
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

    <form action="{{ route('admin.trainee.update',$trainee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form class="form-sample">
                 <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="col-sm-3 col-form-label">First_Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="First_name" value="{{ $trainee->First_name }}" class="form-control" placeholder="Name">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Last_Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="Last_Name" value="{{ $trainee->last_name }}" class="form-control" placeholder="Last_Name">
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
                            <input type="text" name="NIC" class="form-control" value="{{ $trainee->NIC }}" placeholder="NIC">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $trainee->Email }}"  name="Email" placeholder="Email">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Designation</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $trainee->Designation }}"  name="Designation" placeholder="Designation" />
                          </div>
                        </div>
                      </div>
                    <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" value="{{ $trainee->Address }}" name="Address" placeholder="Address" />
                              </div>
                            </div>
                          </div>
                </div>
                <div class="row">
              <div class="col-md-6">
             <div class="form-group row">
               <label class="col-sm-3 col-form-label">Department</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="{{ $trainee->Department }}" name="Department" placeholder="Department"/>
              </div>
            </div>
          </div>

        <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Category</label>
              <div class="col-sm-9">
                <select class="form-control">
                  <option>Category1</option>
                  <option>Category2</option>
                  <option>Category3</option>
                  <option>Category4</option>
                </select>
              </div>
            </div>
          </div>
     </div>
     <div class="row">
        <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Mobile_no</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" value="{{ $trainee->Mobile_no }}" name="Mobile_no" placeholder="Mobile_no" />
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
