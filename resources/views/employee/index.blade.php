<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h2>All Employees Details</h2>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>BOB</th>
            <th>Nic</th>
            <th>Joining_date</th>
            <th>Gender</th>
            <th>Designation Name</th>
            <th>Designation Order</th>
            <th>Designation Color</th>

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
            <td><a href="{{url("/designation/$employee->designation_id")}}">{{$employee->designation->designation_name}}</a></td>
            <td>{{$employee->designation->designation_order}}</td>
            <td>{{$employee->designation->designation_color}}</td>

            
            
        </tr>
            
        @endforeach
    </table>
    <h4><a href="{{url("/designation")}}" style="color:blue;">All designation details</a></h4>
    
</body>
</html>