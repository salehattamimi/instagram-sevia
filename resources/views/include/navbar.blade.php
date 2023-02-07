<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <a class="navbar-brand" href="#" style="padding: 0px !important; background-color: ">
            <img src="{{ asset('assets/images/instagram_logo.svg.webp') }}"
                style="padding: 10px !important;height: 100%; background-color: ">
            <span style="font-weight: bold; color: white">
                <!-- {{ strtoupper(env('APP_NAME')) }}        -->
            </span>
        </a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">

        <div class="navbar-right">
            <p class="navbar-text">Selamat Datang {{ Auth::user()->name }}</b></p>
            <p class="navbar-text"><span class="label bg-success-400">Online</span></p>

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('assets/images/placeholder.jpg') }}" alt="">
                        <span> {{ Auth::user()->name }} </span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="{{ url('admin/my-profile') }}"><i class="icon-user-plus"></i> My profile</a></li>
                        <li class="divider"></li>
                        <li><a href="#" onclick="$('#logout-form').submit();"><i class="icon-switch2"></i>
                                Logout</a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>



<!-- Second navbar -->
<div class="navbar navbar-default " id="navbar-second">
    <ul class="nav navbar-nav no-border visible-xs-block">
        <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i
                    class="icon-menu7"></i></a></li>
    </ul>

    <div class="navbar-collapse collapse" id="navbar-second-toggle">
        <ul class="nav navbar-nav">
            <li class="{{ Request::is('*home*') ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="icon-home4"></i> <span>Home</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /second navbar -->
