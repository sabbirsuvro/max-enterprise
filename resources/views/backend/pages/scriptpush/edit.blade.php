@extends('backend.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                {{-- <div class="card-header px-4 py-3">
                </div> --}}
                <div class="card-body p-4">
                    <form method="post" action="{{ route('heroupdate', $hero->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">title1</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title1" value="{{ $hero->title1 }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">title2</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title2" value="{{ $hero->title2 }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">wave</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="wave" value="{{ $hero->wave }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">project</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="project" value="{{ $hero->project }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">cleaner</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="cleaner" value="{{ $hero->cleaner }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">customer</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="customer" value="{{ $hero->customer }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">bgimg</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="bgimg" value="{{ $hero->bgimg }}">
                                <img src="{{ asset('image/hero/' .$hero->bgimg ) }}" alt="" width="150" class="mt-2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">img</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="img" value="{{ $hero->img }}">
                                <img src="{{ asset('image/hero/' .$hero->img ) }}" alt="" width="150" class="mt-2">
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
