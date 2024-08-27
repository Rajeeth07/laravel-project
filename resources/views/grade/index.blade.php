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
                    <h1 class="mt-4">Grades</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/index">Dashboard</a></li>
                        <li class="breadcrumb-item active">Grades</li>
                    </ol>
                        <table id="datatablesSimple">
                            <thead>
                                <th>Grade Name</th>
                                <th>Grade Group</th>
                                <th>Grade Order</th>
                                <th>Show</th>
                            </thead>
                            @foreach ($grades as $grade)
                            <tr>
                                <td>{{$grade->grade_name}}</td>
                                <td>{{$grade->grade_group}}</td>
                                <td>{{$grade->grade_order}}</td>
                                <td><a href="{{url("/grades/$grade->id")}}">show</a></td>
                            </tr>
                             @endforeach
                        </table>
                </div>
                <x-footer/>
                
            </div>
        </div>
    </body>
</x-layout>