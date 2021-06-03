@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            @include('alerts.alert')
        </div>
        <h1 class="text-center">Yangilash</h1>
        <form method="POST" action="{{ route('birlik-update', $model->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <input type="text" name="birlik_nomi" class="form-control"  value="{{ $model->birlik_nomi }}" required>
            </div>

            <button type="submit" class="btn btn-success">Saqlash</button>
        </form>

    </div>
@endsection
