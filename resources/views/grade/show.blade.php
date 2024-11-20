<x-layout>

                <div class="container-fluid px-4">
                    <h1 class="mt-4" style="color: {{ $grade->grade_color }}">{{ $grade->grade_name }}</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="/dashboard/subjects">Grades</a></li>
                        <li class="breadcrumb-item active">{{ $grade->grade_name }}</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">

                                    Students Detail ({{ $students->count() }})
                                </div>
                                <div class="card-body">
                                    <table id="datatablesSimple" class="table  table-hover">
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Grade Name</th>
                                            <th>Show</th>
                                        </tr>
                                        @foreach ($students as $student)
                                            <tr>
                                                <td>{{ $student->first_name }}</td>
                                                <td>{{ $student->last_name }}</td>
                                                <td>{{ $student->grade->grade_name }}</td>
                                                <td><a href="{{ url("dashboard/students/$student->id") }}">show</a></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">

                                    Subjects Details ({{$grade->subjects->count()}})
                                </div>
                                <div class="card-body">
                                    <table class="table  table-hover">
                                        <thead>
                                            <th>Subject Name</th>
                                            <th>Subject Order</th>
                                            <th>Show</th>
                                        </thead>
                                        @foreach ($grade->subjects as $subject)
                                            <tr>
                                                <td>{{ $subject->subject_name }}</td>
                                                <td>{{ $subject->subject_order }}</td>
                                                <td><a href="{{ url("dashboard/subjects/$subject->id") }}">show</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
</x-layout>
