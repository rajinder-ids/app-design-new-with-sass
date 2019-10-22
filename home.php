<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>Home</title>
      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/custom.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
   </head>
   <style type="text/css">
   </style>
   <body>
      <div class="container custom-container" style="background-color:#f1f1f1">
      <div class="section topbar padding-0">
         <!--   Icon Section   -->
         <div class="row">
            <div class="col s4 m4 left-align">
               <a href="#" data-target="slide-out" class="sidenav-trigger waves-effect">
               <i class="material-icons white-text">menu</i>
               </a>
            </div>
            <div class="col s4 m4 center-align">
               <span class="page-title">HOME</span>
            </div>
            <div class="col s4 m4 right-align">
               <a class="white-text"><i class="material-icons dp48 search-icon-home waves-effect">search</i></a>
               <div class=" modal-trigger app-notifications waves-effect" href="#modal1" style="display: inline-block;">
                  <span class="notifications-app"><i class="material-icons dp48">notifications_none</i></span>
               </div>
            </div>
         </div>
      </div>
      <div class="searchbar-home fadeInRight fadeout">
         <div class="section" style="box-shadow:0 1px 1.5px rgba(0, 0, 0, 0.64);background: #fff;">
            <div class="row">
               <form>
                  <div class="input-field col s12 top-margin">
                     <i class="material-icons dp48 prefix fade-out"><a  class="black-text">arrow_back</a></i>
                     <input type="text"  id="input-search" class="validate" placeholder="Search for products, brands and more">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!---------sidebar menu----------->
      <ul id="slide-out" class="sidenav">
         <li>
            <div class="user-view center">
               <div class="background" style="background: linear-gradient(to right, rgba(254,39,82,1) 0%, rgba(237,33,44,1) 100%);"> 
               </div>
               <div class="profile">
                  <img class="" src="images/profile.png">
                  <h5 class="white-text">Jassica Jones</h5>
               </div>
            </div>
         </li>
         <li class="waves-effect">
            <a href="home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
         </li>
         <li class="waves-effect">
            <a href="edit-profile.php"><i class="fa fa-user-o" aria-hidden="true"></i>My profile</a>
         </li>
         <li class="waves-effect">
            <a href="send-code.php"><i class="fa fa-qrcode" aria-hidden="true"></i>Scan-code</a>
         </li>
         <li class="waves-effect">
            <a href="subscription.php"><i class="fa fa-server" aria-hidden="true"></i>Subscription</a>
         </li>
         <li>
            <a href="home.php"><i class="fa fa-shield" aria-hidden="true"></i>Exclusive Deal</a>
         </li>
         <li class="waves-effect">
            <a href="watch-list.php"><i class="fa fa-heart-o" aria-hidden="true"></i>Watch List</a>
         </li>
         <li class="waves-effect">
            <a href="shoping-list.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Shopping List</a>
         </li>
         <li class="waves-effect">
            <a href="contact.php"><i class="fa fa-star-o" aria-hidden="true"></i>Feedback/Contact</a>
         </li>
         <li class="waves-effect">
            <a href="faq.php"><i class="fa fa-wpforms" aria-hidden="true"></i>FAQ</a>
         </li>
         <li class="waves-effect">
            <a href="sign-up.php"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>Logout</a>
         </li>
      </ul>
      <!---------sidebar menu----------->
      <div class="section product-categoery-icon">
         <div class="row tab-menu sticky-category">
            <div class="col s12 no-padding">
               <ul class="tabs">
                  <li class="tab notifications-app2"><a class="modal-trigger" href="#modal2">Car</a></li>
                  <li class="tab notifications-app3"><a class="modal-trigger" href="#modal3">Electronic</a></li>
                  <li class="tab notifications-app4"><a class="modal-trigger" href="#modal4">Jobs</a></li>
                  <li class="tab notifications-app5"><a class="modal-trigger" href="#modal5">Property</a></li>
                  <li class="tab notifications-app6"><a class="modal-trigger" href="#modal6">menu4</a></li>
                  <li class="tab notifications-app7"><a class="modal-trigger" href="#modal7">menu5</a></li>
                  <li class="tab notifications-app8"><a class="modal-trigger" href="#modal8">menu6</a></li>
               </ul>
            </div>
         </div>
         <div class="section home-slider padding-0">
            <div class="row">
               <div class="col s12 m12 l12">
                  <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1280px;height:500px;overflow:hidden;visibility:hidden;">
                     <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1280px;height:500px;overflow:hidden;">
                        <div>
                           <img data-u="image" src="https://images-na.ssl-images-amazon.com/images/G/01/desktop/US_SnS_Banner_750x275_2._CB517357317_.png" />
                        </div>
                        <div>
                           <img data-u="image" src="images/slider-2.jpg" />
                        </div>
                        <div>
                           <img data-u="image" src="images/slider-3.jpg" />
                        </div>
                     </div>
                     <!-- Bullet Navigator -->
                     <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                           <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%; fill:#007aff">
                              <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                           </svg>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section" style="background-color: #f1f1f1;">
            <div class="row">
               <div class="col s12 m12 l12 left-align">
                  <h6 class="top-margin"><b>Exclusive Items</b></h6>
               </div>
               <div class="col s12 m12 l12">
                  <div class="swiper-container recentlyAdded">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/1.jpg">
                                 <img class="app-wishlist-icon" src="images/congrats-badge.png">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon">
                                    <i class="material-icons dp48 wishlist">favorite_border</i>
                                 </div>
                              </div>

                             
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/3.jpg">
                                 <img class="app-wishlist-icon" src="images/congrats-badge.png">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/Women-Bag-PNG-HD.png">
                                 <img class="app-wishlist-icon" src="images/congrats-badge.png">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/Insigne_2.jpg">
                                 <img class="app-wishlist-icon" src="images/congrats-badge.png">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/5.jpg">
                                 <img class="app-wishlist-icon" src="images/congrats-badge.png">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                     </div>
                     <!-- Add Pagination -->
                     <div class="swiper-pagination"></div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col s6 m6 left-align">
                  <h6 class="top-margin"><a href="/app-design-new/products-page.php" class="red-text">Show more</a></h6>
               </div>
               <div class="col s6 m6 right-align">
                  <i class="material-icons dp48 red-text">chevron_right</i>
               </div>
            </div>
         </div>
         <hr class="app-hr">
         <div class="section" style="background-color: #f1f1f1;">
            <div class="row">
               <div class="col s12 m12 l12 left-align">
                  <h6 class="top-margin"><b>Recently Added</b></h6>
               </div>
               <div class="col s12 m12 l12">
                  <div class="swiper-container recentlyAdded">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/1.jpg">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/3.jpg">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/Women-Bag-PNG-HD.png">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/Insigne_2.jpg">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <a href="/app-design-new/single-products.php">
                              <div class="porducts-grid center">
                                 <img src="images/5.jpg">
                              </div>
                           </a>
                           <div class="porducts-title col s12 m12 l12">
                              <div class="title-wishlist">
                                 <a href="/app-design-new/single-products.php">
                                    <h6 class="black-text">Fresh Essential No Gas Deodorant - Ignite, 150 ml (Pack of 2)</h6>
                                 </a>
                                 <div class="wishlist-icon ">
                                    <i class="material-icons dp48 wishlist" onclick="M.toast({html: 'Add to wishlist'})">favorite_border</i>
                                 </div>
                              </div>
                              <h6 class="green-text">$150</h6>
                           </div>
                        </div>
                     </div>
                     <!-- Add Pagination -->
                     <div class="swiper-pagination"></div>
                  </div>
               </div>
               <div class="row">
                  <div class="col s6 m6 left-align">
                     <h6 class="top-margin"><a href="/app-design-new/products-page.php" class="red-text">Show more</a></h6>
                  </div>
                  <div class="col s6 m6 right-align">
                     <i class="material-icons dp48 red-text">chevron_right</i>
                  </div>
               </div>
            </div>
         </div>
         <hr class="app-hr">
         <div class="wrap-padding porducts-list">
            <div class="section"style="background-color: #f1f1f1;">
               <div class="row">
                  <div class="col s12 m12 l12 left-align">
                     <h6 class="top-margin"><b>Deals Near By</b></h6>
                     <img src="images/banner-gold.jpg" class="responsive-img">
                     <h5>VINTAGE</h5>
                     <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                     <p class="black-text">Only 71 items left in stok !</p>
                     <h6 class="black-text"><span class="red-text">$560</span>  <span class="grey-text">|</span> <strong>5:30:42</strong></h6>
                  </div>
               </div>
               <div class="row">
                  <div class="col s6 m6 left-align">
                     <h6 class="top-margin"><a href="/app-design-new/products-page.php" class="red-text">Show more</a></h6>
                  </div>
                  <div class="col s6 m6 right-align">
                     <i class="material-icons dp48 red-text">chevron_right</i>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal Structure -->
         <div class=" fadeInRight top-sheet fixed-notification-main">
            <div class="" style="position:relative;">
               <h4 class="fixed-notification fade-out">Notification<i class="material-icons dp48"><a class="white-text">close</a></i></h4>
               <ul class="collection">
                  <li class="collection-item avatar">
                     <i class="material-icons circle green">assessment</i>
                     <span class="title">Visual</span>
                     <p class="grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle green">assessment</i>
                     <span class="title">Visual</span>
                     <p class="grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
                  <li class="collection-item avatar">
                     <i class="material-icons circle">folder</i>
                     <span class="title">USB for file transfar</span>
                     <p class="grey-text">Touch for more option.</p>
                  </li>
               </ul>
            </div>
         </div>
         <!-- Modal Trigger -->
         <!-- Modal Structure -->
         <div class="fadeInRight top-sheet2">
            <div class="">
               <h4 class="fixed-notification fade-out">Car Category <i class="material-icons dp48 modal-close"><a class="black-text">close</a></i></h4>
               <div class="section" style="background: #fff;">
                  <div class="row">
                     <div class="col s12 m12 l12">
                        <ul class="collapsible">
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Commercial Vehicles</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Electronics.jpg" width="50">
                                          Car Electronics 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Janitorial-Sanitation.jpg" width="50">
                                          Janitorial & Sanitation 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Electronics.jpg" width="50">
                                          Car Electronics 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Janitorial-Sanitation.jpg" width="50">
                                          Janitorial & Sanitation 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Spare Parts</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Part.jpg" width="50">
                                          Car Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Part.jpg" width="50">
                                          Car Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Other Vehicles</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Motorbike-Care.jpg" width="50">
                                          Car & Motorbike Care 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Test-Measure-Inspect.jpg" width="50">
                                          Test, Measure & Inspect 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Motorbike-Care.jpg" width="50">
                                          Car & Motorbike Care 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Test-Measure-Inspect.jpg" width="50">
                                          Test, Measure & Inspect
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Motorbike-Care.jpg" width="50">
                                          Car & Motorbike Care 
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal Structure -->
         <div class="fadeInRight top-sheet3">
            <div class="">
               <h4 class="fixed-notification fade-out">Electronic <i class="material-icons dp48 modal-close"><a class="black-text">close</a></i></h4>
               <div class="section" style="background: #fff;">
                  <div class="row">
                     <div class="col s12 m12 l12">
                        <ul class="collapsible">
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Appliances</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/WM_GNO.jpg" width="50">
                                          Large Appliances 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/mixergrinder.jpg" width="50">
                                          Kitchen Appliances 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Home-Entertainment-Systems.jpg" width="50">
                                          Home Entertainment Systems 
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>TV</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/AllElectronics.jpg" width="50">
                                          All Electronics 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/AllElectronics.jpg" width="50">
                                          All Electronics 
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Electronics</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/AC1.jpg" width="50">
                                          Air conditioners  
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Refrigerator_2.jpg" width="50">
                                          Refrigerators  
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Camera-Accessories.jpg" width="50">
                                          Camera Accessories 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Cameras.jpg" width="50">
                                          Cameras 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Headphones.jpg" width="50">
                                          Headphones 
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal Structure -->
         <div class="fadeInRight top-sheet4">
            <div class="">
               <h4 class="fixed-notification fade-out">Jobs <i class="material-icons dp48 modal-close"><a class="black-text">close</a></i></h4>
               <div class="section" style="background: #fff;">
                  <div class="row">
                     <div class="col s12 m12 l12">
                        <ul class="collapsible">
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>IT Engineer & Developer</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/designer.jpg" width="50">
                                          Web Designer
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/dev.jpg" width="50">
                                          Web Developer
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/designer.jpg" width="50">
                                          Web Designer
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/dev.jpg" width="50">
                                          Web Developer
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Driver</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Part.jpg" width="50">
                                          Car Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Part.jpg" width="50">
                                          Car Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Teacher</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/teacher.jpg" width="50">
                                          English Teacher Job 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/teacher.jpg" width="50">
                                          Math Teacher Job 
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal Structure -->
         <div class="fadeInRight top-sheet5">
            <div class="">
               <h4 class="fixed-notification fade-out">Property <i class="material-icons dp48 modal-close"><a class="black-text">close</a></i></h4>
               <div class="section" style="background: #fff;">
                  <div class="row">
                     <div class="col s12 m12 l12">
                        <ul class="collapsible">
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Lands & Plots</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/land.jpg" width="50">
                                          Land
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/land.jpg" width="50">
                                          Land
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/land.jpg" width="50">
                                          Land
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/land.jpg" width="50">
                                          Land
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>For Sale: Shops & Offices</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/shop.jpg" width="50">
                                          Shops
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/shop.jpg" width="50">
                                          Shops
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/shop.jpg" width="50">
                                          Shops
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/shop.jpg" width="50">
                                          Shops
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/shop.jpg" width="50">
                                          Shops
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>PG & Guest Houses</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/pg.jpg" width="50">
                                          PG 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/pg.jpg" width="50">
                                          PG & Guest Houses
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/pg.jpg" width="50">
                                          Guest Houses
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/pg.jpg" width="50">
                                          PG 
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal Structure -->
         <div class="fadeInRight top-sheet6">
            <div class="">
               <h4 class="fixed-notification fade-out">Menu4 <i class="material-icons dp48 modal-close"><a class="black-text">close</a></i></h4>
               <div class="section" style="background: #fff;">
                  <div class="row">
                     <div class="col s12 m12 l12">
                        <ul class="collapsible">
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Commercial Vehicles</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Electronics.jpg" width="50">
                                          Car Electronics 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Janitorial-Sanitation.jpg" width="50">
                                          Janitorial & Sanitation 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Electronics.jpg" width="50">
                                          Car Electronics 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Janitorial-Sanitation.jpg" width="50">
                                          Janitorial & Sanitation 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Spare Parts</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Part.jpg" width="50">
                                          Car Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Part.jpg" width="50">
                                          Car Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Other Vehicles</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Motorbike-Care.jpg" width="50">
                                          Car & Motorbike Care 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Test-Measure-Inspect.jpg" width="50">
                                          Test, Measure & Inspect 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Motorbike-Care.jpg" width="50">
                                          Car & Motorbike Care 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Test-Measure-Inspect.jpg" width="50">
                                          Test, Measure & Inspect
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Motorbike-Care.jpg" width="50">
                                          Car & Motorbike Care 
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal Structure -->
         <div class="fadeInRight top-sheet7">
            <div class="">
               <h4 class="fixed-notification fade-out">Menu5 <i class="material-icons dp48 modal-close"><a class="black-text">close</a></i></h4>
               <div class="section" style="background: #fff;">
                  <div class="row">
                     <div class="col s12 m12 l12">
                        <ul class="collapsible">
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Commercial Vehicles</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Spare Parts</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Part.jpg" width="50">
                                          Car Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Part.jpg" width="50">
                                          Car Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Other Vehicles</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Motorbike-Care.jpg" width="50">
                                          Car & Motorbike Care 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Test-Measure-Inspect.jpg" width="50">
                                          Test, Measure & Inspect 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Motorbike-Care.jpg" width="50">
                                          Car & Motorbike Care 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Test-Measure-Inspect.jpg" width="50">
                                          Test, Measure & Inspect
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect ">
                                          <img src="/app-design-new/images/Car-Motorbike-Care.jpg" width="50">
                                          Car & Motorbike Care 
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal Structure -->
         <div class="fadeInRight top-sheet8">
            <div class="">
               <h4 class="fixed-notification fade-out">Menu6 <i class="material-icons dp48 modal-close"><a class="black-text">close</a></i></h4>
               <div class="section" style="background: #fff;">
                  <div class="row">
                     <div class="col s12 m12 l12">
                        <ul class="collapsible">
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Commercial Vehicles</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Motorbike.jpg" width="50">
                                          Motorbike Accessories & Parts
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Spare Parts</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Part.jpg" width="50">
                                          Car Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Part.jpg" width="50">
                                          Car Parts
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Accessories.jpg" width="50">
                                          Car Accessories
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="collapsible-header category-header">
                                 <h6><strong>Other Vehicles</strong></h6>
                                 <h6><i class="caret material-icons">keyboard_arrow_down</i></h6>
                              </div>
                              <div class="collapsible-body grey-text category-body">
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Motorbike-Care.jpg" width="50">
                                          Car & Motorbike Care 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Test-Measure-Inspect.jpg" width="50">
                                          Test, Measure & Inspect 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Motorbike-Care.jpg" width="50">
                                          Car & Motorbike Care 
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Test-Measure-Inspect.jpg" width="50">
                                          Test, Measure & Inspect
                                       </div>
                                    </a>
                                 </div>
                                 <div class="col s6 m6 l6">
                                    <a href="/app-design-new/home.php" class="black-text">
                                       <div class="category-flex waves-effect">
                                          <img src="/app-design-new/images/Car-Motorbike-Care.jpg" width="50">
                                          Car & Motorbike Care 
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/jssor.slider.min.js" type="text/javascript"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
      <script>
         jQuery(document).ready(function(){
         jQuery('.collapsible').collapsible();
         });
         // jQuery('.hide-menu').click(function($){
         //  jQuery('.categories-menu').hide('slow');
         // })

         
      </script>
      <script src="js/init.js"></script>
      <script src="js/custom-jssor-slider.js"></script>
    
   </body>
</html>