  <?php wp_footer(); ?>

  <footer>
    <div class="footer-section">
      <div class="footer-section__pages">
        <h5>Pages</h5>
        <div class="footer-menu">
          <?php
          wp_nav_menu();
          ?>
        </div>
      </div>
      <div class="footer-section__map">
        <?php get_template_part("templates/footer/footer-image-template") ?>
      </div>
      <div class="footer-section__contact">
        <?php get_template_part("templates/footer/details-template") ?>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {

      $(".burger-menu").on("click", function() {
        // Toggle the "active" class on the overlay and menu
        $(".overlay, .mobile-menu").addClass("active");
      });
      $("#mobile-nav, #close-overlay").on("click", function() {
        console.log("closed")
        $(".overlay, .mobile-menu").removeClass("active");
      });

      //smooth scrolling
      $('a[href*="#"]').on('click', function(e) {
        if (this.hash !== '') {
          e.preventDefault();

          var target = this.hash;
          var offset = $(target).offset().top;

          $('html, body').animate({
            scrollTop: offset
          }, 800); // Adjust the scrolling speed if needed
        }
      });


      $(window).on('resize', function() {
        // Check if the screen width is larger than a phone (e.g., 768px)
        if ($(window).width() > 1180) {
          //  Close the overlay if it's open
          $(".overlay").removeClass("active")
        }
      });
    });


    function reveal() {
      var reveals = document.querySelectorAll(".reveal-Y");
      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }


      var revealsX = document.querySelectorAll(".reveal-X");
      for (var i = 0; i < revealsX.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = revealsX[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          revealsX[i].classList.add("active");
        } else {
          revealsX[i].classList.remove("active");
        }
      }
    }


    window.addEventListener("scroll", reveal);
    reveal()
  </script>
  </body>

  </html>