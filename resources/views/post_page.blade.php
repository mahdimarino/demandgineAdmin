@extends('web_layout')
@section('content')

<style>
    body{
        color: black !important;
    }
</style>

{{-- <div class="mg-t-15">
   
   

        <input type="hidden" name="content" id="quill-content1">
        <div class="row">
            <div class="form-group col-6">
                <label>Blog Title <span class="tx-danger">*</span></label>
                <div class="input-group">
                    <input type="text" name="title" value="{{$blog->title}}" class="form-control" required>
                </div>
            </div>
            <div class="form-group col-6">
                <label>Blog Image Cover <span class="tx-danger"></span></label>
                <div class="input-group">
                    <input type="file" name="blog_image" class="form-control">
                </div>
            </div>

            <div class="form-group col-6">
                <label>Post Date <span class="tx-danger">*</span></label>
                <div class="input-group">
                    <input type="date" name="post_date" value="{{$blog->post_date->format('Y-m-d')}}"
                        class="form-control" required>
                </div>
            </div>
            <div class="container text-dark">
            
                {!! $blog->content !!}
            
            </div>





            <div class="form-group col-6">
                <label>Blog Category <span class="tx-danger">*</span></label>
                <select name="category" class="form-control" required>
                    @foreach ([
                    'Category 1',
                    'Category 2',
                    'Category 3',
                    'Category 4',
                    ] as $category)
                    <option value="{{ $category }}" {{ $blog->category == $category ? 'selected' : '' }}>{{
                        $category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="m-3">
                <div id="toolbar-container" class="bg-white">
                    <span class="ql-formats">
                        <select class="ql-font"></select>
                        <select class="ql-size"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-bold"></button>
                        <button class="ql-italic"></button>
                        <button class="ql-underline"></button>
                        <button class="ql-strike"></button>
                    </span>
                    <span class="ql-formats">
                        <select class="ql-color"></select>
                        <select class="ql-background"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-script" value="sub"></button>
                        <button class="ql-script" value="super"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-header" value="1"></button>
                        <button class="ql-header" value="2"></button>
                        <button class="ql-blockquote"></button>
                        <button class="ql-code-block"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-list" value="ordered"></button>
                        <button class="ql-list" value="bullet"></button>
                        <button class="ql-indent" value="-1"></button>
                        <button class="ql-indent" value="+1"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-direction" value="rtl"></button>
                        <select class="ql-align"></select>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-link"></button>
                        <button class="ql-image"></button>
                        <button class="ql-video"></button>
                        <button class="ql-formula"></button>
                    </span>
                    <span class="ql-formats">
                        <button class="ql-clean"></button>
                    </span>
                </div>
                <div id="editor-container" class="bg-white ht-200">

                </div>

            </div><!-- component-section -->
        </div>


</div>



</div> --}}







<div id="content" class="no-top no-bottom">
    <!-- section begin -->
    <section class="relative no-top no-bottom text-light" data-bgimage="url({{ asset('images/webimages/images/background/6.jpg')}})"
        data-stellar-background-ratio=".2">

        <div class="overlay-gradient t80">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="col text-center">
                                <div class="spacer-single"></div>
                                <h1>{{ $blog->title }}</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- section close -->
   
    <section style="padding-top: 1rem" aria-label="section">
      
        <div class="container">
           
            <div class="row">
                <div class="container mb-3">
                    <h1 style="margin-bottom: 0" class="text-dark">{{ $blog->title }}</h1>
                    <div class="inner" style="background-size: cover;">
                        <h5>
                            <span class="post-date">{{ \Carbon\Carbon::parse($blog->post_date)->format('Y-m-d') }}</span>
                            <span class="post-author">{{ $blog->author }}</span>
                        </h5>
                    </div>
                </div>
                <div class="col-md-12">
                    
             
                    <div class="blog-read">

                        <img src="{{ asset('/' . $blog->image_path) }}" class="img-fluid" alt="">

                        <div class="post-text">
                            <div class="container text-dark">
                            
                                {!! $blog->content !!}
                            
                            </div>
                           
                          {{--  <span class="post-date">{{ \Carbon\Carbon::parse($blog->post_date)->format('Y-m-d') }}</span>
                            <span class="post-comment">1</span>
                            <span class="post-like">181</span> --}}

                        </div>

                    </div>

                    <div class="spacer-single"></div>

                   {{--  <div id="blog-comment">
                        <h3>Comments (5)</h3>

                        <div class="spacer-half"></div>

                        <ol>
                            <li>
                                <div class="avatar">
                                    <img src="images/avatar.jpg" alt="" />
                                </div>
                                <div class="comment-info">
                                    <span class="c_name">John Smith</span>
                                    <span class="c_date id-color">15 January 2020</span>
                                    <span class="c_reply"><a href="#">Reply</a></span>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                <ol>
                                    <li>
                                        <div class="avatar">
                                            <img src="images/avatar.jpg" alt="" />
                                        </div>
                                        <div class="comment-info">
                                            <span class="c_name">John Smith</span>
                                            <span class="c_date id-color">15 January 2020</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                            quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                            explicabo.</div>
                                    </li>
                                </ol>
                            </li>

                            <li>
                                <div class="avatar">
                                    <img src="images/avatar.jpg" alt="" />
                                </div>
                                <div class="comment-info">
                                    <span class="c_name">John Smith</span>
                                    <span class="c_date id-color">15 January 2020</span>
                                    <span class="c_reply"><a href="#">Reply</a></span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                <ol>
                                    <li>
                                        <div class="avatar">
                                            <img src="images/avatar.jpg" alt="" />
                                        </div>
                                        <div class="comment-info">
                                            <span class="c_name">John Smith</span>
                                            <span class="c_date id-color">15 January 2020</span>
                                            <span class="c_reply"><a href="#">Reply</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit
                                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                            quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                                            explicabo.</div>
                                    </li>
                                </ol>
                            </li>

                            <li>
                                <div class="avatar">
                                    <img src="images/avatar.jpg" alt="" />
                                </div>
                                <div class="comment-info">
                                    <span class="c_name">John Smith</span>
                                    <span class="c_date id-color">15 January 2020</span>
                                    <span class="c_reply"><a href="#">Reply</a></span>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="comment">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                            </li>
                        </ol>

                        <div class="spacer-single"></div>

                        <div id="comment-form-wrapper">
                            <h3>Leave a Comment</h3>
                            <div class="comment_form_holder">
                                <form id="contact_form" name="form1" class="form-border" method="post" action="#">

                                    <label>Name</label>
                                    <input type="text" name="name" id="name" class="form-control" />

                                    <label>Email <span class="req">*</span></label>
                                    <input type="text" name="email" id="email" class="form-control" />
                                    <div id="error_email" class="error">Please check your email</div>

                                    <label>Message <span class="req">*</span></label>
                                    <textarea cols="10" rows="10" name="message" id="message"
                                        class="form-control"></textarea>
                                    <div id="error_message" class="error">Please check your message</div>
                                    <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                    <div id="mail_failed" class="error">Error, email not sent</div>

                                    <p id="btnsubmit">
                                        <input type="submit" id="send" value="Send" class="btn btn-custom" />
                                    </p>



                                </form>
                            </div>
                        </div>
                    </div> --}}

                </div>

                {{-- <div id="sidebar" class="col-md-3">
                    <div class="widget widget-post">
                        <h4>Recent Posts</h4>
                        <div class="small-border"></div>
                        <ul>
                            <li><span class="date">22 Jun</span><a href="#">5 Powerfull Natural Antibiotics</a></li>
                            <li><span class="date">20 Jun</span><a href="#">25 Reasons to Eat Bananas</a></li>
                            <li><span class="date">12 Jun</span><a href="#">Summer Food and Ingredients Guide</a></li>
                            <li><span class="date">10 Jun</span><a href="#">6 Ways to Cook a Roast</a></li>

                        </ul>
                    </div>

                    <div class="widget widget-text">
                        <h4>About Us</h4>
                        <div class="small-border"></div>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                        sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                    </div>
                    <div class="widget widget_tags">
                        <h4>Tags</h4>
                        <div class="small-border"></div>
                        <ul>
                            <li><a href="#link">Art</a></li>
                            <li><a href="#link">Application</a></li>
                            <li><a href="#link">Design</a></li>
                            <li><a href="#link">Entertainment</a></li>
                            <li><a href="#link">Internet</a></li>
                            <li><a href="#link">Marketing</a></li>
                            <li><a href="#link">Multipurpose</a></li>
                            <li><a href="#link">Music</a></li>
                            <li><a href="#link">Print</a></li>
                            <li><a href="#link">Programming</a></li>
                            <li><a href="#link">Responsive</a></li>
                            <li><a href="#link">Website</a></li>
                        </ul>
                    </div>

                </div> --}}
            </div>
        </div>
    </section>
</div>
<!-- content close -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

<!-- Initialize Quill editor -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
            // Get all ordered list elements
            var olElements = document.querySelectorAll('ol');
            
            // Iterate through each ordered list
            olElements.forEach(function(ol) {
                // Create a new unordered list
                var ul = document.createElement('ul');
                
                // Move items from the ordered list to the unordered list
                while (ol.firstChild) {
                    ul.appendChild(ol.firstChild);
                }
                
                // Replace the ordered list with the unordered list
                ol.parentNode.replaceChild(ul, ol);
            });
        });
</script>

@endsection