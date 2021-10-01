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
        <a href="{{ route('teams.create') }}">+ nieuw team</a>
    </div>

    <table class="table">
        <tr>
            <th>Team</th>
            <th>Type</th>
            <th>&nbsp;</th>
        </tr>
        @foreach($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->type }}</td>
                <td><a href="{{ route('teams.edit', $team->id) }}">Aanpassen</a></td>
            </tr>
        @endforeach
    </table>

@endsection
