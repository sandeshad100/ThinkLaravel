<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
        <h1>Create Product</h1>
        <div>
            @if ($errors->any())

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <form method="POST" action="{{ route('product.store') }}">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="title"
                    name="title">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Quantity"
                    name="qty">
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Rate</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Rate"
                    name="rate">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Cities</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="City"
                    name="city">
            </div>
            <button type="submit" class="btn btn-success" name="submit">Add Product</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
