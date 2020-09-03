$(window).on('load',function() {
     // Animate loader off screen
     jQuery(".se-pre-con").fadeOut("slow");
   });

   $(document).ready(function () {
    // Smooth scroll for the navigation and links with .scrollto classes
    $("a").on("click", function () {
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        if (target.length) {
          $("html, body").animate(
            {
              scrollTop: target.offset().top - 90,
            },
            1200,
            "easeInOutExpo"
          );
  
          return false;
        }
      }
    });
  });