<?php
if(!defined('ABSPATH')) {
    exit();
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;
Container::make( 'theme_options', 'as_theme_options', 'Настройки темы' )
    ->add_tab('Главная', array(
      Field::make( 'image', 'as_logo', 'Логотип')
        ->set_width(30),
    ))
    ->add_tab('Слайдер (New)', array(
      Field::make('complex', 'slider_index', 'Слайдер на главной')
        ->add_fields(array(
          Field::make('image', 'slider_img', 'Картинка слайдера')
            ->set_width(50),
          Field::make('text', 'slider_title', 'Заголовок слайдера')
            ->set_width(50),
          Field::make('text', 'slider_subtitle', 'Подзаголовок слайдера')
            ->set_width(50),
          Field::make('text', 'slider_discount', 'Информация о скидке')
            ->set_width(50),
          
          Field::make('text', 'slider_lnk', 'Ссылка на страницу')
            ->set_width(50),
        ))
    ))

    ->add_tab('Слайдер', array(
        Field::make('text', 'as_banner_1_text', 'Текст баннера 1')
          ->set_width(30),
        Field::make('text', 'as_banner_1_link', 'Ccылка баннера 1')
          ->set_width(30),
		Field::make('image', 'as_banner_1_img', 'Фото Банера 1')
          ->set_width(30),
		  
        Field::make('text', 'as_banner_2_text', 'Текст баннера 2')
          ->set_width(30),
        Field::make('text', 'as_banner_2_link', 'Ccылка баннера 2')
          ->set_width(30),
		Field::make('image', 'as_banner_2_img', 'Фото Банера 2')
          ->set_width(30),
		  
        Field::make('text', 'as_banner_3_text', 'Текст баннера 3')
          ->set_width(30),
        Field::make('text', 'as_banner_3_link', 'Ccылка баннера 3')
          ->set_width(30),
		Field::make('image', 'as_banner_3_img', 'Фото Банера 3')
          ->set_width(30),
		  
        Field::make('text', 'as_banner_4_text', 'Текст баннера 4')
          ->set_width(30),
        Field::make('text', 'as_banner_4_link', 'Ccылка баннера 4')
          ->set_width(30),
		Field::make('image', 'as_banner_4_img', 'Фото Банера 4')
          ->set_width(30),
    ))
    ->add_tab("Баннеры", array(
        Field::make('text', 'as_little_banner_text_1', 'Заголовок баннера 1')
          ->set_width(30),
        Field::make('text', 'as_little_banner_link_1', 'Ссылка баннера 1')
          ->set_width(30),
		Field::make('image', 'as_little_banner_img_1', 'Фото Банера 1')
          ->set_width(30),
		  
        Field::make('text', 'as_little_banner_text_2', 'Заголовок баннера 2')
          ->set_width(30),
        Field::make('text', 'as_little_banner_link_2', 'Ссылка баннера 2')
          ->set_width(30),
        Field::make('image', 'as_little_banner_img_2', 'Фото Банера 2')
          ->set_width(30),
		  
		Field::make('text', 'as_little_banner_text_3', 'Заголовок баннера 3')
          ->set_width(30),
        Field::make('text', 'as_little_banner_link_3', 'Ссылка баннера 3')
          ->set_width(30),
		Field::make('image', 'as_little_banner_img_3', 'Фото Банера 3')
          ->set_width(30),
    ))
	->add_tab("Баннер акции", array(
        Field::make('text', 'action_zag', 'Заголовок баннера акции')
          ->set_width(30),
        Field::make('text', 'action_text', 'Ссылка баннера акции')
          ->set_width(30),
		Field::make('image', 'action_img', 'Фото банера акции')
          ->set_width(30),
		  
      
    ))
	->add_tab("Соцсети", array(
        Field::make('text', 'vk_lnk', 'Vk')
          ->set_width(100),
		Field::make('text', 'ok_lnk', 'Однокласники')
          ->set_width(100),
		Field::make('text', 'tg_lnk', 'telegram')
          ->set_width(100),
    ))
    ->add_tab('Контакты', array(
        Field::make( 'text', 'as_phone', __( 'Телефон' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email', __( 'Email' ) )
          ->set_width(50),
        Field::make( 'text', 'as_email_send', __( 'Email для отправки' ) )
          ->set_width(50),
        Field::make( 'text', 'as_inn', __( 'ИНН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_orgn', __( 'ОРГН' ) )
          ->set_width(50),
        Field::make( 'text', 'as_address', __( 'Адрес' ) )
          ->set_width(50),
		  
		Field::make( 'textarea', 'magaz_map', __( 'Карта (скрипт с конструктора)' ) )
          ->set_width(100),
    ) );

    Container::make( 'term_meta', __( 'Дополнительные поля для категорий', 'crb' ) )
    ->where( 'term_taxonomy', '=', 'category' ) 
    ->add_fields( array(
        Field::make('image', 'cat_preview', 'Превю категории'),
    ) );


Container::make('post_meta', 'un_custom_post', 'Доп поля')
  ->add_fields( array(
        Field::make( 'text', 'price_n', 'Цена')
          ->set_width(50),
        Field::make( 'text', 'price_old', 'Старая цена')
          ->set_width(50),
        Field::make( 'text', 'sku_n', 'Артикул')
          ->set_width(50),
		Field::make( 'text', 'stiker', 'Стикер')
          ->set_width(50),
		
    Field::make( 'text', 'nal', 'Наличие')
          ->set_width(50),
        // Field::make( 'text', 'un_growth', 'Рост')
        //   ->set_width(30),
        // Field::make( 'text', 'un_size', 'Размер')
        //   ->set_width(30),
        // Field::make( 'text', 'un_color', 'Цвет')
        //   ->set_width(30),
        Field::make( 'rich_text', 'un_specifications', __( 'Характеристики' ) ),
        Field::make( 'rich_text', 'un_short_derscr', __( 'Краткое описание' ) ),
        Field::make( 'rich_text', 'un_derscr', __( 'Oписание' ) ),
        Field::make( 'rich_text', 'un_application', __( 'Характеристики Полные' ) ),
        Field::make('image', 'un_gallery_img_1', 'Фото 1')
          ->set_width(20),
        Field::make('image', 'un_gallery_img_2', 'Фото 2')
          ->set_width(20),
        Field::make('image', 'un_gallery_img_3', 'Фото 3')
          ->set_width(20),
        Field::make('image', 'un_gallery_img_4', 'Фото 4')
          ->set_width(20),
    ) );