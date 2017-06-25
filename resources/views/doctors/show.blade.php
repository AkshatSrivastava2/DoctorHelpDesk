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
                <div class="panel-heading">Doctor's Info</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/doctor/{{$doctor->id}}/update">
                        {{ csrf_field() }}
                         <input type="hidden" name="_method" value="PATCH">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $doctor->name }}" required autofocus>

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
                                <input id="text" type="text" class="form-control" name="qualification" value="{{ $doctor->qualification }}" required>

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
                                <input id="text" type="text" class="form-control" name="phone" value="{{ $doctor->phone }}" required>

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
                                <input id="text" type="text" class="form-control" name="gender" value="{{ $doctor->gender }}" required>

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
                                    Update 
                                </button>
                            </div>
                        </div>
                    </form>
                    <a href="/doctor/{{$doctor->id}}/delete" style="color: red;">Say Bye Bye to Your Account !!</a>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>

    
</div>
@endsection