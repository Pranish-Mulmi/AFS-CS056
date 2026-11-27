<x-layouts.app title="Edit Student">
    <h1>Edit Student</h1>

    <form
        action="{{ route('students.update', $student) }}"
        method="POST"
    >
        @csrf
        @method('PUT')

        <x-students.form
            :student="$student"
            submit-label="Update Student"
        />
    </form>

    <p>
        <a href="{{ route('students.show', $student) }}">
            Back to Student Details
        </a>
    </p>
</x-layouts.app>