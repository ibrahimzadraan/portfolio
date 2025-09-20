<header
  class="container flex max-w-[1024px] items-center justify-between  px-[16px] md:px-[171px] pt-[16px] md:pt-[32px] pb-[8px]">
  <!-- Logo -->
  <a href="index.php" class="flex cursor-pointer items-center gap-[8px]">
    <img
      src="assets/images/header/white-logo.png"
      alt="Logo"
      class="h-[16px] w-[16px]" />
    <span class="text-[16px] leading-normal font-[700] text-white">
      Ibrahim Zadran
    </span>
  </a>



  <!-- Hamburger Icon -->
  <div class="hamburger">
    <i id="menuToggle" class="fa-solid fa-bars-staggered cursor-pointer text-white text-[24px]  "></i>
  </div>

  <!-- Mobile Menu Panel -->
  <div id="mobileMenu"
    class="fixed top-0 left-0 z-50 h-full w-full bg-[#282C33] translate-x-full transition-transform duration-300 md:hidden">

    <!-- Menu Header -->
    <div class="flex justify-between items-center p-[16px]">
      <a href="index.php" class="flex cursor-pointer items-center gap-[8px]">
        <img
          src="assets/images/header/white-logo.png"
          alt="Logo"
          class="h-[16px] w-[16px]" />
        <span class="text-[16px] leading-normal font-[700] text-white">
          Ibrahim Zadran
        </span>
      </a>

      <!-- Close Button -->
      <button id="closeMenu" class="text-gray-400 hover:text-white transition-colors">
        <i class="fa-solid fa-xmark cursor-pointer transition-colors text-white text-[24px]"></i>
      </button>
    </div>

    <!-- Navigation Links -->
    <nav class="mt-[47px]">
      <ul class="flex flex-col gap-[32px] px-[16px] text-gray text-[32px]">
        <li><a href="index.php" class="hover:text-white"><span class="text-primary">#</span>home</a></li>
        <li><a href="projects.php" class="hover:text-white"><span class="text-primary">#</span>projects</a></li>
        <li><a href="about.php" class="hover:text-white"><span class="text-primary">#</span>about-me</a></li>
        <li><a href="contacts.php" class="hover:text-white"><span class="text-primary">#</span>contacts</a></li>
      </ul>
    </nav>

    <!-- Social Media -->
    <div class="flex flex-row justify-center items-center mt-[107px] gap-[8px]">
      <!-- GitHub -->
      <a href="https://shorturl.at/N9eX4" class="group">
        <i class="fa-brands fa-square-github text-[#ABB2BF] group-hover:text-white text-[64px]"></i>
      </a>

      <!-- LinkedIn -->
      <a href="https://shorturl.at/Fd98T" class="group">
        <i class="fa-brands fa-linkedin text-[#ABB2BF] group-hover:text-white text-[64px]"></i>
      </a>

      <!-- Email/Envelope -->
      <a href="#" class="group">
        <i class="fa-solid fa-envelope text-[#ABB2BF] group-hover:text-white text-[64px]"></i>
      </a>
    </div>
  </div>

  <!-- Header Links in Desktop -->
  <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
  <div id="desktopMenu">
    <ul class="flex flex-row gap-[32px] px-[16px] text-[#ABB2BF] font-[400] leading-normal font-[fira] text-[16px]">
      <li>
        <a href="index.php" class="hover:text-white <?php if ($current_page == 'index.php') echo 'active-link'; ?>">
          <span class="text-primary">#</span>home
        </a>
      </li>
      <li>
        <a href="projects.php" class="hover:text-white <?php if ($current_page == 'projects.php') echo 'active-link'; ?>">
          <span class="text-primary">#</span>projects
        </a>
      </li>
      <li>
        <a href="about.php" class="hover:text-white <?php if ($current_page == 'about.php') echo 'active-link'; ?>">
          <span class="text-primary">#</span>about-me
        </a> git remote add origin https://github.com/ibrahimzadraan/portfolio.gith
      </li>
      <li>
        <a href="contacts.php" class="hover:text-white <?php if ($current_page == 'contacts.php') echo 'active-link'; ?>">
          <span class="text-primary">#</span>contacts
        </a>
      </li>
    </ul>
  </div>
</header>