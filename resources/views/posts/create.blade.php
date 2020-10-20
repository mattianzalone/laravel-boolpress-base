@extends('layouts.app')
@section('content')
<form action="{{route('posts.store')}}" method="post">
    @csrf
    {{-- scriviamo a mano l'input --}}
    <input name="_method" type="hidden" value="POST">
    {{-- oppure usiamo blade --}}
    @method('POST')
    <select name="user_id">
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->id }}</option>
        @endforeach
    </select>
    <label for="title">Titolo</label>
    <input type="text" name="title" placeholder="Nome">
    <label for="content">Testo</label>
    <textarea name="body" id="" cols="80" rows="8"></textarea>
    <input type="submit" value="Invia">
    </form>
@endsection