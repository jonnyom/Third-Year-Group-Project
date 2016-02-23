@extends('app')

@section('content')
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"></div>

				<div class="panel-body">
					<h1>{!! $org->name !!}</h1>

					<p>{!! $org->bio !!}</p>

					<img style="max-width:500px; max-height:500px;" src="{{ asset('images/organisations/').'/'.$org->id.'.'.$org->image }}">
					
					@if  (Auth::guest())

					@elseif ($hasFavourited === true) 
						{!! Form::open(array('url' => 'organisation/'. $org->id)) !!}
							{!! Form::submit('Unfavourite') !!}
						{!! Form::close() !!}
					@else
						{!! Form::open(array('url' => 'organisation/'. $org->id)) !!}
							{!! Form::submit('Favourite') !!}
						{!! Form::close() !!}
					@endif
					
				</div>
			</div>
		</div>
	</div>
@endsection
