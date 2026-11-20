<x-layouts.app title="Edit Course">
    <h1>Edit Course</h1>

    <form
        action="{{ route('courses.update', $course) }}"
        method="POST"
    >
        @csrf
        @method('PUT')

        <x-courses.form
            :course="$course"
            submit-label="Update Course"
        />
    </form>

    <p>
        <a href="{{ route('courses.show', $course) }}">
            Back to Course Details
        </a>
    </p>
</x-layouts.app>