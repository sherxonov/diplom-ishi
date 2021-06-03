@extends('layouts.app')

@section('content')

    <div class="container">
        @include('alerts.alert')
        <a href="{{ route('mansab-create') }}" class="btn btn-primary">Yaratish</a>

        <table class="table table-striped table-bordered mt-2">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Nomi</th>
                <th colspan="2" style="text-align:center;">Sozlash</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($mansab as $counter=>$post)
                <tr>
                    <td>{{ ++$counter }}</td>
                    <td>{{ $post->mansab_nomi }}</td>
                    <td width="20px">
                        <a href="{{ route('mansab-edit', $post->id) }}" class="btn btn-success">Edit</a>
                    </td>
                    <td width="20px">
                        <form action="{{ route('mansab-delete', $post->id)}}" method="POST">
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
            {{ $mansab->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
