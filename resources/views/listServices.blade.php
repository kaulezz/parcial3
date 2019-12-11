<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
          
            @foreach($service as $ser)
            <tr>
                <th>{{$ser->type}}</th>
                <th>{{$ser->details}}</th>
                <th>{{$ser->professionals->first_name}}</th>
                <th>{{$ser->professionals->last_name}}</th>
            </tr>
            @endforeach
        
</body>
</html>