<x-layout>
    <h1>All Subject details</h1>
    <table border="1">
        <tr>
            <th>Subject Name</th>
            <th>Subject Order</th>
            <th>Subject Color</th>
        </tr>
        @foreach ($subjects as $subject)
            <tr>
                <th><a href="{{url("/subjects/$subject->id")}}">{{$subject->subject_name}}</a></th>
                <th>{{$subject->subject_order}}</th>
                <th>{{$subject->subject_color}}</th>
            </tr>
        @endforeach
    </table>
    {{$subjects->links()}}
    <a href="{{url("students/")}}" style="color: blue">All student Datail</a>
    <a href="{{url("/grades")}}" style="color: red">All grades detail</a>
</x-layout>