@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            @include('alerts.alert')
        </div>
        <h1 class="text-center">Yaratish</h1>
        <form method="POST" action="{{ route('birlik-create') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" name="birlik_nomi" class="form-control"  placeholder="name...." required>
            </div>

            <input type="submit"  value="Saqlash" class="btn btn-success">
        </form>

    </div>
@endsection
