<div class="sidebar" data-image="{{('assets/img/sidebar-5.jpg')}}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{route('login')}}" class="simple-text">
                CRMS
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('login')}}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            @if (Auth::user()->role_id ==1)
            <li>
                <a class="nav-link" href="{{route('therequesteds.index')}}">
                    <i class="nc-icon nc-send"></i>
                    <p>Requested Courses</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('courses.index')}}">
                    <i class="nc-icon nc-grid-45"></i>
                    <p>Course Menu</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('semesters.index')}}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Semester Menu</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('programmes.index')}}">
                    <i class="nc-icon nc-bullet-list-67"></i>
                    <p>Programme Menu</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('groups.index')}}">
                    <i class="nc-icon nc-notes"></i>
                    <p>Group Menu</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{route('users.index')}}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>User Menu</p>
                </a>
            </li>
            <li >
                <a class="nav-link" href="{{ route('profile.edit')  }}">
                    <i class="nc-icon nc-settings-tool-66"></i>
                    <p>Edit Profile</p>
                </a>
            </li>

            @elseif (Auth::user()->role_id ==2)
            <li>
                <a class="nav-link" href="{{ route('myrequests.create') }}">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>Course Request Form</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('myrequests.index') }}">
                    <i class="nc-icon nc-send"></i>
                    <p>Requested Courses</p>
                </a>
            </li>
            <li >
                <a class="nav-link" href="{{ route('profile.edit')  }}">
                    <i class="nc-icon nc-settings-tool-66"></i>
                    <p>Edit Profile</p>
                </a>
            </li>

            @elseif (Auth::user()->role_id ==3)

            <li>
                <a class="nav-link" href="{{ route('therequesteds.index') }}">
                    <i class="nc-icon nc-send"></i>
                    <p>Requested Courses</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('profile.edit')  }}">
                    <i class="nc-icon nc-settings-tool-66"></i>
                    <p>Edit Profile</p>
                </a>
            </li>

            @endif

        </ul>
    </div>
</div>
