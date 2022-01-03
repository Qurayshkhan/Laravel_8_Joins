<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    
<table>
    <tr>
        <th>Countries</th>
        <th>States</th>
        <th>City</th>
    </tr>
    @foreach ($data as $item)
        
    <tr>
        <td>{{$item->country_name}}</td>
        <td>{{$item->state_name}}</td>
        <td>{{$item->city_name}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>