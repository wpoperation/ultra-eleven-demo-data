<?php

      $data = array(
        'default' => array(
          'categories'        => array( 'Fashion','Blog' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/default/',
          'xml_file'        => 'content.xml',
          'theme_settings'  => 'options.dat',
          'widgets_file'    => 'widgets.wie',
          'home_title'      => 'Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '5',
          'is_shop' => false,
          'menus'         => array(
              'main-menu' => 'Main Menu',
              'footer-menu' => 'Footer Menu'
          ),
          'required_plugins'  => array(
            'free' => array(
              array(
                'slug'    => 'cs-framework',
                'init'    => 'cs-framework/cs-framework.php',
                'name'    => 'Cs Framework',
              ),
              array(
                'slug'    => 'ultra-companion',
                'init'    => 'ultra-companion/ultra-companion.php',
                'name'    => 'Ultra Companion',
              ),
              array(
                'slug'    => 'mailpoet',
                'init'    => 'mailpoet/mailpoet.php',
                'name'    => 'Mailpoet',
              ),
            ),
          ),
        ),
        'fashion' => array(
          'categories'        => array( 'Fashion' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/fashion/',
          'xml_file'        => 'content.xml',
          'theme_settings'  => 'options.dat',
          'widgets_file'    => 'widgets.wie',
          'home_title'      => 'Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '5',
          'is_shop' => true,
          'menus'         => array(
              'main-menu' => 'Main Menu',
              'top-menu' => 'Top Menu',
          ),
          'required_plugins'  => array(
            'free' => array(
              array(
                'slug'    => 'cs-framework',
                'init'    => 'cs-framework/cs-framework.php',
                'name'    => 'Cs Framework',
              ),
              array(
                'slug'    => 'ultra-companion',
                'init'    => 'ultra-companion/ultra-companion.php',
                'name'    => 'Ultra Companion',
              ),
              array(
                'slug'    => 'woocommerce',
                'init'    => 'woocommerce/woocommerce.php',
                'name'    => 'WooCommerce',
              ),
              array(
                'slug'    => 'yith-woocommerce-wishlist',
                'init'    => 'yith-woocommerce-wishlist/yith-woocommerce-wishlist.php',
                'name'    => 'YITH WooCommerce Wishlist',
              ),
            ),
          ),
        ),
        'lifestyle' => array(
          'categories'        => array( 'Lifestyle' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/lifestyle/',
          'xml_file'        => 'content.xml',
          'theme_settings'  => 'options.dat',
          'widgets_file'    => 'widgets.wie',
          'home_title'      => 'Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '5',
          'is_shop' => false,
          'menus'         => array(
              'main-menu' => 'Primary Menu',
              'footer-menu' => 'Footer Menu'
          ),
          'required_plugins'  => array(
            'free' => array(
              array(
                'slug'    => 'cs-framework',
                'init'    => 'cs-framework/cs-framework.php',
                'name'    => 'Cs Framework',
              ),
              array(
                'slug'    => 'ultra-companion',
                'init'    => 'ultra-companion/ultra-companion.php',
                'name'    => 'Ultra Companion',
              )
            ),
          ),
        ),
        'sports' => array(
          'categories'        => array( 'Sports' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/sports/',
          'xml_file'        => 'content.xml',
          'theme_settings'  => 'options.dat',
          'widgets_file'    => 'widgets.wie',
          'home_title'      => 'Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '5',
          'is_shop' => false,
          'menus'         => array(
              'main-menu' => 'Primary Menu',
              'top-menu' => 'Top Menu',
          ),
          'required_plugins'  => array(
            'free' => array(
              array(
                'slug'    => 'cs-framework',
                'init'    => 'cs-framework/cs-framework.php',
                'name'    => 'Cs Framework',
              ),
              array(
                'slug'    => 'ultra-companion',
                'init'    => 'ultra-companion/ultra-companion.php',
                'name'    => 'Ultra Companion',
              ),
            ),
          ),
        ),
        'food' => array(
          'categories'        => array( 'Food' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/food/',
          'xml_file'        => 'content.xml',
          'theme_settings'  => 'options.dat',
          'widgets_file'    => 'widgets.wie',
          'home_title'      => 'Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '5',
          'is_shop' => false,
          'menus'         => array(
              'main-menu' => 'Primary Menu',
              'top-menu' => 'Top Menu',
          ),
          'required_plugins'  => array(
            'free' => array(
              array(
                'slug'    => 'cs-framework',
                'init'    => 'cs-framework/cs-framework.php',
                'name'    => 'Cs Framework',
              ),
              array(
                'slug'    => 'ultra-companion',
                'init'    => 'ultra-companion/ultra-companion.php',
                'name'    => 'Ultra Companion',
              ),
            ),
          ),
        ),
        'fitness' => array(
          'categories'        => array( 'Sports' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/fitness/',
          'xml_file'        => 'content.xml',
          'theme_settings'  => 'options.dat',
          'widgets_file'    => 'widgets.wie',
          'home_title'      => 'Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '5',
          'is_shop' => false,
          'menus'         => array(
              'main-menu' => 'Primary Menu',
              'top-menu' => 'Top Menu',
          ),
          'required_plugins'  => array(
            'free' => array(
              array(
                'slug'    => 'cs-framework',
                'init'    => 'cs-framework/cs-framework.php',
                'name'    => 'Cs Framework',
              ),
              array(
                'slug'    => 'ultra-companion',
                'init'    => 'ultra-companion/ultra-companion.php',
                'name'    => 'Ultra Companion',
              ),
            ),
          ),
        ),
        'tech' => array(
          'categories'        => array( 'Tech' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/tech/',
          'xml_file'        => 'content.xml',
          'theme_settings'  => 'options.dat',
          'widgets_file'    => 'widgets.wie',
          'home_title'      => 'Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '5',
          'is_shop' => false,
          'menus'         => array(
              'main-menu' => 'Primary Menu',
              'top-menu' => 'Top Menu',
          ),
          'required_plugins'  => array(
            'free' => array(
              array(
                'slug'    => 'cs-framework',
                'init'    => 'cs-framework/cs-framework.php',
                'name'    => 'Cs Framework',
              ),
              array(
                'slug'    => 'ultra-companion',
                'init'    => 'ultra-companion/ultra-companion.php',
                'name'    => 'Ultra Companion',
              ),
            ),
          ),
        ),
      );
