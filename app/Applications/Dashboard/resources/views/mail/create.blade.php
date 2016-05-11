@extends('dashboard::layouts.dashboard',['title'=>'Novo Email'])

@section('styles')
    {{-- Your stylesheet for this page here --}}
    <link rel="stylesheet" href="{{ asset('assets/dashboard/wysihtml5/bootstrap-wysihtml5.css') }}">
@endsection

@section('content')
    <div class="mail-env"> <!-- compose new email button -->
        <div class="mail-body">
            <div class="mail-header"> <!-- title -->
                <div class="mail-title">
                    Novo Email <i class="entypo-pencil"></i></div>
                <!-- links -->
                <div class="mail-links">
                    <a href="{{ route('dashboard.mail.create') }}" class="btn btn-default">
                        <i class="entypo-cancel"></i>
                    </a>
                    <a class="btn btn-success btn-icon" onclick="document.getElementById('mail-form').submit();">
                        Enviar
                        <i class="entypo-mail"></i>
                    </a>
                </div>
            </div>
            <div class="mail-compose">
                {!! Form::open(['route'=>'dashboard.mail.store','method'=>'post','id'=>'mail-form']) !!}
                    <mail-form></mail-form>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('scripts')
    {{-- Your javascript for this page here --}}

    <script src="{{ asset('assets/dashboard/wysihtml5/wysihtml5-0.4.0pre.min.js') }}" id="script-resource-8"></script>
    <script src="{{ asset('assets/dashboard/wysihtml5/bootstrap-wysihtml5.js') }}" id="script-resource-9"></script>
@endsection