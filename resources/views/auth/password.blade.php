@extends('layouts.auth-master',['title'=>'Resetar Senha'])
@section('body')
    <div class="row text-center">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title text-center">Preencha seu email para redefinir suas credenciais</div>
                </div>

                <div class="panel-body">
                    {!! Form::open(['url'=>route('auth.password.postEmail')]) !!}
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        {!! Form::email('email', old('email'),['class'=>'form-control','placeholder'=>'email@example.com']) !!}
                    </div>
                    <br>
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="submit" href="#" class="btn btn-success pull-right"><i
                                        class="fa fa-check"></i> Redefinir
                            </button>
                            <a href="{{ route('auth.login') }}">
                                <button type="button" href="#" class="btn btn-primary pull-left"><i
                                            class="fa fa-reply-all"></i> Voltar
                                </button>
                            </a><br><br>
                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
@endsection