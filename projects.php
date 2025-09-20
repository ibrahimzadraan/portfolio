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

  <!-- Main Content -->
  <section class="relative container max-w-[1024px] px-[16px] sm:px-[171px] pb-[187px]">
    <!-- Section Header -->
    <div class="mt-[53px] mb-[68px] flex flex-col gap-[14px]">
      <h1 class="text-[32px] font-[600] text-white">
        <span class="text-primary">/</span>Projects
      </h1>
      <p class="text-gray text-[16px] font-[400]">List of my projects</p>
    </div>

    <!-- Big Projects Section -->
    <div class="w-full">
      <div class="mb-[48px] flex items-center justify-between">
        <div class="flex items-center gap-[16px]">
          <h2 class="text-[32px] font-[500] text-white">
            <span class="text-primary">#</span>big-projects
          </h2>
        </div>
      </div>

      <!-- Big Projects Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-[16px]">
        <!-- Project 1 -->
        <div class="w-full">
          <img src="assets/images/project/project-1.png" alt="Project 1"
            class="h-[201px] w-full object-cover border-t border-l border-r border-[#ABB2BF] " />
          <ul class="text-gray flex flex-wrap gap-[8px] border border-[#ABB2BF] p-[8px] text-[16px]">
            <li>Tailwindcss</li>
            <li>HTML</li>
            <li>CSS</li>
          </ul>
          <div class="flex flex-col gap-[16px] border border-[#ABB2BF] p-[16px]">
            <h3 class="text-[24px] font-[500] text-white">Divestic</h3>
            <p class="text-gray text-[16px]">Responsive website for a company that provides business services.</p>
            <a href="https://ibrahimzadraan.github.io/divestic/" target="_blank"
              class="text-center border border-[#C778DD] px-[16px] py-[8px] text-[16px] font-[500] text-white hover:bg-[#C778DD]/20">Live <~></a>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="w-full">
          <img src="assets/images/project/project-2.png" alt="Project 2"
            class="h-[201px] w-full object-cover border-t border-l border-r border-[#ABB2BF]" />
          <ul class="text-gray flex flex-wrap gap-[8px] border border-[#ABB2BF] p-[8px] text-[16px]">
            <li>Tailwindcss</li>
            <li>HTML</li>
            <li>CSS</li>
          </ul>
          <div class="flex flex-col gap-[16px] border border-[#ABB2BF] p-[16px]">
            <h3 class="text-[24px] font-[500] text-white">Plumber Website</h3>
            <p class="text-gray text-[16px]">Responsive website for a company that provides plumbing services.</p>
            <a href="https://ibrahimzadraan.github.io/plumber-points/" target="_blank"
              class="text-center border border-[#C778DD] px-[16px] py-[8px] text-[16px] font-[500] text-white hover:bg-[#C778DD]/20">Live <~></a>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="w-full">
          <img src="assets/images/project/project-3.png" alt="Project 3"
            class="h-[201px] w-full object-cover border-t border-l border-r border-[#ABB2BF]" />
          <ul class="text-gray flex flex-wrap gap-[8px] border-l border-r border-[#ABB2BF] p-[8px] text-[16px]">
            <li>Tailwindcss</li>
            <li>HTML</li>
            <li>SCSS</li>
          </ul>
          <div class="flex flex-col gap-[16px] border-l border-r border-b border-[#ABB2BF] p-[16px]">
            <h3 class="text-[24px] font-[500] text-white">Educational Website</h3>
            <p class="text-gray text-[16px]">Responsive website for an educational institution.</p>
            <a href="https://ibrahimzadraan.github.io/educational-course-selling-project/" target="_blank"
              class="text-center border border-[#C778DD] px-[16px] py-[8px] text-[16px] font-[500] text-white hover:bg-[#C778DD]/20">Live <~></a>
          </div>
        </div>

        <!-- Project 4 -->
        <div class="w-full">
          <img src="assets/images/project/project-4.png" alt="Project 4"
            class="h-[201px] w-full object-cover border border-[#ABB2BF]" />
          <ul class="text-gray flex flex-wrap gap-[8px] border border-[#ABB2BF] p-[8px] text-[16px]">
            <li>Tailwindcss</li>
            <li>HTML</li>
            <li>SCSS</li>
          </ul>
          <div class="flex flex-col gap-[16px] border border-[#ABB2BF] p-[16px]">
            <h3 class="text-[24px] font-[500] text-white">RRF Landing Page</h3>
            <p class="text-gray text-[16px]">Responsive website for a web development course.</p>
            <a href="https://ibrahimzadraan.github.io/landing-page/" target="_blank"
              class="text-center border border-[#C778DD] px-[16px] py-[8px] text-[16px] font-[500] text-white hover:bg-[#C778DD]/20">Live <~></a>
          </div>
        </div>

        <!-- Project 5 -->
        <div class="w-full">
          <img src="assets/images/project/project-5.png" alt="Project 5"
            class="h-[201px] w-full object-cover border border-[#ABB2BF]" />
          <ul class="text-gray flex flex-wrap gap-[8px] border border-[#ABB2BF] p-[8px] text-[16px]">
            <li>Tailwindcss</li>
            <li>HTML</li>
            <li>SCSS</li>
          </ul>
          <div class="flex flex-col gap-[16px] border border-[#ABB2BF] p-[16px]">
            <h3 class="text-[24px] font-[500] text-white">RRF Landing Page</h3>
            <p class="text-gray text-[16px]">Responsive website for a web development course.</p>
            <a href="https://ibrahimzadraan.github.io/landing-page/" target="_blank"
              class="text-center border border-[#C778DD] px-[16px] py-[8px] text-[16px] font-[500] text-white hover:bg-[#C778DD]/20">Live <~></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Small Projects Section -->
    <div class="w-full pt-[81px]">
      <div class="mb-[48px] flex items-center justify-between">
        <div class="flex items-center gap-[16px]">
          <h2 class="text-[32px] font-[500] text-white">
            <span class="text-primary">#</span>small-projects
          </h2>
        </div>
      </div>

      <!-- Small Projects Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-[16px]">
        <!-- Card 1 -->
        <div class="w-full">
          <div class="border border-[#ABB2BF]">
            <div class="border-b border-[#ABB2BF] p-[8px]">
              <div class="text-gray flex flex-wrap gap-[8px] text-[16px]">
                <span>HTML</span><span>CSS</span>
              </div>
            </div>
            <div class="flex flex-col gap-[16px] p-[16px]">
              <h3 class="text-[24px] font-[500] text-white">Simple Login Page</h3>
              <p class="text-gray text-[16px]">Simple user authentication interface.</p>
              <a href="https://codepen.io/ibrahimzadran/pen/NPKaaqX" target="_blank"
                class="text-center border border-[#C778DD] px-[16px] py-[8px] text-[16px] font-[500] text-white hover:bg-[#C778DD]/20">CodePen <~></a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="w-full">
          <div class="border border-[#ABB2BF]">
            <div class="border-b border-[#ABB2BF] p-[8px]">
              <div class="text-gray flex flex-wrap gap-[8px] text-[16px]">
                <span>HTML</span><span>CSS</span>
              </div>
            </div>
            <div class="flex flex-col gap-[16px] p-[16px]">
              <h3 class="text-[24px] font-[500] text-white">FULA Landing Page</h3>
              <p class="text-gray text-[16px]">A landing page for a business, showcasing services and features</p>
              <a href="https://codepen.io/ibrahimzadran/pen/xbKYbvJ" target="_blank"
                class="text-center border border-[#C778DD] px-[16px] py-[8px] text-[16px] font-[500] text-white hover:bg-[#C778DD]/20">CodePen <~></a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="w-full">
          <div class="border border-[#ABB2BF]">
            <div class="border-b border-[#ABB2BF] p-[8px]">
              <div class="text-gray flex flex-wrap gap-[8px] text-[16px]">
                <span>HTML</span><span>CSS</span>
              </div>
            </div>
            <div class="flex flex-col gap-[16px] p-[16px]">
              <h3 class="text-[24px] font-[500] text-white">CSS Grid</h3>
              <p class="text-gray text-[16px]">CSS grid layout for image galleries.</p>
              <a href="https://codepen.io/ibrahimzadran/pen/VYwmgJz" target="_blank"
                class="text-center border border-[#C778DD] px-[16px] py-[8px] text-[16px] font-[500] text-white hover:bg-[#C778DD]/20">CodePen <~></a>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="w-full">
          <div class="border border-[#ABB2BF]">
            <div class="border-b border-[#ABB2BF] p-[8px]">
              <div class="text-gray flex flex-wrap gap-[8px] text-[16px]">
                <span>HTML</span><span>CSS</span><span>JS</span>
              </div>
            </div>
            <div class="flex flex-col gap-[16px] p-[16px]">
              <h3 class="text-[24px] font-[500] text-white">TÖBEL Interiors</h3>
              <p class="text-gray text-[16px]">Elegant and functional modern furniture for any space.</p>
              <a href="https://codepen.io/ibrahimzadran/pen/qEBqQQY" target="_blank"
                class="text-center border border-[#C778DD] px-[16px] py-[8px] text-[16px] font-[500] text-white hover:bg-[#C778DD]/20">CodePen <~></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php require_once 'footer.php'; ?>

</body>

</html>