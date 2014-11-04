@extends('master')
@section('content')

@foreach($inventories as $inventory)

	<a href="{{ URL::route('inventory.show', $inventory->id) }}">
		<img src="{{ URL::asset('/uploads/' . $inventory->file_name) }}" width="200" height="auto" alt="">{{ $inventory->title }}</a> 
	
	<br>

@endforeach

@stop