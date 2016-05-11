@extends('layouts.auth-master',['title'=>'Login'])
@section('body')
    <div class="row text-center">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading  text-center">
                    <div class="panel-title">Faça Login para acessar o Sistema</div>
                </div>

                <div class="panel-body">
                    {!! Form::open(['url'=>route('auth.login')]) !!}
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        {!! Form::email('email', old('email'),['class'=>'form-control','placeholder'=>'email@example.com']) !!}
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        {!! Form::password('password',['class'=>'form-control','id'=>'password','placeholder'=>'***********']) !!}
                    </div>
                    <div class="form-group pull-left">
                        {!! Form::checkbox('remember',null) !!}
                        {!! Form::label('remember','Lembrar credenciais') !!}
                    </div>

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="submit" href="#" class="btn btn-success pull-right"><i
                                        class="fa fa-check"></i> Entrar
                            </button>
                            <a href="{{ route('home.index') }}">
                                <button type="button" href="#" class="btn btn-primary pull-left"><i
                                            class="fa fa-reply-all"></i> Voltar ao site
                                </button>
                            </a> <br><br>
                            <p>Esqueceu sua senha? <a href="{{ route('auth.password.email') }}">Redefinir senha</a></p><br><br>
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