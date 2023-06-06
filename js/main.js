$ = jQuery;
$(document).ready(function($) {
	$('.info-sl__slider').slick({
		arrows: true,
		dots: false,
		infinite: true,
		speed: 1000,
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 1800,
		adaptiveHeight: true
	});

	$('.hamburger').click(function() {
		if ($(this).hasClass('active')) {
	      $(this).removeClass('active');
	      $(this).next().slideUp();
	    } else {
	      $(this).addClass('active');
	      $(this).next().slideDown();
	    }
	});
  $('.catalog-title .hamburger').click(function() {
    $(this).removeClass('active');
  });
	if($(window).width() < 862) {
	    $('.sub-menu').hide();
	    $('.menu-item-has-children a').click(function(e) {
	      e.preventDefault();
	      $(this).next().slideToggle();
	    })
	  }

	  jQuery('.slider-for').slick({
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    arrows: false,
	    fade: true,
	    asNavFor: '.slider-nav',
	    responsive: [{
	      breakpoint: 424,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        centerMode: false,
	        arrows: true,
	      }
	    }],
	  });
	  jQuery('.slider-nav').slick({
	    slidesToShow: 3,
	    slidesToScroll: 1,
	    asNavFor: '.slider-for',
	    dots: false,
	    arrows: false,
	    centerMode: true,
	    focusOnSelect: true,
	    responsive: [{
	      breakpoint: 424,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        centerMode: false,
	        arrows: true,
	      }
	    }],
	  });

	  jQuery('.tab_item').not(':first').hide();
	  jQuery('.tab-wrapper .tab').click(function () {
	    jQuery('.tab-wrapper .tab').removeClass('active').eq(jQuery(this).index()).addClass('active');
	    jQuery('.tab_item').hide().eq(jQuery(this).index()).fadeIn()
	  }).eq(0).addClass('active');

	  var product_info__link_height = 0;
	  jQuery('.product-info__link').each(function () {
	    var current_height = jQuery(this).height();
	    if (current_height > product_info__link_height) {
	      product_info__link_height = current_height;
	    }
	  });

	  jQuery(".uniSendBtn").click(function () {
    var formid = jQuery(this).data("formid");
    var message = jQuery(this).data("mailmsg");

    if ((jQuery("#" + formid + " .uniFormTel").val() == "") || (jQuery("#" + formid + " .uniFormTel").val().indexOf("_") > 0)) {
      jQuery("#" + formid + " .uniFormTel").css("background-color", "#ff91a4")
    } else {
      var jqXHR = jQuery.post(
        allAjax.ajaxurl, {
          action: 'universal_send',
          nonce: allAjax.nonce,
          msg: message,
          name: jQuery("#" + formid + " .uniFormName").val(),
          tel: jQuery("#" + formid + " .uniFormTel").val()
        }

      );


      jqXHR.done(function (responce) {

        jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
		jQuery('#messgeModal').arcticmodal();

      });

      jqXHR.fail(function (responce) {
        jQuery('#messgeModal #lineIcon').html('');
        jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
        jQuery('#messgeModal').arcticmodal();
      });
    }
  });

  jQuery("#order-submit-link").click(function () {
    var msg = jQuery(this).data("formid");
    var message = jQuery(this).data("mailmsg");
    var product = jQuery('.zInput').text();
    var growth = jQuery('#character-block-growth').text();
    var size = jQuery('#character-block-size').text();
    var color = jQuery("#character-block-color").text();
    var name = jQuery('#order-popup-form-name').val();
    var phone = jQuery('#order-popup-form-phone').val();
    var email = jQuery('#order-popup-form-email').val();
    var comment = jQuery('#order-comment').val();

    if ((phone == "") || (phone.indexOf("_") > 0)) {
      jQuery("#order-popup-form-phone").css("background-color", "#ff91a4")
    } else if((email == "") || (email.indexOf("_") > 0)) {
      jQuery("#order-popup-form-email").css("background-color", "#ff91a4")
    } else if((comment == "") || (comment.indexOf("_") > 0)) {
      jQuery("#order-comment").css("background-color", "#ff91a4")
    }
    else {
      var jqXHR = jQuery.post(
        allAjax.ajaxurl, {
          action: 'order_send',
          nonce: allAjax.nonce,
          msg: msg,
          product: product,
          growth: growth,
          size: size,
          color: color,
          name: name,
          phone: phone,
          email: email,
          comment: comment
        }

      );


      jqXHR.done(function (responce) {

        jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
        $('#orderModal').arcticmodal('close');
        jQuery('#messgeModal').arcticmodal();

      });

      jqXHR.fail(function (responce) {
        jQuery('#messgeModal #lineIcon').html('');
        jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
        jQuery('#messgeModal').arcticmodal();
      });
    }
  });

  jQuery('#order-link').click(function() {
    $("#orderModal").arcticmodal();
    $("#character-block-growth").text($("#un_growth").val());
    $("#character-block-size").text($("#un_size").val());
    $("#character-block-color").text($("#un_color").val());
  });

  // $('.product-loop__price').click(function() {
  //   var name = $(this).parent().siblings('.product-loop__title').text();
  //   $("#phoneModal .zInput").text(name);
  //   $('#phoneModal').arcticmodal();

  // });
  $('.product-loop__price').click(function() {
    var name = $(this).parent().siblings('.product-loop__title').text();
    var img_src = $(this).parent().parent().siblings('.product-loop-image__link').children('img').attr('src');
    $('.order-modal-img').attr('src', img_src);
    $("#orderModal .zInput").text(name);
    $('#orderModal').arcticmodal();

  });

  jQuery("#phone-submit-link").click(function () {
    var msg = jQuery(this).data("formid");
    var message = jQuery(this).data("mailmsg");
    var product = jQuery('#phoneModal .zInput').text();
    var name = jQuery('#phone-popup-form-name').val();
    var phone = jQuery('#phone-popup-form-phone').val();

    if ((phone == "") || (phone.indexOf("_") > 0)) {
      jQuery("#phone-popup-form-phone").css("background-color", "#ff91a4")
    } else {
      var jqXHR = jQuery.post(
        allAjax.ajaxurl, {
          action: 'order_send',
          nonce: allAjax.nonce,
          product: product,
          name: name,
          phone: phone,
        }

      );


      jqXHR.done(function (responce) {

        jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
        $('#phoneModal').arcticmodal('close');
        jQuery('#messgeModal').arcticmodal();

      });

      jqXHR.fail(function (responce) {
        jQuery('#messgeModal #lineIcon').html('');
        jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
        jQuery('#messgeModal').arcticmodal();
      });
    }
  });

  jQuery('#order-link').click(function() {
    $("#orderModal").arcticmodal();
    $("#character-block-growth").text($("#un_growth").val());
    $("#character-block-size").text($("#un_size").val());
    $("#character-block-color").text($("#un_color").val());
  });
	
  var inputmask_96e76a5f = {
    "mask": "+7(999)999-99-99"
  };
  jQuery("input[type=tel]").inputmask(inputmask_96e76a5f);
  
  jQuery(".mobMenuClose").click(function () { 
	jQuery(".mobMenu").hide();
  });
  
  jQuery(".mobCat").click(function () { 
	jQuery(".mobMenu .hamburger").addClass('active');
	jQuery(".mobMenu").show();
	  jQuery(".mobMenuListWrap").show();
  
  });
  
});