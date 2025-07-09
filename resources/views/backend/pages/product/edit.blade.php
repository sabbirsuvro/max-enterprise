@extends('backend.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header px-4 py-3">
                </div>
                <div class="card-body p-4">
                    <form method="post" action="{{ route('productupdate', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputName" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputName" name="name"
                                    value="{{ old('name', $product->name) }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputCategory" class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                                <select class="form-select" id="inputCategory" name="category">
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $product->category ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Existing Images with delete option -->
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Existing Images</label>
                            <div class="col-sm-9 d-flex flex-wrap gap-3">
                                @foreach ($product->img as $img)
                                    <div style="position: relative; width: 120px;">
                                        <img src="{{ asset($img) }}" alt="Product Image"
                                            style="width: 100%; border-radius: 5px;">
                                        <div class="form-check mt-1">
                                            <input class="form-check-input" type="checkbox" name="delete_images[]"
                                                value="{{ $img }}" id="delete_{{ md5($img) }}">
                                            <label class="form-check-label" for="delete_{{ md5($img) }}">
                                                Delete
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputImg" class="col-sm-3 col-form-label">Upload New Images</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="inputImg" name="img[]" multiple>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPrice" class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputPrice" name="price"
                                    value="{{ old('price', $product->price) }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputDetails" class="col-sm-3 col-form-label">Details</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputDetails" name="details"
                                    value="{{ old('details', $product->details) }}">
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4" name="submit2">Update</button>
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
