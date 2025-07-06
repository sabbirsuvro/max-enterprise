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
                            <th>SL</th>
                            <th>Name</th>
                            <th>Slogan</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Hour</th>
                            <th>Email</th>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>LinkedIn</th>
                            <th>Instagram</th>
                            <th>YouTube</th>
                            <th>Logo</th>
                            <th>Icon</th>
                            <th>map</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{ $website->id }}</td>
                            <td>{{ $website->name }}</td>
                            <td>{{ $website->slogan }}</td>
                            <td>{{ $website->address }}</td>
                            <td>{{ $website->phone }}</td>
                            <td>{{ $website->hour }}</td>
                            <td>{{ $website->email }}</td>
                            <td>{{ $website->fb }}</td>
                            <td>{{ $website->twitter }}</td>
                            <td>{{ $website->linkedin }}</td>
                            <td>{{ $website->insta }}</td>
                            <td>{{ $website->youtube }}</td>
                            <td>
                                <img src="{{ asset('image/website/' . $website->logo) }}" alt="{{ $website->logo }}" width="150">
                            </td>
                            <td>
                                <img src="{{ asset('image/website/' . $website->icon) }}" alt="{{ $website->icon }}"
                                    width="150">
                            </td>
                            <td>{{ $website->map }}</td>
                            <td>
                                <a href="{{ route('websiteedit', $website->id) }}" class="btn btn-warning"><i class='bx bxs-edit'></i></a>
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
