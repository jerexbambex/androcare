@extends('admin.template')

@section('admin.page', 'Add images to your gallery')

@section('admin-content')
	<gala-create homeUrl="{{route('admin.gallery.create')}}"></gala-create>
@stop