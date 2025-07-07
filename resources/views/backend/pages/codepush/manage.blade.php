@extends('backend.layout.app')
@push('css')
	<link href="{{ asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>sl</th>
                            <th>header</th>
                            <th>body</th>
                            <th>footer</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($codepush as $item)

                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->header }}</td>
                            <td>{{ $item->body }}</td>
                            <td>{{ $item->footer }}</td>
                            <td>
                                <a href="{{ route('codepushedit', $item->id) }}" class="btn btn-warning"><i class='bx bxs-edit'></i></a>
                            </td>
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
