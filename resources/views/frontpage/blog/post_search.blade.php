@extends('frontpage.dashboard')

@section('main')

@php
    $movies = App\Models\Movie::latest()->get();
    $posts = App\Models\Post::latest()->get();
    $comments = App\Models\Comment::latest()->get();
    $producers = App\Models\Producer::latest()->get();
    $writers = App\Models\Writer::latest()->get();
    $genre = App\Models\Genre::latest()->get();
@endphp
    
<div id="content" class="section-padding">
    <div class="container">
      <div class="row">        
        <div class="col-lg-8 col-md-12 col-xs-12">

          <!-- Start Post -->
          <div class="blog-post single-post">
            <!-- Post thumb -->
            <div class="post-thumb">
              <a href="#"><img class="img-fluid" src="{{asset($blog->post_image)}}" alt="" 
                width="900px" height="700"></a>
              <div class="hover-wrap">
              </div>
            </div>
            <!-- End Post post-thumb -->

            @php
                $commentPost = App\Models\Comment::where('post_id', $blog->id)->get();
            @endphp

            <!-- Post Content -->
            <div class="post-content">                   
              <h2 class="post-title"><a href="single-post.html">Eum Iriure Dolor Duis Autem</a></h2>
              <div class="meta">
                <span class="meta-part"><a href="#"><i class="lni-user"></i>{{$blog->author}}</a></span>
                <span class="meta-part"><a href="#"><i class="lni-alarm-clock"></i> {{$blog->created_at->format('M d Y')}}</a></span>
                {{-- <span class="meta-part"><a href="#"><i class="lni-folder"></i> Sticky</a></span> --}}
                <span class="meta-part"><a href="#"><i class="lni-comments-alt"></i> {{
                  count($commentPost)
                }} Comments</a></span>                  
              </div>
              <div class="entry-summary">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi qui fuga quam hic possimus nihil iure assumenda odio at reprehenderit magni debitis cupiditate quidem nobis <strong>Helvetica</strong> repellendus doloribus, rerum aut in! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias repellat autem accusantium cupiditate animi consectetur. Beatae quia labore, sunt fugit accusantium. Deleniti excepturi ducimus error, ipsam voluptates eius sint odio!</p>
                <p>Lorem ipsum dolor sit amet, <strong>consectetuer</strong> adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. <strong>Investigationes</strong> demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
              </div>
              <div class="share-items">
                <ul class="list-inline">
                  <li>Share : </li>
                  <li class="fb-share"><a href="#="><i class="lni-facebook-filled"></i></a></li>         
                  <li class="tw-share"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                  <li class="gplus-share"><a href="#"><i class="lni-google-plus"></i></a></li>
                  <li class="pinit-share"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
            <!-- Post Content -->
          </div>
          <!-- End Post -->

          @php
          $comment = App\Models\Comment::where('post_id', $blog->id)->where('parent_id', null)->
          limit(4)->get();
          
          @endphp
          <!-- Start Comment Area -->
          <div id="comments">
            <div class="comment-box">
              <h3>Comments</h3>
              
              <ol class="comments-list">
                @foreach ($comment as $item)
                <li>
                  <div class="media">
                    <div class="thumb-left">
                      <a href="#">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/blog/user1.jpg')}}" alt="">
                      </a>
                    </div>
                    <div class="info-body">
                      <div class="media-heading">
                        <h4 class="name">{{$item->name}}</h4>
                        <span class="comment-date"><i class="lni-alarm-clock"></i> {{$item->created_at->format('M d Y')}}</span>
                        <a href="javascript::void(0);" onclick="reply(this)"  data-Commentid={{$item->id}} class="reply-link"><i class="lni-reply"></i> Reply</a>
                      </div> 
                      <p>{{$item->content}}</p>
                    </div>
                  </div>
                  @php
                    // $reply = App\Models\Comment::where('parent_id', $item->id)->get();
                    $reply = App\Models\Reply::where('comment_id', $item->id)->get();
                  @endphp
                  <ul>
                    @foreach ($reply as $rep)
                    @if ($rep->comment_id == $item->id)
                    <li>
                      <div class="media">
                        <div class="thumb-left">
                          <a href="#">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/blog/user2.jpg')}}" alt="">
                          </a>
                        </div>
                        <div class="info-body">
                          <div class="media-heading">
                            {{-- <h4 class="name">{{$rep->comment->name}}</h4> --}}
                            <h6>{{$rep->reply}}</h6>
                            <span class="comment-date"><i class="lni-alarm-clock"></i>{{$rep->created_at->format('M d Y')}}</span>
                            {{-- <a href="javascript::void(0);" onclick="reply(this)" class="reply-link"><i class="lni-reply"></i> Reply</a> --}}
                          </div> 
                          <p>{{$rep->content}}</p>
                        </div>
                      </div>
                    </li>
                    @endif
                    @endforeach
                  </ul>

                  @php
                      $replyAdmin = App\Models\Comment::where('parent_id', $item->id)->get();
                  @endphp
                  <ul>
                    @foreach ($replyAdmin as $rep)
                    <li>
                      <div class="media">
                        <div class="thumb-left">
                          <a href="#">
                            <img class="img-fluid" src="{{asset('frontend/assets/img/blog/user2.jpg')}}" alt="" >
                          </a>
                        </div>
                        <div class="info-body">
                          <div class="media-heading">
                            <h4 class="name">Admin</h4>
                            <h6>{!!$rep->content!!}</h6>
                            <span class="comment-date"><i class="lni-alarm-clock"></i>{{$rep->created_at->format('M d Y')}}</span>
                            {{-- <a href="javascript::void(0);" onclick="reply(this)" class="reply-link"><i class="lni-reply"></i> Reply</a> --}}
                          </div> 
                       
                        </div>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </li>
                {{-- <li>
                  <div class="media">
                    <div class="thumb-left">
                      <a href="#">
                        <img class="img-fluid" src="{{asset('frontend/assets/img/blog/user3.jpg')}}" alt="">
                      </a>
                    </div>

                  </div>
                  
                </li> --}}
                @endforeach
              </ol>
              

              <!-- Start Respond Form -->
              <div >
                <h2 class="respond-title">Leave A Comment</h2>
                <form action="{{route('store.comment')}}" method="post">
                    @csrf
                    <input type="hidden" name="post_id" value="{{$blog->id}}">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                      <div class="form-group">
                        <input  class="form-control" required name="name" type="text"  size="30" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                      <div class="form-group">
                        <input class="form-control" required name="email" type="email" size="30" placeholder="Your E-Mail">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                      <div class="form-group">
                        <textarea class="form-control" required name="content" cols="45" rows="8" placeholder="Massage..."></textarea>
                      </div>
                      <button type="submit" id="submit" class="btn btn-common">Post Comment</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- End Respond Form -->
            </div>
          </div>
          <!-- End Comment Area -->

            <div style="display: none;" class="replyDiv">
                <form action="{{url('add_reply')}}" method="post">
                    @csrf
                <input type="text" name="commentId" id="commentId" hidden>                  
                <textarea  cols="60" rows="3" name="reply" required
                placeholder="write something here"></textarea> <br>
                <button type="submit" class="btn btn-primary">Reply</button>
                <a href="javascript::void(0);" class="btn btn-danger" onclick="reply_close(this)">Close</a>
                </form>
            </div>

        </div>

        <!--Sidebar-->
        <aside id="sidebar" class="col-lg-4 col-md-12 col-xs-12 right-sidebar">
          <!-- Searcg Widget -->
          <div class="widget_search">
            <form id="search-form" action={{route('search.post')}} action = 'post'>
              @csrf
              <input type="search" class="form-control" autocomplete="off" name="post" placeholder="Search by post title or author" id="search-input" value="">
              <button type="submit" id="search-submit" class="search-btn"><i class="lni-search"></i></button>
            </form>
          </div>

          @php
              $post = App\Models\Post::latest()->limit(5)->get();
          @endphp

          <!-- Popular Posts widget -->
          <div class="widget widget-popular-posts">
            <h4 class="widget-title">Recent Posts</h4>
            <ul class="posts-list">
              @foreach ($post as $item)
              <li>
                  <div class="widget-thumb">
                    <a href="{{url('blog/details/'.$item->post_slug)}}"><img src="{{asset($item->post_image)}}" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <a href="{{url('blog/details/'.$item->post_slug)}}">{!! Str::substr($item->post_content, 0, 40) !!}</a>
                    <span><i class="icon-calendar"></i>{{$item->created_at->format('M d Y')}}</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
              @endforeach
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


  <script>
    function reply(caller){
        document.getElementById('commentId').value=$(caller).attr('data-Commentid')
        $('.replyDiv').insertAfter($(caller));
        $('.replyDiv').show();
    }
    function reply_close(caller){
        $('.replyDiv').hide();
    }
  </script>

  <script>
    function refreshPageKeepScrollPosition() {
    // Store current scroll position before refreshing the page
    var scrollPosition = window.scrollY || window.pageYOffset;

    // Refresh the page
    location.reload();

    // Restore scroll position after the page reloads
    window.scrollTo(0, scrollPosition);
}

  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@endsection