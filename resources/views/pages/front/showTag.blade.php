@extends('template.main')
@include('partials.front.blog.intro')
@section('content')
<div class="page-section spad">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <div>

                   <h1>Voici les résultats de votre recherche : </h1>
                    {{-- @foreach ($posts->tags as $tage)
                        <div class="post-list">
                            <p>{{ $tage->tag }}</p>
                            <p>{{ $post->categories->category }}</p>
                            <p>{{Str::limit($post->content, 150)}} ... </p>
                        </div>
                    @endforeach --}}

                </div>

            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">

                @include('partials.front.blog.search')
                @include('partials.front.blog.category')
                @include('partials.front.blog.tags')
                
            </div>
</div>
<!-- page section end-->





@endsection
