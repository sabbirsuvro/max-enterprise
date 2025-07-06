@extends('backend.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body p-4">
                    <form method="post" action="{{ route('aboutupdate', $about->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Video URL</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="video" value="{{ $about->video }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Year</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="year" value="{{ $about->year }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="content" name="des">{{ $about->des }}</textarea>
                            </div>
                        </div>

                        @for ($i = 1; $i <= 4; $i++)
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Why Point Title {{ $i }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="wptitle{{ $i }}"
                                        value="{{ $about->{'wptitle' . $i} }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Why Point Description {{ $i }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="wpdes{{ $i }}"
                                        value="{{ $about->{'wpdes' . $i} }}">
                                </div>
                            </div>
                        @endfor

                        @for ($i = 1; $i <= 3; $i++)
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Image {{ $i }}</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="img{{ $i }}">
                                    @php $imgField = 'img' . $i; @endphp
                                    @if (!empty($about->$imgField))
                                        <img src="{{ asset('image/about/' . $about->$imgField) }}" alt=""
                                            width="150" class="mt-2">
                                    @endif
                                </div>
                            </div>
                        @endfor

                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary px-4">Submit</button>
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
