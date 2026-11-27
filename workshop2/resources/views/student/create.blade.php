<x-layouts.app title="Create Student">
    <h1>Create Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <x-students.form submit-label="Create Student" />
    </form>

    <p>
        <a href="{{ route('students.index') }}">Back to Students</a>
    </p>
</x-layouts.app>