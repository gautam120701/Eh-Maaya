<?php

//Theme Constants
if( !defined( 'THEME_ROOT' ) ){ define( 'THEME_ROOT', get_template_directory_uri() ); }
if( !defined( 'THEME_DIR' ) ){ define( 'THEME_DIR', get_template_directory() ); }
if( !defined( 'SITE_URL' ) ){ define( 'SITE_URL', get_site_url() ); }
if( !defined( 'SITE_VERSION' ) ){ define( 'SITE_VERSION', date("dmis") ); }

if( !defined( 'DOMAIN_NAME' ) ){ define( 'DOMAIN_NAME', $_SERVER['SERVER_NAME'] ); }
if( !defined( 'SITE_NAME' ) ){ define( 'SITE_NAME', get_bloginfo('name') ); }
if( !defined( 'SITE_DESCRIPTION' ) ){ define( 'SITE_DESCRIPTION', "Find your next <br> job here" ); }
if( !defined( 'HOME_FORM_HEADING' ) ){ define( 'HOME_FORM_HEADING', "Find your next <br> job here");}
if( !defined( 'FOOTER_DESCRIPTION' ) ){ define( 'FOOTER_DESCRIPTION', "Get tips on how to tackle tough interview questions, avoid common resume mistakes, enhance personal branding, build a dream career, balance work-life and more.");}
if( !defined( 'CONTACT_EMAIL' ) ){ define( 'CONTACT_EMAIL', "privacy@".DOMAIN_NAME ); }
if( !defined( 'DISCLOSURE' ) ){ define( 'DISCLOSURE', DOMAIN_NAME." is a job search engine. This website and its contents are not endorsed, sponsored by or affiliated with any listed employers. We are not an agent or representative of any employer. All trademarks, service marks, logos, and/or domain names are the property of their respective owners. Hourly and salary compensation estimates are based upon publicly available salary report(s) provided by employees or estimated based upon statistical methods. To gain access to the job listings, you must agree to our Terms & Conditions and Privacy Policy, provide certain personally identifiable information and consent to our sharing such information with our marketing partners for which we may be compensated.");}



// Homepage & find a job page
if( !defined( 'CTA_ACTION_URL' ) ){ define( 'CTA_ACTION_URL', "https://signup.domain/listings?op=1&sid=57&p=JI&kw=full+time+jobs&z=zip"); }


// Contact Page Address
if( !defined( 'CONTACT_ADDRESS' ) ){ define( 'CONTACT_ADDRESS', array(
    'url' => get_stylesheet_directory_uri()."/assets/images/2.png",
    'alt' => get_bloginfo('address')

));}
if( !defined( 'CONTACT_NUMBER' ) ){ define( 'CONTACT_NUMBER', "1-833-809-6437" ); }


// Home Banner
if( !defined( 'HOME_BANNER' ) ){ define( 'HOME_BANNER', array(
    'url' => get_stylesheet_directory_uri()."/assets/images/home-banner.png",
    'alt' => 'Find A Job',
    'width' => 689,
    'height' => 538
));}

?>