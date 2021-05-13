@extends('layouts.app')

@section('title', 'Database')

@section('content')
<div class="row">
	<div class="col-sm-5">
		<h3>Dati:</h3>
		<form method="POST" action="{{route('db')}}">
			@csrf
			<div class="mb-3">
				<label for="host" class="form-label">Host:</label>
				<input type="text" class="form-control" id="host" name="host" value="{{old('host', $host ?? '')}}">
			</div>
			<div class="mb-3">
				<label for="user" class="form-label">Utente:</label>
				<input type="text" class="form-control" id="user" name="user" value="{{old('user', $user ?? '')}}">
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">Password:</label>
				<input type="text" class="form-control" id="password" name="password" value="{{old('password', $password ?? '')}}">
			</div>
			<div class="mb-3">
				<label for="database" class="form-label">Database:</label>
				<input type="text" class="form-control" id="database" name="database" value="{{old('database', $database ?? '')}}">
			</div>
			<button type="submit" class="btn btn-primary">Controlla connessione</button>
		</form>
	</div>
	<div class="offset-1 col-sm-5">
		<h3>Risultato:</h3>

		{!! $result !!}
	</div>
</div>
@endsection