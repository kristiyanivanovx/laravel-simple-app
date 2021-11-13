@extends('layouts.main')

@section('content')

<div class="container">
    <form action="{{ route('planes.update', $plane->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="name">
                Име
                <input type="text" id="name" name="name"
                       @error('name') aria-invalid="true" @enderror
                       value="{{ $plane->name }}"
                >
            </label>
            @error('name')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">
                Снимка
                <input type="file" name="image" placeholder="Избери снимка..." id="image">
            </label>
            @error('image')
            <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="plane_type_id">Тип на самолта</label>
            <div class="select is-small" @error('plane_type_id') aria-invalid="true" @enderror>
                <select id="plane_type_id" name="plane_type_id">
                    @foreach($plane_types as $plane_type)
                        <option
                            value="{{ $plane_type->id }}"
                            {{ $plane->type->id == $plane_type->id ? 'selected' : '' }}
                        >
                            {{ $plane_type->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            @error('plane_type_id')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
            <!-- <label for="lastname">
                Last name
                <input type="text" id="lastname" name="lastname" placeholder="Last name" required>
            </label> -->

            <!-- <label for="email">
                Email address
                <input type="email" id="email" name="email" placeholder="Email address" required>
            </label> -->

        <button type="submit">Запази</button>
    </form>
</div>

@endsection
