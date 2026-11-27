<nav class="navbar">

    <a href="{{ url('/') }}" class="brand">
        Training Institute
    </a>

    <div>

        @guest
            <a href="{{ url('/register') }}">Register</a>

            <a href="{{ route('login') }}">Login</a>
        @endguest


        @auth
            <a href="{{ route('courses.index') }}" class="{{ request()->routeIs('courses.*') ? 'active' : '' }}">Courses</a>

            <a href="{{ route('students.index') }}" class="{{ request()->routeIs('students.*') ? 'active' : '' }}"> Students</a>

            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit">
                    Logout
                </button>
            </form>

        @endauth

    </div>

</nav>