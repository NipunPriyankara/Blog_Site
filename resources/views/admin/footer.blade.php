<footer class="footer">
    <div class="container-fluid">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right" id="date">
        , made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>
  <script>
    const x = new Date().getFullYear();
    let date = document.getElementById('date');
    date.innerHTML = '&copy; ' + x + date.innerHTML;
  </script>
</div>
</div>
<div class="fixed-plugin">
<div class="dropdown show-dropdown">
  <a href="#" data-toggle="dropdown">
    <i class="fa fa-cog fa-2x"> </i>
  </a>
  <ul class="dropdown-menu">
    <li class="header-title"> Sidebar Filters</li>
    <li class="adjustments-line">
      <a href="javascript:void(0)" class="switch-trigger active-color">
        <div class="badge-colors ml-auto mr-auto">
          <span class="badge filter badge-purple active" data-color="purple"></span>
          <span class="badge filter badge-azure" data-color="azure"></span>
          <span class="badge filter badge-green" data-color="green"></span>
          <span class="badge filter badge-warning" data-color="orange"></span>
          <span class="badge filter badge-danger" data-color="danger"></span>
        </div>
        <div class="clearfix"></div>
      </a>
    </li>
    <li class="header-title">Images</li>
    <li>
      <a class="img-holder switch-trigger" href="javascript:void(0)">
        <img src="/admincss/assets/img/sidebar-1.jpg" alt="">
      </a>
    </li>
    <li class="active">
      <a class="img-holder switch-trigger" href="javascript:void(0)">
        <img src="/admincss/assets/img/sidebar-2.jpg" alt="">
      </a>
    </li>
    <li>
      <a class="img-holder switch-trigger" href="javascript:void(0)">
        <img src="/admincss/assets/img/sidebar-3.jpg" alt="">
      </a>
    </li>
    <li>
      <a class="img-holder switch-trigger" href="javascript:void(0)">
        <img src="/admincss/assets/img/sidebar-4.jpg" alt="">
      </a>
    </li>
    <li class="button-container">
      <a href="https://www.creative-tim.com/product/material-dashboard-dark" target="_blank" class="btn btn-primary btn-block">Free Download</a>
    </li>
    <!-- <li class="header-title">Want more components?</li>
        <li class="button-container">
            <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
              Get the pro version
            </a>
        </li> -->
    <li class="button-container">
      <a href="https://demos.creative-tim.com/material-dashboard-dark/docs/2.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
        View Documentation
      </a>
    </li>
    <li class="button-container github-star">
      <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard/tree/dark-edition" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
    </li>
    <li class="header-title">Thank you for 95 shares!</li>
    <li class="button-container text-center">
      <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
      <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
      <br>
      <br>
    </li>
  </ul>
</div>
</div>
<!--   Core JS Files   -->
<script src="/admincss/assets/js/core/jquery.min.js"></script>
<script src="/admincss/assets/js/core/popper.min.js"></script>
<script src="/admincss/assets/js/core/bootstrap-material-design.min.js"></script>
<script src="https://unpkg.com/default-passive-events"></script>
<script src="/admincss/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="/admincss/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="/admincss/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/admincss/assets/js/material-dashboard.js?v=2.1.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="/admincss/assets/demo/demo.js"></script>
<script>
$(document).ready(function() {
  $().ready(function() {
    $sidebar = $('.sidebar');

    $sidebar_img_container = $sidebar.find('.sidebar-background');

    $full_page = $('.full-page');

    $sidebar_responsive = $('body > .navbar-collapse');

    window_width = $(window).width();

    $('.fixed-plugin a').click(function(event) {
      // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
      if ($(this).hasClass('switch-trigger')) {
        if (event.stopPropagation) {
          event.stopPropagation();
        } else if (window.event) {
          window.event.cancelBubble = true;
        }
      }
    });

    $('.fixed-plugin .active-color span').click(function() {
      $full_page_background = $('.full-page-background');

      $(this).siblings().removeClass('active');
      $(this).addClass('active');

      var new_color = $(this).data('color');

      if ($sidebar.length != 0) {
        $sidebar.attr('data-color', new_color);
      }

      if ($full_page.length != 0) {
        $full_page.attr('filter-color', new_color);
      }

      if ($sidebar_responsive.length != 0) {
        $sidebar_responsive.attr('data-color', new_color);
      }
    });

    $('.fixed-plugin .background-color .badge').click(function() {
      $(this).siblings().removeClass('active');
      $(this).addClass('active');

      var new_color = $(this).data('background-color');

      if ($sidebar.length != 0) {
        $sidebar.attr('data-background-color', new_color);
      }
    });

    $('.fixed-plugin .img-holder').click(function() {
      $full_page_background = $('.full-page-background');

      $(this).parent('li').siblings().removeClass('active');
      $(this).parent('li').addClass('active');


      var new_image = $(this).find("img").attr('src');

      if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
        $sidebar_img_container.fadeOut('fast', function() {
          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
          $sidebar_img_container.fadeIn('fast');
        });
      }

      if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

        $full_page_background.fadeOut('fast', function() {
          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          $full_page_background.fadeIn('fast');
        });
      }

      if ($('.switch-sidebar-image input:checked').length == 0) {
        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
      }

      if ($sidebar_responsive.length != 0) {
        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
      }
    });

    $('.switch-sidebar-image input').change(function() {
      $full_page_background = $('.full-page-background');

      $input = $(this);

      if ($input.is(':checked')) {
        if ($sidebar_img_container.length != 0) {
          $sidebar_img_container.fadeIn('fast');
          $sidebar.attr('data-image', '#');
        }

        if ($full_page_background.length != 0) {
          $full_page_background.fadeIn('fast');
          $full_page.attr('data-image', '#');
        }

        background_image = true;
      } else {
        if ($sidebar_img_container.length != 0) {
          $sidebar.removeAttr('data-image');
          $sidebar_img_container.fadeOut('fast');
        }

        if ($full_page_background.length != 0) {
          $full_page.removeAttr('data-image', '#');
          $full_page_background.fadeOut('fast');
        }

        background_image = false;
      }
    });

    $('.switch-sidebar-mini input').change(function() {
      $body = $('body');

      $input = $(this);

      if (md.misc.sidebar_mini_active == true) {
        $('body').removeClass('sidebar-mini');
        md.misc.sidebar_mini_active = false;

        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

      } else {

        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

        setTimeout(function() {
          $('body').addClass('sidebar-mini');

          md.misc.sidebar_mini_active = true;
        }, 300);
      }

      // we simulate the window Resize so the charts will get updated in realtime.
      var simulateWindowResize = setInterval(function() {
        window.dispatchEvent(new Event('resize'));
      }, 180);

      // we stop the simulation of Window Resize after the animations are completed
      setTimeout(function() {
        clearInterval(simulateWindowResize);
      }, 1000);

    });
  });
});
</script>
<script>
    ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error=>{
        console.error(error);
    });
    </script>
</body>

</html>
