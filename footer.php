<!DOCTYPE html>
<html>

 <head>
 </head>

 <body>
  <footer class='footer page-footer font-small bg-body-tertiary text-center'>
   <div class='container-fluid'>
    <div class='row p-3 d-flex align-items-center'>
     <div class='col-md-4 py-2 d-flex justify-content-evenly'>
      <p>Contact: <a class='text-reset text-decoration-none' href='mailto:info@worldsuccesstyle.com.my'><i class='bi-envelope'></i> info@worldsuccesstyle.com.my</a></p>
     </div>
     <div class='col-md-8'>
      <p class='text-md-end font-monospace user-select-none text-break m-0'><a class='text-reset text-decoration-none pe-none' tabindex='-1' aria-disabled='true' href='policy'>Policy</a><span class='text-body-tertiary'><?php
      $dtfmt = datefmt_create('en_MY', IntlDateFormatter::FULL, IntlDateFormatter::FULL, 'Asia/Kuala_Lumpur', IntlDateFormatter::GREGORIAN, 'EEE, d MMM y, h:mma z');
      function scan_dir($dir)
      {
       $files = [];
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
      <p class='text-center font-monospace text-body-tertiary lh-1'><i class='bi-c-circle'></i>
       <script>
       document.write(new Date().getFullYear())
       </script> WORLDSUCCESSTYLE SDN. BHD. 202201008869 &#40;1454566-H&#41;
      </p>
     </div>
    </div>
   </div>
  </footer>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/js/bootstrap.bundle.min.js' crossorigin='anonymous'></script>
  <script src='https://cdn.jsdelivr.net/npm/jquery@latest/dist/jquery.min.js' crossorigin='anonymous'></script>
  <script src='assets/js/sources.js'></script>
  <button id='scrollToTop' class='btn position-fixed bottom-0 start-0'><i class='bi-arrow-up-square fs-1'></i></button>
  <script src='assets/js/stt.js'></script>
  <!-- <script src='assets/js/theme.js'></script> -->
 </body>

</html>