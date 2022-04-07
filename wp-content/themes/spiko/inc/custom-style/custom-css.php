<?php

// define function for custom color setting
function spiko_custom_light() {

$link_color = get_theme_mod('link_color','#35ac39');
list($r, $g, $b) = sscanf($link_color, "#%02x%02x%02x");
$r = $r - 50;
$g = $g - 25;
$b = $b - 40;

if ($link_color != '#ff0000') :?>
<style type="text/css">
<?php if(!is_rtl()):?>
blockquote 
{
border-left: 3px solid <?php echo esc_attr($link_color); ?>;
}
<?php else:?>
blockquote 
{
border-right: 3px solid <?php echo esc_attr($link_color); ?>;
}
<?php endif;?>    
.entry-meta .tag-links a:hover, .entry-meta .tag-links a:focus {background-color: <?php echo esc_attr($link_color); ?>;border: 1px solid <?php echo esc_attr($link_color); ?>;}
.entry-content a:hover{ color: <?php echo esc_attr($link_color); ?>;}
.entry-content a:focus{ color: <?php echo esc_attr($link_color); ?>;margin-left: 2px;}
a:hover,a:focus{color: <?php echo esc_attr($link_color); ?>;}
.entry-meta a:hover ,.entry-meta a:focus{color: <?php echo esc_attr($link_color); ?>;}
.gallery .gallery-icon img:hover { border: 1px solid <?php echo esc_attr($link_color); ?> !important;}
input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
input[type="number"]:focus,
input[type="tel"]:focus,
input[type="range"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="week"]:focus,
input[type="time"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="color"]:focus,
textarea:focus {
  border-color: <?php echo esc_attr($link_color); ?>;
}
button,
input[type="button"],
input[type="submit"] {
  background: <?php echo esc_attr($link_color); ?>;
  border: 1px solid <?php echo esc_attr($link_color); ?>;
  }
 button.secondary,
input[type="reset"],
input[type="button"].secondary,
input[type="reset"].secondary,
input[type="submit"].secondary {
  color: <?php echo esc_attr($link_color); ?>;
}
button:hover,
button:focus,
input[type="button"]:hover,
input[type="button"]:focus,
input[type="submit"]:hover,
input[type="submit"]:focus {
  color: <?php echo esc_attr($link_color); ?>;
  border: 1px solid <?php echo esc_attr($link_color); ?>;
} 
button.secondary:hover,
button.secondary:focus,
input[type="reset"]:hover,
input[type="reset"]:focus,
input[type="button"].secondary:hover,
input[type="button"].secondary:focus,
input[type="reset"].secondary:hover,
input[type="reset"].secondary:focus,
input[type="submit"].secondary:hover,
input[type="submit"].secondary:focus {
  color: <?php echo esc_attr($link_color); ?>;
}
.btn-default { background: <?php echo esc_attr($link_color); ?>;border: 1px solid <?php echo esc_attr($link_color); ?>;}
.blog .blog-btn .btn-small:hover ,.blog .blog-btn .btn-small:focus,
.btn-default:hover,.btn-default:focus, .btn-default:active { border: 1px solid <?php echo esc_attr($link_color); ?>;color:<?php echo esc_attr($link_color); ?>; }
.btn-light {color: <?php echo esc_attr($link_color); ?>; border: 1px solid <?php echo esc_attr($link_color); ?>;}
.btn-light:hover,.btn-light:focus,  .btn-light:active { background: <?php echo esc_attr($link_color); ?>;border: 1px solid <?php echo esc_attr($link_color); ?>; }
.btn-light:not(:disabled):not(.disabled).active, .btn-light:not(:disabled):not(.disabled):active, .show>.btn-light.dropdown-toggle {
    background-color: <?php echo esc_attr($link_color); ?>;
    border-color: <?php echo esc_attr($link_color); ?>;
}
.btn-light:not(:disabled):not(.disabled).active:focus, .btn-light:not(:disabled):not(.disabled):active:focus, .show>.btn-light.dropdown-toggle:focus {
    background-color: <?php echo esc_attr($link_color); ?>;
    border-color: <?php echo esc_attr($link_color); ?>;
    }

.btn-default-dark { background: <?php echo esc_attr($link_color); ?>;border: 1px solid <?php echo esc_attr($link_color); ?>; }
.btn-default-dark:hover,.btn-default-dark:focus, .btn-default-dark:active { border: 1px solid <?php echo esc_attr($link_color); ?>;color:<?php echo esc_attr($link_color); ?>; }
.btn-border:hover, .btn-border:focus, .btn-border:active {color:<?php echo esc_attr($link_color); ?>; }
/* Change Autocomplete styles in Chrome*/
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus {
  border: 1px solid <?php echo esc_attr($link_color); ?>;
}
.site-footer .head-contact-info li a:hover, .site-footer .head-contact-info li a:focus { color: <?php echo esc_attr($link_color); ?>; }
.widget_header .widget_info .head-contact-info li a:hover, 
.widget_header .widget_info .head-contact-info li a:focus {
    color: <?php echo esc_attr($link_color); ?>;
}
.custom-social-icons li > a:hover, .custom-social-icons li > a:focus {
    color: <?php echo esc_attr($link_color); ?>;
}
.navbar .search-box-outer .dropdown-menu {border-top: solid 1px <?php echo esc_attr($link_color); ?>;}
.search-box-outer a:hover,.search-box-outer .text-dark,.search-box-outer a:focus { color:<?php echo esc_attr($link_color); ?> !important;}

#searchbar_fullscreen .btn {
 background-color: <?php echo esc_attr($link_color); ?>;
}
#searchbar_fullscreen .close {
  background-color: <?php echo esc_attr($link_color); ?>;
  border-color: <?php echo esc_attr($link_color); ?>;
}
.navbar .search-box-outer .dropdown-menu {
  border-top: solid 1px <?php echo esc_attr($link_color); ?>;
}
.search-form input[type="submit"] {
  background: <?php echo esc_attr($link_color); ?> none repeat scroll 0 0;
  border: 1px solid <?php echo esc_attr($link_color); ?>;
}
.cart-header > a.cart-total {
  background: <?php echo esc_attr($link_color); ?>;
}
.slider-caption .inner-title:before {background: <?php echo esc_attr($link_color); ?>; }
.slider-caption .heading .sub { background-color: <?php echo esc_attr($link_color); ?>; }
.owl-carousel .owl-prev:hover, .owl-carousel .owl-prev:focus { 
  background-color: <?php echo esc_attr($link_color); ?>;
}
.owl-carousel .owl-next:hover, .owl-carousel .owl-next:focus { 
  background-color: <?php echo esc_attr($link_color); ?>;
}
.section-separator ,.section-separator::before,.section-separator::after {
  background: <?php echo esc_attr($link_color); ?>;
}
.section-header .section-subtitle:not(.testimonial .section-subtitle) {color: <?php echo esc_attr($link_color); ?>;}

.woocommerce ul.products li.product .onsale, .products span.onsale, .woocommerce span.onsale{
  background: <?php echo esc_attr($link_color); ?>;
}
.add-to-cart a:hover, .add-to-cart a:focus{ color: <?php echo esc_attr($link_color); ?>;border:1px solid <?php echo esc_attr($link_color); ?>; }   
.product-price .woocommerce-Price-amount { color: <?php echo esc_attr($link_color); ?>; }
.logo-scroll:hover { border: 1px solid <?php echo esc_attr($link_color); ?>;}
.cont-info address > i { color:<?php echo esc_attr($link_color); ?>;}
.page-breadcrumb li ,
.page-breadcrumb li a:hover, .page-breadcrumb li a:focus ,
.page-breadcrumb .icon::before, .page-breadcrumb .breadcrumb_last{
  color: <?php echo esc_attr($link_color); ?>;
}
.about-subtitle{color:<?php echo esc_attr($link_color); ?>;}

.md-pills .nav-link.active,.md-pills .nav-link:hover, 
.md-pills .nav-link:focus {  background-color: <?php echo esc_attr($link_color); ?>;}

.error-page .title { 
 color:<?php echo esc_attr($link_color); ?>;
}
.footer-sidebar .woocommerce .posted_in a:hover,.footer-sidebar .woocommerce .posted_in a:focus, 
.footer-sidebar .woocommerce-product-rating a:hover, .footer-sidebar .woocommerce-product-rating a:focus, 
.footer-sidebar .woocommerce .tagged_as a:hover,.footer-sidebar .woocommerce .tagged_as a:focus, 
.footer-sidebar .woocommerce-cart table.cart td a:hover, .footer-sidebar .woocommerce-cart table.cart td a:focus,
.footer-sidebar .woocommerce ul.cart_list li a:hover, .footer-sidebar .woocommerce ul.cart_list li a:focus,
.footer-sidebar .woocommerce ul.product_list_widget li a:hover,.footer-sidebar .woocommerce ul.product_list_widget li a:focus {
    color: <?php echo esc_attr($link_color); ?>;
}
.footer-sidebar .widget_text.site-info .custom-social-icons li > a {color: <?php echo esc_attr($link_color); ?>;}
.subscribe-form  .btn-default:hover,.subscribe-form .btn-default:focus {background: <?php echo esc_attr($link_color); ?>; border: 1px solid <?php echo esc_attr($link_color); ?>;}

.entry-date {
    background: <?php echo esc_attr($link_color); ?>;
}
.pagination .page-link:active,.pagination .page-link:hover{background-color: <?php echo esc_attr($link_color); ?>;border-color: <?php echo esc_attr($link_color); ?>;}
.page-item.disabled .page-link {background-color: <?php echo esc_attr($link_color); ?>;border-color: <?php echo esc_attr($link_color); ?>;}
.entry-content p a:hover{color: <?php echo esc_attr($link_color); ?>;}
.sidebar .custom-social-icons li > a {color: <?php echo esc_attr($link_color); ?>;}
.sidebar .custom-social-icons li > a:hover{background-color: <?php echo esc_attr($link_color); ?>;color: #fff;}
.sidebar .widget address i , .footer-sidebar .widget address i {
  color:<?php echo esc_attr($link_color); ?>;
}

.sidebar .widget a:hover, .sidebar .widget a:focus{color: <?php echo esc_attr($link_color); ?>;}

.widget .tagcloud a {border: 1px solid <?php echo esc_attr($link_color); ?>;}
.widget .tagcloud a:hover{background-color: <?php echo esc_attr($link_color); ?>;}
.widget_nav_menu li::before, .widget_pages li::before, .widget_product_categories li::before, .widget_links li::before, .widget_categories li::before, .widget_archive li::before, .widget_recent_entries li::before, .widget_meta li::before, .widget_recent_comments li::before {
    color: <?php echo esc_attr($link_color); ?>;
}
.sidebar .widget li::before{color: <?php echo esc_attr($link_color); ?>;}
.widget .post .entry-date {color: <?php echo esc_attr($link_color); ?>;}

.sidebar a:hover span {
  color: #ffffff;
}
.pagination a:hover:not(.active),
.pagination a:focus:not(.active) {
  background-color: <?php echo esc_attr($link_color); ?>;
  border-color: <?php echo esc_attr($link_color); ?>;
}

#testimonial-carousel .avatar:before , #testimonial-carousel .quotes-seprator:before {background-color: <?php echo esc_attr($link_color); ?>;}
#testimonial-carousel1 .avatar:before , #testimonial-carousel1 .quotes-seprator:before {background-color: <?php echo esc_attr($link_color); ?>;}
#testimonial-carousel .avatar:after {color: <?php echo esc_attr($link_color); ?>;}
#testimonial-carousel1 .avatar:after {color: <?php echo esc_attr($link_color); ?>;}
.testimonial .testmonial-block .name {}
.testimonial-block .entry-content::before {color: <?php echo esc_attr($link_color); ?>;}
.testimonial .rating {color: <?php echo esc_attr($link_color); ?>;}

.team .team-grid .card-body .list-inline li > a:hover, .team .team-grid .card-body .list-inline li > a:focus {
  color: <?php echo esc_attr($link_color); ?>;
}
.team .team-grid:hover .card-body .list-inline , .team .team-grid:focus-within .card-body .list-inline {
  border-bottom: 1px solid <?php echo esc_attr($link_color); ?>;
}
.team .name{color: <?php echo esc_attr($link_color); ?>;}

.services .service-icon i.fa {
  color: <?php echo esc_attr($link_color); ?>;
}
.services .btn-small{  
  color: <?php echo esc_attr($link_color); ?>;
}
.services .card:hover {
  background-color: <?php echo esc_attr($link_color); ?>;
}
.services .btn-small.btn-default{ 
  background: <?php echo esc_attr($link_color); ?>;
  border: 1px solid <?php echo esc_attr($link_color); ?>;
}
.owl-theme .owl-dots .owl-dot.active span {
    background-color: <?php echo esc_attr($link_color); ?>;
}
.funfact .overlay {background-color: rgba(53,172,57, 0.7);}
#cta-video {border: 3px solid <?php echo esc_attr($link_color); ?>;}
.video-btn a:after {border-left: 25px solid <?php echo esc_attr($link_color); ?>;}
.about-header .btn-default:hover,.about-header  .btn-default:focus {
    border: 1px solid <?php echo esc_attr($link_color); ?>;
}
footer{background-color:<?php echo esc_attr($link_color); ?>;}
.footer-sidebar .widget_text.site-info .custom-social-icons li > a:hover{background-color: <?php echo esc_attr($link_color); ?>;}
.scroll-up a {background: <?php echo esc_attr($link_color); ?>;color:#ffffff;}
.related-posts a{color:<?php echo esc_attr($link_color); ?>;}
.related-posts .entry-title a:hover {color:<?php echo esc_attr($link_color); ?>;}
.related-posts .pre-post a{color:<?php echo esc_attr($link_color); ?>;}
.comment-form .comment-reply-title{color: <?php echo esc_attr($link_color); ?>;}
.comment-form .blog-form-group:after,.comment-form .blog-form-group-textarea:after {
  color: <?php echo esc_attr($link_color); ?>;
}
.footer-sidebar .widget_text.site-info a:hover {color:<?php echo esc_attr($link_color); ?>;}
.contact .contact-widget i ,.contact .contact-widget h4 {color:<?php echo esc_attr($link_color); ?>;}
.header-sidebar {
  background: <?php echo esc_attr($link_color); ?>;
}
.owl-theme .owl-dots .owl-dot.active span {
  box-shadow: <?php echo esc_attr($link_color); ?> 0px 0px 0px 2px;
}
.navbar-nav:not(.sm-collapsible) .sm-nowrap > li.show > .dropdown-item {
  background-color: transparent !important;
 
}
.dropdown-item.active, .dropdown-item:active,.dropdown-item:hover {
  color:<?php echo esc_attr($link_color); ?>;
}
.navbar ul li a .menu-text:hover:after,.navbar .nav li.active .nav-link .menu-text:after,.navbar-nav .show .dropdown-menu > .active > .menu-text:after , .navbar-nav .show .dropdown-menu > .active > .menu-text:focus {
  background: <?php echo esc_attr($link_color); ?>;
}

.footer-sidebar .widget .tagcloud a:hover {
  color: <?php echo esc_attr($link_color); ?> !important;
}

.pagination a:hover:not(.active) i,
.pagination a:focus:not(.active) i{
  color: #ffffff;
}
.blog .blog-btn .btn-small:hover i,
.blog .blog-btn .btn-small:focus i {color: <?php echo esc_attr($link_color); ?>;}
.contant-form .wpcf7-form-control-wrap:after ,.contact-icon i{
  color: <?php echo esc_attr($link_color); ?>;
}
.blog .btn-small ,.widget .search-submit:hover {color: <?php echo esc_attr($link_color); ?>;}
.products h5 a:hover , .products h5 a:focus {
  color: <?php echo esc_attr($link_color); ?> !important;
}

.btn-style-one:hover, .btn-style-one:focus {
  background-color: <?php echo esc_attr($link_color); ?>;
}
.btn-style-one {
  color: <?php echo esc_attr($link_color); ?>;
  border: 1px solid <?php echo esc_attr($link_color); ?>;
}
.footer-layout4 .site-info span a:hover {
  color: <?php echo esc_attr($link_color); ?>;
}
.footer-layout4 .site-info.footer-sidebar a:hover, .footer-layout4 .site-info.footer-sidebar a:focus {
  color: <?php echo esc_attr($link_color); ?>;
  font-weight: 600;
}
.layout3 .contact-icon i {
  color: <?php echo esc_attr($link_color); ?>;
}
.btn-style-two:hover, .btn-style-two:focus{
  color: <?php echo esc_attr($link_color); ?>;
}
.cont-info address > a:hover , .cont-info address > a:focus {
  color: <?php echo esc_attr($link_color); ?>;
}
 .team4 .list-inline  > a:hover {
    color: <?php echo esc_attr($link_color); ?>;
}
.btn-style-one {
  color: <?php echo esc_attr($link_color); ?>;
  border: 1px solid <?php echo esc_attr($link_color); ?>;
}
.search-box-outer a.text-dark:hover {color:<?php echo esc_attr($link_color); ?> !important;}

.slide-widget .widget li a:hover, 
.slide-widget .widget_archive li a:hover, 
.slide-widget .widget_categories li a:hover, 
.slide-widget .widget_links li a:hover, 
.slide-widget .widget_meta li a:hover, 
.slide-widget .widget_nav_menu li a:hover, 
.slide-widget .widget_pages li a:hover, 
.slide-widget .widget_recent_comments li a:hover, 
.slide-widget .widget_recent_entries li a:hover {
    color: <?php echo esc_attr($link_color); ?>;
}
.slider-caption.yes .widget li a:hover, 
.slider-caption.yes .widget_archive li a:hover, 
.slider-caption.yes .widget_categories li a:hover, 
.slider-caption.yes .widget_links li a:hover, 
.slider-caption.yes .widget_meta li a:hover, 
.slider-caption.yes .widget_nav_menu li a:hover, 
.slider-caption.yes .widget_pages li a:hover, 
.slider-caption.yes .widget_recent_comments li a:hover, 
.slider-caption.yes .widget_recent_entries li a:hover {
    color: <?php echo esc_attr($link_color); ?>;
}
.pagination .nav-links .page-numbers.current , .pagination .page-link.active {
    background-color: <?php echo esc_attr($link_color); ?>;
    border: 1px solid <?php echo esc_attr($link_color); ?>;
    color: #fff;
}
.spiko-preloader-cube .spiko-cube:before {background: <?php echo esc_attr($link_color); ?>;}
.spiko_header_btn{color: <?php echo esc_attr($link_color); ?>; border: 1px solid <?php echo esc_attr($link_color); ?>;}
a.spiko_header_btn:hover{background-color: <?php echo esc_attr($link_color); ?>;color: #ffffff;}

.dropdown-menu > li.active > a, .navbar .nav .nav-item.current_page_ancestor .nav-link {
    color: <?php echo esc_attr($link_color); ?>;
}

.dropdown-menu > li.active > a, 
.navbar .nav .nav-item.current_page_ancestor.current_page_parent .nav-link,
.navbar .nav .nav-item.current_page_ancestor.current_page_parent > .dropdown-item{
    color: <?php echo esc_attr($link_color); ?>;
}
.navbar .nav .nav-item .dropdown.active > a, .navbar .nav .nav-item .dropdown:hover > a {
    color: <?php echo esc_attr($link_color); ?> !important;
}
.dropdown-item .current-menu-item.active, .dropdown-item:active, .dropdown-item:hover, a.text-dark:focus, a.text-dark:hover, a.bg-light:focus, a.bg-light:hover {
    color: <?php echo esc_attr($link_color); ?> !important;
}
.dropdown-item,a.text-dark,a.bg-light{color:#fff;}
.navbar .nav .nav-item:hover .nav-link, .navbar .nav .nav-item .nav-link:focus{color: <?php echo esc_attr($link_color); ?>;}
.navbar .nav .nav-item.active .nav-link {
    color: #ffffff !important;
    background-color: <?php echo esc_attr($link_color); ?>;
}
.navbar-nav:not(.sm-collapsible) .sm-nowrap > li.show > .dropdown-item {
  color:<?php echo esc_attr($link_color); ?> !important;
}
.woocommerce-loop-product__title:hover{color: <?php echo esc_attr($link_color); ?>;}
.woocommerce ul.products li.product .button, .owl-item .item .cart .add_to_cart_button {
    background: <?php echo esc_attr($link_color); ?>;
}
.woocommerce div.product form.cart .button, .woocommerce a.button, .woocommerce a.button:hover, .woocommerce a.button, .woocommerce .woocommerce-Button, .woocommerce .cart input.button, .woocommerce input.button.alt, .woocommerce button.button, .woocommerce #respond input#submit, .woocommerce .cart input.button:hover, .woocommerce .cart input.button:focus, .woocommerce input.button.alt:hover, .woocommerce input.button.alt:focus, .woocommerce input.button:hover, .woocommerce input.button:focus, .woocommerce button.button:hover, .woocommerce button.button:focus, .woocommerce #respond input#submit:hover, .woocommerce #respond input#submit:focus, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button {
    background: <?php echo esc_attr($link_color); ?>;
}
.woocommerce ul.product_list_widget li a:hover, .woocommerce ul.product_list_widget li a:focus, .woocommerce .posted_in a:hover, .woocommerce .posted_in a:focus {
    color: <?php echo esc_attr($link_color); ?>;
}
.woocommerce-cart.woocommerce-page thead th {
    border-bottom: 2px solid <?php echo esc_attr($link_color); ?>;
}
.woocommerce #respond input#submit.disabled:hover, .woocommerce #respond input#submit:disabled:hover, .woocommerce #respond input#submit:disabled[disabled]:hover, .woocommerce a.button.disabled:hover, .woocommerce a.button:disabled:hover, .woocommerce a.button:disabled[disabled]:hover, .woocommerce button.button.disabled:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce input.button.disabled:hover, .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover {
    background-color: <?php echo esc_attr($link_color); ?>;
    opacity: 0.7;
}
.woocommerce-info {
    border-top-color: <?php echo esc_attr($link_color); ?>;
}
.woocommerce-info::before {
    color: <?php echo esc_attr($link_color); ?>;
}
.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt {
    background-color: <?php echo esc_attr($link_color); ?>;
    color: #fff;
    -webkit-font-smoothing: antialiased;
}
.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
    background-color: #ffffff;
    color: <?php echo esc_attr($link_color); ?> !important;
    border-color: <?php echo esc_attr($link_color); ?> !important;
}
.woocommerce-order-received .page .post {box-shadow: 0px 0px 0px 2px <?php echo esc_attr($link_color); ?>;}
.woocommerce-order-received ul.order_details li {border-right: 1px dashed <?php echo esc_attr($link_color); ?>;}
.navbar .nav .nav-item.html a:hover{color: <?php echo esc_attr($link_color); ?>;}
.footer-sidebar .widget_text address a:hover{color: <?php echo esc_attr($link_color); ?>;}
.widget .wp-block-tag-cloud a {border: 1px solid <?php echo esc_attr($link_color); ?>;}
.widget .wp-block-tag-cloud a:hover{background-color: <?php echo esc_attr($link_color); ?>;color: #fff;}
.wp-block-search__button:hover::after{color: <?php echo esc_attr($link_color); ?>;}
.sidebar .woocommerce a:hover span{color: <?php echo esc_attr($link_color); ?>;}
.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current {
    background-color: <?php echo esc_attr($link_color); ?>;
}
.home-blog .entry-title a:hover{color: <?php echo esc_attr($link_color); ?>;}
.nav-item .widget a:hover{color: <?php echo esc_attr($link_color); ?>;}
.nav-item .widget .widget-title{color: <?php echo esc_attr($link_color); ?>;}
.testimonial .testmonial-block .name a:hover{color: <?php echo esc_attr($link_color); ?> !important;}
.entry-content a.wp-block-button__link:hover{color: <?php echo esc_attr($link_color); ?> !important;}
a.comment-reply-link:hover{color: <?php echo esc_attr($link_color); ?>;}
.remove-image {background: <?php echo esc_attr($link_color); ?>;}

        </style>
        <?php
    endif;
}
?>