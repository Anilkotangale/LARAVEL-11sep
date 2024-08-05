<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>LARAVEL</title>
</head>
<body>
    <div style="center">
    <h1 style="color:green;"> WELCOME TO ONLINE SHOPPING !</h1>
    <div style="color:red;">List of Index</div>
         <div style="text-align:center;">
         <div>
         <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
            @foreach($products as $product)
             <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td> 
            </tr>
            @endforeach
         </table>
         {{$products->links()}}
         </div>
         </div>
</body>
</html>
