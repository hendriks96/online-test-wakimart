@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('create') }}"> Create New Departement</a>
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
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($departements as $departement)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $departement->name }}</td>
                <td>{{ $departement->email }}</td>
                <td>
                    <form action="{{ route('destroy', $departement->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('show', $departement->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('edit', $departement->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $departements->links() !!}
@endsection
