@extends('layout')
@section('main')
    {{-- Trending news  --}}
    @include('tranding-news')

    {{-- Popular news --}}
    @include('popular-news')

    <!-- Popular news category -->
    <section class="pt-0">
        <div class="popular__section-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="wrapper__list__article">
                            <h4 class="border_section">recent post</h4>
                        </div>
                        <div class="row ">
                            <div class="col-sm-12 col-md-6 mb-4">
                                @forelse ($posts as $post)
                                    <!-- Post Article -->
                                    <div class="card__post ">
                                        <div class="card__post__body card__post__transition">
                                            <a href="./card-article-detail-v1.html">
                                                <img src="{{ asset('storage/' . $post->image_path) }}" class="img-fluid"
                                                    alt="">
                                            </a>
                                            <div class="card__post__content bg__post-cover">
                                                <div class="card__post__category">
                                                    {{ $post->category->category_name }}
                                                </div>
                                                <div class="card__post__title">
                                                    <h5>
                                                        <a href="./card-article-detail-v1.html">{{ $post->title }}</a>
                                                    </h5>
                                                </div>
                                                <div class="card__post__author-info">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="./card-article-detail-v1.html">
                                                                by {{ $post->user->full_name }}
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span>
                                                                {{ $post->created_at->format('d-m-Y') }}
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @empty
                                    <span class="text-danger fs-4">No Post Found!</span>
                                @endforelse
                            </div>
                            <div class="col-sm-12 col-md-6 mb-4">
                                @forelse ($posts as $post)
                                    <!-- Post Article -->
                                    <div class="card__post ">
                                        <div class="card__post__body card__post__transition">
                                            <a href="./card-article-detail-v1.html">
                                                <img src="{{ asset('storage/' . $post->image_path) }}" class="img-fluid"
                                                    alt="">
                                            </a>
                                            <div class="card__post__content bg__post-cover">
                                                <div class="card__post__category">
                                                    {{ $post->category->category_name }}
                                                </div>
                                                <div class="card__post__title">
                                                    <h5>
                                                        <a href="./card-article-detail-v1.html">{{ $post->title }}</a>
                                                    </h5>
                                                </div>
                                                <div class="card__post__author-info">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="./card-article-detail-v1.html">
                                                                by {{ $post->user->full_name }}
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <span>
                                                                {{ $post->created_at->format('d-m-Y') }}
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                @empty
                                    <span class="text-danger fs-4">No Post Found!</span>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popular news category -->
        <div class="mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <aside class="wrapper__list__article">
                            <h4 class="border_section">Read More News</h4>

                            <div class="wrapp__list__article-responsive">
                                @forelse ($posts as $post)
                                    <!-- Post Article List -->
                                    <div class="card__post card__post-list card__post__transition mt-30">
                                        <div class="row ">
                                            <div class="col-md-5">
                                                <div class="card__post__transition">
                                                    <a href="#">
                                                        <img src="{{ asset('storage/' . $post->image_path) }}"
                                                            class="img-fluid w-100" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-7 my-auto ps-0">
                                                <div class="card__post__body ">
                                                    <div class="card__post__content  ">
                                                        <div class="card__post__category ">
                                                            {{ $post->category->category_name }}
                                                        </div>
                                                        <div class="card__post__author-info mb-2">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <span class="text-primary">
                                                                        by {{ $post->user->full_name }}
                                                                    </span>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <span class="text-dark text-capitalize">
                                                                        {{ $post->created_at->format('d-m-Y') }}
                                                                    </span>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <div class="card__post__title">
                                                            <h5>
                                                                <a href="#">
                                                                    {{ $post->title }}
                                                                </a>
                                                            </h5>
                                                            <p class="d-none d-lg-block d-xl-block mb-0">
                                                                Maecenas accumsan tortor ut velit pharetra mollis. Proin eu
                                                                nisl et arcu iaculis placerat
                                                                sollicitudin ut est. In fringilla dui dui.
                                                            </p>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @empty
                                    <span class="text-danger fs-4">No Post Found!</span>
                                @endforelse
                            </div>
                        </aside>
                    </div>

                    <div class="mx-auto">
                        <!-- Pagination -->
                        <div class="pagination-area">
                            <div class="pagination wow fadeIn animated" data-wow-duration="2s" data-wow-delay="0.5s"
                                style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Popular news category -->
@endsection
