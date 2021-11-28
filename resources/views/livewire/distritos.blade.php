@extends('base')
  @section('content')
      <section class="pb-20 bg-gray-300 -mt-24">
      <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Registrar Nuevo Distrito</button>
            @if($isOpen)
                @include('./livewire.distritos_create')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($distritos as $distrito)
                    <tr>
                        <td class="border px-4 py-2">{{ $distrito->id }}</td>
                        <td class="border px-4 py-2">{{ $distrito->no_distrito }}</td>
                        <td class="border px-4 py-2">
                            <button wire:click="edit({{ $distrito->id }})" class="bg-danger ">Edit</button>
                            <button wire:click="delete({{ $distrito->id }})" class="bg-primary">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
      </section>
  @endsection

