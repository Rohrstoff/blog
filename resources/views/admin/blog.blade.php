@extends('layout.app')

@section('content')
<h1 class="text-center">Blog erfassen</h1>
<div class="row">
    <div class="col-md-12">
        <form method="POST" @isset($blog) action="/blog/{{ $blog->id }}" @else action="/blog" @endisset>
            @isset( $blog )
            @method('put')
            @endisset

            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titel</label>
                <input type="text" class="form-control" id="title" name="title" @isset($blog) value="{{ $blog->title }}" @endisset>
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lead" class="form-label">Lead</label>
                <textarea class="form-control" id="lead" name="lead" rows="5">@isset($blog){{ $blog->lead }} @endisset</textarea>
                @error('lead')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Inhalt</label>
                <textarea class="form-control" id="content" name="content" rows="5">@isset($blog){{ $blog->content }}@endisset</textarea>
                @error('content')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Speichern</button>
        </form>
    </div>
    @if( $errors->any() )
    <div class="alert alert-danger">
        <ul>
            @foreach( $errors->all() as $error )
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection
