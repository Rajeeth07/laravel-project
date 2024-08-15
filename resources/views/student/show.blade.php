<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{url("stu/")}}">Student</a>
    <table border="1">
        <tr>
            <th>Firstname</th>
            <th>Last name</th>
            
            
        </tr>
        <tr>
            <td>{{$students->firstname}}</td>
            <td>{{$students->lastname}}</td>
        </tr>
    </table>
</body>
</html>