
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$titulo}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="containe my-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
              <h1 class="text-center">{{$titulo}}</h1>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Categoria</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($productos as $producto)
                  @if ($producto->stock > 10)
                  <tr>
                    <td>{{$producto->cod_producto}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>{{$producto->descripcion}}</td>
                  </tr>
                  @endif
                  @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>