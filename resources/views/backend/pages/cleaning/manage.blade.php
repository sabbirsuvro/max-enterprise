@extends('backend.layout.app')
@push('css')
	<link href="{{ asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('cleaningcreate') }}" class="btn btn-primary"><i class='bx bx-plus' ></i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>sl</th>
                            <th>name</th>
                            <th>type</th>
                            <th>img</th>
                            <th>Action</th>
                            <th>sdes</th>
                            <th>des</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cleaning as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->type }}</td>
                                <td>
                                    <img src="{{ asset('image/cleaning/' .$item->img) }}" alt="" width="150">
                                </td>
                                <td>
                                    <a href="{{ route('cleaningedit', $item->id) }}" class="btn btn-warning"><i class='bx bx-trash'></i></a>
                                </td>
                                <td>{{ $item->sdes }}</td>
                                <td>{{ $item->des }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('backend/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                lengthChange: true,
                pageLength: 20,
                lengthMenu: [20, 50, 100, 150]
            });
        });
    </script>
@endpush
