@extends('layout.app')


@section('title')

@endsection

@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>
    <div class=" items-center justify-center flex">
  <form action="">
    <div class="mb-5">
        <label class="mb-2 block uppercase text-gray-500 font-bold">nombre</label>
        <input type="text" class="border p-3 w-full rounded-lg">
    </div>
    <div class="mb-5">
        <label class="mb-2 block uppercase text-gray-500 font-bold">cedula</label>
        <input type="number" class="border p-3 w-full rounded-lg">
    </div>
    <div class="mb-5">
        <label class="mb-2 block uppercase text-gray-500 font-bold">numero de telefono</label>
        <input type="text" class="border p-3 w-full rounded-lg">
    </div>
    <div class="mb-5">
        <label class="mb-2 block uppercase text-gray-500 font-bold">direccion</label>
        <input type="text" class="border p-3 w-full rounded-lg">
    </div>
    <input type="submit" value="registrar" class="flex bg-sky-600 hover:bg-sky-700 cursor-pointer font-bold w-f p-3 text-white">
  </form>
</div>
</body>
</html>

@endsection

