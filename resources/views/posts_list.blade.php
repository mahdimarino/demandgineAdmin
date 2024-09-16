@extends('web_layout')
@section('content')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- revolution slider begin -->
    <!-- section begin -->
    <section class="relative no-top no-bottom text-light"
        data-bgimage="url({{ asset('images/webimages/images/background/6.jpg')}})" data-stellar-background-ratio=".2">

        <div class="overlay-gradient t80">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="col text-center">
                                <div class="spacer-single"></div>
                                <h1>News &amp; Update</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- section close -->

    <section id="section-features">
        <div class="container">
            <div class="row">

                <!-- Check if there are blogs -->
                @if($blogs->isEmpty())
                <!-- If no blogs, display this message -->
                <div class="col-12 text-center">
                    <h3 class="text-dark">There are no blogs available at the moment. Please check back later.</h3>
                </div>
                @else
                <!-- Loop through blogs if available -->
                @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6 mb30">
                    <div class="bloglist item">
                        <div class="post-content">
                            <div class="post-image">
                                <a class="" href="{{ route('post_page', ['blogId' => $blog->id, 'post_title' => Str::slug($blog->title)]) }}">
                                    <img src="{{ asset('/' . $blog->image_path) }}" alt="">
                                </a>
                                <div class="post-info">
                                    <div class="inner">
                                        <span class="post-date">{{
                                            \Carbon\Carbon::parse($blog->post_date)->format('Y-m-d') }}</span>
                                        <span class="post-author">{{$blog->author}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-text">
                                <h3 class="text-dark">
                                    <a href="{{ route('post_page', ['blogId' => $blog->id, 'post_title' => Str::slug($blog->title)]) }}" class="text-dark">{{
                                        $blog->title }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>
    </section>

</div>

@endsection