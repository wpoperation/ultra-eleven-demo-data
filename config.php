<?php

      $data = array(
        'magazine' => array(
          'categories'        => array( 'Magazine' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/magazine/',
          'xml_file'        => 'content.xml',
          'theme_options'  => 'options.txt',
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
                'slug'    => 'elementor',
                'init'    => 'elementor/elementor.php',
                'name'    => 'Elementor',
              ),
              array(
                'slug'    => 'ultra-eleven-addons',
                'init'    => 'ultra-eleven-addons/ultra-eleven-addons.php',
                'name'    => 'Ultra Eleven Addons',
              )
            ),
          ),
        ),
        'news' => array(
          'categories'        => array( 'News' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/news-magazine/',
          'xml_file'        => 'content.xml',
          'theme_options'  => 'options.txt',
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
                'slug'    => 'elementor',
                'init'    => 'elementor/elementor.php',
                'name'    => 'Elementor',
              ),
              array(
                'slug'    => 'ultra-eleven-addons',
                'init'    => 'ultra-eleven-addons/ultra-eleven-addons.php',
                'name'    => 'Ultra Eleven Addons',
              )
            ),
          ),
        ),
        'default' => array(
          'categories'        => array( 'News','Magazine' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/default/',
          'xml_file'        => 'content.xml',
          'theme_options'  => 'options.txt',
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
                'slug'    => 'ultra-eleven-addons',
                'init'    => 'ultra-eleven-addons/ultra-eleven-addons.php',
                'name'    => 'Ultra Eleven Addons',
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
          'categories'        => array( 'Fashion','News' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/fashion/',
          'xml_file'        => 'content.xml',
          'theme_options'  => 'options.txt',
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
                'slug'    => 'ultra-eleven-addons',
                'init'    => 'ultra-eleven-addons/ultra-eleven-addons.php',
                'name'    => 'Ultra Eleven Addons',
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
          'categories'        => array( 'Lifestyle','News' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/lifestyle/',
          'xml_file'        => 'content.xml',
          'theme_options'  => 'options.txt',
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
                'slug'    => 'ultra-eleven-addons',
                'init'    => 'ultra-eleven-addons/ultra-eleven-addons.php',
                'name'    => 'Ultra Eleven Addons',
              )
            ),
          ),
        ),
        'sports' => array(
          'categories'        => array( 'Sports' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/sports/',
          'xml_file'        => 'content.xml',
          'theme_options'  => 'options.txt',
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
                'slug'    => 'ultra-eleven-addons',
                'init'    => 'ultra-eleven-addons/ultra-eleven-addons.php',
                'name'    => 'Ultra Eleven Addons',
              ),
            ),
          ),
        ),
        'food' => array(
          'categories'        => array( 'Food' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/food/',
          'xml_file'        => 'content.xml',
          'theme_options'  => 'options.txt',
          'widgets_file'    => 'widgets.wie',
          'home_title'      => 'New Home',
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
                'slug'    => 'elementor',
                'init'    => 'elementor/elementor.php',
                'name'    => 'Elementor',
              ),
              array(
                'slug'    => 'ultra-eleven-addons',
                'init'    => 'ultra-eleven-addons/ultra-eleven-addons.php',
                'name'    => 'Ultra Eleven Addons',
              ),
            ),
          ),
        ),
        'fitness' => array(
          'categories'        => array( 'Fitness' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/fitness/',
          'xml_file'        => 'content.xml',
          'theme_options'  => 'options.txt',
          'widgets_file'    => 'widgets.wie',
          'home_title'      => 'New Home',
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
                'slug'    => 'elementor',
                'init'    => 'elementor/elementor.php',
                'name'    => 'Elementor',
              ),
              array(
                'slug'    => 'ultra-eleven-addons',
                'init'    => 'ultra-eleven-addons/ultra-eleven-addons.php',
                'name'    => 'Ultra Eleven Addons',
              ),
            ),
          ),
        ),
        'tech' => array(
          'categories'        => array( 'Tech','News' ),
          'preview_url' => 'http://demo.wpoperation.com/ultra-eleven/tech/',
          'xml_file'        => 'content.xml',
          'theme_options'  => 'options.txt',
          'widgets_file'    => 'widgets.wie',
          'home_title'      => 'New Home',
          'blog_title'      => 'Blog',
          'posts_to_show'   => '5',
          'is_shop' => false,
          'menus'         => array(
              'main-menu' => 'Primary menu',
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
                'slug'    => 'elementor',
                'init'    => 'elementor/elementor.php',
                'name'    => 'Elementor',
              ),
              array(
                'slug'    => 'ultra-eleven-addons',
                'init'    => 'ultra-eleven-addons/ultra-eleven-addons.php',
                'name'    => 'Ultra Eleven Addons',
              ),
            ),
          ),
        ),
      );
$file = json_encode($data);
print_r($file);