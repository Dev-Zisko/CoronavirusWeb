@extends('layouts.home')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="card-body">
              <form style="margin: 0 auto;" class="form-login" method="POST">
                @csrf
                <div class="form-group{{ $errors->has('count') ? ' has-error' : '' }}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i style="color: #004A7F;" class="fa fa-fw fa-user-tag"></i>
                            </span>
                        </div>
                        <input id="count" name="count" type="number" class="form-control" placeholder="Contador..." value="{{ old('count') }}" required>
                        @if ($errors->has('count'))
                            <span class="help-block">
                                <strong style="color: red;">{{ $errors->first('count') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <p>Fecha de procesamiento: </p>
                <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i style="color: #4267FF;" class="fa fa-fw fa-calendar"></i>
                            </span>
                        </div>
                        <input id="fecha" name="fecha" type="date" class="form-control" placeholder="Fecha..." value="{{ old('fecha') }}" required>
                        @if ($errors->has('fecha'))
                            <span class="help-block">
                                <strong style="color: red;">{{ $errors->first('fecha') }}</strong>
                            </span>
                        @endif
                    </div>                   
                </div>
                <div class="footer text-center">
                  <button type="submit" class="btn btn-outline-primary">Procesar</button>
                </div>
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
@endsection