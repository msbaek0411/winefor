@extends('layouts.app')

@section('content')
    <div>
        <Myhome :mainid="{{auth()->id()}}"/>
    </div>
@endsection
