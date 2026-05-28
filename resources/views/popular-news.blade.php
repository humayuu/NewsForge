 <!-- Popular news -->
 <section>
     <!-- Popular news  header-->
     <div class="popular__news-header">
         <div class="container">
             <div class="row g-0">
                 <div class="col-md-8 ">
                     <div class="card__post-carousel">
                         @forelse ($posts as $post)
                             <div class="item">
                                 <!-- Post Article -->
                                 <div class="card__post card__post-list">
                                     <div class="image-sm">
                                         <a href="./card-article-detail-v1.html">
                                             <img src="{{ asset('storage/' . $post->image_path) }}" class=""
                                                 alt="">
                                         </a>
                                     </div>


                                     <div class="card__post__body ">
                                         <div class="card__post__content">

                                             <div class="card__post__author-info mb-2">
                                                 <ul class="list-inline">
                                                     <li class="list-inline-item">
                                                         <span class="text-primary">
                                                             by {{ $post->user->first_name }}
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
                                                 <h6>
                                                     <a href="./card-article-detail-v1.html">
                                                         {{ $post->title }}
                                                     </a>
                                                 </h6>
                                             </div>

                                         </div>


                                     </div>
                                 </div>
                             </div>
                         @empty
                             <span class="text-danger fs-4">No Post Found!</span>
                         @endforelse
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="popular__news-right">
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
                             <span class="text-danger">No Post Found</span>
                         @endforelse
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- End Popular news header-->
     <!-- Popular news carousel -->
     <div class="popular__news-header-carousel">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="top__news__slider">
                         @forelse ($posts as $post)
                             <div class="item">
                                 <!-- Post Article -->
                                 <div class="article__entry">
                                     <div class="article__image">
                                         <a href="#">
                                             <img src="{{ asset('storage/' . $post->image_path) }}" alt=""
                                                 class="img-fluid">
                                         </a>
                                     </div>
                                     <div class="article__content">
                                         <ul class="list-inline">
                                             <li class="list-inline-item">
                                                 <span class="text-primary">
                                                     by {{ $post->user->full_name }}
                                                 </span>,
                                             </li>

                                             <li class="list-inline-item">
                                                 <span>
                                                     {{ $post->created_at->format('d-m-Y') }}
                                                 </span>
                                             </li>
                                         </ul>
                                         <h5>
                                             <a href="#">
                                                 {{ $post->title }}
                                             </a>
                                         </h5>
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
     <!-- End Popular news carousel -->
 </section>
 <!-- End Popular news -->
