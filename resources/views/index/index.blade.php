@extends('laysout.default')
@section('title', '首页')
@section('content')
    <h1>欢迎{{session("user_name")}}</h1>
@stop