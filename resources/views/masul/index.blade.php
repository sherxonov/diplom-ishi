@extends('layouts.app')

@section('content')
    <a href="{{ route('masul-create') }}" class="btn btn-primary">Yaratish</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>№</th>
            <th>Ismi</th>
            <th>Familyasi</th>
            <th>Sharifi</th>
            <th>Mansabi</th>
            <th colspan="2" class="text-right">Sozlash</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($masul as $counter => $apply)
            <tr>
                <th>{{  ++$counter  }}</th>
                <td>{{ $apply->shaxs_ismi }}</td>
                <td>{{ $apply->shaxs_familya }}</td>
                <td>{{ $apply->shaxs_sharif }}</td>
                <td>{{ $apply->mansab->mansab_nomi }}</td>
                <td width="20px">
                    <a href="{{ route('masul-edit', $apply->id) }}" class="btn btn-success">Edit</a>
                </td>
                <td width="20px">
                    <form action="{{ route('masul-delete', $apply->id)}}" method="POST">
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
        {{$masul->links('pagination::bootstrap-4')}}
    </div>

@endsection
