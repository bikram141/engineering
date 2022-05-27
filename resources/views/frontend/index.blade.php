@extends('frontend.layout.layout')

@section('content')
    <section class="banner_main">
        <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption  banner_po">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="build_box text_align_left">
                                 <h1>WELCOME<br> <span class="white">Shree Engineering</span></h1>
                                 <p>Shree Engineering Group of Industries is a reliable name in manufacture of Fly Ash
                                    Bricks Making Machine since 2010. We are also engaged in manufacturing of Batching
                                    Plant, Concrete Batching Plant, Paver Block Machine, Mini Rice Mill, Water tanker,
                                    Tractor Trailer, Thresher & all types of Hydraulic Cylinder, Hydraulic Machine .</p>
                                 <a class="read_more conatct_btn" href="tel:+917683945499" role="button">Call now</a>
                                 <a class="read_more conatct_btn" href="https://wa.me/+918328966944"
                                    role="button">WhatsApp Now</a>
                              </div>
                           </div>
                        </div>
                        <strong>best</strong>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption banner_po">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="build_box text_align_left">
                                 <h1>WELCOME<br> <span class="white">Shree Engineering</span></h1>
                                 <p>In pursuit of excellence, Shree Engineering will strive to become a sustainable and
                                    learning organisation of international repute by adding value to its products and
                                    processes in an eco-friendly manner to serve its stakeholders.</p>
                                 <a class="read_more conatct_btn" href="tel:+917683945499" role="button">Call now</a>
                                 <a class="read_more conatct_btn" href="https://wa.me/+918328966944"
                                    role="button">WhatsApp Now</a>
                              </div>
                           </div>
                        </div>
                        <strong>best</strong>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption banner_po">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="build_box text_align_left">
                                 <h1>WELCOME<br> <span class="white">Shree Engineering </span></h1>
                                 <p>Shree Engineering will endeavor to create value for its customers by manufacturing
                                    world class machineries by adopting new eco-friendly technologies thereby turning
                                    waste into wealth</p>
                                 <a class="read_more conatct_btn" href="https://forms.gle/9BWosP4uGqFqYSsg8"
                                    role="button">Contact Now</a>
                                 <a class="read_more conatct_btn" href="https://wa.me/+918328966944"
                                    role="button">WhatsApp Now</a>
                              </div>
                           </div>
                        </div>
        
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </section>

<div id="about" class="about">
    <div class="bg_about">
       <div class="container">
          <div class="row d_flex">
             <div class="col-md-5">
                <div class="about_img">
                   <figure><img src="{{ asset('frontend/images/Untitled design (1).png')}}" alt="#" /></figure>
                </div>
             </div>
             <div class="col-md-6 offset-md-1">
                <div class="titlepage text_align_right">
                   <h2>Who We Are?</h2>
                   <p>The company, with an annual turnover of fifty million INR is emerging as one of the largest
                      suppliers of Brick and Block machineries and Hydraulic equipment in India. The industry is led
                      by a team of highly professional technical experts in the field of material science and
                      engineering and is engaged for more than a decade in Design & Manufacturing of Fully Automatic
                      Fly Ash Brick & Block Plants, Automatic Fly Ash Brick & Concrete Block Machines, Concrete Paver
                      Block Machineries, Automatic Batching Plants, Conveying, Feeding and Mixing Equipment, Automatic
                      Pallet/ Brick/ Block Stackers, Hydraulic Power Packs, Cylinders and varieties of other machinery
                      solutions like Baling Machines, Rice Husk Ash (RHA) Brick Plants etc. The Company has excellent
                      in-house manufacturing facility and resources to perform various engineering and commissioning
                      chores and responsibilities.
                   </p>
                   <a class="read_more" href="https://wa.me/+918328966944">WhatsApp Us</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end about -->
 <!---------------contact-------------------------->





 <section class="contact-page-section" id="contact">
    <div class="container">
        <div class="sec-title">
            <div class="title text-white fs-1"><h2 class="text-white">Contact Us</h2></div>
              <h2>Let's Get in Touch.</h2>
          </div>
          <div class="inner-container">
            <div class="row clearfix">
              
                <!--Form Column-->
                  <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        
                          <!--Contact Form-->
                          <div class="contact-form">
                              <form method="post" action="{{ url('addcontact') }}">
                                @csrf
                                  <div class="row clearfix">
                                      <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                          <input type="text" name="name" value="" placeholder="Enter your Name" required>
                                      </div>
                                      <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                          <input type="email" name="email" value="" placeholder="Enter your Email" required>
                                      </div>
                                
                                      <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                          <input type="text" name="mobile_no" value="" placeholder="Enter your phone number" required>
                                      </div>
                                      <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                          <textarea name="message" placeholder="Massage"></textarea>
                                      </div>
                                      <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                          <button type="submit" class="theme-btn btn-style-one">Contact us</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <!--End Contact Form-->
                          
                      </div>
                  </div>
                  
                  <!--Info Column-->
                  <div class="info-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Contact Info</h2>
                          <ul class="list-info">
                            <li><i class="fa fa-globe"></i>JJCR+CC6, Naranpur, Odisha 758014</li>
                              <li><i class="fa fa-envelope"></i>info@shree-engg.com</li>
                              <li><i class="fa fa-phone"></i>+91 7683945499</li>
                          </ul>
                          <ul class="social-icon-four">
                              <li class="follow">Follow on: </li>
                              <li><a href="https://youtube.com/c/SHREEENGINEERING"><i class="fa fa-youtube"></i></a></li>
                              <li><a href="https://www.instagram.com/p/CU7DUWEF47o/?utm_medium=copy_link"><i class="fa fa-instagram"></i>
                              <li><a href="https://www.facebook.com/profile.php?id=100040798551890"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="tel:+917683945499"><i class="fa fa-phone"></i></a></li>
                        
                              
                          </ul>
                      </div>
                  </div>
                  
              </div>
          </div>
      </div>
  </section>
 <!-- products -->
 <div id="product" class="prot">
    <div class="products">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="titlepage text_align_left">
                   <h2>Our Products</h2>
                   <p>It is a long established fact that a reader will be distracted by the readable content of a page
                      when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                      distribution of letters,</p>
                </div>
             </div>
          </div>
       </div>
       <div id="prod" class="carousel slide product_banner" data-ride="carousel">
          <ol class="carousel-indicators">
             <li data-target="#prod" data-slide-to="0" class="active"></li>
             <li data-target="#prod" data-slide-to="1"></li>
             <li data-target="#prod" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
             <div class="carousel-item active">
                <div class="container">
                   <div class="carousel-caption  banner_pro">
                      <div class="row d_flex">
                         <div class="col-md-4">
                            <div class="product mar_bottom30">
                               <figure><img src="{{ asset('frontend/images/10 bk (1).png')}}" alt="#" /></figure>
                               <h3>10 bk</h3>
                            </div>
                         </div>
                         <div class="col-md-4 mar_bottom30">
                            <div class="product">
                               <figure><img src="{{ asset('frontend/images/10 BK FULL.png')}}" alt="#" /></figure>
                               <h3>10 BK</h3>
                            </div>
                         </div>
                         <div class="col-md-4">
                            <div class="product">
                               <figure><img src="{{ asset('frontend/images/10 BRICKS DOUBLE CYLINDER.png')}}" alt="#" /></figure>
                               <h3>10 BRICKS DOUBLE CYLINDER</h3>
                            </div>
                         </div>

                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="container">
                   <div class="carousel-caption  banner_pro">
                      <div class="row d_flex">
                         <div class="col-md-4 mar_bottom30">
                            <div class="product">
                               <figure><img src="{{ asset('frontend/images/12 BK.png')}}" alt="#" /></figure>
                               <h3>12 BK </h3>
                            </div>
                         </div>
                         <div class="col-md-4 mar_bottom30">
                            <div class="product">
                               <figure><img src="{{ asset('frontend/images/3 BRICKS MACHINE.png')}}" alt="#" /></figure>
                               <h3>3 BRICKS MACHINE</h3>
                            </div>
                         </div>
                         <div class="col-md-4">
                            <div class="product">
                               <figure><img src="{{ asset('frontend/images/39 bricks 2 (1).png')}}" alt="#" /></figure>
                               <h3>39 bricks</h3>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="container">
                   <div class="carousel-caption  banner_pro">
                      <div class="row d_flex">
                         <div class="col-md-4 mar_bottom30">
                            <div class="product">
                               <figure><img src="{{ asset('frontend/images/8 bk.png')}}" alt="#" /></figure>
                               <h3>8 BK AUTOPLY </h3>
                            </div>
                         </div>
                         <div class="col-md-4 mar_bottom30">
                            <div class="product">
                               <figure><img src="{{ asset('frontend/images/8 bk.png')}}" alt="#" /></figure>
                               <h3>distribution</h3>
                            </div>
                         </div>
                         <div class="col-md-4">
                            <div class="product">
                               <figure><img src="{{ asset('frontend/images/8 BK AUTOPLY.png')}}" alt="#" /></figure>
                               <h3>distribution</h3>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <a class="carousel-control-prev" href="#prod" role="button" data-slide="prev">
             <i class="fa fa-arrow-left" aria-hidden="true"></i>
             <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#prod" role="button" data-slide="next">
             <i class="fa fa-arrow-right" aria-hidden="true"></i>
             <span class="sr-only">Next</span>
          </a>
       </div>
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <a class="read_more" href="Javascript:void(0)">Contact Now</a>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end products -->
 <!--  contact -->


@endsection