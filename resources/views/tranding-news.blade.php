 <!-- Tranding news  carousel-->
 <section class="bg-light">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="wrapp__list__article-responsive wrapp__list__article-responsive-carousel">
                     @forelse ($posts as $post)
                         <div class="item">
                             <!-- Post Article -->
                             <div class="card__post card__post-list">
                                 <div class="image-sm">
                                     <a href="./card-article-detail-v1.html">
                                         <img src="{{ asset('storage/' . $post->image_path) }}" class="img-fluid"
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
         </div>
     </div>
 </section>
 <!-- End Tranding news carousel -->
