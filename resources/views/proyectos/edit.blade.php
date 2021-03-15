@extends('app.layout')
@section('content')
    <div class="my-8 flex flex-col items-center">
        <h2 class="font-bold text-2xl mb-10">Editar Proyecto</h2>
        <form action="{{ route('proyectos.update',['proyecto'=>$proyecto->id]) }}" method="post"
            class=" rounded-xl shadow-md bg-green-500 w-1/2 px-8 py-8 ">
            @method('PUT')
            @csrf
            <div class="flex justify-between">
                <label for="nombre" class="self-center">Nombre Proyecto</label>
                <div class="flex flex-col w-3/4">
                    <input class="rounded-md p-2" type="text" placeholder="Nombre del proyecto" name="nombre" id="nombre" value="{{$proyecto->nombre}}">
                    @error('nombre')
                        <span
                            class="bg-red-200 mt-2 text-red-700 border-2 border-red-500 rounded-md w-full">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded text-sm font-bold">Editar Proyecto
                    <span class="text-xl">+</span>
                </button>
            </div>
        </form>
    </div>
@endsection
