@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments" class="active">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')
    <h1>Toernooi aanpassen</h1>

    @if($errors->any())
        <ul class="errors">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

	<form action="{{ route('tournaments.update', $tournament) }}" method="POST">
		@csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Naam toernooi</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $tournament->name }}">
        </div>
        <br>
        <div class="form-group">
            <label for="date">Datum</label>
            <input type="date" id="date" name="date" class="form-control" value="{{ $tournament->date }}">
        </div>
        <br>
        <div class="form-group">
            <label for="start_time">Start Tijd</label>
            <input type="time" id="start_time" name="start_time" class="form-control" value="{{ $tournament->time }}">
        </div>
        <br>
		<button type="submit">Opslaan</button>
	</form>
@endsection
