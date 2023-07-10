<?php

add_action( 'carbon_fields_register_fields', 'boots_register_custom_fields' );
function boots_register_custom_fields() {
require_once __DIR__ . '/inc/custom-field-options/metabox.php';
require_once __DIR__ . '/inc/custom-field-options/theme-options.php';
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
require_once( get_template_directory() . '/inc/carbon-fields/vendor/autoload.php' );
\Carbon_Fields\Carbon_Fields::boot();
}


  if(function_exists('register_sidebar'))
    register_sidebar(array('name' => 'leftsidebar'));
	
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(100, 100, false);
  add_theme_support('tovar-160');
  add_image_size('tovar-160', 160, 116);
  add_theme_support('tovar-300');
  add_image_size('tovar-300', 300, 9999);
  
  register_nav_menus( array( 
    'deader-top-menu' => "Меню в самой верхней шапке",
    'primary'=>__('Primary Menu'), 
    'main-menu' => 'Каталог',
    'top-menu' => 'Верхнее',
    'main-menu-2' => 'Нижнее')); 
  

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

// Подключение стилей и nonce для Ajax и скриптов во фронтенд 
add_action( 'wp_enqueue_scripts', 'my_assets' );
function my_assets() {

		// Подключение стилей 

		$all_version = "1.0.12";
		wp_enqueue_style("null-style", get_template_directory_uri()."/css/null.css", array(), $all_version, 'all'); //Очистка стандартных стилей
		wp_enqueue_style("font-style", get_template_directory_uri()."/css/fonts.css", array(), $all_version, 'all'); //Модальные окна (стили)
		wp_enqueue_style("font-icon-style", get_template_directory_uri()."/fonts/shop/style.css", array(), $all_version, 'all');
		wp_enqueue_style("newstyle-style", get_template_directory_uri()."/css/new_style.css", array(), $all_version, 'all'); //Файл с нововведениями
		wp_enqueue_style("newproduct-card-style", get_template_directory_uri()."/css/new_product_card.css", array(), $all_version, 'all'); //Файл с нововведениями Карточки товара
		wp_enqueue_style("bottom-mobile-menu-style", get_template_directory_uri()."/css/mobile_bottom_menu.css", array(), $all_version, 'all'); //Нижнее мобильное меню
		wp_enqueue_style("mobile-catalog-style", get_template_directory_uri()."/css/mobile_catalog_menu.css", array(), $all_version, 'all'); // Мобильный каталог
		wp_enqueue_style("font-head", get_template_directory_uri()."/css/header.css", array(), $all_version, 'all'); 
		
		// Подключение скриптов
		
		wp_enqueue_script( 'jquery');

		wp_enqueue_script( 'mobile_menu_js', get_template_directory_uri().'/js/mobile_catalog_menu.js', array(), $all_version , true); //Мобильное меню
		wp_enqueue_script( 'main_js', get_template_directory_uri().'/js/main.js', array(), $all_version , true); //Модальные окна
		
		// if ( is_page(164))
		// {
		// 	wp_enqueue_script( 'vue', get_template_directory_uri().'/js/vue.js', array(), ALL_VERSION , true);
		// 	wp_enqueue_script( 'axios', get_template_directory_uri().'/js/axios.min.js', array(), ALL_VERSION , true);
		// 	wp_enqueue_script( 'bascet', get_template_directory_uri().'/js/bascet.js', array(), ALL_VERSION , true);
		// }
		
		wp_localize_script( 'main', 'allAjax', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' ) 
		) );
}

//----------------------------------------------------------------------------


add_filter('navigation_markup_template', 'un_navigation_template', 10, 2);
function un_navigation_template($template, $class) {
  return '
  <nav class="navigation %1$s" role="navigation">
    <div class="nav-links">%3$s</div>
  </nav>    
  ';
}
add_action( 'wp_ajax_universal_send', 'universal_send' );
add_action( 'wp_ajax_nopriv_universal_send', 'universal_send' );

function universal_send() {
  if ( empty( $_REQUEST['nonce'] ) ) {
    wp_die( '0' );
  }

  if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
    
    $headers = array(
      'From: Сайт Военторг <noreply@yunarmy46.ru>',
      'content-type: text/html',
    );

    add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
    if (wp_mail(carbon_get_theme_option( 'as_email' ), 'Заказ с сайта', '<strong>С какой формы:</strong> '.$_REQUEST["msg"].'<br/> <strong>Имя/гос.номер:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["tel"], $headers))
      wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
    else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
    
  } else {
    wp_die( 'НО-НО-НО!', '', 403 );
  }
}

add_action( 'wp_ajax_order_send', 'order_send' );
add_action( 'wp_ajax_nopriv_order_send', 'order_send' );

function order_send() {
  if ( empty( $_REQUEST['nonce'] ) ) {
    wp_die( '0' );
  }

  if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
    
    $headers = array(
      'From: Сайт 1-й Военторг <noreply@1voentorg.ru>',
      'content-type: text/html',
    );
    add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
    //carbon_get_theme_option( 'as_email' )
    if (wp_mail(carbon_get_theme_option( 'as_email' ), 'Заказ с сайта', '<strong>С какой формы:</strong> '.$_REQUEST["msg"].'<br/> <strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["phone"] .' <br/> <strong>Email:</strong> '.$_REQUEST["email"] .' <br/> <strong>Товар:</strong> '.$_REQUEST["product"] .' <br/> <strong>Комментарий:</strong> '.$_REQUEST["comment"], $headers))
      wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
    else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
    
  } else {
    wp_die( 'НО-НО-НО!', '', 403 );
  }
}

function my_custom_sizes( $sizes ) {
	return array_merge( $sizes, array(
		'tovar-300' => 'Для страницы товара',
	) );
}

function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);
 

function un_breadcrumbs() {

  $text['home'] = 'Главная';
  $text['category'] = '%s';
  $text['search'] = 'Результаты поиска по запросу "%s"';
  $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
  $text['author'] = 'Статьи автора %s'; // текст для страницы автора
  $text['404'] = 'Ошибка 404'; // текст для страницы 404
  $text['page'] = 'Страница %s'; // текст 'Страница N'
  $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

  $wrap_before = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
  $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
  $sep = '<span class="breadcrumbs__separator"> › </span>'; // разделитель между "крошками"
  $before = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
  $after = '</span>'; // тег после текущей "крошки"

  $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  $show_last_sep = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать

  global $post;
  $home_url = home_url('/');
  $link = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
  $link .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
  $link .= '<meta itemprop="position" content="%3$s" />';
  $link .= '</span>';
  $parent_id = ( $post ) ? $post->post_parent : '';
  $home_link = sprintf( $link, $home_url, $text['home'], 1 );

  if ( is_home() || is_front_page() ) {

    if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

  } else {

    $position = 0;

    echo $wrap_before;

    if ( $show_home_link ) {
      $position += 1;
      echo $home_link;
    }

    if ( is_category() ) {
      $parents = get_ancestors( get_query_var('cat'), 'category' );
      foreach ( array_reverse( $parents ) as $cat ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
      }
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        $cat = get_query_var('cat');
        echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_current ) {
          if ( $position >= 1 ) echo $sep;
          echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
        } elseif ( $show_last_sep ) echo $sep;
      }

    } elseif ( is_search() ) {
      if ( $show_home_link && $show_current || ! $show_current && $show_last_sep ) echo $sep;
      if ( $show_current ) echo $before . sprintf( $text['search'], get_search_query() ) . $after;

    } elseif ( is_year() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . get_the_time('Y') . $after;
      elseif ( $show_home_link && $show_last_sep ) echo $sep;

    } elseif ( is_month() ) {
      if ( $show_home_link ) echo $sep;
      $position += 1;
      echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
      if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_day() ) {
      if ( $show_home_link ) echo $sep;
      $position += 1;
      echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
      $position += 1;
      echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
      if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_single() && ! is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $position += 1;
        $post_type = get_post_type_object( get_post_type() );
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
        if ( $show_current ) echo $sep . $before . get_the_title() . $after;
        elseif ( $show_last_sep ) echo $sep;
      } else {
        $cat = get_the_category(); $catID = $cat[0]->cat_ID;
        $parents = get_ancestors( $catID, 'category' );
        $parents = array_reverse( $parents );
        $parents[] = $catID;
        foreach ( $parents as $cat ) {
          $position += 1;
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        }
        if ( get_query_var( 'cpage' ) ) {
          $position += 1;
          echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
          echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
        } else {
          if ( $show_current ) echo $sep . $before . get_the_title() . $after;
          elseif ( $show_last_sep ) echo $sep;
        }
      }

    } elseif ( is_post_type_archive() ) {
      $post_type = get_post_type_object( get_post_type() );
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . $post_type->label . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_attachment() ) {
      $parent = get_post( $parent_id );
      $cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
      $parents = get_ancestors( $catID, 'category' );
      $parents = array_reverse( $parents );
      $parents[] = $catID;
      foreach ( $parents as $cat ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
      }
      $position += 1;
      echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
      if ( $show_current ) echo $sep . $before . get_the_title() . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_page() && ! $parent_id ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . get_the_title() . $after;
      elseif ( $show_home_link && $show_last_sep ) echo $sep;

    } elseif ( is_page() && $parent_id ) {
      $parents = get_post_ancestors( get_the_ID() );
      foreach ( array_reverse( $parents ) as $pageID ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
      }
      if ( $show_current ) echo $sep . $before . get_the_title() . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_tag() ) {
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        $tagID = get_query_var( 'tag_id' );
        echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_author() ) {
      $author = get_userdata( get_query_var( 'author' ) );
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_404() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . $text['404'] . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( has_post_format() && ! is_singular() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      echo get_post_format_string( get_post_format() );
    }

    echo $wrap_after;

  }
}

function mapinput_fn( $atts ) {
			$params = shortcode_atts( array( // в массиве укажите значения параметров по умолчанию
				'anchor' => 'Миша Рудрастых', // параметр 1
				'url' => 'https://misha.blog', // параметр 2
			), $atts );
			return "<div class = 'mapWrap'>".carbon_get_theme_option('magaz_map')."</div>";
		}
add_shortcode( 'mapinput', 'mapinput_fn' );

?>