<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$grades->grade_name}} students deatails</h1>
    <table border="1">
        <tr>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>
                    {{$student->firstname}}
                </td>
                <td>{{$student->lastname}}</td>
            </tr>
        @endforeach
    </table>
    <a href="{{url("stu/")}}">All student Datail</a>
    <a href="{{url("/grades")}}">All grades detail</a>
</body>
</html>

