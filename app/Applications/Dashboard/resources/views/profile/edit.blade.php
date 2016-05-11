@extends('dashboard::layouts.dashboard',['title'=>'Editar Perfil'])


@section('styles')
    {{-- Your stylesheet for this page here --}}
@endsection

@section('content')
    <h1>Editar Perfil</h1>
    {!! Form::open(['url'=>route('dashboard.profile.update'),'method'=>'PUT']) !!}
        @include('dashboard::forms._profile')
    {!! Form::close() !!}

@stop

@section('scripts')
@stop