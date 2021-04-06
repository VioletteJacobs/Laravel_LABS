@extends('template.main')
@include('partials.front.blog.intro')
@section('content')
<div class="page-section spad">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">

                <h1 class="mt-5">Voici les résultats : </h1>
                <div class="container">

                
                

                    @foreach ($postsCategory as $post)
                        <div class="post-list">
                            <p>{{ $post->title }}</p>
                            <p>{{ $post->categories->category }}</p>
                            <p>{{Str::limit($post->content, 150)}} ... </p>
                        </div>
                    @endforeach

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
