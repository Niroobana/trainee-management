@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Payment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('payment.create') }}"> Create New Payment</a>
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
            <th>Course_name</th>
            <th>Duration</th>
            <th>Course_type</th>
            <th>Target_group</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
        @foreach ($payments as $payment)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $payment->Course_name }}</td>
            <td>{{ $payment->Duration }}</td>
            <td>{{ $payment->Course_type }}</td>
            <td>{{ $payment->Target_group }}</td>
            <td>{{ $payment->Description }}</td>
            <td>
                <form action="{{ route('payment.destroy',$course->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('payment.show',$payment->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('payment.edit',$payment->id) }}">Edit</a>

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
    {!! $payments->links() !!}

@endsection
