<nav class="navbar">
    <div class="container navbar-content">
        <a href="{{ route('students.index') }}" class="navbar-brand">
            Training Institute
        </a>

        <div class="navbar-links">
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
        </div>
    </div>
</nav>