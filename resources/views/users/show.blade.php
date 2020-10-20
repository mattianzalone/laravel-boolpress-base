@extends('layouts.app')
@section('content')
    user index
    <h2>Dettaglio utente</h2>
    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->avatar->avatar }}</li>
        <li>{{ $user->avatar->telefono }}</li>
    </ul>
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Cancella Utente">
    </form>
    <h3>Post che ha scritto</h3>
    @foreach ($user->posts as $post)
        <div>
            <p>Titolo: {{ $post->title }}</p>
            <p>Titolo: {{ $post->body }}</p>
        </div>
    @endforeach
@endsection