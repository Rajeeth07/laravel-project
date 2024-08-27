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
                        <h1 class="mt-4">{{$student->last_name}}</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/index">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="/students">Students</a></li>
                            <li class="breadcrumb-item active">{{$student->last_name}}</li>
                        </ol>
    <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    
                    Personal Detail
                </div>
                <div class="card-body">
                    <table border="1">
                        <tr>
                            <th>First Name</th>
                            <td>{{$student->first_name}}</td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td>{{$student->last_name}}</td>
                        </tr>
                        <tr>
                            <th>Grade Name</th>
                            <td> {{$student->grade->grade_name}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                   
                    Subject
                </div>
                <div class="card-body">
                    <table border="1">
                        <tr>
                            <th>Subject Name</th>
                            <th>Subject order</th>
                        </tr>
                            @foreach ($student->subjects as $subject)
                            <tr>
                            <td>{{$subject->subject_name}}</td>
                            <td>{{$subject->subject_order}}</td>
                            @endforeach
                        </tr>
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