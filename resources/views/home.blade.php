@extends('content')

@section('cont')
    <div class="bg-dark">

        <div class="text-center text-dark rounded-pill" style="padding: 20px" >
            <img src="{{$img}}" alt="" class=" img-fluid rounded" style="width: 20%">
        </div>
        @for ($i = 1; $i <= 3; $i++)
            <div class="text-center text-dark bg-info rounded" style="margin: 30px 43%">
                <h3>Iterasi ke - {{$i}}</h3>
                <img src="{{$img}}" alt="" class="w-75">
                <h3>Gambar ke - {{$i}}</h3>
            </div>
        @endfor

        <div class="text-center text-dark rounded-pill" style="padding: 20px" >
        </div>

    </div>


@endsection
