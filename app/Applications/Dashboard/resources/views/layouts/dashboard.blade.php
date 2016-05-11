<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Mauri de Souza Nunes(github.com/mauri870) - Digital Serra Tecnologia Digital"/>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Administração - {{ $title or " " }}</title>

    @include('dashboard::includes.styles')

    @yield('styles')
</head>
<body class="page-body page-fade">
<div class="page-container">
    @include('dashboard::includes.sidebar')
    <div class="main-content">
        @include('dashboard::includes.header')
        <hr/>
        @include('dashboard::includes.badges')
        <br/>

        <div id="container">
            @yield('content')
        </div>

        @include('dashboard::includes.footer')
    </div>
    <!-- TS145512113111406: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
    <div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
        <div class="chat-inner"><h2 class="chat-header"><a href="#" class="chat-close"><i
                            class="entypo-cancel"></i></a> <i class="entypo-users"></i>
                Chat
                <span class="badge badge-success is-hidden">0</span></h2>
            <div class="chat-group" id="group-1"><strong>Favorites</strong> <a href="#" id="sample-user-123"
                                                                               data-conversation-history="#sample_history"><span
                            class="user-status is-online"></span> <em>Catherine J. Watkins</em></a> <a
                        href="#"><span
                            class="user-status is-online"></span> <em>Nicholas R. Walker</em></a> <a href="#"><span
                            class="user-status is-busy"></span> <em>Susan J. Best</em></a> <a href="#"><span
                            class="user-status is-offline"></span> <em>Brandon S. Young</em></a> <a
                        href="#"><span
                            class="user-status is-idle"></span> <em>Fernando G. Olson</em></a></div>
            <div class="chat-group" id="group-2"><strong>Work</strong> <a href="#"><span
                            class="user-status is-offline"></span> <em>Robert J. Garcia</em></a> <a href="#"
                                                                                                    data-conversation-history="#sample_history_2"><span
                            class="user-status is-offline"></span> <em>Daniel A. Pena</em></a> <a
                        href="#"><span
                            class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a></div>
            <div class="chat-group" id="group-3"><strong>Social</strong> <a href="#"><span
                            class="user-status is-busy"></span> <em>Velma G. Pearson</em></a> <a
                        href="#"><span
                            class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a> <a
                        href="#"><span
                            class="user-status is-online"></span> <em>Kathleen M. Canales</em></a> <a
                        href="#"><span
                            class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a></div>
        </div> <!-- conversation template -->
        <div class="chat-conversation">
            <div class="conversation-header"><a href="#" class="conversation-close"><i
                            class="entypo-cancel"></i></a> <span class="user-status"></span> <span
                        class="display-name"></span>
                <small></small>
            </div>
            <ul class="conversation-body"></ul>
            <div class="chat-textarea"><textarea class="form-control autogrow"
                                                 placeholder="Type your message"></textarea></div>
        </div>
    </div> <!-- Chat Histories -->
    <ul class="chat-history" id="sample_history">
        <li><span class="user">Art Ramadani</span>
            <p>Are you here?</p> <span class="time">09:00</span></li>
        <li class="opponent"><span class="user">Catherine J. Watkins</span>
            <p>This message is pre-queued.</p> <span class="time">09:25</span></li>
        <li class="opponent"><span class="user">Catherine J. Watkins</span>
            <p>Whohoo!</p> <span class="time">09:26</span></li>
        <li class="opponent unread"><span class="user">Catherine J. Watkins</span>
            <p>Do you like it?</p> <span class="time">09:27</span></li>
    </ul> <!-- Chat Histories -->
    <ul class="chat-history" id="sample_history_2">
        <li class="opponent unread"><span class="user">Daniel A. Pena</span>
            <p>I am going out.</p> <span class="time">08:21</span></li>
        <li class="opponent unread"><span class="user">Daniel A. Pena</span>
            <p>Call me when you see this message.</p> <span class="time">08:27</span></li>
    </ul>
</div>
<!-- Sample Modal (Default skin) -->
<div class="modal fade" id="sample-modal-dialog-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Widget Options - Default Modal</h4></div>
            <div class="modal-body"><p>Now residence dashwoods she excellent you. Shade being under his bed her. Much
                    read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but
                    confined
                    day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave
                    hope.
                    Secure active living depend son repair day ladies now.</p></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> <!-- Sample Modal (Skin inverted) -->
<div class="modal invert fade" id="sample-modal-dialog-2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Widget Options - Inverted Skin Modal</h4></div>
            <div class="modal-body"><p>Now residence dashwoods she excellent you. Shade being under his bed her. Much
                    read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but
                    confined
                    day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave
                    hope.
                    Secure active living depend son repair day ladies now.</p></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> <!-- Sample Modal (Skin gray) -->
<div class="modal gray fade" id="sample-modal-dialog-3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Widget Options - Gray Skin Modal</h4></div>
            <div class="modal-body"><p>Now residence dashwoods she excellent you. Shade being under his bed her. Much
                    read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but
                    confined
                    day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave
                    hope.
                    Secure active living depend son repair day ladies now.</p></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> <!-- Imported styles on this page -->
<link rel="stylesheet" href="{{ asset('assets/dashboard/js/jvectormap/jquery-jvectormap-1.2.2.css') }}"
      id="style-resource-1">
<link rel="stylesheet" href="{{ asset('assets/dashboard/js/rickshaw/rickshaw.min.css') }}" id="style-resource-2">
@include('dashboard::includes.notifications')
@include('dashboard::includes.scripts')
<!-- JavaScripts initializations and stuff -->
<!-- Demo Settings -->
<script src="{{ asset('assets/dashboard/js/neon-custom.js') }}" id="script-resource-17"></script>
<script src="{{ asset('assets/dashboard/js/neon-demo.js') }}" id="script-resource-18"></script>
<script src="{{ asset('assets/dashboard/js/neon-skins.js') }}" id="script-resource-19"></script>

@yield('scripts')
</body>
</html>