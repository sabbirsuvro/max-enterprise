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
                            <th>leftside img</th>
                            <th>video img</th>
                            <th>rightside img</th>
                            <th>video</th>
                            <th>year</th>
                            <th>des</th>
                            <th>wptitle1</th>
                            <th>wptitle2</th>
                            <th>wptitle3</th>
                            <th>wptitle4</th>
                            <th>wpdes1</th>
                            <th>wpdes2</th>
                            <th>wpdes3</th>
                            <th>wpdes4</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $about->id }}</td>
                            <td>
                                <img src="{{ asset('image/about/' . $about->img1) }}" alt="{{ $about->img1 }}" width="150">
                            </td>
                            <td>
                                <img src="{{ asset('image/about/' . $about->img2) }}" alt="{{ $about->img2 }}" width="150">
                            </td>
                            <td>
                                <img src="{{ asset('image/about/' . $about->img3) }}" alt="{{ $about->img3 }}" width="150">
                            </td>
                            <td>{{ $about->video }}</td>
                            <td>{{ $about->year }}</td>
                            <td>{{ $about->des }}</td>
                            <td>{{ $about->wptitle1 }}</td>
                            <td>{{ $about->wptitle2 }}</td>
                            <td>{{ $about->wptitle3 }}</td>
                            <td>{{ $about->wptitle4 }}</td>
                            <td>{{ $about->wpdes1 }}</td>
                            <td>{{ $about->wpdes2 }}</td>
                            <td>{{ $about->wpdes3 }}</td>
                            <td>{{ $about->wpdes4 }}</td>
                            <td>
                                <a href="{{ route('aboutedit', $about->id) }}" class="btn btn-warning"><i class='bx bx-trash'></i></a>
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
