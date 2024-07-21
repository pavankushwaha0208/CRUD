<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple_laravel_11_CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="bg-dark py-3">
        <h1 class="text-white text-center">Simple_laravel_11_CRUD</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center mt-4">
           <div class="col-md-10 d-flex justify-content-end">
            <a href="{{ route('products.create')}}" class=" btn btn-dark">Create</a>
           </div>
        </div>
        <div class="row d-flex justify-content-center">
            @if (Session::has('success'))
            <div class="col-md-10 mt-3">
                <div class=" alert alert-success">
                    {{ Session::get('success')}}
                </div>
            </div>
                
            @endif
            <div class="col-md-10">
               <div class="card border-0 shadow-lg my-4 p-3">
                <div class="cerd-header bg-dark rounded py-2">
                    <h3 class="text-white text-center">Product List</h3>
                </div>

               
               </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>