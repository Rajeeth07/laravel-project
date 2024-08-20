<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$students->firstname}} Deatails</h1>
    <table border="1">
        <tr>
            <th>Firstname</th><td>{{$students->firstname}}</td>
        </tr>
        <tr>  
            <th>Last name</th><td>{{$students->lastname}}
        </tr>
        <tr>
            <th>Grade Name</th><td><a href="{{url("/grades/$students->grade_id")}}">{{$students->grade->grade_name}}</a></td>
        </tr>
            
        
    </table>
    <a href="{{url("stu/")}}" style="color: blue">All student Datail</a>
</body>
</html>