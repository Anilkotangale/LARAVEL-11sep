<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL</title>
</head>
<body>
<h1 style="background-color:LightGray;">
    <div style="text-align:center;">
    <h1 style="color:green;"> Create a Product ! </h1>
   </div>
     <form method="post" action="{{route('product.store')}}">
        @csrf 
        @method('post')
        <div style="text-align:center;">
        <div>
            <label>Name</label>
            <input type="text"  name="name" placeholder="name">
        </div>

        <div>
            <label>quantity</label>
            <input type="integer" name="quantity" placeholder="quantity">
        </div>

        <div>
            <label>Price</label>
            <input type="decimal" name="price" placeholder="price">
        </div>

        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <input style="background-color:rgb(255, 99, 71);" type="Submit" value="SUBMIT"/> 
        </div>
    </div>
    </h1>
</body>
</html>

