@extends('master')
@section('content')

@foreach($collections as $collection)

	<a href="{{ URL::route('collection.show', $collection->id) }}">{{ $collection->name }}</a> 
	
	<br>

@endforeach

@stop