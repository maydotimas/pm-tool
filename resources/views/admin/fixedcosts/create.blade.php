@extends('admin.default')

@section('page-header')
	Fixed Costs Particular <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['FixedCostController@store'],
			'files' => true
		])
	!!}

		@include('admin.fixedcosts.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
	
@stop
