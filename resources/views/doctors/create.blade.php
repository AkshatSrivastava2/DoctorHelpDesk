@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add A New Doctor</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/doctor/store">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('qualification') ? ' has-error' : '' }}">
                            <label for="qualification" class="col-md-4 control-label">Qualifications</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="qualification" value="{{ old('qualification') }}" required>

                                @if ($errors->has('qualification'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('qualification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender : Male or Female</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="panel panel-info">
    <div class="panel-heading">
        Your Patients are :
    </div>
    @if(count($doctors))
    @foreach($doctors as $doctor)

    <div>
        <div class="panel-body">
        <a></a>
            {{ $doctor->name }} registered on {{$doctor->created_at->diffForHumans()}}
        </div>
    </div>
    @endforeach
    @else
    <div>
        <div class="panel-body">
        	No Doctors Available Be the first One !!
        </div>
    </div>
    @endif
    </div>
</div>
@endsection