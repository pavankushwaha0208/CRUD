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
             <a href="{{ route('products.index')}}" class=" btn btn-dark">Back</a>
            </div>
         </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
               <div class="card border-0 shadow-lg my-4 p-3">
                <div class="cerd-header bg-dark rounded py-2">
                    <h3 class="text-white text-center">Create-Product</h3>
                </div>
                <form action="{{ route('products.store')}}" method="post">
                    @csrf
                <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label h5">Name</label>
                            <input
                                type="text"
                                value="{{ old('name')}}"
                                class="form-control  @error('name') is-invalid @enderror"
                                name="name"
                                id=""
                                aria-describedby="helpId"
                                placeholder="Name"
                            />
                            @error('name')
                            <p class="invalid-feedback">{{ $message}}</p>
                            @enderror
                    </div>

                        <div class="mb-3">
                            <label for="" class="form-label h5">Sku</label>
                            <input
                                type="text"
                                value="{{ old('sku')}}"
                                class="form-control  @error('sku') is-invalid @enderror"
                                name="sku"
                                id=""
                                aria-describedby="helpId"
                                placeholder="Sku"
                            />
                            @error('sku')
                            <p class="invalid-feedback">{{ $message}}</p>
                            @enderror
                    </div>

                        <div class="mb-3">
                            <label for="" class="form-label h5">Price</label>
                            <input
                                type="text"
                                value="{{ old('price')}}"
                                class="form-control @error('price') is-invalid @enderror"
                                name="price"
                                id=""
                                aria-describedby="helpId"
                                placeholder="Price"
                            />
                            @error('price')
                            <p class="invalid-feedback">{{ $message}}</p>
                            @enderror
                    </div>

                        <div class="mb-3">
                            <label for="" class="form-label h5">Desciption</label>
                            <textarea placeholder="Desciption" value="{{ old('desciption')}}" class="form-control" name="desciption" id="" cols="30" rows="5"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label h5">Image</label>
                            <input
                                type="file"
                                class="form-control"
                                name="image"
                                id=""
                                aria-describedby="helpId"
                                placeholder="image"
                            />
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-lg btn-primary fw-bold">Submit</button>
                    </div>
                        
                </div>
                </form>
               </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>