<x-layout>

                <div class="container-fluid px-4">
                    <h1 class="mt-4">Students</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Students</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            All Students Details ({{$students->count()}})
                        </div>
                        <div class="card-body">
                        <table id="datatablesSimple" class="table  table-hover">
                            <thead>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Grade Name</th>
                                <th>Show</th>
                            </thead>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{$student->first_name}}</td>
                                <td>{{$student->last_name}}</td>
                                <td>{{$student->grade->grade_name}}</td>
                                <td><a href="{{url("dashboard/students/$student->id")}}">show</a></td>
                            </tr>
                             @endforeach
                        </table>
                        </div>
                    </div>
                </div>
          
</x-layout>