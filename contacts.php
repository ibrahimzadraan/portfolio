<!doctype html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php
  echo '<link href="assets/css/output.css" rel="stylesheet" />';
  echo '<link rel="stylesheet" href="assets/css/style.css" />';
  echo '<script src="assets/js/main.js"></script>';
  ?>

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>

<body>
  <?php require_once 'media.php'; ?>
  <?php require_once 'header.php'; ?>

  <section class="relative container max-w-[1024px] px-4 sm:px-6 lg:px-[171px] ">
    <!-- Header -->
    <div class="mt-[53px] mb-[46px] flex flex-col gap-[14px]">
      <h1 class="text-[32px] font-[600] text-white">
        <span class="text-primary">/</span>contacts
      </h1>
      <p class="text-gray text-[16px] font-[400]">Who am i?</p>
    </div>

    <!-- Contact Content -->
    <div class="flex flex-col sm:flex-row justify-between gap-[32px]">
      <!-- Left Content -->
      <p class="text-gray text-[16px] font-[400] leading-normal">
        I'm interested in freelance opportunities. However, if you have other request or question, don't hesitate to contact me.
      </p>

      <!-- Right Content -->
      <div class="flex flex-col border border-[#ABB2BF] p-[16px] w-full sm:w-auto">
        <h3 class="text-[16px] font-[600] text-white mb-[8px]">Message me here</h3>

        <!-- LinkedIn Contact -->
        <a href="https://www.linkedin.com/in/ibrahimzadran/" target="_blank" rel="noopener noreferrer"
          class="group mt-[12px] flex items-center gap-[8px] hover:text-white cursor-pointer no-underline">
          <div class="flex h-[32px] w-[32px] items-center justify-center rounded-[10px]">
            <i class="fa-brands fa-linkedin text-[#ABB2BF] group-hover:text-white text-[24px]"></i>
          </div>
          <span class="text-[16px] font-[400] text-[#ABB2BF] group-hover:text-white">ibrahimzadran</span>
        </a>


        <!-- Email Contact -->
        <a href="mailto:ibrahimzadran.info@gmail.com"
          class="group mt-[12px] flex items-center gap-[8px] cursor-pointer no-underline">
          <div class="flex h-[32px] w-[32px] items-center justify-center rounded-[10px]">
            <i class="fa-solid fa-envelope text-[#ABB2BF] group-hover:text-white text-[24px]"></i>
          </div>
          <span class="text-[16px] font-[400] text-[#ABB2BF] group-hover:text-white select-text 
               break-all md:break-normal">
            ibrahimzadran.info@gmail.com
          </span>
        </a>
      </div>
    </div>

    <!-- Media -->
    <div class="mt-[25px] mb-[84px] flex flex-col gap-[24px]">
      <div class="flex items-center gap-[16px]">
        <h2 class="text-[32px] font-[500] text-white">
          <span class="text-primary">#</span>all-media
        </h2>
      </div>

      <div class="flex flex-col sm:flex-row gap-[16px] sm:gap-[22px]">
        <!-- Twitter -->
        <a href="https://twitter.com/ibrahimzadran" target="blank" class="group flex items-center gap-[5px] hover:">
          <i class="fa-brands fa-square-twitter text-[24px] text-[#ABB2BF] group-hover:text-white"></i>

          <span class="text-[#ABB2BF] group-hover:text-white text-[16px] font-[400]">
            ibrahimzadran
          </span>
        </a>

        <!-- LinkedIn -->
        <a href="https://www.linkedin.com/in/ibrahimzadran/" target="blank" class="group flex items-center gap-[5px]">
          <i class="fa-brands fa-linkedin text-[24px] text-[#ABB2BF] group-hover:text-white"></i>
          <span class="text-[#ABB2BF] group-hover:text-white text-[16px] font-[400]">
            ibrahimzadran
          </span>
        </a>

      </div>
    </div>
  </section>



  <?php require_once 'footer.php'; ?>

</body>

</html>