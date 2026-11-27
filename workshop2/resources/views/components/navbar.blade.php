<nav class="navbar">

    <div class="container navbar-content">

        <a href="{{ url('/') }}" class="navbar-brand">
            Training Institute
        </a>

        <div class="navbar-links">

            @guest

                <a
                    href="{{ url('/register') }}"
                >
                    Register
                </a>

                <a
                    href="{{ route('login') }}"
                >
                    Login
                </a>

            @endguest


            @auth

                <a
                    href="{{ route('students.index') }}"
                    class="{{ request()->routeIs('students.*') ? 'active' : '' }}"
                >
                    Students
                </a>

                <a
                    href="{{ route('courses.index') }}"
                    class="{{ request()->routeIs('courses.*') ? 'active' : '' }}"
                >
                    Courses
                </a>

                <form
                    action="{{ route('logout') }}"
                    method="POST"
                    style="display:inline;"
                >
                    @csrf

                    <button type="submit">
                        Logout
                    </button>

                </form>

            @endauth

        </div>

    </div>

</nav>