@extends('master')

@section('content')
    {!! Form::open() !!}
    {!! Form::text('title') !!}
    {!! Form::close() !!}
@stop