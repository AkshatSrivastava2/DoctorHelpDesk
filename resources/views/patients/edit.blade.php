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
                    <form class="form-horizontal" role="form" method="POST" action="/patient/{{$patient->id}}/add">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('history') ? ' has-error' : '' }}">
                            <label for="history" class="col-md-4 control-label">History</label>

                            <div class="col-md-6">
                                <input id="history" type="text" class="form-control" name="history" required autofocus>

                                @if ($errors->has('history'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('history') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fee') ? ' has-error' : '' }}">
                            <label for="fee" class="col-md-4 control-label">Fee Paid</label>

                            <div class="col-md-6">
                                <input id="fee" type="text" class="form-control" name="fee" required>

                                @if ($errors->has('fee'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fee') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

    
</div>
@endsection