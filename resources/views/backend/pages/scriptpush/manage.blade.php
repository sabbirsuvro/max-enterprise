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
                            <th>title1</th>
                            <th>title2</th>
                            <th>wave</th>
                            <th>project</th>
                            <th>cleaner</th>
                            <th>customer</th>
                            <th>bgimg</th>
                            <th>img</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $hero->id }}</td>
                            <td>{{ $hero->title1 }}</td>
                            <td>{{ $hero->title2 }}</td>
                            <td>{{ $hero->wave }}</td>
                            <td>{{ $hero->project }}</td>
                            <td>{{ $hero->cleaner }}</td>
                            <td>{{ $hero->customer }}</td>
                            <td>
                                <img src="{{ asset('image/hero/' . $hero->bgimg) }}" alt="{{ $hero->bgimg }}" width="150">
                            </td>
                            <td>
                                <img src="{{ asset('image/hero/' . $hero->img) }}" alt="{{ $hero->img }}" width="150">
                            </td>
                            <td>
                                <a href="{{ route('heroedit', $hero->id) }}" class="btn btn-warning"><i class='bx bx-trash'></i></a>
                            </td>
                        </tr>
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
