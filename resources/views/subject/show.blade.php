<x-layout>
    <body class="sb-nav-fixed">
        <x-nav/>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <x-sidebar/>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <div class="container-fluid px-4">
                    <h1 class="mt-4">{{$subject->subject_name}}</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="/dashboard/subjects">Subjects</a></li>
                        <li class="breadcrumb-item active">{{$subject->subject_name}}</li>
                    </ol>
<div class="row">
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                
                Students Detail
            </div>
            <div class="card-body">
                <table class="table  table-hover">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Grade Name</th>
                        <th>Show</th>
                    </tr>
                    @foreach ($subject->students as $student)
                    <tr>
                        <td>{{$student->first_name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->grade->grade_name}}</td>
                        <td><a href="{{url("/dashboard/students/$student->id")}}">show</a></td>
                    </tr>
                     @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
               
                Grades Details
            </div>
            <div class="card-body">
                <table id="datatablesSimple" border="1" class="table  table-hover">
                    <thead>
                        <th>Grade Name</th>
                        <th>Grade Group</th>
                        <th>Grade Order</th>
                        <th>Show</th>
                    </thead>
                    @foreach ($subject->grades as $grade)
                    <tr>
                        <td>{{$grade->grade_name}}</td>
                        <td>{{$grade->grade_group}}</td>
                        <td>{{$grade->grade_order}}</td>
                        <td><a href="{{url("/dashboard/grades/$grade->id")}}">show</a></td>
                    </tr>
                     @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<x-footer/>
            
</div>
</div>
    </body>
</x-layout>