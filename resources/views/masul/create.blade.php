@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="text-center">
            <h1>Yaratish</h1>
        </div>
        <div>
            @include('alerts.alert')
        </div>
        <form method = "POST" action= "{{ route('masul-store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="form">
                    <div class="form-group input-group-lg ">
                        <label for="name">Ismi</label>
                        <input type="text" name="shaxs_ismi" class="form-control" id="name" placeholder="Name" required>
                    </div>
                    <div class="form-group input-group-lg ">
                        <label for="phone">Familyasi </label>
                        <input type="test" name="shaxs_familya" class="form-control" id="phone" placeholder="New number" required >
                    </div>
                    <div class="form-group input-group-lg ">
                        <label for="phone">Sharifi </label>
                        <input type="text" name="shaxs_sharif" class="form-control" id="phone" placeholder="Old number" required >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group input-group-lg col-md-6">
                        <label for="cause_id">Mansabi</label>
                        <select name="mansab_id" id = "cause_id" class="form-control" >
                            @foreach($mansab as $index)
                                <option value="{{ $index->id }}">{{ $index->mansab_nomi }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>


            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary " value="Saqlash">
            </div>

        </form>

    </div>
@endsection
