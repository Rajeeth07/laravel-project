<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1>All grade detail</h1>
    {{$grades->currentPage()}}
    <table border="1">
        <tr>
            <th>Grade Name</th>
            <th>Grade Order</th>
            <th>Grade Color</th>
            <th>Grade Group</th>
        </tr>
        @foreach ($grades as $grade)
        <tr>
            <td><a href="{{url("/grades/$grade->id")}}">{{$grade->grade_name}}</a></td>
            <td>{{$grade->grade_order}}</td>
            <td>{{$grade->grade_color}}</td>
            <td>{{$grade->grade_group}}</td>
        </tr>
        @endforeach
    </table>
    {{ $grades->links() }}
    <br>
    {{$grades->count()}}
    {{$grades->lastItem()}}
    {{$grades->lastPage()}}
    {{$grades->total()}}
    <a href="{{url("stu/")}}" style="color: blue">All student Detail</a>
    <a href="{{url("/subjects")}}" style="color: red">All subjects detail</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>