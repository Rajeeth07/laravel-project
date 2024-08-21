<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Subject details</h1>
    <table border="1">
        <tr>
            <th>Subject Name</th>
            <th>Subject Order</th>
            <th>Subject Color</th>
        </tr>
        @foreach ($subjects as $subject)
            <tr>
                <th><a href="{{url("/subjects/$subject->id")}}">{{$subject->subject_name}}</a></th>
                <th>{{$subject->subject_order}}</th>
                <th>{{$subject->subject_color}}</th>
            </tr>
        @endforeach
    </table>
    <a href="{{url("stu/")}}" style="color: blue">All student Datail</a>
    <a href="{{url("/grades")}}" style="color: red">All grades detail</a>
</body>
</html>