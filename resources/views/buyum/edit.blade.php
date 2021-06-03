@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="text-center">
            <h1>Yangilash</h1>
        </div>
        <div>
            @include('alerts.alert')
        </div>
        <form method = "POST" action= "{{ route('buyum-update', $buyum->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
                <div class="form">
                    <div class="form-group input-group-lg ">
                        <label for="name">Nomi</label>
                        <input type="text" name="buyum_nomi" value="{{ $buyum->buyum_nomi }}" class="form-control" id="name" placeholder="Name" required>
                    </div>
                    <div class="form-group input-group-lg ">
                        <label for="phone">Yangi soni </label>
                        <input type="text" name="yangi_soni" value="{{ $buyum->yangi_soni }}" class="form-control" id="phone" placeholder="New number" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                    </div>
                    <div class="form-group input-group-lg ">
                        <label for="phone">Eski soni </label>
                        <input type="text" name="eski_soni" value="{{ $buyum->eski_soni }}" class="form-control" id="phone" placeholder="Old number" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group input-group-lg col-md-6">
                        <label for="cause_id">Birlik</label>
                        <select name="birlik_id" id = "cause_id" class="form-control" >
                            @foreach($birlik as $index)
                                <option value="{{ $index->id }}">{{ $index->birlik_nomi }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>


            <div class="form-group">
                <input type="submit" class="btn btn-primary " value="Saqlash">
            </div>

        </form>

    </div>
@endsection
