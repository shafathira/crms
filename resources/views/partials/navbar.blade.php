<!-- Navbar -->
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        @if (Auth::user()->role_id ==1)
        <a class="navbar-brand" href="{{route('login')}}"> Dashboard </a>
        @elseif (Auth::user()->role_id ==2)
        <a class="navbar-brand" href="{{route('login')}}"> Dashboard </a>
        @elseif (Auth::user()->role_id ==3)
        <a class="navbar-brand" href="{{route('login')}}"> Dashboard </a>
        @endif

        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <form method="get" action="{{route('programmes.search')}}">
                        @csrf
                    <a href="#" class="nav-link">
                        <i class="nc-icon nc-zoom-split">&nbsp;</i>
                        <input type="search" name="query" placeholder="Search.." style="border-color:transparent" class="d-lg-block">
                    </a>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" >
                    <a class="nav-link" href="">
                        <span>{{Auth::user()->name}}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                    <button type="submit" class="btn-link nav-link">
                        <span class="no-icon">Log out</span>
                    </button>
                    </form>

                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
