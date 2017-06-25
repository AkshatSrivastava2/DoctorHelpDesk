@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">

    @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
    @endif
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Patient's Ailment</div>
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">Patient's History</div>
                        <div class="panel-body">
                            @if(count($history))
                            @foreach($history as $historyPatient)

                        <div>
                        <div class="panel-body">
        
                        {{ $historyPatient->history }} on {{$historyPatient->created_at->diffForHumans()}} and Paid {{ $historyPatient->fees_paid }}
                        </div>
                    </div>
                    @endforeach
                    @else
                <div>
            <div class="panel-body">
                No Previous History Available
            </div>
            </div>
        @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

    </div>

    
</div>
@endsection