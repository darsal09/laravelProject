@extends('layout')

@section('content')
    @foreach( $users AS $user )
		<p>{{ $user->name}}</p>
	@endforeach
@stop