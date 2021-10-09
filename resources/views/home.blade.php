@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <form action="{{route('image')}}" method="POST" enctype="multipart/form-data">
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                          <label for="inputPassword6" class="col-form-label">Image</label>
                        </div>
                        @csrf
                        <div class="col-auto">
                          <input type="file" name="image" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        <input type="submit">

                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
