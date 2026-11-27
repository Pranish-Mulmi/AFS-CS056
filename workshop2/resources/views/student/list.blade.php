<x-layouts.app title="Students">
    <h1>Students</h1>

    <p>
        <a href="{{ route('students.create') }}" class="btn btn-primary">
            Add Student
        </a>
    </p>

    @if ($students->isEmpty())
        <p>No students have been added yet.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>
                            <div class="actions">
                                <a
                                    href="{{ route('students.show', $student) }}"
                                    class="btn btn-secondary"
                                >
                                    View
                                </a>

                                <a
                                    href="{{ route('students.edit', $student) }}"
                                    class="btn btn-primary"
                                >
                                    Edit
                                </a>

                                <x-delete-form
                                    :action="route('students.destroy', $student)"
                                    message="Are you sure you want to delete this student?"
                                />
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-layouts.app>