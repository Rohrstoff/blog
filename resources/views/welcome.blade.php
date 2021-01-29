@extends('layout.app')

@section('content')
<h1 class="text-center">ISO Blog</h1>
<div class="row">
    <div class="col-md-12">
        <div class="list-group">
            @foreach($blogs as $blog)
            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $blog->title }}</h5>
                    <button onclick="editBlog( {{ $blog->id }} )" class="btn btn-warning btn-sm">Bearbeiten</button>
                </div>
                <p class="mb-1">{{ $blog->lead }}</p>
                <small>{{ $blog->content }}</small>
            </a>
            @endforeach
        </div>
    </div>
    <div class="col-md-12">
        <a href="/blog" class="btn btn-success btn-lg col-md-12">Neuer Blog erstellen</a>
    </div>
    <div class="col-md-12">
        <a href="#" onclick="doSomething()" class="btn btn-danger col-md-12">Pointless Button</a>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</div>
@endsection
