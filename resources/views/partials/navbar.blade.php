
<nav class="navbar navbar-expand-lg " color-on-scroll="500">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('login')}}"> Dashboard </a>

        <div class="collapse navbar-collapse justify-content-end" id="navigation">
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

