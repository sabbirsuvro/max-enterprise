@extends('backend.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header px-4 py-3">
                </div>
                <div class="card-body p-4">
                    <form method="post" action="{{ route('careerupdate', $career->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" value="{{ $career->title }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">TYpe</label>
                            <div class="col-sm-9">
                                <select class="form-select" aria-label="Default select example" name="type">
                                    <option value="active" {{ $career->type == 'active' ? 'selected' : '' }}>active</option>
                                    <option value="inactive" {{ $career->type == 'inactive' ? 'selected' : '' }}>inactive
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">Job description</label>
                            <div class="col-sm-9">
                                <textarea name="details" id="content" cols="30" rows="10">{{ $career->details }}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4" name="submit2">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#content'), {
                ckfinder: {
                    uploadUrl: '{{ route('ckupload') . '?_token=' . csrf_token() }}'
                }
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor.create(document.querySelector('#content2'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
