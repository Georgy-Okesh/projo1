@extends('layouts.app')

@section('content')
@if (session ('message'))
<div class="alert alert-success">{{session('message')}}</div>
@endif

{!! Form::open(array( 'route'=>'Booking.store','method' => 'POST', 'enctype' => 'multipart/form-data')) !!} 
<div class="form-group">
    {{Form::label('name', 'name')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
</div>
<div class="form-group">
    {{Form::label('idno', 'idno')}}
    {{Form::number('idno', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'idno'])}}
</div>
<div class="form-group">
    {{Form::label('Kra pin', 'Kra pin')}}<br/>
    {{Form::file('Kra_pin')}}
</div>
<div class="form-group">
    {{Form::label('ID', 'ID')}}<br/>
    {{Form::file('user_ID')}}
</div>
<div class="form-group">
    {{Form::label('Pick date', 'Pick date')}}<br/>
    {{Form::date('pick_date', \Carbon\Carbon::now())}}
</div>
<div class="form-group">
    {{Form::label('Pick Location', 'Pick Location')}}<br/>
    {{Form::select('pick_location', ['Nairobi' => 'Nairobi', 'Mombasa' => 'Mombasa','Kisumu'=>'Kisumu'])}}
</div>
<div class="form-group">
    {{Form::label('Return date', 'Return date')}}<br/>
    {{Form::date('return_date', \Carbon\Carbon::now())}}
</div>
<div class="form-group">
    {{Form::label('Return Location', 'Return Location')}}<br/>
    {{Form::select('return_location', ['Nairobi' => 'Nairobi', 'Mombasa' => 'Mombasa','Kisumu'=>'Kisumu'])}}
</div>
{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}  

@endsection