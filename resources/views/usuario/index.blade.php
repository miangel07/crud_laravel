<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
       
</head>
<body>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-3">#</th>
                <th  class="px-6 py-3">Nombre</th>
                <th  class="px-6 py-3">Cedula</th>
                <th class="px-6 py-3" >Telefono</th>
                <th class="px-6 py-3" >Direccion</th>
                <th class="px-6 py-3">Acciones</th>
             
            </tr>
        </thead>
    
        <tbody>
            @foreach($usuario as $usuario)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4"  >{{$usuario->id}}</td>
                <td class="px-6 py-4" >{{$usuario->nombre}}</td>
                <td class="px-6 py-4" >{{$usuario->cedula}}</td>
                <td class="px-6 py-4" >{{$usuario->telefono}}</td>
                <td class="px-6 py-4" >{{$usuario->direccion}}</td>
                <td class="sr-only" > Editar |
                        <form action="{{route('index.destroy',$usuario->id)}}" method="POST">
                            @csrf
                            {{method_field('delete')}}
                        <input type="submit"  value="borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

