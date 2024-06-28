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
        <h1>Product</h1>
        <a href="{{ route('product.create') }}"><button>Add Product</button></a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Rate</th>
                    <th scope="col">Quantity</th>

                    <th scope="col">Action</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                    <tr>
                        <td scope="row">{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->rate }}</td>
                        <td>{{ $product->qty }}</td>
                        <td><a href="{{ route('product.edit', ['product' => $product]) }}"><button
                                    class="btn btn-primary">Edit</button></a></td>
                        <td>
                            <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                @endforeach



            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
