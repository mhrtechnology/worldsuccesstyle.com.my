<!DOCTYPE html>
<html lang='en-my' data-bs-theme='auto'>

  <head>
    <title>WSStyle | TOSEI</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1/font/bootstrap-icons.min.css' crossorigin='anonymous'>
    <script src='https://kit.fontawesome.com/221737b641.js' crossorigin='anonymous'></script>
    <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f)
      })(window, document, 'script', 'dataLayer', 'GTM-TS2FWL45')
    </script>
    <script async src='https://www.googletagmanager.com/gtag/js?id=G-45HG2XHGPT'></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-45HG2XHGPT');
    </script>
    <script type='text/javascript'>
      (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src='https://www.clarity.ms/tag/'+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
      })(window, document, 'clarity', 'script', 'jgkounvmrh');
    </script>
  </head>

  <body>
    <noscript><iframe src='https://www.googletagmanager.com/ns.html?id=GTM-TS2FWL45' height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>
    <header class='sticky-top'>
      <nav class='navbar navbar-expand-lg bg-body-tertiary py-0'>
        <div class='container'>
          <a class='navbar-brand' href='/'><img class='img-fluid d-inline-block' src='/media/img/logo.png' width='50px' alt='WORLDSUCCESSTYLE S/B'></a>
          <span class='text-center'>Authorised Distributor of: <img src='/media/img/primus.png' width='60px'></span>
          <!-- <div class='dropdown'>
            <button class='btn nav-link d-flex align-items-center dropdown-toggle' id='theme' type='button' aria-expanded='false' data-bs-toggle='dropdown' data-bs-display='static' aria-label='Toggle theme (auto)'><span class='ms-2' id='theme-text'>theme</span></button>
            <ul class='dropdown-menu bg-body-tertiary border-0' aria-labelledby='theme-text'>
              <li><button type='button' class='dropdown-item d-flex align-items-center' data-bs-theme-value='auto'><i class='bi-circle-half me-2 opacity-50'></i>auto</button></li>
              <li><button type='button' class='dropdown-item d-flex align-items-center' data-bs-theme-value='dark'><i class='bi-moon-stars-fill me-2 opacity-50'></i>dark</button></li>
              <li><button type='button' class='dropdown-item d-flex align-items-center' data-bs-theme-value='light'><i class='bi-sun-fill me-2 opacity-50'></i>light</button></li>
            </ul>
          </div> -->
          <button class='navbar-toggler border-0' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>menu</button>
          <div class='collapse navbar-collapse text-end' id='navbarNav'>
            <ul class='nav navbar-nav nav-pills text-lg-center d-flex ms-auto'>
              <li class='nav-item'><a class='nav-link' href='/about'>About</a></li>
              <li class='nav-item'><a class='nav-link' href='/products'>Products</a></li>
              <li class='nav-item'><a class='nav-link disabled' href='/contact'>Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main class='container'>
      <p class='text-center'>Page under construction. We will be back soon.</p>
    </main>
    <footer class='footer page-footer font-small bg-body-tertiary text-center'>
      <div class='container-fluid'>
        <div class='row p-3 d-flex align-items-center'>
          <div class='col-md-4 py-2 d-flex justify-content-evenly'>
            <p>Contact: <a class='text-reset text-decoration-none' href='mailto:info@worldsuccesstyle.com.my'><i class='bi-envelope'></i> info@worldsuccesstyle.com.my</a></p>
          </div>
          <div class='col-md-8'>
            <p class='text-md-end font-monospace user-select-none text-break m-0'><a class='text-reset text-decoration-none pe-auto' href='/policy'>Policy</a><span class='text-body-tertiary'><?php
              $dtfmt = datefmt_create('en_MY', IntlDateFormatter::FULL, IntlDateFormatter::FULL, 'Asia/Kuala_Lumpur', IntlDateFormatter::GREGORIAN, 'EEE, d MMM y, h:mma z');
              function scan_dir($dir) {
                $files = array();
                foreach (scandir($dir) as $file) {
                  $filemtime = filemtime($dir . '/' . $file);
                  $files[$file] = $filemtime;
                }
                arsort($files);
                $files = array_keys($files);
                return ($files) ? $files : false;
              }
              $src_folder = __DIR__;
              $files = scan_dir($src_folder);
              $fileindir = filemtime($src_folder . '/' . $files[0]);
              echo ' &#124; updated: ' . datefmt_format($dtfmt, $fileindir);
            ?></span></p>
          </div>
          <div class='col-md-12 my-0'>
            <p class='text-center font-monospace text-body-tertiary lh-1'><i class='bi-c-circle'></i> <script>document.write(new Date().getFullYear())</script> WORLDSUCCESSTYLE SDN. BHD. 202201008869 &#40;1454566-H&#41;</p>
          </div>
        </div>
      </div>
    </footer>
    <button id='scrollToTop' class='btn position-fixed bottom-0 start-0'><i class='bi-arrow-up-square fs-1'></i></button>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js' crossorigin='anonymous'></script>
    <script src='/assets/js/sources.js'></script>
    <script src='/assets/js/stt.js'></script>
    <!-- <script src='/assets/js/theme.js'></script> -->
  </body>

</html>