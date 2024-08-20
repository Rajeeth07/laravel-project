<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>All Designations details</h2>
    <table border="1">
        <tr>
            <th>Designation Name</th>
            <th>Designation Order</th>
            <th>Designation Color</th>
        </tr>
        @foreach ($designations as $designation)
            <tr>
                <td>{{$designation->designation_name}}</td>
                <td>{{$designation->designation_order}}</td>
                <td>{{$designation->designation_color}}</td>
            </tr>
        @endforeach
    </table>
    <h4><a href="/employee" style="color:blue;">All Employees Details</a></h4>
</body>
</html>