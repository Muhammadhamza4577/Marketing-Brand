<?php include 'include/head.php';?>
<?php include 'include/header.php';?>
<section class="main-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-5 box-size">
            <div class="banner-head">
               <div data-aos="fade-down" data-aos-duration="1000">
                  <h1>We Grow Brands<br> on <span class="txt-clr">Amazon</span></h1>
               </div>
               <div data-aos="fade-up" data-aos-duration="1000">
                  <p>Let us assist you in expanding your company online while you take it to the next level.</p>
               </div>
               <div data-aos="fade-up" data-aos-duration="1000">
                  <ul class="bnr-lst">
                     <li>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <h2>100% job success score</h2>
                     </li>
                     <li>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <h2>5-star reviews</h2>
                     </li>
                     <li>
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <h2>Typical boost in sales</h2>
                     </li>
                  </ul>
               </div>
               <div class="bnr-btn" data-aos="fade-up" data-aos-duration="2000">
                  <a class="btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a Quote</a>
                  <a class="btn-2" href="javascript:;" onclick="setButtonURL();">Live Chat</a>
               </div>
            </div>
         </div>
         <div class="col-md-3 middle-img">
            <div class="bnr-img" data-aos="zoom-in" data-aos-duration="2000">
               <img src="assests/images/bnr-img.png" alt="">
            </div>
         </div>
         <div class="col-md-4">
            <div class="bnr-form" data-aos="fade-in" data-aos-duration="2000">
               <div class="form-box">
                  <form method="post" action="sendmail.php">
                     <div class="col-sm-9 form-txt">
                        <h2>Get A Proposal</h2>
                        <p>Increase your Amazon store sales with our proven marketing strategies.</p>
                     </div>
                     <div class="col-sm-3">
                        <div class="form-img">
                           <img src="assests/images/form-img.png" alt="">
                        </div>
                     </div>
                     <div class="basic-form">
                        <div class="row">
                           <div class="col-sm-12 form-input">
                              <input type="text" name="name" placeholder="Full name..." required="">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12 form-input">
                              <input type="email" name="email" placeholder="Email..." required="">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12 form-input">
                              <input type="number" name="phone" placeholder="Phone Number..." required="">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12 form-input">
                              <textarea name="msg" id="" placeholder="Brief..." cols="30" rows="3"></textarea>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12 submit-btn">
                              <input type="submit" name="submit" value="Get Free Consultation">
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12" data-aos="fade-down" data-aos-duration="2000">
            <a href="#scroll-down">
               <div class="scrl-dwn">
               <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
               <dotlottie-player src="https://lottie.host/e3a1d8d9-1157-4999-aad6-ab5afad18d57/JmHzNF5FxB.json" background="transparent" speed="1" style="width: 120px; height: 120px;" loop autoplay></dotlottie-player>
               </div>
            </a>
         </div>
      </div>
   </div>
</section>
<section class="assos-brands">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="brands-head">
               <div data-aos="fade-down" data-aos-duration="2000">
                  <h1>Platform We Are Associated With</h1>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <p>Sell Online Make Money has an alliance with numerous online platforms. Here are a few of many renowned brands we work in association with:</p>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="asso-logo" data-aos="fade-up" data-aos-duration="2000">
               <img src="assests/images/brands-logos.png" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="our-services-tabs" id="scroll-down">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="serv-txt">
               <div data-aos="fade-down" data-aos-duration="2000">
                  <h1>What <span class="txt-clr"> Services </span> we provide</h1>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <p>Whether you’re looking to strengthen your decision-making or want a hands-off compliance solution, we tailor our services to your needs</p>
               </div>
            </div>
         </div>
         <div class="col-md-4"></div>
      </div>
      <div class="row">
         <div class="col-md-12 my-all-serv" data-aos="fade-up" data-aos-duration="2000">
            <div id="servtabs">
               <ul id="servaccordion">
                  <li>
                     <a class="active" href="#servtabs-1">
                        <div class="servtag">
                           <div class="servicon">
                              <div class="servblock">
                                 <div class="servcircle">1</div>
                              </div>
                           </div>
                           <span class="servtitle">Amazon Store Creation</span>
                        </div>
                     </a>
                     <div class="servaddon fadein">
                        <span class="mypara">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                        </span>
                     </div>
                  </li>
                  <li>
                     <a href="#servtabs-2">
                        <div class="servtag">
                           <div class="servicon">
                              <div class="servblock">
                                 <div class="servcircle">2</div>
                              </div>
                           </div>
                           <span class="servtitle">Amazon Product Hunting</span>
                        </div>
                     </a>
                     <div class="servaddon">
                        <span class="mypara">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                        </span>
                     </div>
                  </li>
                  <li>
                     <a href="#servtabs-3">
                        <div class="servtag">
                           <div class="servicon">
                              <div class="servblock">
                                 <div class="servcircle">3</div>
                              </div>
                           </div>
                           <span class="servtitle">EBC/A+ Content</span>
                        </div>
                     </a>
                     <div class="servaddon">
                        <span class="mypara">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                        </span>
                     </div>
                  </li>
                  <li>
                     <a href="#servtabs-4">
                        <div class="servtag">
                           <div class="servicon">
                              <div class="servblock">
                                 <div class="servcircle">4</div>
                              </div>
                           </div>
                           <span class="servtitle">Amazon PPC</span>
                        </div>
                     </a>
                     <div class="servaddon">
                        <span class="mypara">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                        </span>
                     </div>
                  </li>
                  <li>
                     <a href="#servtabs-5">
                        <div class="servtag">
                           <div class="servicon">
                              <div class="servblock">
                                 <div class="servcircle">5</div>
                              </div>
                           </div>
                           <span class="servtitle">Virtual Assistance</span>
                        </div>
                     </a>
                     <div class="servaddon">
                        <span class="mypara">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                        </span>
                     </div>
                  </li>
               </ul>
               <div class="servtab-line">
                    <img src="assests/images/servtab-line.png" alt="">
                </div>
               <div class="servbrowser">
                  <div id="servtabs-1">
                     <img src="assests/images/servtab-img01.png" alt="">
                  </div>
                  <div id="servtabs-2">
                     <img src="assests/images/servtab-img02.png" alt="">
                  </div>
                  <div id="servtabs-3">
                     <img src="assests/images/servtab-img01.png" alt="">
                  </div>
                  <div id="servtabs-4">
                     <img src="assests/images/servtab-img02.png" alt="">
                  </div>
                  <div id="servtabs-5">
                     <img src="assests/images/servtab-img01.png" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="book-Campaign" >
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="book-compaign-img" data-aos="slide-right" data-aos-duration="2000">
                  <img src="assests/images/campaign-book.png" alt="">
            </div>
         </div>
         <div class="col-md-6 campaign-txt">
            <div class="campaign-box">
               <div data-aos="fade-down" data-aos-duration="2000">
                  <h2>Why Work With Us</h2>
               </div>
               <div data-aos="fade-down" data-aos-duration="2000">
                  <h1>Measuring and Refining <span class="txt-clr"> Campaign</span></h1>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <p>We, at Amazon Profs, ensure that the metrics and solutions assigned for a certain campaign are according to the client’s requirements. Measuring effectiveness across all channels and adjusting the strategy accordingly is a pivotal aspect of managing and organizing a campaign. A marketing plan for Amazon should provide value, engage the target audience, and ensure high productivity.</p>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <img class="camp-star" src="assests/images/Campaign-star.png" alt="">
               </div>
               <div class="bnr-btn campaign" data-aos="fade-up" data-aos-duration="2000">
                  <a class="btn-1 Reviews-btn" href="#scroll-testi">Read Our Star Rating Reviews</a>
                  <a class="btn-2" href="javascript:;" onclick="setButtonURL();">Live Chat</a>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000"> 
                  <img class="camp-arrow" src="assests/images/camp-arrow.png" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="promotion">
   <div class="container">
      <div class="row">
         <div class="col-md-6 promotion-boxes">
            <div class="promo-txt">
               <div data-aos="fade-down" data-aos-duration="2000">
                  <h1>Why we're <span class="txt-clr"> different </span></h1>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
               </div>
               <div class="pormo-list" data-aos="fade-up" data-aos-duration="2000">
                  <h1>#1</h1>
                  <h3>LOREM IPSUM IS SIMPLY DUMMY TEXT OF THE</h3>
               </div>
               <div class="pormo-list" data-aos="fade-up" data-aos-duration="2000">
                  <h1>4.9</h1>
                  <h3>STARS ON CAPTERRA & GETAPP</h3>
               </div>
               <div class="bnr-btn promo" data-aos="fade-up" data-aos-duration="2000">
                  <a class="btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a Quote</a>
                  <a class="btn-2" href="javascript:;" onclick="setButtonURL();">Live Chat</a>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="promo-box-main">
               <div class="promo-box" data-aos="slide-left" data-aos-duration="2000">
                  <div class="promo-img-box">
                     <img src="assests/images/join.png" alt="">
                  </div>
                  <div class="promo-ctnt">
                     <h4>The most tech-forward</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown type specimen book.</p>
                  </div>
               </div>
               <div class="promo-box" data-aos="slide-left" data-aos-duration="2000">
                  <div class="promo-img-box">
                     <img src="assests/images/promo.png" alt="">
                  </div>
                  <div class="promo-ctnt">
                     <h4>The most experienced</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown type specimen book.</p>
                  </div>
               </div>
               <div class="promo-box" data-aos="slide-left" data-aos-duration="2000">
                  <div class="promo-img-box">
                     <img src="assests/images/money.png" alt="">
                  </div>
                  <div class="promo-ctnt">
                     <h4>The most scalable</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown type specimen book.</p>
                  </div>
               </div>
               <div data-aos="fade-in" data-aos-duration="2000">
                  <img class="promo-line" src="assests/images/promo-line.png" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="grow-pltf">
   <div class="container">
      <div class="row">
         <div class="col-md-6 grow-box">
            <div class="grow-txt">
               <div data-aos="fade-down" data-aos-duration="2000">
                  <h1>Build Your Business With<br> The <span class="txt-navy-clr"> Fastest Growing </span> Platform</h1>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <p>If you are skeptical about hiring an Amazon business consultant to promote your online store.</p>
               </div>
            </div>
            <div class="bnr-btn" data-aos="fade-up" data-aos-duration="2000">
               <a class="btn-4" href="contact-us.php">Boost Your Sale
               <img src="assests/images/icon-areo.png" alt="">
               </a>
            </div>
         </div>
         <div class="col-md-6">
            <div class="grow-img" data-aos="zoom-in" data-aos-duration="2000">
               <img src="assests/images/grow-sec-img.png" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="target-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="target-head">
               <div data-aos="fade-down" data-aos-duration="2000">
                  <h2>Start Selling Online With Our</h2>
               </div>
               <div data-aos="fade-down" data-aos-duration="2000">
                  <h1><span class="txt-clr">eCommerce </span> Platform Development</h1>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <p>Do you want to sell online using the world's largest eCommerce platform? We've got you covered. Amazon Profs will help you build a robust presence on Amazon by building a great online store for you!</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row target-ctnt-size">
         <div class="col-md-6">
            <div class="target-box-list" data-aos="fade-up " data-aos-duration="2000">
               <ul class="target-list">
                  <li>
                     <i class="fa fa-chevron-right" aria-hidden="true"></i>
                     <h3>Facebook Marketplace for Business</h3>
                  </li>
                  <li>
                     <i class="fa fa-chevron-right" aria-hidden="true"></i>
                     <h3>Shopify Optimization Services</h3>
                  </li>
                  <li>
                     <i class="fa fa-chevron-right" aria-hidden="true"></i>
                     <h3>Target Plus™ Marketplace Management</h3>
                  </li>
                  <li>
                     <i class="fa fa-chevron-right" aria-hidden="true"></i>
                     <h3>Walmart Marketplace Advertising</h3>
                  </li>
                  <li>
                     <i class="fa fa-chevron-right" aria-hidden="true"></i>
                     <h3>Shopping Feed Automation</h3>
                  </li>
               </ul>
               <div class="bnr-btn campaign" data-aos="fade-up" data-aos-duration="2000">
                  <a class="btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a Quote</a>
                  <a class="btn-2" href="javascript:;" onclick="setButtonURL();">Live Chat</a>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="target-img" data-aos="slide-left" data-aos-duration="2000">
               <img src="assests/images/target-box-img.png" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="features-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="features-box">
               <div data-aos="fade-down" data-aos-duration="2000">
                  <h1><span class="txt-clr">eCommerce </span> Platform Development</h1>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <h2>Amz Inventor Will Harness the Power of a Successful E-Commerce Growth Strategy!</h2>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <p>Do you want to sell online using the world's largest eCommerce platform? We've got you covered. Amazon Profs will help you build a robust presence on Amazon by building a great online store for you!</p>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="main-feature-boxes">
               <div class="col-sm-3" data-aos="fade-up" data-aos-duration="2000">
                  <div class="feature-box-txt" >
                     <h1>Amazon SEO</h1>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                  </div>
               </div>
               <div class="col-sm-3" data-aos="fade-up" data-aos-duration="2000">
                  <div class="feature-box-txt">
                     <h1>Store Management</h1>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                  </div>
               </div>
               <div class="col-sm-3" data-aos="fade-up" data-aos-duration="2000">
                  <div class="feature-box-txt">
                     <h1>Optimized Content</h1>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                  </div>
               </div>
               <div class="col-sm-3" data-aos="fade-up" data-aos-duration="2000">
                  <div class="feature-box-txt">
                     <h1>Support</h1>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                  </div>
               </div>
            </div>
            <div class="main-feature-boxes">
               <div class="col-sm-3" data-aos="fade-up" data-aos-duration="2000">
                  <div class="feature-box-txt">
                     <h1>Amazon Advertising</h1>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                  </div>
               </div>
               <div class="col-sm-3" data-aos="fade-up" data-aos-duration="2000">
                  <div class="feature-box-txt">
                     <h1>Amazon Sales Boost</h1>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                  </div>
               </div>
               <div class="col-sm-3" data-aos="fade-up" data-aos-duration="2000">
                  <div class="feature-box-txt">
                     <h1>Price Comparison</h1>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                  </div>
               </div>
               <div class="col-sm-3" data-aos="fade-up" data-aos-duration="2000">
                  <div class="feature-box-txt">
                     <h1>EBC/A+ Content</h1>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="second-grow-pltf">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="second-grow-img" data-aos="fade-down" data-aos-duration="2000">
               <img src="assests/images/sec-grow-bg.png" alt="">
            </div>
         </div>
         <div class="col-md-6 grow-box">
            <div class="second-grow-txt">
               <div data-aos="fade-down" data-aos-duration="2000">
                  <h1>Build Your Business With<br> The <span class="txt-clr"> Fastest Growing </span> Platform</h1>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <p>If you are skeptical about hiring an Amazon business consultant to promote your online store.</p>
               </div>
            </div>
            <div class="bnr-btn" data-aos="fade-up" data-aos-duration="2000">
               <a class="btn-4" href="contact-us.php">Boost Your Sale
               <img src="assests/images/icon-areo.png" alt="">
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="plan-pricing">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="plan-box" data-aos="fade-up" data-aos-duration="2000">
               <div class="plan-serv-box">
                  <img src="assests/images/plan-01.png" alt="">
                  <h1>Amazon Store Creation</h1>
                  <p>Higher revenue, lower ACOS, and transparent advertising management.</p>
                  <a class="btn-1 plans" href="amazon-store-creation.php">Learn More</a>
               </div>
               <div class="plan-serv-box" data-aos="fade-up" data-aos-duration="2000">
                  <img src="assests/images/plan-02.png" alt="">
                  <h1>Amazon Product Hunting</h1>
                  <p>Our 4-phase Amazon SEO plan is best-in-class and will show dramatic results in search rankings in 90 days.</p>
                  <a class="btn-1 plans" href="amazon-product-hunting.php">Learn More</a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="plan-box1">
               <div class="plan-serv-box" data-aos="fade-up" data-aos-duration="2000">
                  <img src="assests/images/plan-03.png" alt="">
                  <h1>EBC/A+ Content</h1>
                  <p>Enhanced Brand Content, Brand Stores, and graphics that convert.</p>
                  <a class="btn-1 plans" href="ebca+-content.php">Learn More</a>
               </div>
               <div class="plan-serv-box" data-aos="fade-up" data-aos-duration="2000">
                  <img src="assests/images/plan-04.png" alt="">
                  <h1>Virtual Assistant</h1>
                  <p>Higher revenue, lower ACOS, and transparent advertising management.</p>
                  <a class="btn-1 plans" href="virtual-assistant.php">Learn More</a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="plan-txt-box">
               <div data-aos="fade-down" data-aos-duration="2000">
                  <h1>How Our Services Help You Grow <span class="txt-clr"> Market Share </span></h1>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <p>To help you increase your sales, we take a two-step approach. First, we drive traffic to your listings. And then we boost your conversions. Sounds simple, doesn’t it? It is. <br> By building your PPC campaigns, developing your SEO, enhancing your designs, and curating and troubleshooting your catalogs, we’ll strengthen your brand and your performance on Seller Central. You should be seeing more traffic and revenue within just a few months.</p>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <a class="btn-1" href="javascript:;" onclick="setButtonURL();">Chat with Us for more</a>
               </div>
            </div>
            <div class="price-box-cntnt">
               <div data-aos="fade-down" data-aos-duration="2000">
                  <h3>Looking For</h3>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <h1>Custom Plans Pricing &</h1>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <p>Request a Proposal To Recieve Yours.</p>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <a class="btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal">Request A Quote</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="testimonails-sec" id="scroll-testi">
   <div class="container">
      <div class="row">
         <div class="col-md-6 test-sec-box">
            <div class="test-box">
               <div data-aos="fade-down" data-aos-duration="2000">
                  <h1>What Our Customers Have To Say About Us</h1>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <p>Request a proposal to learn more about our PPC services for Amazon, which include frequent reporting, a dedicated account manager, and proactive bid management that can help you start making more money. </p>
               </div>
               <div data-aos="fade-up" data-aos-duration="2000">
                  <img class="camp-star" src="assests/images/Campaign-star.png" alt="">
               </div>
               <div class="bnr-btn" data-aos="fade-up" data-aos-duration="2000">
                  <a class="btn-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Get a Quote</a>
                  <img class="test-arrow" src="assests/images/camp-arrow.png" alt="">
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="row testimonail-slide">
               <div class="test-slide-box testimonials" data-aos="slide-left" data-aos-duration="2000">
                  <div class="col-sm-12">
                     <div class="test-silder-box">
                        <img class="test-img" src="assests/images/test-01.png" alt="">
                        <p>Request a proposal to learn more about our PPC services for Amazon, which include frequent reporting, a dedicated account manager, and proactive bid management that can help you start making more money. A competitive pay-per-click (PPC) campaign is just as important for competing on Amazon. </p>
                        <h1>Stanley Lucas</h1>
                        <h3>Sales Executive</h3>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="test-silder-box">
                        <img class="test-img" src="assests/images/test-01.png" alt="">
                        <p>Request a proposal to learn more about our PPC services for Amazon, which include frequent reporting, a dedicated account manager, and proactive bid management that can help you start making more money. A competitive pay-per-click (PPC) campaign is just as important for competing on Amazon. </p>
                        <h1>Stanley Lucas</h1>
                        <h3>Sales Executive</h3>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="test-silder-box">
                        <img class="test-img" src="assests/images/test-01.png" alt="">
                        <p>Request a proposal to learn more about our PPC services for Amazon, which include frequent reporting, a dedicated account manager, and proactive bid management that can help you start making more money. A competitive pay-per-click (PPC) campaign is just as important for competing on Amazon. </p>
                        <h1>Stanley Lucas</h1>
                        <h3>Sales Executive</h3>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="test-silder-box">
                        <img class="test-img" src="assests/images/test-01.png" alt="">
                        <p>Request a proposal to learn more about our PPC services for Amazon, which include frequent reporting, a dedicated account manager, and proactive bid management that can help you start making more money. A competitive pay-per-click (PPC) campaign is just as important for competing on Amazon. </p>
                        <h1>Stanley Lucas</h1>
                        <h3>Sales Executive</h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="client-logos">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="client-logo-box" data-aos="fade-down" data-aos-duration="2000">
               <img src="assests/images/clients-logo.png" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
<?php include 'include/footer.php';?>
<?php include 'include/links.php';?>