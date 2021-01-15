@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>COORDINATOR</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('coordinator.create') }}"> Create New Coordinator</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Coordinator_name</th>
            <th>Email</th>
            <th>designation</th>
            <th>City</th>
            <th>Department</th>
            <th>Mobile_no</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($coordinators as $coordinator)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $coordinator->coordinator_name }}</td>
            <td>{{ $resource->Email }}</td>
            <td>{{ $resource->designation }}</td>
            <td>{{ $resource->City }}</td>
            <td>{{ $resource->Department }}</td>
            <td>{{ $resource->Mobile_no }}</td>
            <td>
                <form action="{{ route('coordinator.destroy',$coordinators->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('coordinator.show',$coordinators->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('coordinator.edit',$coordinators->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $coordinators->links() !!}

@endsection
