@extends('layouts.app')

@section('title', 'PHP Info')

@section('content')
	{!! phpinfo() !!}
@endsection