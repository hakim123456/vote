<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from nephos.cssninja.io/products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Oct 2018 13:07:32 GMT -->
<head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title> Nephos :: Modern Bulma Ecommerce App and Dashboard</title>
        <link rel="icon" type="image/png" href="assets/images/favicon.png" />

        <!--Core CSS -->
        <link rel="stylesheet" href="assets/css/bulma.css">
        <link rel="stylesheet" href="assets/css/core.css">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">
        
        <!-- plugins -->
        <link rel="stylesheet" href="assets/js/slick/slick.css">
        <link rel="stylesheet" href="assets/js/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/js/webuipopover/jquery.webui-popover.min.css">
        <link rel="stylesheet" href="assets/js/izitoast/css/iziToast.min.css">
        <link rel="stylesheet" href="assets/js/zoom/zoom.css">
        <link rel="stylesheet" href="assets/js/jpcard/card.css">
        <link rel="stylesheet" href="assets/css/chosen/chosen.css">
        <link rel="stylesheet" href="assets/css/icons.min.css">

    </head>
    <body>
        
        <!-- Pageloader -->
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>
        <nav class="navbar mobile-navbar is-hidden-desktop is-hidden-tablet" aria-label="main navigation">
            <!-- Brand -->
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                    <img src="assets/images/logo/nephos.svg" alt="">
                </a>
        
                <!-- Sidebar mode toggler icon -->
                <a id="sidebar-mode" class="navbar-item is-icon is-sidebar-toggler" href="javascript:void(0);">
                    <i data-feather="sidebar"></i>
                </a>
        
                <!-- Mobile menu toggler icon -->
                <div class="navbar-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <!-- Navbar mobile menu -->
            <div class="navbar-menu">
                <!-- Account -->
                <div class="navbar-item has-dropdown">
                    <a class="navbar-link">
                        <img src="assets/images/avatars/elie.jpg" alt=""> 
                        <span class="is-heading">Elie Daniels</span> 
                    </a>
        
                    <!-- Mobile Dropdown -->
                    <div class="navbar-dropdown">
                        <a href="cart.html" class="navbar-item is-flex">
                            <span>Cart</span>
                            <!-- Number of items in Cart -->
                            <span class="menu-badge">3</span>
                        </a>
                        <a href="account.html" class="navbar-item">Account</a>
                        <a href="wishlist.html" class="navbar-item">vote</a>
                        <a href="account-edit.html" class="navbar-item">Settings</a>
                        <a href="authentication.html" class="navbar-item">Log out</a>
                    </div>
                </div>
        
                <!-- More -->
                <div class="navbar-item has-dropdown">
                    <a class="navbar-link">
                        <i data-feather="grid"></i>
                        <span class="is-heading">Categories</span>
                    </a>
        
                    <!-- Mobile Dropdown -->
                    <div class="navbar-dropdown">
                        <a href=" " class="navbar-item">Products for vote </a>
                    
                    </div>
                </div>
            </div>
        </nav>
        <!-- Main Sidebar-->
        <div class="main-sidebar">
            <div class="sidebar-brand">
                <a href="#"><img src="assets/images/logo/nephos.svg" alt=""></a>
            </div>
            <div class="sidebar-inner">
                <ul class="icon-menu">
                    <!-- Shop sidebar trigger -->
                    <li>
                        <a href="javascript:void(0);" id="open-shop"><i data-feather="home"></i></a>
                    </li>            <!-- Cart sidebar trigger -->
                    <li>
                        <a href="javascript:void(0);" id="open-cart"><i data-feather="shopping-cart"></i><span class="cart-items"></span></a>
                    </li>            <!-- Search trigger -->
                    <li>
                        <a href="javascript:void(0);" id="open-search"><i data-feather="search"></i></a>
                        <a href="javascript:void(0);" id="close-search" class="is-hidden is-inactive"><i data-feather="x"></i></a>
                    </li>            <!-- Shop Filters -->
                    <li>
                        <a id="open-filters"><i data-feather="settings"></i></a>
                    </li>            <!-- Mobile mode trigger -->
                    <li class="is-hidden-desktop is-hidden-tablet">
                        <a href="javascript:void(0);" id="mobile-mode"><i data-feather="smartphone"></i></a>
                    </li>        </ul>
        
                <!-- User account -->
                <ul class="bottom-menu is-hidden-mobile">
                    <li>
                        <a href="authentication.html"><i data-feather="log-out"></i></a>
                    </li>        </ul>
            </div>
        </div>
        <!-- /Main Sidebar-->
        
        <!-- FAB -->
        <div id="quickview-trigger"  class="menu-fab is-hidden-mobile">
            <a class="hamburger-btn" href="javascript:void(0);">
                <span class="menu-toggle">	
                    <span class="icon-box-toggle"> 	
                        <span class="rotate">
                            <i class="icon-line-top"></i>
                            <i class="icon-line-center"></i>
                            <i class="icon-line-bottom"></i> 
                        </span>
                    </span>
                </span>
            </a>
        </div><!-- /FAB -->
        
        <!-- Categories Right quickview -->
        <div class="category-quickview">
            <div class="inner">
                <ul class="category-menu">
                    <li>
                        <a href="products.html">
                            <span>Vote</span> <!--img src="assets/images/icons/living.svg" alt=""-->
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M458.667,0H53.333C23.893,0.035,0.035,23.893,0,53.333v405.333C0.035,488.107,23.893,511.965,53.333,512h405.333
                                                 c29.441-0.035,53.298-23.893,53.333-53.333V53.333C511.965,23.893,488.107,0.035,458.667,0z M490.667,458.667
                                                 c0,17.673-14.327,32-32,32H53.333c-17.673,0-32-14.327-32-32V53.333c0-17.673,14.327-32,32-32h405.333c17.673,0,32,14.327,32,32
                                                 V458.667z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="245.333" y="42.667" width="21.333" height="352"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M320,181.333h-21.333v21.333H320V224h-21.333v21.333H320c0.295,0.006,0.589,0.006,0.884,0
                                                 c11.538-0.244,20.693-9.795,20.449-21.333v-21.333c0.006-0.295,0.006-0.589,0-0.884C341.089,190.245,331.538,181.089,320,181.333z
                                                 "/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M213.333,202.667v-21.333H192c-0.295-0.006-0.589-0.006-0.884,0c-11.538,0.244-20.693,9.795-20.449,21.333V224
                                                 c-0.006,0.295-0.006,0.589,0,0.884c0.244,11.538,9.795,20.693,21.333,20.449h21.333V224H192v-21.333H213.333z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="42.667" y="384" width="426.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="234.667" y="437.333" width="42.667" height="21.333"/>
                                    </g>
                                </g>
                            </svg>                </a>
                    </li>
                    <li>
                        <a href="products.html">
                            <span>Office</span> <!--img src="assets/images/icons/office.svg" alt=""-->
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M458.667,202.667h-64c-5.891,0-10.667,4.776-10.667,10.667v53.333c0,5.891,4.776,10.667,10.667,10.667h64
                                                 c5.891,0,10.667-4.776,10.667-10.667v-53.333C469.333,207.442,464.558,202.667,458.667,202.667z M448,256h-42.667v-32H448V256z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M405.333,106.667c-9.604-1.077-18.042-6.864-22.507-15.435l-19.093,9.536c8.062,15.807,23.888,26.167,41.6,27.232
                                                 c0.634-0.062,1.273-0.062,1.907,0c5.365,0.526,9.287,5.302,8.76,10.667v74.667h21.333v-74.667c0.018-0.606,0.018-1.213,0-1.819
                                                 C436.831,119.677,422.504,106.164,405.333,106.667z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M458.667,128c-0.808-0.024-1.617-0.024-2.425,0c-22.895,0.67-40.911,19.772-40.242,42.667h21.333
                                                 c-0.056-0.866-0.056-1.735,0-2.602c0.718-11.064,10.27-19.45,21.333-18.732H480V128H458.667z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M394.667,138.667h-21.333V160h21.333c11.029,0,19.712,18.315,21.888,24.725l20.235-6.763
                                                 C435.445,173.941,422.88,138.667,394.667,138.667z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M501.333,256H10.667C4.776,256,0,260.776,0,266.667v42.667C0,315.224,4.776,320,10.667,320h490.667
                                                 c5.891,0,10.667-4.776,10.667-10.667v-42.667C512,260.776,507.224,256,501.333,256z M490.667,298.667H21.333v-21.333h469.333
                                                 V298.667z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M469.333,341.333v96c0,5.891-4.776,10.667-10.667,10.667H53.333c-5.891,0-10.667-4.776-10.667-10.667v-96H21.333v96
                                                 c0,17.673,14.327,32,32,32h405.333c17.673,0,32-14.327,32-32v-96H469.333z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M96,448H53.333c-5.891,0-10.667,4.776-10.667,10.667v42.667c0,5.891,4.776,10.667,10.667,10.667H96
                                                 c5.891,0,10.667-4.776,10.667-10.667v-42.667C106.667,452.776,101.891,448,96,448z M85.333,490.667H64v-21.333h21.333V490.667z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M458.667,448H416c-5.891,0-10.667,4.776-10.667,10.667v42.667c0,5.891,4.776,10.667,10.667,10.667h42.667
                                                 c5.891,0,10.667-4.776,10.667-10.667v-42.667C469.333,452.776,464.558,448,458.667,448z M448,490.667h-21.333v-21.333H448V490.667
                                                 z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="245.333" y="341.333" width="21.333" height="85.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="298.667" y="373.333" width="42.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="170.667" y="373.333" width="42.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M426.667,0H85.333C73.551,0,64,9.551,64,21.333v192c0,11.782,9.551,21.333,21.333,21.333h277.333v-21.333H85.333v-192
                                                 h341.333v64H448v-64C448,9.551,438.449,0,426.667,0z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="213.333" y="224" width="21.333" height="42.667"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="277.333" y="224" width="21.333" height="42.667"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="106.667" y="170.667" width="256" height="21.333"/>
                                    </g>
                                </g>
                            </svg>                </a>
                    </li>
                    <li>
                        <a href="products.html">
                            <span>For kids</span> <!--img src="assets/images/icons/kids.svg" alt=""-->
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M501.333,160H416v21.333h74.667V224H416v21.333h85.333c5.891,0,10.667-4.776,10.667-10.667v-64
                                                 C512,164.776,507.224,160,501.333,160z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M74.667,181.333h170.667V160h-160V10.667C85.333,4.776,80.558,0,74.667,0h-64C4.776,0,0,4.776,0,10.667v224
                                                 c0,5.891,4.776,10.667,10.667,10.667h234.667V224h-224V21.333H64v149.333C64,176.558,68.776,181.333,74.667,181.333z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="74.667" y="117.333" width="170.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M501.333,53.333h-64c-5.891,0-10.667,4.776-10.667,10.667v53.333H416v21.333h21.333c5.891,0,10.667-4.776,10.667-10.667
                                                 V74.667h42.667v64H512V64C512,58.109,507.224,53.333,501.333,53.333z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M170.667,64h-96v21.333h95.872c0.657-0.071,1.32-0.075,1.978-0.012c5.383,0.514,9.331,5.295,8.817,10.678h21.333
                                                 c0.018-0.606,0.018-1.213,0-1.819C202.164,77.01,187.838,63.498,170.667,64z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="42.667" y="160" width="32" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M501.333,426.667H416V448h74.667v42.667H416V512h85.333c5.891,0,10.667-4.776,10.667-10.667v-64
                                                 C512,431.442,507.224,426.667,501.333,426.667z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M74.667,448h170.667v-21.333h-160V277.333c0-5.891-4.776-10.667-10.667-10.667h-64C4.776,266.667,0,271.442,0,277.333v224
                                                 C0,507.224,4.776,512,10.667,512h234.667v-21.333h-224V288H64v149.333C64,443.224,68.776,448,74.667,448z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="74.667" y="384" width="170.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M501.333,320h-64c-5.891,0-10.667,4.776-10.667,10.667V384H416v21.333h21.333c5.891,0,10.667-4.776,10.667-10.667v-53.333
                                                 h42.667v64H512v-74.667C512,324.776,507.224,320,501.333,320z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M170.667,330.667h-96V352h95.872c0.657-0.071,1.32-0.075,1.978-0.012c5.383,0.514,9.331,5.295,8.817,10.678h21.333
                                                 c0.018-0.606,0.018-1.213,0-1.819C202.164,343.677,187.838,330.164,170.667,330.667z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="42.667" y="426.667" width="32" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect y="234.667" width="21.333" height="42.667"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="490.667" y="234.667" width="21.333" height="96"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="266.667" y="85.333" width="21.333" height="426.667"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="373.333" y="85.333" width="21.333" height="426.667"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="277.333" y="128" width="106.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="277.333" y="192" width="106.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="277.333" y="256" width="106.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="277.333" y="320" width="106.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="277.333" y="384" width="106.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="277.333" y="448" width="106.667" height="21.333"/>
                                    </g>
                                </g>
                            </svg>                </a>
                    </li>
                    <li>
                        <a href="products.html">
                            <span>Kitchen</span> <!--img src="assets/images/icons/kitchen.svg" alt=""-->
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M458.667,0H53.333C23.893,0.035,0.035,23.893,0,53.333v405.333C0.035,488.107,23.893,511.965,53.333,512h405.333
                                                 c29.441-0.035,53.298-23.893,53.333-53.333V53.333C511.965,23.893,488.107,0.035,458.667,0z M490.667,458.667
                                                 c0,17.673-14.327,32-32,32H53.333c-17.673,0-32-14.327-32-32V53.333c0-17.673,14.327-32,32-32h405.333c17.673,0,32,14.327,32,32
                                                 V458.667z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="245.333" y="362.667" width="21.333" height="106.667"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="245.333" y="42.667" width="21.333" height="106.667"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="42.667" y="352" width="426.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="42.667" y="138.667" width="426.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M298.667,192c-9.584-1.094-17.999-6.878-22.453-15.435l-19.093,9.536c8.062,15.783,23.858,26.136,41.547,27.232
                                                 c0.634-0.062,1.273-0.062,1.907,0c5.365,0.527,9.286,5.302,8.76,10.667v74.667h21.333V224c0.018-0.606,0.018-1.213,0-1.819
                                                 C330.164,205.01,315.838,191.498,298.667,192z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M352,213.333c-0.815-0.024-1.631-0.024-2.447,0c-22.888,0.676-40.896,19.778-40.22,42.667h21.333
                                                 c-0.055-0.859-0.055-1.72,0-2.579c0.712-11.07,10.263-19.467,21.333-18.754h21.333v-21.333H352z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M288,224h-21.333v21.333H288c11.019,0,19.723,18.315,21.888,24.725l20.224-6.763C328.779,259.275,316.213,224,288,224z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M352,288h-64c-5.891,0-10.667,4.776-10.667,10.667v64c0,5.891,4.776,10.667,10.667,10.667h64
                                                 c5.891,0,10.667-4.776,10.667-10.667v-64C362.667,292.776,357.891,288,352,288z M341.333,352h-42.667v-42.667h42.667V352z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="352" y="74.667" width="42.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="117.333" y="74.667" width="42.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="352" y="416" width="42.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="117.333" y="416" width="42.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M170.667,288h-32c-5.891,0-10.667,4.776-10.667,10.667v64c0,5.891,4.776,10.667,10.667,10.667h32
                                                 c5.891,0,10.667-4.776,10.667-10.667v-64C181.333,292.776,176.558,288,170.667,288z M160,352h-10.667v-42.667H160V352z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M245.333,330.667v-32c0-5.891-4.776-10.667-10.667-10.667h-32c-5.891,0-10.667,4.776-10.667,10.667v64
                                                 c0,5.891,4.776,10.667,10.667,10.667h32V352h-21.333v-42.667H224v21.333H245.333z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M202.667,309.333h-32c-5.891,0-10.667,4.776-10.667,10.667v42.667c0,5.891,4.776,10.667,10.667,10.667h32
                                                 c5.891,0,10.667-4.776,10.667-10.667V320C213.333,314.109,208.558,309.333,202.667,309.333z M192,352h-10.667v-21.333H192V352z"/>
                                    </g>
                                </g>
                            </svg>                </a>
                    </li>
                    <li>
                        <a href="products.html">
                            <span>Accessories</span> <!--img src="assets/images/icons/accessories.svg" alt=""-->
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <rect y="32" width="512" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M480,32H32c-5.891,0-10.667,4.776-10.667,10.667v42.667C21.333,91.224,26.109,96,32,96h448
                                                 c5.891,0,10.667-4.776,10.667-10.667V42.667C490.667,36.776,485.891,32,480,32z M469.333,74.667H42.667V53.333h426.667V74.667z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="245.333" y="160" width="21.333" height="53.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M309.333,74.667H202.667c-5.891,0-10.667,4.776-10.667,10.667V128c0,5.891,4.776,10.667,10.667,10.667h106.667
                                                 c5.891,0,10.667-4.776,10.667-10.667V85.333C320,79.442,315.224,74.667,309.333,74.667z M298.667,117.333h-85.333V96h85.333
                                                 V117.333z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M320,202.667H192c-17.673,0-32,14.327-32,32v202.667c0,5.891,4.776,10.667,10.667,10.667h170.667
                                                 c5.891,0,10.667-4.776,10.667-10.667V234.667C352,216.994,337.673,202.667,320,202.667z M330.667,426.667H181.333v-192
                                                 c0-5.891,4.776-10.667,10.667-10.667h128c5.891,0,10.667,4.776,10.667,10.667V426.667z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="138.667" y="384" width="234.667" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M213.333,245.333c-5.891,0-10.667,4.776-10.667,10.667v32H224v-21.333h21.333v-21.333H213.333z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M277.333,437.333c0,11.782-9.551,21.333-21.333,21.333s-21.333-9.551-21.333-21.333h-21.333
                                                 C213.333,460.898,232.436,480,256,480s42.667-19.102,42.667-42.667H277.333z"/>
                                    </g>
                                </g>
                            </svg>                </a>
                    </li>
                    <li>
                        <a href="products.html">
                            <span>View All</span> <!--img src="assets/images/icons/all.svg" alt=""-->
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512.027 512.027" style="enable-background:new 0 0 512.027 512.027;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M405.347,0.013H106.68c-17.673,0-32,14.327-32,32v85.333h21.333V32.013c0-5.891,4.776-10.667,10.667-10.667h298.667
                                                 c5.891,0,10.667,4.776,10.667,10.667v85.333h21.333V32.013C437.347,14.34,423.02,0.013,405.347,0.013z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M74.68,437.347H32.013c-5.891,0-10.667,4.776-10.667,10.667v53.333c0,5.891,4.776,10.667,10.667,10.667H74.68
                                                 c5.891,0,10.667-4.776,10.667-10.667v-53.333C85.347,442.122,80.571,437.347,74.68,437.347z M64.013,490.68H42.68v-32h21.333
                                                 V490.68z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M480.013,437.347h-42.667c-5.891,0-10.667,4.776-10.667,10.667v53.333c0,5.891,4.776,10.667,10.667,10.667h42.667
                                                 c5.891,0,10.667-4.776,10.667-10.667v-53.333C490.68,442.122,485.904,437.347,480.013,437.347z M469.347,490.68h-21.333v-32
                                                 h21.333V490.68z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="42.68" y="362.68" width="53.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="416.013" y="362.68" width="53.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M245.347,42.68v187.584l-28.875,28.875l15.083,15.083l32-32c2-2,3.125-4.713,3.125-7.541v-192H245.347z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                            
                                        <rect x="261.354" y="228.052" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -97.5854 265.771)" width="21.333" height="45.259"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="170.68" y="53.347" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="192.013" y="74.68" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="149.347" y="74.68" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="170.68" y="96.013" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="320.013" y="53.347" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="341.347" y="74.68" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="298.68" y="74.68" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="320.013" y="96.013" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="320.013" y="160.013" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="341.347" y="181.347" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="298.68" y="181.347" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="320.013" y="202.68" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="170.68" y="160.013" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="192.013" y="181.347" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="149.347" y="181.347" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <rect x="170.68" y="202.68" width="21.333" height="21.333"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M384.013,309.347h-256c-0.808-0.024-1.617-0.024-2.425,0c-22.895,0.67-40.911,19.772-40.242,42.667h21.333
                                                 c-0.055-0.859-0.055-1.72,0-2.579c0.712-11.07,10.263-19.467,21.333-18.754h256c0.859-0.055,1.72-0.055,2.579,0
                                                 c11.07,0.712,19.467,10.263,18.755,21.333h21.333c0.024-0.808,0.024-1.617,0-2.425
                                                 C426.01,326.694,406.908,308.677,384.013,309.347z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M512.013,426.68v-224c0-35.346-28.654-64-64-64c-35.346,0-64,28.654-64,64c-0.024,18.146,7.745,35.429,21.333,47.456
                                                 V362.68H106.68V250.136c13.588-12.027,21.357-29.31,21.333-47.456c0-35.346-28.654-64-64-64s-64,28.654-64,64
                                                 c0.031,1.871,0.188,3.739,0.469,5.589l0.171,1.301c-0.256,9.557-0.459,48.181-0.64,217.109c-0.018,0.606-0.018,1.213,0,1.819
                                                 c0.502,17.171,14.829,30.684,32,30.181h448c0.606,0.018,1.213,0.018,1.819,0C499.003,458.178,512.516,443.851,512.013,426.68z
                                                 M490.68,428.587c-0.527,5.365-5.302,9.286-10.667,8.76h-448c-0.642,0.064-1.289,0.064-1.93,0
                                                 c-5.358-0.533-9.269-5.309-8.736-10.667c0.096-83.701,0.309-210.005,0.565-217.312c0.053-0.672,0.042-1.346-0.032-2.016
                                                 l-0.267-1.973c-0.144-0.893-0.233-1.794-0.267-2.699c0-23.564,19.103-42.667,42.667-42.667s42.667,19.103,42.667,42.667
                                                 c-0.013,13.361-6.341,25.93-17.067,33.899c-2.686,2.014-4.267,5.176-4.267,8.533v128.235c0,5.891,4.776,10.667,10.667,10.667h320
                                                 c5.891,0,10.667-4.776,10.667-10.667V245.133c0-3.357-1.581-6.519-4.267-8.533c-10.731-7.973-17.06-20.551-17.067-33.92
                                                 c0-23.564,19.102-42.667,42.667-42.667c23.564,0,42.667,19.103,42.667,42.667v224C490.742,427.314,490.742,427.953,490.68,428.587
                                                 z"/>
                                    </g>
                                </g>
                            </svg>                </a>
                    </li>
                </ul>
        
                <!--div class="all-categories is-hidden-mobile">
                    <a href="products.html">Show all categories</a>
                    <div class="centered-divider"></div>
                </div-->
            </div>
        </div>
        
        <!-- Shop quickview -->
        <div class="shop-quickview has-background-image" data-background="assets/images/bg/sidebar.jpg">
            <div class="inner">
                <!-- Header -->
               
                <!-- Shop menu -->
               
                <!-- Profile image -->
               
        <!-- Cart quickview -->
       
                <!-- Header -->
                
                <!-- Total and checkout -->
                
                <!-- Cart quickview body -->
                <div class="cart-body">
                    <ul class="shopping-cart-items">
                        <!-- Item -->
                        <li class="clearfix">
                            <img src="assets/images/products/office5.jpg" alt="" />
                            <span class="item-meta">
                                <span class="item-name">Cosy Chair</span>
                                <span class="item-price">$88,00</span>
                            </span>
                            <span class="quantity">
                                <input class="input is-rounded" type="number" value="1">
                            </span>
        
                            <span class="remove-item">
                                <i data-feather="x" class="has-simple-popover" data-content="Remove from Cart" data-placement="top"></i>
                            </span>
                        </li>
                        <!-- Item -->
                      
                        <!-- Item -->
                      
                    </ul>
                </div>
            </div>
        </div>
        <!-- Filters quickview -->
        <div class="filters-quickview">
            <div class="inner">
                <!-- Header -->
                <div class="quickview-header">
                    <h2>Filters</h2>
                    <span id="close-filters-sidebar"><i data-feather="x"></i></span>
                </div>
        
                <!-- Filters body -->
                <div class="filters-body">
                    
        
                    <!-- Categories checkboxes -->
                    <div class="filter-block">
                        <h3 class="filter-title has-padding">Categories</h3>
                        <div class="columns is-checkboxes is-gapless is-multiline">
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="house" type="checkbox" class="d-checkbox" checked>
                                            <span></span>
                                            Vote
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                          
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="kids" type="checkbox" class="d-checkbox" checked>
                                            <span></span>
                                            Kids
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="kitchen" type="checkbox" class="d-checkbox" checked>
                                            <span></span>
                                            Kitchen
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="accessories" type="checkbox" class="d-checkbox" checked>
                                            <span></span>
                                            Misc
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Categories -->
        
                    <!-- Types -->
                    <div class="filter-block">
                        <h3 class="filter-title has-padding">Types</h3>
                        <div class="columns is-checkboxes is-gapless is-multiline">
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="chairs" type="checkbox" class="d-checkbox" checked>
                                            <span></span>
                                            Chairs
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="couches" type="checkbox" class="d-checkbox" checked>
                                            <span></span>
                                            Couches
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="tables" type="checkbox" class="d-checkbox" checked>
                                            <span></span>
                                            Tables
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="beds" type="checkbox" class="d-checkbox" checked>
                                            <span></span>
                                            Beds
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="lights" type="checkbox" class="d-checkbox" checked>
                                            <span></span>
                                            Lights
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkbox -->
                            <div class="column is-6">
                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox-wrap is-small">
                                            <input id="devices" type="checkbox" class="d-checkbox" checked>
                                            <span></span>
                                            Devices
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Types -->
                    
                    <!-- Price range filter -->
                    <div class="filter-block">
                        <h3 class="filter-title">Price</h3>
                        <div class="price-range-wrapper">
                            <div class="price-limit">0</div>
                            <div class="range-slider">
                                <input class="input-range" type="range" value="1500" min="1" max="1500">
                                <div class="slider-output">
                                    <small>Show between</small><span class="range-value"></span>
                                </div>
                            </div>   
                            <div class="price-limit">1500</div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
        
        <!-- Main wrapper -->
        <div class="shop-wrapper">
        
            <!-- Search overlay -->
            <div class="search-overlay"></div>
            
            <!-- Search input -->
            <div class="search-input-wrapper is-desktop is-hidden">
                <div class="field">
                    <div class="control">
                        <input type="text" name="search" autofocus required>
                        <span id="clear-search" role="button"><i data-feather="x"></i></span>
                        <span class="search-help">Type the name of the product you are looking for</span>
                    </div>
                </div>
            </div>
            <!-- Main section -->
            <div class="section">
                <!-- Container -->
                <div class="container">
        
                    <!-- House products -->
                    <div class="columns category-header">
                        <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                            <!-- Title -->
                            <div class="category-title is-product-category">
                                <h2>Vote</h2>
                                <div class="category-icon is-hidden-mobile">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M458.667,0H53.333C23.893,0.035,0.035,23.893,0,53.333v405.333C0.035,488.107,23.893,511.965,53.333,512h405.333
                                                         c29.441-0.035,53.298-23.893,53.333-53.333V53.333C511.965,23.893,488.107,0.035,458.667,0z M490.667,458.667
                                                         c0,17.673-14.327,32-32,32H53.333c-17.673,0-32-14.327-32-32V53.333c0-17.673,14.327-32,32-32h405.333c17.673,0,32,14.327,32,32
                                                         V458.667z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="245.333" y="42.667" width="21.333" height="352"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M320,181.333h-21.333v21.333H320V224h-21.333v21.333H320c0.295,0.006,0.589,0.006,0.884,0
                                                         c11.538-0.244,20.693-9.795,20.449-21.333v-21.333c0.006-0.295,0.006-0.589,0-0.884C341.089,190.245,331.538,181.089,320,181.333z
                                                         "/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M213.333,202.667v-21.333H192c-0.295-0.006-0.589-0.006-0.884,0c-11.538,0.244-20.693,9.795-20.449,21.333V224
                                                         c-0.006,0.295-0.006,0.589,0,0.884c0.244,11.538,9.795,20.693,21.333,20.449h21.333V224H192v-21.333H213.333z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="42.667" y="384" width="426.667" height="21.333"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <rect x="234.667" y="437.333" width="42.667" height="21.333"/>
                                            </g>
                                        </g>
                                    </svg>                        </div>
                            </div>
        
                            <!-- Controls -->
                            <div class="listing-controls">
                                <div class="layout-controls">
                                    <a href="products.html"><span><i data-feather="grid"></i></span></a>
                                    <a href="products-list.html"><span class="is-active"><i data-feather="list"></i></span></a>
                                </div>
                                <!-- Sort -->
                                <div class="sort-box">
                                    <div class="sort-box-select">
                                        <select data-placeholder="Voter içi" class="chosen-select-no-single">
                                           
                                          
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /Controls -->
        
                           
        
                            <!-- Product List -->
                            <div class="columns is-product-list is-multiline">
                                <div class="column is-12">
                                    <ul>
                                        <!-- Product -->
                                        <li class="flat-card is-auto is-list-item">
                                            <span class="image">
                                                <img src="assets/images/products/kitchen.png" alt="">
                                            </span>
                                            <span class="product-info">
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star is-empty"></i>
                                                    <small class="is-hidden-mobile">11 Ratings</small>
                                                </span>
                                                <a href="product.html"><span class="product-name">Nom de produit </span></a>
                                                <span class="product-description">Lorem ipsum sit dolor amet</span>
                                                <span class="product-price">
                                                    142,00
                                                </span>
                                            </span>
        
                                            <span class="product-abstract is-hidden-mobile">
                                                This is a well designed and crafted product that will suit many needs, in terms of quality, craftmanship and aesthetics.
                                                <span class="view-more">
                                                    <a href="product.html">View more <i data-feather="chevron-right"></i></a>
                                                </span>
                                            </span>
        
                                            <span class="actions">
                                            <span class="like"><i data-feather="heart" class="has-simple-popover" data-content="j'aime" data-placement="top"></i></span>
                                            <span class="like"><i data-feather="heart" class="has-simple-popover" data-content="j'aime plus ou moins" data-placement="top"></i>
                                            <i data-feather="heart" class="has-simple-popover" data-content="j'aime plus ou moins" data-placement="top"></i></span>
                                                <span class="like"><i data-feather="heart" class="has-simple-popover" data-content="j'aime beaucoups" data-placement="top"></i>
                                            
                                                <i data-feather="heart" class="has-simple-popover" data-content="j'aime beaucoups" data-placement="top"></i>
                                                <i data-feather="heart" class="has-simple-popover" data-content=" j'aime beaucoups" data-placement="top"></i></span>
                                            </span>
                                        </li>
                                        <!-- Product -->
                                                   </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Products List -->
        
                            <div class="show-more"><a href="#">Show more products</a></div>
        
                        </div>
                    </div>
                    <!-- /Accessories products -->
        
                </div>
                <!-- /Container -->
            </div>
            <!-- /Main section -->
        </div>
        <!-- /Main wrapper -->
        <!-- Concatenated plugins -->
        <script src="assets/js/app.js"></script>
        <!-- Helios js -->
        <script src="assets/js/nephos.js"></script>    </body>  

<!-- Mirrored from nephos.cssninja.io/products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Oct 2018 13:07:52 GMT -->
</html>
