@extends('master')
@section('content')

{{ Form::open(array('route' => 'collection.store')) }}

	{{ Form::label('name', 'Collections name')}}
	
	{{ Form::text('name') }}

	{{Form::submit('Create collection') }}

{{ Form::close() }}


@stop