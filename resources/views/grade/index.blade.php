<x-layout>
    <h1>All grade detail</h1>
    {{$grades->currentPage()}}
    <table border="1">
        <tr>
            <th>Grade Name</th>
            <th>Grade Order</th>
            <th>Grade Color</th>
            <th>Grade Group</th>
        </tr>
        @foreach ($grades as $grade)
        <tr>
            <td><a href="{{url("/grades/$grade->id")}}">{{$grade->grade_name}}</a></td>
            <td>{{$grade->grade_order}}</td>
            <td>{{$grade->grade_color}}</td>
            <td>{{$grade->grade_group}}</td>
        </tr>
        @endforeach
    </table>
    {{ $grades->links() }}
    <br>
    {{$grades->count()}}
    {{$grades->lastItem()}}
    {{$grades->lastPage()}}
    {{$grades->total()}}
    <a href="{{url("students/")}}" style="color: blue">All student Detail</a>
    <a href="{{url("/subjects")}}" style="color: red">All subjects detail</a>    
</x-layout>