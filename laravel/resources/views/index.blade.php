@extends('layouts.base')
@section('script')
    @parent
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script>
        console.log('Work it!');
    </script>
    @stop
@section('content')


<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark bg-parallax">
	<div class="bg-section">
		<img src="{{asset('assets/images/page-titles/3.jpg')}}" alt="Background"/>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
				<div class="title  text-center">
                    <div class="title--heading">
                        <h1>Our Blog</h1>
                    </div>
					<div class="clearfix"></div>
					<ol class="breadcrumb d-flex justify-content-center">
						<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">blog</li>
					</ol>
				</div><!-- .title end -->
			</div><!-- .col-md-12 end -->
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- #page-title end -->

<!-- Blog Standard Right Sidebar
============================================= -->
<section id="blog" class="blog blog-single blog-standard">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-8">
				<!-- Blog Entry -->
                <div class="blog-entry">
                    <div class="entry--img">
                        <a href="#">
                            <img src="{{asset('assets/images/blog/standard/1.jpg')}}" alt="entry image"/>
                        </a>
                    </div>
                    <div class="entry--content clearfix">
                        <div class="entry--meta">
                            <a href="#">Investment tips</a> 
                        </div>
                        <div class="entry--date">
                            Apr 15, 2018
                        </div>
                        <div class="entry--title">
                            <h4><a href="#">Four ways to cheer yourself up on Blue Monday!</a></h4>
                        </div>
                        <div class="entry--bio">
                            <p>The third Monday of January is supposed to be the most depressing day of the year. Whether you believe that or not, the long nights, cold weather and trying to keep to new year resolutions are all probably getting to you a little by now. To make matters worse many will still be recovering from their Christmas spending</p>
                            <p>So how can you make today – and the rest of January – a little better for you and your wallet?  Well, if times are tight, a little extra in your pocket should make the month more bearable. Here are four easy ways to do just that.</p>
                            <p>You can make some quick cash by switching your bank account to one with a bonus. Some banks are giving away £150 for moving your custom, while others offer cashback or high interest. Of course it’s worth checking you won’t lose out in other ways such as high overdraft fees. If you’re likely to go into the red you might be better off switching to a bank with lower fees or even a small interest free overdraft.</p>
                            <p>What’s up in the loft? Or under the bed? If you aren’t sure it probably means you don’t need it – and that’s a sign you should try to sell it. If there’s the potential for it to be rare or part of a collection it’s worth seeking specialist advice. Otherwise head to a boot fair or list it online. Just don’t forget to factor in costs such as postage or fees. The are more tips in our step-by-step guide to selling online below. Just click through the slides.</p>
                            <p>Did you decide to stop smoking this year? Or was it drinking for a month? Whatever your resolution don’t just think about the health benefits as it could also be helping your bank balance. The average smoker lights up 12 cigarettes a day, adding up to nearly £150 in January.  Having five less pints of beer or glasses of wine each week could easily save you £100 this month.</p>
                            <p>The sales are still on, and with the temperatures dropping there’s probably the temptation to kit yourself out in a new jumper or winter coat. Well if you’ve got some old woollies down the back of the wardrobe, there’s a good chance your friends do too. Getting a group of you together to swap clothes means you’re getting a new look for free, adding some extra pounds to your purse to save or spend elsewhere.</p>
                            <p>You can make some quick cash by switching your bank account to one with a bonus. Some banks are giving away £150 for moving your custom, while others offer cashback or high interest. Of course it’s worth checking you won’t lose out in other ways such as high overdraft fees. If you’re likely to go into</p>
                        </div>
                        <div class="entry--share">
                            <span class="share--title">Share:</span>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <!-- .entry-share end -->                        
                        <div class="entry--tags">
                            <a href="#">Responsive</a>
                            <a href="#">Modern</a>
                            <a href="#">Corporate</a>
                            <a href="#">Business</a>
                        </div>
                        <!-- .entry-cat end -->
                    </div>
                </div>
                <!-- .blog-entry end -->

                <div class="entry-prev-next clearfix">
                    <div class="entry-prev">
                        <div class="entry-prev-content">
                            <img src="{{asset('assets/images/blog/thumb/1.jpg')}}" alt="title" />
                            <div class="entry-desc">
                                <p>previous</p>
                                <a href="#">Are you losing underestimating your bills?</a>
                            </div>
                        </div>
                    </div>
                    <div class="entry-next">
                        <div class="entry-next-content">
                            <img src="assets/images/blog/thumb/2.jpg" alt="title" />
                            <div class="entry-desc">
                                <p>next</p>
                                <a href="#">The hidden habits that cost you money?</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .entry-prev-next end -->

                <div class="entry-widget entry-bio clearfix">
                    <div class="entry-widget-content">
                        <img src="assets/images/team/thumb/1.jpg" alt="author" />
                        <div class="entry-bio-desc">
                             <h4>Mahmoud Baghagho</h4>
                            <p>Founded by Begha over many cups of tea at her kitchen table in 2009, our brand promise is simple: to provide powerful digital marketing solutions to small and medium businesses.</p>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-vimeo-square"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                        </div>
                    </div>
                </div>
                <!-- .entry-bio end -->

                <div class="entry-widget entry-comments clearfix">
                    <div class="entry-widget-title">
                        <h4><span class="comments--number">2</span> comments</h4>
                    </div>
                    <div class="entry-widget-content">
                        <ul class="comments-list">
                            <li class="comment-body">
                                <div class="avatar">
                                    <img src="assets/images/team/thumb/2.jpg" alt="avatar" />
                                </div>
                                <div class="comment">
                                    <h6>Mohamed Habaza</h6>
                                    <div class="date">Feb 28, 2017 - 08:07 pm</div>
                                    <p>he example about the mattress sizing page you mentioned in the last WBF can be a perfect example of new keywords and content, and broadening the funnel as well. I can only imagine the sale numbers if that was the site of a mattress selling company.</p>
                                    <a class="reply" href="#">reply</a>
                                </div>

                                <ul class="comment-children">
                                    <li class="comment-body">
                                        <div class="avatar">
                                            <img src="assets/images/team/thumb/3.jpg" alt="avatar" />
                                        </div>
                                        <div class="comment">
                                            <h6>Ahmed Hassan</h6>
                                            <div class="date">Feb 28, 2017 - 08:22 pm</div>
                                            <p>The example about the mattress sizing page you mentioned in the last WBF can be a perfect example of new keywords and content, and broadening the funnel as well. I can only imagine the sale numbers if that was the site.</p>
                                            <a class="reply" href="#">reply</a>
                                        </div>
                                    </li>
                                    <!-- comment end -->
                                 </ul>
                                <!-- .comment-children end -->
                            </li>
                            <!-- comment end -->

                        </ul>
                        <!-- .comments-list end -->
                    </div>
                </div>
                <!-- .entry-comments end -->

                <div class="entry-widget entry-add-comment mb-0 clearfix">
                    <div class="entry-widget-title">
                        <h4>Leave A Reply</h4>
                    </div>
                    <div class="entry-widget-content">
                        <form id="post-comment" class="mb-0">
                            <div class="row">
                                <div class="col-sm-12 col-md-6  col-lg-4">
                                    <input type="text" class="form-control" id="first-name" placeholder="Name" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <input type="email" class="form-control" id="email" placeholder="Email" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-4">
                                    <input type="text" class="form-control" id="website" placeholder="website" />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-12">
                                    <textarea class="form-control" id="comment" rows="2" placeholder="Comment"></textarea>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn--gradient btn--lg text-capitalize">Submit Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- .entry-comments end -->
			</div><!-- .col-lg-8 end -->
			<div class="col-sm-12 col-md-12 col-lg-4">
				<!-- Search
============================================= -->
<div class="widget widget-search">
	<div class="widget--title">
		<h5>Search Bar</h5>
	</div>
	<div class="widget--content">
		<form class="form-search">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Type and hit enter ...">
				<span class="input-group-btn">
					<button class="btn" type="button"><i class="fa fa-search"></i></button>
				</span>
			</div>
			<!-- /input-group -->
		</form>
	</div>
</div>
<!-- .widget-search end -->
<!-- Categories
============================================= -->
<div class="widget widget-categories">
	<div class="widget--title">
		<h5>categories</h5>
	</div>
	<div class="widget--content">
		<ul class="list-unstyled">
			<li>
				<a href="#">Strategy & Planning</a>
			</li>
			<li>
				<a href="#">Audit & Evaluation</a>
			</li>
			<li>
				<a href="#">Taxes & Efficiency</a>
			</li>
			<li>
				<a href="#">Estate Planning</a>
			</li>
			<li>
				<a href="#">Finance & Restructuring</a>
			</li>
			<li>
				<a href="#">Insurance</a>
			</li>
		</ul>
	</div>
</div> <!-- .widget-categories end -->

<!-- Recent Posts
============================================= -->
 <div class="widget widget-recent-posts">
    <div class="widget--title">
                            <h5>recent posts</h5>
	</div>
	<div class="widget--content">
		<div class="entry">
			<div class="entry--img">
				<a href="#"> <img src="assets/images/blog/thumb/1.jpg" alt="title">
		   <div class="entry--overlay"></div></a>
			</div>
			<div class="entry--desc">
			<div class="entry--meta">
					<a href="#">Consulting</a> 
				</div>
				<div class="entry--date">
					Apr 10, 2018
				</div>
				<div class="entry--title">
					<a href="#">Are you losing underestimating your bills?</a>
				</div>
			</div>
		</div>
		<!-- .recent-entry end -->
		<div class="entry">
			<div class="entry--img">
				<a href="#"> <img src="assets/images/blog/thumb/2.jpg" alt="title"><div class="entry--overlay"></div></a>
			</div>                                
			<div class="entry--desc">
			<div class="entry--meta">
					<a href="#">Financial</a> 
				</div>
				<div class="entry--date">
					Apr 9, 2018
				</div>
				<div class="entry--title">
					<a href="#">The hidden habits that cost you money?</a>
				</div>
			</div>
		</div>
		<!-- .recent-entry end -->
		<div class="entry">
			<div class="entry--img">
				<a href="#"> <img src="assets/images/blog/thumb/3.jpg" alt="title"><div class="entry--overlay"></div></a>
			</div>                                
			<div class="entry--desc">
			<div class="entry--meta">
					<a href="#">Investment</a> 
				</div>
				<div class="entry--date">
					Apr 7, 2018
				</div>
				<div class="entry--title">
					<a href="#">Have you still got your paper tax disc?</a>
				</div>
			</div>
		</div>
		<!-- .recent-entry end -->
	</div>
</div>
<!-- .widget-recent-posts end -->
			</div><!-- .col-lg-4 end -->
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- #blog end -->

@endsection