<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php bloginfo('name'); ?><?php wp_title(' | ', 'echo', 'left'); ?></title>
		<meta name="robots" content="noindex, nofollow, noimageindex">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
		<meta name="description" content="Learn tips on how to master upcoming interviews, write a resume that will stand out, highlight your skills, build your professional network, and more." />
		<meta itemprop="name" content="jobsinsider.net" />
		<meta itemprop="description" content="Learn tips on how to master upcoming interviews, write a resume that will stand out, highlight your skills, build your professional network, and more.">
		<meta property="og:type" content="website" />
		<meta property="og:url" content="//jobsinsider.net" />
		<meta property="og:site_name" content="" />
		<meta property="og:title" content="jobsinsider.net" />
		<meta property="og:description" content="Learn tips on how to master upcoming interviews, write a resume that will stand out, highlight your skills, build your professional network, and more." />
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" />	

		<?php 

		include_once(THEME_DIR . '/app/Support/EnqueueAssetsInline.php');
		add_action('wp_enqueue_scripts', function(){
		EnqueueAssetsInline::css( 'base', THEME_DIR . '/assets/dist/css/base.css' );
		EnqueueAssetsInline::css( 'header-c', THEME_DIR . '/assets/dist/css/header/header-common.css' );

		}, 9);
		$content;
		global $__duplicate;
		wp_head(); ?>

		<style>
		<?php 
		register_font_fam('PlusJakartaSans', 'normal', 400, get_theme_file_uri('assets/fonts/PlusJakartaSans-Regular.woff'), 'swap');
		register_font_fam('PlusJakartaSans', 'bold', 700, get_theme_file_uri('assets/fonts/PlusJakartaSans-Bold.woff'), 'swap');
		register_font_fam('PlusJakartaSans', 'extra bold', 800, get_theme_file_uri('assets/fonts/PlusJakartaSans-ExtraBold.woff'), 'swap');
		?>

		</style>
     <style id="base-inline-css" type="text/css">
      a,
      article,
      aside,
      audio,
      b,
      blockquote,
      body,
      canvas,
      caption,
      center,
      dd,
      details,
      div,
      dl,
      dt,
      em,
      embed,
      fieldset,
      figcaption,
      figure,
      footer,
      form,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      header,
      hgroup,
      html,
      i,
      iframe,
      img,
      label,
      legend,
      li,
      mark,
      menu,
      nav,
      object,
      ol,
      p,
      pre,
      section,
      small,
      span,
      strike,
      strong,
      sub,
      summary,
      sup,
      table,
      tbody,
      td,
      tfoot,
      th,
      thead,
      time,
      tr,
      tt,
      u,
      ul,
      video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font-weight: 400;
        vertical-align: baseline;
        list-style: none;
        text-decoration: none;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
      }
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        word-wrap: break-word;
        -webkit-tap-highlight-color: transparent;
      }
      :after,
      :before {
        box-sizing: border-box;
      }
      a {
        color: inherit;
        text-decoration: none;
        outline: 0;
      }
      img {
        width: 100%;
        height: auto;
        display: block;
      }
      :focus {
        outline: 0;
        box-shadow: none;
      }
      a:hover {
        cursor: pointer;
      }
      button,
      input,
      textarea {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        border-radius: 0;
        line-height: normal;
        outline: 0;
        box-shadow: none;
        border: none;
        font-family: inherit;
        font-weight: inherit;
      }
      button {
        display: inline-block;
        cursor: pointer;
        border: none;
      }
      textarea {
        overflow: auto;
        vertical-align: top;
        resize: vertical;
      }
      input[type="submit"] {
        -webkit-appearance: none;
        -moz-appearance: none;
        cursor: pointer;
      }
      a:focus,
      a:hover,
      button:focus,
      button:hover,
      textarea:focus {
        outline: 0;
        cursor: pointer;
      }
      input[type="number"]::-webkit-inner-spin-button,
      input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      ul {
        list-style: none;
      }
      li a {
        display: block;
      }
      .d-flex {
        display: flex;
      }
      .flex-wrap {
        flex-wrap: wrap;
      }
      .align-center {
        align-items: center;
      }
      .align-end {
        align-items: flex-end;
      }
      .align-start {
        align-items: flex-start;
      }
      .justify-center {
        justify-content: center;
      }
      .justify-content-between {
        justify-content: space-between;
      }
      .justify-content-around {
        justify-content: space-around;
      }
      .justify-content-end {
        justify-content: flex-end;
      }
      .flex-column {
        flex-direction: column;
      }
      .flex-row-reverse {
        flex-direction: row-reverse;
      }
      .flex-grow {
        flex-grow: 1;
      }
      .text-center {
        text-align: center;
      }
      .text-right {
        text-align: right;
      }
      html {
        font-size: 62.5%;
        scroll-behavior: smooth;
        height: 100%;
        -webkit-text-size-adjust: 100%;
      }
      body {
        font-family: PlusJakartaSans, -apple-system, BlinkMacSystemFont,
          Segoe UI, segoe ui, SegoeUI, Segoe, Helvetica, Arial, sans-serif;
        color: #000;
        font-weight: 400;
        overflow-x: hidden;
        -webkit-font-smoothing: antialiased;
        height: 100%;
        background: #fff;
      }

      .container {
        max-width: 1024px;
        margin: 0 auto;
        position: relative;
      }
      .mob-only {
        display: none;
      }
    </style>
    </head>

	
    <body>
    <div class="main">
      <div class="inner-wrap">
        <!-- header -->
        <header>
          <div class="container">
            <div class="inner-wrap" id="header-inner-wrap">
              <div class="logo">
                <a href="/">
                  <div class="img-wrap" id="logo">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="191.079" height="42.426" viewBox="0 0 191.079 42.426">
  <defs>
    <clipPath id="clip-path">
      <rect id="Rectangle_525" data-name="Rectangle 525" width="191.079" height="42.426" transform="translate(0 0)" fill="#0f0f32"/>
    </clipPath>
  </defs>
  <g id="Group_479" data-name="Group 479" transform="translate(0 0)">
    <g id="Group_474" data-name="Group 474" transform="translate(0 0)" clip-path="url(#clip-path)">
      <path id="Path_341" data-name="Path 341" d="M14.588,21.373a12.062,12.062,0,0,1,2.89-5.66,13.485,13.485,0,0,1,1.279-1.2c1.133-.9,1.63-.929,2.587-1.759a7.782,7.782,0,0,0,1.387-1.57,7.164,7.164,0,0,0,1.094-2.791,6.782,6.782,0,0,0,.066-1.478,6.933,6.933,0,0,1,1.677,1.631,7.954,7.954,0,0,1,1.218,5.9A6.364,6.364,0,0,0,27,16.06a6.192,6.192,0,0,0,.376,1.035,6.013,6.013,0,0,0,1.255,1.752.82.82,0,0,1,.179.386.76.76,0,0,1,0,.288,1.09,1.09,0,0,1-.618.639,1.908,1.908,0,0,1-.638.215,2.579,2.579,0,0,0-.588,1.384c-.009.119,0,.134.011.806.011.641.018.964.009,1.069A2.438,2.438,0,0,1,26.564,25a1.951,1.951,0,0,1-1.269.631c-1.133.154-1.665-.62-3.09-.467-.143.015-.259.036-.329.05a9.136,9.136,0,0,0,3.836,1.9,9.353,9.353,0,0,0,4.2-.049A10.733,10.733,0,0,0,35.7,23.044a13.408,13.408,0,0,0,2.871-6.786,13.545,13.545,0,0,0-.661-6.138,15.61,15.61,0,0,0-2.33-4.114C32.2,1.829,24.9-.875,17.786.26a21.321,21.321,0,0,0-11.511,5.9A21.707,21.707,0,0,0,.141,18.789a21.117,21.117,0,0,0,.79,8.63A21.6,21.6,0,0,0,8.58,38.243a21.485,21.485,0,0,0,14.12,4.13,21.258,21.258,0,0,0,13.438-6.12A20.674,20.674,0,0,0,40.8,28.83,15.393,15.393,0,0,1,32.546,35.5c-.494.162-6.808,2.113-12.444-1.488a11.923,11.923,0,0,1-5.514-12.636" transform="translate(0 0)" fill="#0f0f32"/>
      <path id="Path_342" data-name="Path 342" d="M46.69,33.188a5.871,5.871,0,0,0,4.33.01,2.545,2.545,0,0,1-4.33-.01" transform="translate(-25.139 -17.869)" fill="#0f0f32"/>
      <path id="Path_343" data-name="Path 343" d="M138.706,43.74h-8.682a4.3,4.3,0,0,1-3.206-1.152,4.393,4.393,0,0,1-1.135-3.223v-18h12.689v1.5q-1.1-.2-2.17-.317t-2.3-.2q-1.237-.083-2.738-.117t-3.473-.033v9.249h8.682v.835h-8.682v7.279q0,3.339,3.172,3.339h7.847Z" transform="translate(-67.671 -11.505)" fill="#0f0f32"/>
      <path id="Path_344" data-name="Path 344" d="M165.238,41.209H163.3V16.665h.067l1.369.735a.912.912,0,0,1,.5.868V29.087h.067q2.905-4.106,6.344-4.107a4.453,4.453,0,0,1,3.373,1.253,4.832,4.832,0,0,1,1.2,3.489V41.209h-1.937V29.755a3.931,3.931,0,0,0-.8-2.638,2.869,2.869,0,0,0-2.3-.936q-3.305,0-5.944,4.074Z" transform="translate(-87.926 -8.973)" fill="#0f0f32"/>
      <rect id="Rectangle_524" data-name="Rectangle 524" width="8.081" height="1.202" transform="translate(91.638 20.082)" fill="#0f0f32"/>
      <path id="Path_345" data-name="Path 345" d="M235.14,38.1l9.951-16.73h.334V43.74h-2V26.009l-8.682,14.459H234.4l-8.682-14.259V43.74h-1V21.367h.334Z" transform="translate(-120.996 -11.505)" fill="#0f0f32"/>
      <path id="Path_346" data-name="Path 346" d="M281.511,38.419l-1.169-1.3a8.112,8.112,0,0,1,2.755-1.8,8.78,8.78,0,0,1,3.289-.635,5.449,5.449,0,0,1,3.807,1.3,4.5,4.5,0,0,1,1.436,3.506V51.108h-.067l-1.435-.734a.911.911,0,0,1-.5-.868v-1.67h-.067q-2.8,3.272-6.111,3.272a4.508,4.508,0,0,1-2.989-.935,3.094,3.094,0,0,1-1.118-2.5,4.329,4.329,0,0,1,.684-2.354,6.343,6.343,0,0,1,1.887-1.886,9.723,9.723,0,0,1,2.838-1.252,13.286,13.286,0,0,1,3.539-.451h1.336V39.053a3.988,3.988,0,0,0-.868-2.7,2.976,2.976,0,0,0-2.371-1q-2.672,0-4.875,3.072m8.114,8.448V42.393h-.668a10.8,10.8,0,0,0-2.955.384,8.3,8.3,0,0,0-2.354,1.052,5.284,5.284,0,0,0-1.57,1.569,3.625,3.625,0,0,0-.567,1.97,2.369,2.369,0,0,0,.651,1.754,2.325,2.325,0,0,0,1.72.651,6.659,6.659,0,0,0,3.072-.751,8.807,8.807,0,0,0,2.672-2.154" transform="translate(-150.405 -18.672)" fill="#0f0f32"/>
      <path id="Path_347" data-name="Path 347" d="M316.452,38.419l-1.169-1.3a8.111,8.111,0,0,1,2.755-1.8,8.779,8.779,0,0,1,3.289-.635,5.449,5.449,0,0,1,3.807,1.3,4.5,4.5,0,0,1,1.436,3.506V51.108H326.5l-1.436-.734a.911.911,0,0,1-.5-.868v-1.67H324.5q-2.8,3.272-6.111,3.272a4.507,4.507,0,0,1-2.989-.935,3.094,3.094,0,0,1-1.118-2.5,4.33,4.33,0,0,1,.684-2.354,6.344,6.344,0,0,1,1.887-1.886,9.72,9.72,0,0,1,2.838-1.252,13.285,13.285,0,0,1,3.539-.451h1.336V39.053a3.988,3.988,0,0,0-.868-2.7,2.976,2.976,0,0,0-2.371-1q-2.672,0-4.875,3.072m8.115,8.448V42.393H323.9a10.8,10.8,0,0,0-2.955.384,8.3,8.3,0,0,0-2.354,1.052,5.285,5.285,0,0,0-1.57,1.569,3.626,3.626,0,0,0-.567,1.97,2.37,2.37,0,0,0,.651,1.754,2.325,2.325,0,0,0,1.72.651,6.658,6.658,0,0,0,3.072-.751,8.807,8.807,0,0,0,2.672-2.154" transform="translate(-169.218 -18.672)" fill="#0f0f32"/>
      <path id="Path_348" data-name="Path 348" d="M363.956,35.113V50.574q0,4.14-1.9,6.278a7.08,7.08,0,0,1-5.577,2.137,11.965,11.965,0,0,1-4.041-.768l.234-.635a15.392,15.392,0,0,0,1.669.418,8.5,8.5,0,0,0,1.569.15,5.64,5.64,0,0,0,4.508-1.853,7.691,7.691,0,0,0,1.6-5.193V47.234h-.067q-2.9,4.107-6.344,4.107a4.454,4.454,0,0,1-3.373-1.252,4.831,4.831,0,0,1-1.2-3.489V35.113h1.936V46.566a3.93,3.93,0,0,0,.8,2.638,2.867,2.867,0,0,0,2.3.936q3.305,0,5.944-4.074V35.113Z" transform="translate(-189.005 -18.906)" fill="#0f0f32"/>
      <path id="Path_349" data-name="Path 349" d="M389.52,38.419l-1.169-1.3a8.112,8.112,0,0,1,2.755-1.8,8.78,8.78,0,0,1,3.289-.635,5.449,5.449,0,0,1,3.807,1.3,4.5,4.5,0,0,1,1.436,3.506V51.108h-.067l-1.435-.734a.911.911,0,0,1-.5-.868v-1.67h-.067q-2.8,3.272-6.111,3.272a4.508,4.508,0,0,1-2.989-.935,3.094,3.094,0,0,1-1.118-2.5,4.329,4.329,0,0,1,.684-2.354,6.344,6.344,0,0,1,1.887-1.886,9.722,9.722,0,0,1,2.838-1.252,13.285,13.285,0,0,1,3.539-.451h1.336V39.053a3.988,3.988,0,0,0-.868-2.7,2.975,2.975,0,0,0-2.371-1q-2.672,0-4.875,3.072m8.114,8.448V42.393h-.668a10.8,10.8,0,0,0-2.955.384,8.3,8.3,0,0,0-2.354,1.052,5.284,5.284,0,0,0-1.57,1.569,3.625,3.625,0,0,0-.567,1.97,2.369,2.369,0,0,0,.651,1.754,2.325,2.325,0,0,0,1.72.651,6.658,6.658,0,0,0,3.072-.751,8.808,8.808,0,0,0,2.672-2.154" transform="translate(-208.559 -18.672)" fill="#0f0f32"/>
    </g>
  </g>
</svg>

                  </div>
                </a>
              </div>
              <div class="header-center">
                <div class="desktop-menu">
                  <div class="desktop-menu-container">
                    <ul class="menu">
                      <li>
                        <a href="#">Categories</a>
                      </li>
                      <li>
                        <a href="#">Ritual</a>
                      </li>
                      <li>
                        <a href="#">Know your Hair Type</a>
                      </li>
                      <li>
                        <a href="#">Our Story</a>
                      </li>
                      <li>
                        <a href="#">Ingredients</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="header-right">
                <div class="header-icons">
                  <div class="icons-container">
                    <div class="icons-inner-wrap">
                      <ul class="icons">
                        <li>
                          <a href="#">
                            <div class="img-wrap">
                              <img src="images/ICONS/search.svg" alt="" />
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="img-wrap">
                              <img src="images/ICONS/user.svg" alt="" />
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="img-wrap">
                              <img src="images/ICONS/cart.svg" alt="" />
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
