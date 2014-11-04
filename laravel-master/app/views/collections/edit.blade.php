@extends('master')
@section('content')

{{ Form::model($collection, array('route' => array('collection.update', $collection->id), 'method' => 'PUT')) }}

	{{ Form::label('name', 'Collections name')}}
	
	{{ Form::text('name', $collection->name) }}

	{{Form::submit('Update collection') }}

{{ Form::close() }}


@stop