@extends('web_layout')
@section('content')

<style>
    .smaller a {
        color: white !important;
    }

    .contactpagebg {
        background-position-y: 70% !important;
    }
    .contactpagebg{
        background-image: url('{{ asset('images/webimages/images/bgforcontactpagelv.png') }}');
    }

</style>
<!-- header close -->
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- revolution slider begin -->
    <!-- section begin -->
  <!--  <section
        style="background-repeat: no-repeat; background-image: url('{{ asset('images/webimages/images/bgforcontactpagelv.png') }}');"
        class="contactpagebg no-top no-bottom text-light" data-bgimage="url('{{ asset('images/webimages/images/bgforcontactpagelv.png') }}');">
    </section> -->
    <section
    style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url('{{ asset('images/webimages/images/bgforcontactpagelv.png') }}');"
    class="contactpagebg no-top no-bottom text-light">
</section>

        <div class="overlay-gradient t70">
            <div class="center-y">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 offset-md-2 text-center">
                            <div class="col text-center">
                                <div class="spacer-single"></div>
                                <!-- <h1 class="no-bottom">Contact Us</h1> -->
                                <h1></h1>
                                <p class="onlypc"><b style="font-size:35px">Ready</b> . <b
                                        style="font-size:45px">Set</b> . <b style="font-size:55px">Grow</b></p>
                                <p class="onlymobile"><b style="font-size:20px">Ready</b> . <b
                                        style="font-size:30px">Set</b> . <b style="font-size:40px">Grow</b></p>

                            </div>
                        </div>

                        <div class="spacer-10"></div>

                        <div class="col-lg-8 mb-sm-30">
                            <form name="contactForm" id='contact_form' class="form-s1" method="post"
                                action='https://formsubmit.co/Info@demandgine.com'>
                                <input type="hidden" name="_next" value="https://DemandGine.com/">
                                <input type="hidden" name="_captcha" value="false">



                                <div class="field-set ">
                                    <input type='text' required name='name' id='name' class="form-control"
                                        placeholder="Full Name">
                                </div>



                                <div class="field-set">
                                    <input type='text' required name='email' id='email' class="form-control"
                                        placeholder="Email">
                                </div>

                                <div class="field-set">
                                    <input type='text' required name='subject' id='phone' class="form-control"
                                        placeholder="Company">
                                </div>

                                <div class="field-set">
                                    <textarea name='message' required id='message' class="form-control"
                                        placeholder="Message"></textarea>
                                </div>

                                <div class="spacer-half"></div>

                                <div id='submit'>
                                    <input type='submit' value='Say Hello' class="btn btn-custom">
                                </div>
                                <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.
                                </div>

                            </form>
                        </div>
                        <div class="col-lg-4 mb30">



                            <div class="spacer-30"></div>

                            <div class="padding40 bg-gradient-to-right text-light rounded">
                                <h3>Let's Connect</h3>
                                <address class="s1">
                                    <span><i class="fa fa-map-marker fa-lg"></i>
                                        Location <br>6543 South Las Vegas Blvd <br>Suite #200 <br>Las Vegas, NV
                                        89119</span>
                                    <span><i class="fa fa-phone fa-lg"></i> (702) 805-0273</span>
                                    <span><i class="fa fa-envelope-o fa-lg"></i><a
                                            href="mailto:Info@demandgine.com">Send A Mail <br>
                                            Info@demandgine.com</a></span>
                                    <!-- <span><i class="fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span> -->
                                </address>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--     <section style="background-repeat: no-repeat;" class="relative no-top no-bottom text-light" data-bgimage="url(https://scontent.ffjr1-4.fna.fbcdn.net/v/t1.15752-9/407076902_668210198810959_6110391181337067545_n.png?_nc_cat=106&ccb=1-7&_nc_sid=8cd0a2&_nc_ohc=Q5Tnsfpdrn8AX_C66mQ&_nc_ht=scontent.ffjr1-4.fna&oh=03_AdR_9CZKXUcfNno_X-AqwfSf8rr9WkjJco50R7ygfLZFZA&oe=65B4233F)" data-stellar-background-ratio=".2">

<div class="overlay-gradient t70">
    <div class="center-y">
        <div class="container">
            <div class="row">
                <div class="col-md-9 offset-md-2 text-center">
                <div class="col text-center">
                    <div class="spacer-single"></div>
                    
                    <h1 >Hey Marketing, Sales, and Media professionals. Let’s put the rev in revenue!</h1>
                   
                </div>
                </div>
                
                 <div class="spacer-10"></div>
                 
        <div class="col-lg-8 mb-sm-30">			
            <form name="contactForm" id='contact_form' class="form-s1" method="post" action='https://formsubmit.co/Info@demandgine'>
                <input type="hidden" name="_next" value="https://demandgine.com">
                <input type="hidden" name="_captcha" value="false">

                    <div class="field-set">
                        <input type='text' required name='name' id='name' class="form-control" placeholder="Full Name">
                    </div>

                    <div class="field-set">
                        <input type='text' required name='email' id='email' class="form-control" placeholder="Email">
                    </div>

                    <div class="field-set">
                        <input type='text' required name='Subject' id='phone' class="form-control" placeholder="Company">
                    </div>

                    <div class="field-set">
                        <textarea name='message' required  id='message' class="form-control" placeholder="Message"></textarea>
                    </div>

                    <div class="spacer-half"></div>

                    <div id='submit'>
                        <input type='submit'  value='Say Hello' class="btn btn-custom">
                    </div>
                    <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                    <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>

                </form>
        </div>
        <div class="col-lg-4 mb30">
                             
                           
                            
        <div class="spacer-30"></div>
											
											<div class="padding40 bg-gradient-to-right text-light rounded">
												<h3>Contact info</h3>
												<address class="s1">												
												<span><i class="fa fa-map-marker fa-lg"></i>
                                                    Location <br>6543 South Las Vegas Blvd  <br>Suite #200 <br>Las Vegas, NV 89119</span>
												 <span><i class="fa fa-phone fa-lg"></i>1-888-888-8888</span> 
												<span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:Info@DemandGine">Send A Mail <br> Info@demandgine.com</a></span>
												
											</address>
											</div>
            
        </div>
                
            </div>
        </div>
    </div>
</div>

</section> -->
        <!-- section close -->

</div>

@endsection