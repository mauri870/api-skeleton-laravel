<div class="sidebar-menu">
    <div class="sidebar-menu-inner">
        <header class="logo-env"> <!-- logo -->
            <div class="logo">
                <a href="{{ route('dashboard.index') }}">
                    <img src="{{ asset('img/logo.svg') }}" width="120" alt=""/>
                </a>
            </div> <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon">
                    <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation">
                    <!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <li class="root-level">
                <a href="{{ route('dashboard.index') }}">
                    <i class="entypo-home"></i>
                    <span class="title">
                        Início
                    </span>
                </a>
            </li>
            <li class="has-sub root-level">
                <a href="#">
                    <i class="entypo-mail"></i>
                    <span class="title">Email</span></a>
                <ul class="" style="opacity: 0.2; height: 0px;">
                    <li>
                        <a href="{{ route('dashboard.mail.create') }}">
                            <span class="title">
                                Novo Email
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>