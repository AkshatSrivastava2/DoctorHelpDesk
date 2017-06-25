@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
    <div class="panel-info">
    <form class="form-group" method="POST" action="/search">
        {{ csrf_field() }}
        <input type="text" name="search" placeholder="Search.."> 
        <button class="glyphicon glyphicon-search" type="search">
        </button>
        </form>
    </div>
    
    <div class="panel panel-info">
    <div class="panel-heading">
        Your Patients are :
    </div>
    @if(count($patients))
    @foreach($patients as $patient)

    <div>   
        <div class="panel-body">
        <a href="/patient/{{$patient->id}}">
            {{ $patient->name }}</a> on {{$patient->created_at->diffForHumans()}}
        </div>
    </div>
    @endforeach
    @else
    <div>
        <div class="panel-body">
        	No Patients Available
        </div>
    </div>
    @endif
    </div>
</div>

@endsection