<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <h1>Operator</h1>

    <form action="operator" method="POST">
        @csrf
        a: <input type="number" name="txtA" value="" required/>
        b: <input type="number" name="txtB" value="" required/>
        <input type="submit" value="+" name="btnSubmit"/>
        <input type="submit" value="-" name="btnSubmit"/>
        <input type="submit" value="*" name="btnSubmit"/>
        <input type="submit" value="/" name="btnSubmit"/>
    </form>
    <h1>{{$rs}}</h1>
</body>
</html>
