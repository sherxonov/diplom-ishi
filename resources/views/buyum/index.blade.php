@extends('layouts.app')

@section('content')
        <a href="{{ route('buyum-create') }}" class="btn btn-primary">Yaratish</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>№</th>
            <th>Name</th>
            <th>№1</th>
            <th>№2</th>
            <th>Mansabi</th>
            <th colspan="2" class="text-right">Sozlash</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($buyum as $counter => $apply)
            <tr>
                <th>{{  ++$counter  }}</th>
                <td>{{ $apply->buyum_nomi }}</td>
                <td>{{ $apply->yangi_soni }}</td>
                <td>{{ $apply->eski_soni }}</td>
                <td>{{ $apply->birlik->birlik_nomi }}</td>
                <td width="20px">
                    <a href="{{ route('buyum-edit', $apply->id) }}" class="btn btn-success">Edit</a>
                </td>
                <td width="20px">
                    <form action="{{ route('buyum-delete', $apply->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger"
                               onclick="return confirm('Are you sure?')">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="pagination justify-content-end">
        {{$buyum->links('pagination::bootstrap-4')}}
    </div>

@endsection
