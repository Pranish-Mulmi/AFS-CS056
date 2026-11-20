<x-layouts.app title="Create Course">
    <h1>Create Course</h1>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf

        <x-courses.form submit-label="Create Course" />
    </form>

    <p>
        <a href="{{ route('courses.index') }}">Back to Courses</a>
    </p>
</x-layouts.app>