<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h1>EDIT Product</h1>
        <div>
            @if ($errors->any())

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form method="post" action="{{ route('product.update', ['product' => $product]) }}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="title" name="title"
                    value="{{ $product->title }}">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Quantity"
                    name="qty" value="{{ $product->qty }}">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Rate</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Rate" name="rate"
                    value="{{ $product->rate }}">
            </div>
            <button type="submit" class="btn btn-success" name="submit">EDIT</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
