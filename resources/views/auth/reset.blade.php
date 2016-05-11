@extends('layouts.auth-master',['title'=>'Alterar Credenciais'])
@section('body')
    <div class="row text-center">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title text-center">Altere suas credenciais abaixo</div>
                </div>

                <div class="panel-body">
                    {!! Form::open(['url'=>route('auth.password.postReset')]) !!}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}

                        {!! Form::email('email', old('email'),['class'=>'form-control','placeholder'=>'email@example.com']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Nova senha') !!}

                        {!! Form::password('password',['class'=>'form-control','id'=>'password','placeholder'=>'***********']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Repita a nova Senha') !!}

                        {!! Form::password('password_confirmation',['class'=>'form-control','id'=>'password','placeholder'=>'***********']) !!}
                    </div>

                    <div class="form-group">
                    </div>

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="submit" href="#" class="btn btn-success pull-right"><i
                                        class="fa fa-check"></i> Redefinir credenciais
                            </button>
                            <a href="{{ route('home.index') }}">
                                <button type="button" href="#" class="btn btn-primary pull-left"><i
                                            class="fa fa-reply-all"></i> Voltar ao site
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