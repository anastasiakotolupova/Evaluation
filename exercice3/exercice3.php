<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<body>
    <form method="post" action="script.php">
        <div class="form-group">
            <input class="form-control" type="text" name="make" placeholder="make">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="model"placeholder="model">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="year" placeholder="year">
        </div>
        <div class="form-group">
            <select class="form-control" name="color">
                <option disabled selected>Color</option>
                <option value="black">Black</option>
                <option value="white">White</option>
                <option value="blue">Blue</option>
                <option value="red">Red</option>
            </select>
        <div>
            <input type="submit" value="Send" class="btn btn-success btn-lg">
        </div>
    </form>
</body>
</html>