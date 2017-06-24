@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-info">
    <div class="panel-heading">
        Your Patients are :
    </div>
    @if(count($patients))
    @foreach($patients as $patient)

    <div>
        <div class="panel-body">
        <a></a>
            {{ $patient->name }} on {{$patient->created_at->diffForHumans()}}
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