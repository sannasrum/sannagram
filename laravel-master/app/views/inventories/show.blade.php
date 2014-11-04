@extends('master')
@section('content')

		
		<img src="{{ URL::asset('/uploads/' . $inventory->file_name) }}" width="200" height="auto" alt="">

		{{ $inventory->title }}
	
	<br>



<a href="{{ URL::route('inventory.edit', $inventory->id) }}">edit</a> 

{{ Form::model($inventory, array('route' => array('inventory.destroy', $inventory->id), 'method' => 'DELETE')) }}
	{{ Form::submit('Delete image') }}
{{ Form::close() }}

@stop