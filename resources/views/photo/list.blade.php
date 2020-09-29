<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($photos as $photo)
        <img src='/images/{{$photo->path}}' width="100px" height ="100px" />
    @endforeach
</body>
</html>