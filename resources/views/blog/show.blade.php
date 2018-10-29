@extends('layouts.main')
@section('title')
<title>DTUtimes | {{ $story->title }}</title>
@endsection 
@section('content') 
<section id="page-title">

            <div class="container clearfix">
                <h1>Blog Single</h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li class="active">Name of Blog </li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <!-- Post Content
                    ============================================= -->
                    <div class="postcontent nobottommargin clearfix">

                        <div class="single-post nobottommargin">

                            <!-- Single Post
                            ============================================= -->
                            <div class="entry clearfix">

                                <!-- Entry Title
                                ============================================= -->
                                <div class="entry-title">
                                    <h2>{{ $story->title }}</h2>
                                </div><!-- .entry-title end -->

                                <!-- Entry Meta
                                ============================================= -->
                                <ul class="entry-meta clearfix">
                                    <li><i class="icon-calendar3"></i> {{ $story->created_at->diffForHumans()}}</li>
                                    <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                </ul><!-- .entry-meta end -->

                                <!-- Entry Image
                                ============================================= -->
                                <div class="entry-image">
                                    @if ($story->getFirstMediaUrl('blog_images', 'fullscreen'))
                                        <img alt="background" src="{{ $story->getFirstMediaUrl('blog_images', 'fullscreen') }}" />
                                   @else
                                        <img src="{{ asset('svg/gallery.svg') }}" style="max-width:20rem;" alt="">
                                    @endif
                                </div><!-- .entry-image end -->

                                <!-- Entry Content
                                ============================================= -->
                                <div class="entry-content notopmargin">

                                    <p>{!! $story->body !!}</p>

                                    
                                    <!-- Post Single - Content End -->

                                    <!-- Tag Cloud
                                    ============================================= -->
                                    <div class="tagcloud clearfix bottommargin">
                                        <a href="#">general</a>
                                        <a href="#">information</a>
                                        <a href="#">media</a>
                                        <a href="#">press</a>
                                        <a href="#">gallery</a>
                                        <a href="#">illustration</a>
                                    </div><!-- .tagcloud end -->

                                    <div class="clear"></div>

                                    <!-- Post Single - Share
                                    ============================================= -->
                                    <div class="si-share noborder clearfix">
                                        <span>Share this Post:</span>
                                        <div>
                                            <a href="#" class="social-icon si-borderless si-facebook">
                                                <i class="icon-facebook"></i>
                                                <i class="icon-facebook"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-twitter">
                                                <i class="icon-twitter"></i>
                                                <i class="icon-twitter"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-pinterest">
                                                <i class="icon-pinterest"></i>
                                                <i class="icon-pinterest"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-gplus">
                                                <i class="icon-gplus"></i>
                                                <i class="icon-gplus"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-rss">
                                                <i class="icon-rss"></i>
                                                <i class="icon-rss"></i>
                                            </a>
                                            <a href="#" class="social-icon si-borderless si-email3">
                                                <i class="icon-email3"></i>
                                                <i class="icon-email3"></i>
                                            </a>
                                        </div>
                                    </div><!-- Post Single - Share End -->

                                </div>
                            </div><!-- .entry end -->




                            <!-- Post Author Info
                            ============================================= -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Posted by <span><a href="#">{{$story->user->name}}</a></span></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="author-image">
                                        <img src="{{$story->user->getFirstMediaUrl('avatars', 'thumb')}}" alt="" class="img-circle">
                                    </div>
                                    {{ $story->user->bio }}
                                </div>
                            </div><!-- Post Single - Author End -->

                            <div class="line"></div>

                            <h4>Related Posts:</h4>

                            <div class="related-posts clearfix">

                                <div class="col_half nobottommargin">

                                    <div class="mpost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="img/40.jpg" alt="Blog Single"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">This is an Image Post</a></h4>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i> 10th July 2014</li>
                                                <li><a href="#"><i class="icon-comments"></i> 12</a></li>
                                            </ul>
                                            <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
                                        </div>
                                    </div>

                                    <div class="mpost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="img/40.jpg" alt="Blog Single"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">This is a Video Post</a></h4>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i> 24th July 2014</li>
                                                <li><a href="#"><i class="icon-comments"></i> 16</a></li>
                                            </ul>
                                            <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col_half nobottommargin col_last">

                                    <div class="mpost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="img/40.jpg" alt="Blog Single"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">This is a Gallery Post</a></h4>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i> 8th Aug 2014</li>
                                                <li><a href="#"><i class="icon-comments"></i> 8</a></li>
                                            </ul>
                                            <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
                                        </div>
                                    </div>

                                    <div class="mpost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="img/40.jpg" alt="Blog Single"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">This is an Audio Post</a></h4>
                                            </div>
                                            <ul class="entry-meta clearfix">
                                                <li><i class="icon-calendar3"></i> 22nd Aug 2014</li>
                                                <li><a href="#"><i class="icon-comments"></i> 21</a></li>
                                            </ul>
                                            <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            

                        </div>

                    </div><!-- .postcontent end -->

                    <!-- Sidebar
                    ============================================= -->
                    <div class="sidebar nobottommargin col_last clearfix">
                        <div class="sidebar-widgets-wrap">

                            <div class="widget clearfix">

                                <h4>Instagram Photostream</h4>
                              
                            <!-- InstaWidget -->
                                <a href="https://instawidget.net/v/user/dtu_times" id="link-73734ef5caafb9b7a4fbcd2ce68135d5d39b14869251ce0ffed917dd24dba4af">dtu_times</a>
                                <script src="https://instawidget.net/js/instawidget.js?u=73734ef5caafb9b7a4fbcd2ce68135d5d39b14869251ce0ffed917dd24dba4af&width=300px"></script>
                                </div>
                            
                           

                            <div class="widget clearfix">

                                <div class="tabs nobottommargin clearfix" id="sidebar-tabs">

                                    <ul class="tab-nav clearfix">
                                        <li><a href="#tabs-1">Recent</a></li>
                                        
                                    </ul>

                                    <div class="tab-container">

                                        
                                        <div class="tab-content clearfix" id="tabs-1">
                                            <div id="recent-post-list-sidebar">

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="img/40.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li>10th July 2014</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="img/40.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li>10th July 2014</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="spost clearfix">
                                                    <div class="entry-image">
                                                        <a href="#" class="nobg"><img class="img-circle" src="img/40.jpg" alt=""></a>
                                                    </div>
                                                    <div class="entry-c">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                        </div>
                                                        <ul class="entry-meta">
                                                            <li>10th July 2014</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    

                                    </div>

                                </div>

                            </div>





                        </div>

                    </div><!-- .sidebar end -->

                </div>

            </div>

        </section>
@endsection
