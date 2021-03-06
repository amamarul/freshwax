@extends('layouts.master')

@section('content')
	<article class="forms"> 
		<header> 
			<h1>Create Photo</h1>
		</header> 
		{!!Form::open(['route'=>'photos.store', 'files' => 'true'])!!}
			@include('photos.partials.form')
			{!!Form::hidden('track', $id)!!}
			{!!Form::submit('create')!!}
		{!!Form::close()!!}

	</article> 
@stop
