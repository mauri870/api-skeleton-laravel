@extends('dashboard::layouts.dashboard',['title'=>'Notificações'])


@section('styles')
    {{-- Your stylesheet for this page here --}}
@endsection

@section('content')
    <h2>Notificações</h2> <br/> <br/>
    <div class="timeline-centered">
        @foreach($notifications as $notification)
            <article class="timeline-entry {{ $notification->id %2 == 0 ? '' : 'left-aligned' }}">
                <div class="timeline-entry-inner">
                    <time class="timeline-time"><span>{{ $notification->created_at->diffForHumans() }}</span>
                    </time>
                    <div class="timeline-icon bg-{{ $notification->type }}"><i class="entypo-{{ $notification->getIcon() }}"></i></div>
                    <div class="timeline-label">
                        <h2>
                            {{ $notification->title }}
                        </h2>
                        <p>{{ $notification->body }}</p>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
    <div class="col-sm-12 text-center">
        {!! $notifications->render() !!}
    </div> <br>
@stop

@section('scripts')
@stop