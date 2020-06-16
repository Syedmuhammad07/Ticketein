@extends('adminlte::layouts.app')

@section('main-content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <h1>Create New event</h1>

            {!! Form::open(['route' => 'createevent.store']) !!}

            {{ Form::label('name', 'Name of Event:') }}
            {{ Form::text('name', null, ['class' => 'form-control','placeholder'=>'type event name','required']) }}

            {{ Form::label('description', 'Description:') }}
            {{ Form::text('description', null, ['class' => 'form-control','placeholder'=>'type event description','required']) }}

            {{ Form::label('date', 'Date:') }}
            {{ Form::date('date', null, ['class' => 'form-control','placeholder'=>'enter date of event','required']) }}

			{{ Form::label('time', 'Time:') }}
			{{ Form::Time('time', null, ['class' => 'form-control','placeholder'=>'enter time of event','required']) }}
			
			{{ Form::label('tickets', 'No. of tickets:') }}
            {{ Form::number('tickets', null, ['class' => 'form-control','placeholder'=>'type total number of tickets','required']) }}

			{{ Form::submit('Create Event', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}

        </div>
    </div>
@endsection
