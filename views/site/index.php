<?php

/** @var yii\web\View $this */

use richardfan\widget\JSRegister;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Dwi Wijaya';
?>
<style>
  .form-control{
    padding:1.5rem 0.75rem;
  }
  .form-control + label {
      /* display: grid; */
      padding: 0 10px;
    top: 6.7rem;
    margin-left: 14px;
    position: absolute;
    background-color: white;
  
}
</style>
<!-- Loading page animation -->
<div id="loader">
  <div class="line-wobble"></div>
</div>
<!-- Loading page end -->

<!-- Component -->
<?= $this->render('home'); ?>
<?= $this->render('about'); ?>
<?= $this->render('skill'); ?>
<?= $this->render('project'); ?>
<?= $this->render('contact',['model' => $model]); ?>

<!-- Content end -->

<!--  -->

<?php JSRegister::begin() ?>

<script>
  // Get all sections that have an ID defined
  const sections = $("section[id]");

  // Add an event listener listening for scroll
  $(window).scroll(navHighlighter);

  function navHighlighter() {
    // Get current scroll position
    let scrollY = $(window).scrollTop();

    // Loop through sections to get height, top, and ID values for each
    sections.each(function() {
      const sectionHeight = $(this).height();
      const sectionTop = $(this).offset().top - 50;
      sectionId = $(this).attr("id");

      /*
      - If our current scroll position enters the space where the current section is on the screen,
        add the .active class to the corresponding navigation link, else remove it
      - To know which link needs an active class, we use the sectionId variable we are getting while
        looping through sections as a selector
      */
      if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
        $(".nav a[href*=" + sectionId + "]").addClass("active");
      } else {
        $(".nav a[href*=" + sectionId + "]").removeClass("active");
      }
    });
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      } else {
        entry.target.classList.remove("show");
      }
    });
  });

  const hiddenElements = $(".hidden");

  hiddenElements.each(function() {
    observer.observe(this);
  });

  $(window).on('beforeunload', function() {
    $('#loader').show();
  });

  $(window).on('load', function() {
    $('#loader').hide();
  });

  // window.addEventListener('scroll', function() {
  //   const navbar = document.querySelector('.navbar');
  //   if (window.scrollY > 0) {
  //     navbar.classList.add('scrolled');
  //   } else {
  //     navbar.classList.remove('scrolled');
  //   }
  // });

  const navMenu = $('#nav-menu');
  const navToggle = $('#nav-toggle');
  const navClose = $('#nav-close');

  if (navToggle.length) {
    navToggle.click(() => {
      navMenu.addClass('show-menu');
    });
  }

  if (navClose.length) {
    navClose.click(() => {
      navMenu.removeClass('show-menu');
    });
  }

  $(document).ready(function() {
  $(window).scrollTop(0);
});
</script>
<?php JSRegister::end() ?>