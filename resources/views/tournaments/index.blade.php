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

    <h1>Toernooien</h1>
    <div class="newTournamentDiv" >
        <a href="{{ route('tournaments.create') }}">+ nieuw toernooi</a>
    </div>

    <table class="table">
        <tr>
            <th>Toernooi</th>
            <th>Datum</th>
            <th>Tijd</th>
            <th>&nbsp;</th>
        </tr>
        @foreach($tournaments as $tournament)
            <tr>
                <td>{{ $tournament->name }}</td>
                <td>{{ date('d-m-Y', strtotime($tournament->date)) }}</td>
                <td>{{date('H-i', strtotime($tournament->time))}}</td>
                <td><a href="{{ route('tournaments.edit', $tournament->id) }}">Aanpassen</a></td>
            </tr>
        @endforeach
    </table>

@endsection
