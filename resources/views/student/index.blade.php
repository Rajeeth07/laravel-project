<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>

    </tr>
    @foreach($students as $student)
    
    <tr>
        <td>
            {{$student->id}}
        </td>
        <td>
            {{$student->firstname}}
        </td>
        <td>
            {{$student->lastname}}
        </td>
        <td><a href="{{url("/stu/$student->id")}}">Show</a></td>
    </tr>
    <br>
    @endforeach
    </table>
</body>
</html>