<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Home</title>
</head>

<style>
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body{
    display: flex;
    align-items: center;
    justify-content:center;
    margin-top: 3rem;
}
</style>
<body>
    <div>
        @foreach($laptops as $laptop)
            <span>{{$laptop}}</span>
            @if(!$loop->last)
                -
            @endif
        @endforeach
    </div>
</body>
</html>