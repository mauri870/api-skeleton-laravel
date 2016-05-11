@extends('layouts.auth-master',['title'=>'Registro'])
@section('body')
    <div class="row text-center">
        <div class="col-sm-4 col-sm-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title text-center">Registre-se</div>
                </div>

                <div class="panel-body">
                    {!! Form::open(['url'=>route('auth.register')]) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nome') !!}

                        {!! Form::text('name', old('name'),['class'=>'form-control','placeholder'=>'Preencha seu nome']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}

                        {!! Form::email('email', old('email'),['class'=>'form-control','placeholder'=>'email@example.com']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'Senha') !!}

                        {!! Form::password('password',['class'=>'form-control','id'=>'password','placeholder'=>'***********']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Repita a Senha') !!}

                        {!! Form::password('password_confirmation',['class'=>'form-control','id'=>'password','placeholder'=>'***********']) !!}
                    </div>

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button type="submit" href="#" class="btn btn-success pull-right"><i
                                        class="fa fa-check"></i> Registrar-se
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
@section('scripts')
@endsection