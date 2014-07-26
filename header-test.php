<header role="banner">

  <div id="inner-header" class="clearfix">

    <div class="navbar navbar-fixed-top">
        <!--
      <div class="adsliver">
        <p>
          True Woman &rsquo;14 <strong>early pricing ends</strong> in: <span id="defaultCountdown"></span> <a href="http://www.truewoman14.com/register" class="btn">Register Now</a>
        </p>
      </div>
      -->

      <div id="ha-header" class="navbar-inner ha-header-large">
        <div id="ha-header-brand" class="container">
          <a class="navbar-brand" id="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
            <?php if(of_get_option('branding_logo','')!='') { ?>
              <img src="<?php echo of_get_option('branding_logo'); ?>" alt="<?php echo get_bloginfo('description'); ?>">
              <?php }
              if(of_get_option('site_name','1')) bloginfo('name'); ?></a>
          <div id="toolbar-nav">
              <div class="nav-collapse toolbar-nav-collapse">
                <?php bones_toolbar_nav(); // Adjust using Menus in Wordpress Admin ?>

                <ul id="menu-share-nav" class="nav">

                  <li class="menu-item has-dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Share <i class="icon-share icon-white"></i></a>
                    <ul class="dropdown-menu">
                      <li id="menu-item-facebook" class="menu-item">
                        <div class="fb-like" data-href="http://www.truewoman14.com" data-width="450" data-layout="button_count" data-show-faces="false" data-send="false"></div>
                      </li>
                      <li id="menu-item-twitter" class="menu-item">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.truewoman14.com" data-via="truewoman"  data-hashtags="truewoman14">Tweet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                      </li>
                      <li id="menu-item-pinterest" class="menu-item">
                        <a href="//pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.truewoman14.com&media=http%3A%2F%2Ftruewoman14.com.s3.amazonaws.com%2Flibrary%2Fimg%2Ffacebook-og.jpg&description=True%20Woman%20%26rsquo%3B14%20%7C%20Finding%20Freedom%2C%20Fullness%20%26amp%3B%20Fruitfullness%20in%20Christ" data-pin-do="buttonPin" data-pin-config="none"><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
                      </li>
                    </ul>
                  </li>

                </ul>

              </div>

          </div>
        </div>
        <div id="ha-header-nav" class="nav-container">

          <nav class="main-nav" role="navigation">
            <div class="container">



              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>

              <div class="nav-collapse">

                <?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>

              </div>
            </div>
          </nav>

          <?php if(of_get_option('search_bar', '1')) {?>
          <form class="navbar-search pull-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
            <input name="s" id="s" type="text" class="search-query" autocomplete="off" placeholder="<?php _e('Search','bonestheme'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
          </form>
          <?php } ?>

        </div> <!-- end .nav-container -->
      </div> <!-- end .navbar-inner -->
    </div> <!-- end .navbar -->

  </div> <!-- end #inner-header -->

</header> <!-- end header -->