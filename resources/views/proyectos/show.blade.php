@extends('app.layout')
@section('content')
    <div class="my-8 flex flex-col items-center">
        <h2 class="font-bold text-2xl mb-10">Tareas del proyecto -- {{ $proyecto->nombre }}</h2>
        <form action="{{ route('tareas.store') }}" method="post"
            class=" rounded-xl shadow-md bg-green-500 w-1/2 px-8 py-8 ">
            @method('POST')
            @csrf
            <input type="hidden" value="{{ $proyecto->id }}" name="proyecto">
            <div class="flex justify-between">
                <label for="tarea" class="self-center text-white text-lg">Tareas</label>
                <div class="flex flex-col w-3/4">
                    <input class="rounded-md p-2" type="text" placeholder="Tarea del proyecto" name="tarea" id="tarea">
                    @error('tarea')
                        <span
                            class="bg-red-200 mt-2 text-red-700 border-2 border-red-500 rounded-md w-full">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded text-sm font-bold">Crear Tarea
                    <span class="text-xl">+</span>
                </button>
            </div>
        </form>
        <div class="my-8 w-1/2 bg-blue-500 rounded-md p-8 divide-y divide-blue-800">
            @if (count($tareas) > 0)
                @foreach ($tareas as $tarea)
                    <div class="text-white text-xl m-4 flex justify-between">
                        <p>{{ $tarea->tarea }}</p>
                        <div class="acciones">
                            @if ($tarea->estado)
                                <i class="far fa-check-circle text-green-300"></i>
                            @else
                                <i class="far fa-check-circle"></i>
                            @endif
                            <i class="fas fa-trash"></i>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-white text-xl m-4">No hay tareas en este proyecto</p>
            @endif
        </div>
        <div class="flex justify-between w-1/4 mt-4">
            <a href="{{ route('proyectos.edit', ['proyecto' => $proyecto->id]) }}"
                class="bg-yellow-500 text-white px-6 py-2 rounded text-sm font-bold">Editar Proyecto
                <span class="text-xl">+</span>
            </a>
            <button type="submit" id="eliminar-proyecto" data-id="{{ $proyecto->id }}"
                class="bg-red-500 text-white px-6 py-2 rounded text-sm font-bold">Eliminar Proyecto
                <span class="text-xl">+</span>
            </button>
        </div>
    </div>
@endsection
