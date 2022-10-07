@extends('layouts.app')

@section('content')

@if(auth()->id() > 0)
    <div><example-component :mainid="{{auth()->id()}}"/></div>
    @else
    <div><example-component/></div>
    @endif
@endsection



