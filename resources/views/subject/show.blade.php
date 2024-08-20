<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$subject->subject_name}} subject details</h1>
    <table border="1">
        <tr>
            <th>Subject Name</th><td>{{$subject->subject_name}}</td>
        </tr>
        <tr>
            <th>Subject Order</th><td>{{$subject->subject_order}}</td>
        </tr>
        <tr>
            <th>Subject Color</th><td>{{$subject->subject_color}}</td>
        </tr>
    </table>
    <hr>
    <h1>{{$subject->subject_name}} students details</h1>
    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Grade Name</th>
        </tr>
        @foreach ($subject->students as $student)
            <tr>
                <td>{{$student->firstname}}</td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->grade->grade_name}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>