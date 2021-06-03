@extends('layouts.app')

@section('content')

    <div class="container">
        @include('alerts.alert')
        <a href="{{ route('birlik-cr') }}" class="btn btn-primary">Yaratish</a>

        <table class="table table-striped table-bordered mt-2">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Nomi</th>
                <th colspan="2" style="text-align:center;">Sozlash</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($birlik as $counter=>$post)
                <tr>
                    <td>{{ ++$counter }}</td>
                    <td>{{ $post->birlik_nomi }}</td>
                    <td width="20px">
                        <a href="{{ route('birlik-edit', $post->id) }}" class="btn btn-success">Edit</a>
                    </td>
                    <td width="20px">
                        <form action="{{ route('birlik-delete', $post->id)}}" method="POST">
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
            {{ $birlik->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
