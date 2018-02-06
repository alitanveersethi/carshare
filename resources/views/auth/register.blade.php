@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel " style="background-color:#63a599; color: white" >
                <div class="panel-heading" style="color:#273a4d;"  ><b>SIGN UP</b></div>
                <div class="panel-body" style="background-color:#273a4d; color:#63a599 "  >
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label" style="color: #63a599"  ><b>NAME </b> </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label" style="color: #63a599" ><b> E-MAIL ADDRESS</b> </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label" style="color: #63a599" ><b> PASSWORD</b> </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label" style="color: #63a599" ><b>CONFIRM PASSWORD</b>  </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cell_no') ? ' has-error' : '' }}">
                            <label for="cell_no" class="col-md-4 control-label" style="color: #63a599" ><b> CONTACT NUMBER</b> </label>

                            <div class="col-md-6">
                                <input id="cell_no" type="number" class="form-control" name="cell_no" value="{{ old('cell_no') }}" required autofocus>

                                @if ($errors->has('cell_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cell_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('cnic') ? ' has-error' : '' }}">
                            <label for="cnic" class="col-md-4 control-label" style="color: #63a599" ><b>ID CARD NUMBER</b>  </label>

                            <div class="col-md-6">
                                <input id="cnic" type="number" class="form-control" name="cnic" value="{{ old('cnic') }}" required autofocus>

                                @if ($errors->has('cell_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cnic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default" style="background-color: #63a599;color:#273a4d "  >
                                  <b>REGISTER</b> 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
