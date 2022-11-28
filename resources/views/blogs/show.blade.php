@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Blog') }}</div>

                <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" value="{{ $blog->title }}" name="title" placeholder="Enter title" readonly>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control"  name="content" rows="3" readonly>{{ $blog->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="attachment">Attachment</label>
                           <a href="{{ config('app.url') }}/storage/{{ $blog->attachment }}" target="_blank">Open Attachment</a>
                        </div>
                        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
