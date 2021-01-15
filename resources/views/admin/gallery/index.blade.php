@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>GALLERY</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('gallery.create') }}"> Create New gallery</a>
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
            <th>gallery_id</th>
            <th>Program_name</th>
            <th>Date</th>
            <th>Image</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($galleries as $gallery)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $gallery->Program_name }}</td>
            <td>{{ $gallery->Date }}</td>
            <td>{{ $gallery->Image }}</td>
            <td>
                <form action="{{ route('gallery.destroy',$gallery->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('gallery.show',$gallery->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('gallery.edit',$gallery->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $galleries->links() !!}

@endsection
