@extends('backend.layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body p-4">
                    <form method="post" action="{{ route('websiteupdate', $website->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{ $website->name }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">slogan</label>
                            <div class="col-sm-9">
                                <textarea name="slogan" cols="30" rows="5" class="form-control">{{ $website->slogan }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">address</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" value="{{ $website->address }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">phone</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="phone" value="{{ $website->phone }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">hour</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="hour" value="{{ $website->hour }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email" value="{{ $website->email }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">fb</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="fb" value="{{ $website->fb }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">twitter</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="twitter" value="{{ $website->twitter }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">linkedin</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="linkedin" value="{{ $website->linkedin }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">instagram</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="insta" value="{{ $website->insta }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">youtube</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="youtube" value="{{ $website->youtube }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">logo</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="logo" value="{{ $website->logo }}">
                                <img src="{{ asset('image/website/' .$website->logo ) }}" alt="" width="150" class="mt-2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">icon</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" name="icon" value="{{ $website->icon }}">
                                <img src="{{ asset('image/website/' .$website->icon ) }}" alt="" width="150" class="mt-2">
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
