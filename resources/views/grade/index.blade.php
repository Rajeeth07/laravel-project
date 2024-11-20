<x-layout>

                <div class="container-fluid px-4">
                    <h1 class="mt-4">Grades</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Grades</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            All Grades Details ({{$grades->count()}})
                        </div>
                        <div class="card-body">
                        <table id="datatablesSimple" class="table  table-hover">
                            <thead>
                                <th>Grade Name</th>
                                <th>Grade Group</th>
                                <th>Grade Order</th>
                                <th>Grade Color</th>
                                <th>Show</th>
                            </thead>
                            @foreach ($grades as $grade)
                            <tr>
                                <td>{{$grade->grade_name}}</td>
                                <td>{{$grade->grade_group}}</td>
                                <td>{{$grade->grade_order}}</td>
                                <td>{{$grade->grade_color}}</td>
                                <td><a href="{{url("dashboard/grades/$grade->id")}}">show</a></td>
                            </tr>
                             @endforeach
                        </table>
                        </div>
                    </div>
                </div>
                
</x-layout>