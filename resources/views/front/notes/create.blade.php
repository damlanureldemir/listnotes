@extends('front.layout.master')
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>

    @endif
    <form action="{{route('notes.addnote')}}" method="POST">
        <div class="mb-3">
            @csrf
            <label for="exampleInputEmail1" class="form-label">Başlık</label>
            <input  type="text"  name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">İçerik</label>
            <textarea  class="form-control" name="content" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Gönder</button>
    </form>
@endsection
