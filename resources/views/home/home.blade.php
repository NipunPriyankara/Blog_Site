@include('home.head')

<!-- Header -->
@include('layouts.header')
<style>
    .main-banner .owl-banner .item img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 8px;
    }
    .blog-post {
        margin-bottom: 0; /* Removed gap between posts */
        padding: 0;
        border-radius: 0;
        background: #fff;
        box-shadow: none;
    }
</style>

<!-- Banner Starts Here -->
@include('home.banner')
<!-- Banner Ends Here -->

<!-- Post Here -->
<section class="blog-posts" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    @foreach ($post as $post)
                        @if($post->status == 'approve')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-post">
                                    <div class="blog-thumb">
                                        <img src="/postimage/{{$post->image}}" alt="" style="width: 100%; border-radius: 0;">
                                    </div>
                                    <div class="down-content" style="text-align: center;">
                                        <span></span>
                                        <a href="">
                                            <h4>{{$post->title}}</h4>
                                        </a>
                                        <ul class="post-info" style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 10px;">
                                            <li><a href="#">Post by {{$post->name}}</a></li>
                                        </ul>
                                        <p >{!! $post->description !!}
                                        </p>

                                        <div class="post-options">
                                            <div class="row justify-content-center">
                                                <div class="col-6">
                                                    <ul class="post-tags" style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 5px;">

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Post end Here -->

@include('layouts.footer')
