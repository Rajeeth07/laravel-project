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
                    <h1 class="mt-4">Subjects</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/index">Dashboard</a></li>
                        <li class="breadcrumb-item active">Subjects</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            All Subjects Details
                        </div>
                        <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <th>Subject Name</th>
                                <th>Subject Order</th>
                                <th>Show</th>
                            </thead>
                            @foreach ($subjects as $subject)
                            <tr>
                                <td>{{$subject->subject_name}}</td>
                                <td>{{$subject->subject_order}}</td>
                                <td><a href="{{url("/dashboard/subjects/$subject->id")}}">show</a></td>
                            </tr>
                             @endforeach
                        </table>
                        </div>
                    </div>
                </div>
                <x-footer/>
                
            </div>
        </div>
    </body>
</x-layout>