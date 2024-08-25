<x-layout>
    <h1>All Student details</h1>
    <table border="1">
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Grade Name</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td><a href="{{url("/students/$student->id")}}">{{$student->first_name}}</a></td>
        <td>{{$student->last_name}}</td>
        <td><a href="{{url("/grades/$student->grade_id")}}">{{$student->grade->grade_name}}</a></td>
    </tr>
    @endforeach
    </table>
    {{$students->links()}}
    <a href="{{url("/grades")}}" style="color: blue">All grades detail</a>
    <a href="{{url("/subjects")}}" style="color: red">All subjects detail</a>
</x-layout>