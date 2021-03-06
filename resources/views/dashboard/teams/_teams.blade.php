<table class="table table-responsive-sm">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Área</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($teams as $team)
            <tr>
                <td>
                    <a href="{{ route('dashboard.courses.teams.show', [$course, $team]) }}"
                       class="font-weight-bold">Turma {{ $team->id }}</a>
                </td>
                <td>
                    {!! $course->occupationArea->nameWithIcon !!}
                </td>
                <td class="text-right">
                    <div class="pr-4">
                        <a href="{{ route('dashboard.courses.teams.show', [$course, $team]) }}" class="btn-icon">
                            <i class="fas fa-eye fa-lg"></i>
                        </a>

                        <a href="{{ route('dashboard.courses.teams.edit', [$course, $team]) }}" class="btn-icon ml-2">
                            <i class="fas fa-edit fa-lg"></i>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
