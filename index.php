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
  <!-- Media -->
  <?php require_once 'media.php'; ?>
  <!-- Header -->
  <?php require_once 'header.php'; ?>

  <div class="container max-w-[1024px] px-4 md:px-[171px]">
    <!-- Hero Section -->
    <?php require_once 'section/hero.php'; ?>

    <!-- Projects Section -->
    <?php require_once 'section/projects.php'; ?>

    <!-- Skills -->
    <?php require_once 'section/skills.php'; ?>

    <!-- About Section -->
    <?php require_once 'section/about.php'; ?>

    <!-- Contact Section -->
    <?php require_once 'section/contact.php'; ?>
  </div>

  <?php require_once 'footer.php'; ?>
</body>

</html>