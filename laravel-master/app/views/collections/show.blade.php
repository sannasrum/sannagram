@extends('master')
@section('content')

{{ $collection->name }}

<hr>

@foreach ($inventories as $inventory)

	<img src="{{ URL::asset('/uploads/' . $inventory->file_name) }}" width="200" height="auto" alt="">

@endforeach

<a href="{{ URL::route('collection.edit', $collection->id) }}">edit</a> 

{{ Form::model($collection, array('route' => array('collection.destroy', $collection->id), 'method' => 'DELETE')) }}
	{{ Form::submit('Delete collection') }}
{{ Form::close() }}

@stop