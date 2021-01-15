@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>TRAINEES</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.trainee.create') }}"> Create New trainee</a>
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
        <tr >
            <th>id</th>
            <th>First_Name</th>
            <th>Last_Name</th>
            <th>Gender</th>
            <th>NIC</th>
            <th>Email</th>
            <th>Designation</th>
            <th>Address</th>
            <th>Department</th>
            <th>Category</th>
            <th>Mobile_no</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trainees as $trainee)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $trainee->First_Name }}</td>
            <td>{{ $trainee->Last_Name }}</td>
            <td>{{ $trainee->Gender }}</td>
            <td>{{ $trainee->NIC }}</td>
            <td>{{ $trainee->Email }}</td>
            <td>{{ $trainee->Designation }}</td>
            <td>{{ $trainee->Address }}</td>
            <td>{{ $trainee->Department }}</td>
            <td>{{ $trainee->Category }}</td>
            <td>{{ $trainee->Mobile_no }}</td>
            <td>
                 <form action="{{ route('admin.trainee.destroy',$trainee->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('admin.trainee.show',$trainee->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('admin.trainee.edit',$trainee->id) }}">Edit</a>
                     @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
                </td>
        </tr>
        @endforeach
    </tbody>
    </table>

    {!! $trainees->links() !!}

@endsection
