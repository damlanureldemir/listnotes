@extends('front.layout.master')
@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <button class="btn btn-success">Not oluştur</button>
    <br>

    Bu sayfada notlar listelenecek
@endsection
