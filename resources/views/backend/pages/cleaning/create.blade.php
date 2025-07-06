@extends('backend.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header px-4 py-3">
                </div>
                <div class="card-body p-4">
                    <form method="post" action="{{ route('cleaningstore') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">Choose Type</label>
                            <div class="col-sm-9">
                                <select name="type" id="type" class="form-control">
                                    <option value="" disabled>Choose Type...</option>
                                    <option value="cleaning_service">Cleaning Service</option>
                                    <option value="pestcontrol_service">Pest Control</option>
                                    <option value="manpower_service">Manpower Service</option>
                                    <option value="bLog">Blog</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="img">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">Short Descriotion</label>
                            <div class="col-sm-9">
                                <textarea name="sdes" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">Descriotion</label>
                            <div class="col-sm-9">
                                <textarea name="des" cols="30" rows="5" class="form-control" id="content"></textarea>
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
