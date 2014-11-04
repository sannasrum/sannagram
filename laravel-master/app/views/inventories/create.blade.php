@extends('master')
@section('content')

{{ Form::open(array('route' => 'inventory.store', 'files' => 'true')) }}

	{{ Form::label('title', 'Pictures name')}}
	
	{{ Form::text('title') }}

	{{ Form::label('image', 'Image')}}

	{{ Form::file('image') }}

	{{ Form::label('description', 'Description')}}

	{{ Form::text('description') }}

	{{ Form::label('collection', 'Collection')}}

	{{ Form::select('collection', $collections) }}

	{{Form::submit('Upload picture') }}

{{ Form::close() }}


@stop