<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All grade detail</h1>
    <table border="1">
        <tr>
            <th>Grade Name</th>
            <th>Grade Order</th>
            <th>Grade Color</th>
            <th>Grade Group</th>
        </tr>
        @foreach ($grades as $grade)
        <tr>
            <td>{{$grade->grade_name}}</td>
            <td>{{$grade->grade_order}}</td>
            <td>{{$grade->grade_color}}</td>
            <td>{{$grade->grade_group}}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{url("stu/")}}" style="color: blue">All student Detail</a>
</body>
</html>