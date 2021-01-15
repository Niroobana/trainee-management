@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>RESOURCES</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.resource.create') }}"> Create New resource</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="col-lg-50 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>First_Name</th>
            <th>Last_Name</th>
            <th>Gender</th>
            <th>NIC</th>
            <th>Email</th>
            <th>Designation</th>
            <th>Address</th>
            <th>Department</th>
            <th>Mobile_no</th>
            <th>Grade</th>
            <th>Experience</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
        @foreach ($resources as $resource)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $resource->First_Name }}</td>
            <td>{{ $resource->Last_Name}}</td>
            <td>{{ $resource->Gender}}</td>
            <td>{{ $resource->NIC}}</td>
            <td>{{ $resource->Email }}</td>
            <td>{{ $resource->Designation }}</td>
            <td>{{ $resource->Address }}</td>
            <td>{{ $resource->Department }}</td>
            <td>{{ $resource->Mobile_no }}</td>
            <td>{{ $resource->Grade }}</td>
            <td>{{ $resource->Experience }}</td>

            <td>
                <form action="{{ route('admin.resource.destroy',$resource->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('admin.resource.show',$resource->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('admin.resource.edit',$resource->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
</div>
</div>
    {!! $resources->links() !!}

@endsection
