@extends('master')
@section('content')

{{ Form::model($inventory, array('route' => array('inventory.update', $inventory->id), 'method' => 'PUT')) }}

	
	{{ Form::label('title', 'Pictures name')}}
	
	{{ Form::text('title', $inventory->title) }}

	{{ Form::label('description', 'Description')}}

	{{ Form::text('description', $inventory->description) }}

	{{ Form::label('collection', 'Collection')}}

	{{ Form::select('collection', $collections, $inventory->id) }}

	{{Form::submit('Update picture') }}

{{ Form::close() }}


@stop