<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$designation->designation_name}} employees details</h1>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>BOB</th>
            <th>Nic</th>
            <th>Joining_date</th>
            <th>Gender</th>

        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>{{$employee->id}}</td>
                <td><a href="{{url("/employee/$employee->id")}}">{{$employee->first_name}}</a></td>
                <td>{{$employee->last_name}}</td>
                <td>{{$employee->date_of_birth}}</td>
            <td>{{$employee->nic}}</td>
            <td>{{$employee->joining_date}}</td>
            <td>{{$employee->gender}}</td>
            </tr>
        @endforeach
    </table>
    <a href="/employee">All Employees Details</a>
    <a href="{{url("/designation")}}">All designation details</a>
</body>
</html>