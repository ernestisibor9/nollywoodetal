@extends('frontpage.dashboard')

@section('main')

@section('title')
	Nollywoodetal - All Blog
@endsection

    <!-- Start Content -->
    <div id="content" class="section-padding">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-md-12 col-xs-12">  

            <!-- Start Post -->
            <div class="blog-post">
              @foreach ($allBlog as $item)
                
              <!-- Post thumb -->
              <div class="post-thumb">
                <a href="{{url('blog/details/'.$item->post_slug)}}"><img class="img-fluid" src="{{asset($item->post_image)}}" alt=""></a>
                <div class="hover-wrap"></div>
              </div>
              <!-- End Post post-thumb -->
                @php
                  $commentPost = App\Models\Comment::where('post_id', $item->id)->get();
                @endphp
              <!-- Post Content -->
              <div class="post-content">    
                <ul class="list-inline cat-meta">
                  <li class="tr-cats"><a href="#">Blog News</a></li>
                </ul>                 
                <h2 class="post-title"><a href="single-post.html">{{$item->post_title}}</a></h2>
                <div class="meta">
                  <span class="meta-part"><a href="#"><i class="lni-user"></i> {{$item->author}}</a></span>
                  <span class="meta-part"><a href="#"><i class="lni-alarm-clock"></i> {{$item->created_at->format('M d Y')}}</a></span>
                  {{-- <span class="meta-part"><a href="#"><i class="lni-folder"></i> Sticky</a></span> --}}
                  <span class="meta-part"><a href="#"><i class="lni-comments-alt"></i> {{count($commentPost)}} Comments</a></span>                  
                </div>
                <div class="entry-summary">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis soluta libero molestiae, id reiciendis ipsum consequuntur odit sapiente accusantium odio. Esse nemo quos quaerat illo! Enim saepe impedit distinctio, placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate voluptatum dolores mollitia consequatur velit, veritatis in pariatur ducimus numquam ipsa iusto! Rem eveniet dolorum, quisquam neque beatae quas ea tenetur!</p>
                </div>
                <a href="{{url('blog/details/'.$item->post_slug)}}" class="btn btn-common btn-rm">Read More</a>
              </div>
              <!-- Post Content -->
               @endforeach
            </div>
            <!-- End Post -->
            
            <!-- Start Pagination -->
            <div class="pagination-bar">
               {{-- <nav>
                <ul class="pagination">
                  <li class="page-item"><a class="page-link active" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav> --}}
              {!!$allBlog->links()!!}
            </div>
            <!-- End Pagination -->

          </div>

          <!--Sidebar-->
          <aside id="sidebar" class="col-lg-4 col-md-12 col-xs-12 right-sidebar">
            <!-- Popular Posts widget -->
            <div class="widget widget-popular-posts">
              <h4 class="widget-title">Recent Posts</h4>
              <ul class="posts-list">
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="assets/img/blog/thumb1.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <a href="#">Eum Iriure Dolor Duis Autem</a>
                    <span><i class="icon-calendar"></i>June 21, 2018</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="assets/img/blog/thumb2.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <a href="#">Consectetuer Adipiscing Elit</a>
                    <span><i class="icon-calendar"></i>June 18, 2018</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="assets/img/blog/thumb3.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <a href="#">Et Leggings Fanny Pack</a>
                    <span><i class="icon-calendar"></i>June 17, 2018</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="assets/img/blog/thumb4.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <a href="#">Exercitation Photo Booth</a>
                    <span><i class="icon-calendar"></i>June 12, 2018</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="assets/img/blog/thumb5.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <a href="#">Eum Iriure Dolor Duis Autem</a>
                    <span><i class="icon-calendar"></i>June 9, 2018</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
              </ul>
            </div>

            <div class="widget">
              <h4 class="widget-title">Advertisement</h4>
              <div class="add-box">
                <img src="{{asset('frontend/assets/img/img1.jpg')}}" alt="">
              </div>
            </div>

          </aside>
          <!--End sidebar-->

        </div>
      </div>
    </div>
    <!-- End Content -->

@endsection