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
            <th>First Name</th>
            <th>Last Name</th>
            <th>BOB</th>
            <th>Nic</th>
            <th>Joining_date</th>
            <th>Gender</th>
            <th>Designation</th>
            <th>Peronal Info</th>
        </tr>
        @foreach ($employees as $employee)
        <tr>
            
            <td>{{$employee->first_name}}</td>
            <td>{{$employee->last_name}}</td>
            <td>{{$employee->date_of_birth}}</td>
            <td>{{$employee->nic}}</td>
            <td>{{$employee->joining_date}}</td>
            <td>{{$employee->gender}}</td>
            <td>{{$employee->designation}}</td>
            <td><a href="{{url("/employee/$employee->id")}}">Show</a></td>
            
        </tr>
            
        @endforeach
    </table>
</body>
</html>