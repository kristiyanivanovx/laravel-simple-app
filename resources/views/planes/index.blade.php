@extends('layouts.main')

@section('content')

<div class="container">
    <table role="grid">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Име</th>
                <th scope="col">Снимка</th>
                <th scope="col">Тип</th>
                <th scope="col">Създаден на</th>
                <th scope="col">Обновен на</th>
                <th scope="col">Редактирай</th>
                <th scope="col">Изтрий</th>
            </tr>
        </thead>
        <tbody>
            @foreach($planes as $plane)
                <tr>
                    <th scope="row">{{ $plane->id }}</th>
                    <td>
                        <a href="{{ route('planes.show', $plane->id) }}">
                            {{ $plane->name }}
                        </a>
                    </td>
                    <td>
                        <img class="image" src="{{ asset('/storage/' . ($plane->path ?? ''))  }}" />
                    </td>
                    <td>{{ $plane->type->name }}</td>
                    <td>{{ isset($plane->created_at) ? $plane->created_at->format('d.m.Y @ H:i') : 'Няма информация.' }}</td>
                    <td>{{ isset($plane->updated_at) ? $plane->updated_at->format('d.m.Y @ H:i') : 'Няма информация.'}}</td>
                    <td>
                        <form>
                            <a role="button" class="outline mt-4" href="{{ route('planes.edit', $plane->id) }}">
                                Редактирай
                            </a>
                        </form>
{{--                        <form action="{{ route('planes.edit', $plane->id) }}" method="post">--}}
{{--                            @csrf--}}
{{--                            @method('put')--}}
{{--                            <a role="button" class="outline" type="submit">Редактирай</a>--}}
{{--                        </form>--}}
                    </td>
                    <td>
                        <form action="{{ route('planes.destroy', $plane->id) }}" method="post">
                            @csrf
                            @method('delete')

                            <button role="button" class="outline" type="submit">
                                Изтрий
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
