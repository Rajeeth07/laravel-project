<x-layout>

                <div class="container-fluid px-4">
                    <h1 class="mt-4">Subjects</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Subjects</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            All Subjects Details ({{$subjects->count()}})
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple" class="table  table-hover">
                                <thead>
                                    <th>Subject Name</th>
                                    <th>Subject Order</th>
                                    <th>Show</th>
                                </thead>
                                @foreach ($subjects as $subject)
                                    <tr>
                                        <td>{{ $subject->subject_name }}</td>
                                        <td>{{ $subject->subject_order }}</td>
                                        <td><a href="{{ url("/dashboard/subjects/$subject->id") }}">show</a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
                

</x-layout>
