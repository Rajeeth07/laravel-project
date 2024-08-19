<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$employee->first_name}} details</h1>
    <table border="1">
        <tr>
            <td>First Name</td>
            <td>{{$employee->first_name}}</td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>{{$employee->last_name}}</td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>{{$employee->date_of_birth}}</td>
        </tr>
        <tr>
            <td>Nic Number</td>
            <td>{{$employee->nic}}</td>
        </tr>
        <tr>
            <td>Joining Date</td>
            <td>{{$employee->joining_date}}</td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>{{$employee->gender}}</td>
        </tr>
        <tr>
            <td>Designation</td>
            <td><a href="{{url("/designation/$employee->grade_id")}}">{{$employee->designation->designation_name}}</a></td>
        </tr>
    </table>
    <a href="/employee">All Employees Details</a>
    <a href="{{url("/designation")}}">All designation details</a>
</body>
</html>