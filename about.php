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

  <section class="container min-h-auto max-w-[1024px] px-[16px] sm:px-[171px] pb-[162px] z-[-1]">
    <!-- about me -->
    <div class="mt-[53px] flex flex-col gap-[14px]">
      <h1 class="text-[32px] font-[600] text-white">
        <span class="text-primary">/</span>about-me
      </h1>
      <p class="text-gray text-[16px] font-[400]">Who am i</p>
    </div>

    <!-- About Text and Image -->
    <div class="flex flex-col sm:flex-row items-center justify-between gap-[32px] pt-[48px] pb-[112px]">
      <!-- About Text -->
      <div class="text-[#ABB2BF] text-[16px] font-[400] max-w-[600px]">
        Hello, I’m Ibrahim Zadran!
        <br /><br />
        I’m a self-taught front-end developer with a passion for building modern, responsive, and user-friendly websites.
        I enjoy turning ideas into functional digital experiences that work seamlessly across all devices.
        <br /><br />
        For over a year, I’ve been helping clients create their online presence through clean design and efficient code.
        I’m always exploring new technologies and frameworks to improve my skills and stay up-to-date with the fast-paced
        world of web development.
      </div>

      <!-- Image -->
      <div class="relative mt-8 lg:mt-0 flex flex-col items-center">
        <img src="assets/images/about/ibrahim.png" alt="hero" class="h-auto max-w-[300px] sm:max-w-[400px] lg:h-[507px] flex-shrink-0" />

        <!-- Decorative Elements -->
        <div class="hidden sm:block absolute top-[59px] -left-[4px]">
          <img src="assets/images/about/frame1.png" alt="logo" class="h-[84px] w-[84px]" />
        </div>

        <div class="hidden sm:block absolute right-[16px] bottom-[172px]">
          <img src="assets/images/about/frame2.png" alt="dots" class="h-[56px] w-[104px]" />
        </div>

        <div>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="100%"
            height="1"
            viewBox="0 0 400 1"
            fill="none">
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M400 1H0V0H400V1Z"
              fill="#C778DD" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Skills -->
    <div class="pb-[83px]">
      <div class="mb-[48px] flex items-center gap-[16px]">
        <h2 class="text-[32px] font-[500] text-white">
          <span class="text-primary">#</span>Skills
        </h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[16px]">
        <!-- Languages -->
        <div class="border border-[#ABB2BF]">
          <div class="border-b border-[#ABB2BF] p-[8px]">
            <h5 class="text-[16px] font-[600] text-white">Languages</h5>
          </div>
          <div class="p-[8px] text-gray text-[16px] font-[400]">
            <ul>
              <li>JavaScript</li>
            </ul>
          </div>
        </div>

        <!-- Other -->
        <div class="border border-[#ABB2BF]">
          <div class="border-b border-[#ABB2BF] p-[8px]">
            <h5 class="text-[16px] font-[600] text-white">Other</h5>
          </div>
          <div class="p-[8px] text-gray text-[16px] font-[400]">
            <ul class="flex flex-wrap gap-[8px]">
              <li>HTML</li>
              <li>CSS</li>
              <li>SCSS</li>
            </ul>
          </div>
        </div>

        <!-- Frameworks -->
        <div class="border border-[#ABB2BF]">
          <div class="border-b border-[#ABB2BF] p-[8px]">
            <h5 class="text-[16px] font-[600] text-white">Frameworks</h5>
          </div>
          <div class="p-[8px] text-gray text-[16px] font-[400]">
            <ul class="flex flex-wrap gap-[8px]">
              <li>Vue</li>
              <li>Tailwind</li>
              <li>Bootstrap</li>
            </ul>
          </div>
        </div>

        <!-- Tools -->
        <div class="border border-[#ABB2BF]">
          <div class="border-b border-[#ABB2BF] p-[8px]">
            <h5 class="text-[16px] font-[600] text-white">Tools</h5>
          </div>
          <div class="p-[8px] text-gray text-[16px] font-[400] space-y-[8px]">
            <ul class="flex flex-wrap gap-[8px]">
              <li>VSCode</li>
              <li>Git</li>
            </ul>
            <ul class="flex flex-wrap gap-[8px]">
              <li>Figma</li>
              <li>Font Awesome</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Fun Facts -->
    <div>
      <div class="mb-[48px] flex items-center gap-[16px]">
        <h2 class="text-[32px] font-[500] text-white">
          <span class="text-primary">#</span>my-fun-facts
        </h2>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-[16px] text-gray text-[16px] font-[400]">
        <div class="border border-[#ABB2BF] p-[8px]">I like winter more than summer</div>
        <div class="border border-[#ABB2BF] p-[8px]">I often bike with my friends</div>
        <div class="border border-[#ABB2BF] p-[8px]">I like pizza and pasta</div>
        <div class="border border-[#ABB2BF] p-[8px]">I was in Egypt, Poland and Turkey</div>
        <div class="border border-[#ABB2BF] p-[8px]">My favorite movie is The Green Mile</div>
        <div class="border border-[#ABB2BF] p-[8px]">I am still in school</div>
        <div class="border border-[#ABB2BF] p-[8px] sm:col-span-2">I don't have any siblings</div>
      </div>
    </div>
  </section>


  <?php require_once 'footer.php'; ?>

</body>

</html>