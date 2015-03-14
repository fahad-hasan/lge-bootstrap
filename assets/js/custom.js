var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

var open_popovers = [];

/*(function ($) {
  $('.spinner .btn:first-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
  });
  $('.spinner .btn:last-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
  });
})(jQuery);*/

$(document).ready(function(){
	var shown = false;
  var scroll_speed = 20;
  if (isMobile.any()) {
    scroll_speed = 80;
  }

  //DIV HEIGHT ADJUSTMENTS
  var viewport_height = $(window).height();
  
  var nav_box_top = $('.left-nav-box').offset().top;
  var nav_box_height = viewport_height - nav_box_top - 41;
  $('.left-nav-box').css('min-height', nav_box_height + 'px');

  if ($('.large-table .right-nav-box').length > 0) {
    nav_box_top = $('.large-table .right-nav-box').offset().top;
    nav_box_height = viewport_height - nav_box_top - 41;
    $('.large-table .right-nav-box').css('min-height', nav_box_height + 'px');
  }
  

  var filter_top = $('#dashboard-filters').offset().top;
  var filter_height = viewport_height - filter_top - 41;
  $('.filters').css('min-height', filter_height + 'px');
	$('#dashboard-filters').slimScroll({
      wheelStep: scroll_speed,
      height: filter_height + 'px'
  });


  if ($('div.large-table div.dashboard-table-body').length > 0) {
    var table_top = $('div.large-table div.dashboard-table-body').offset().top;
    var table_height = viewport_height - table_top - 41;
    $('div.large-table div.dashboard-table-body').slimScroll({
        wheelStep: scroll_speed,
        height: table_height + 'px'
    });
  }

  if ($('.single-table div.dashboard-table-body').length > 0) {
    var table_top = $('.single-table div.dashboard-table-body').offset().top;
    var table_height = viewport_height - table_top - 47;
    $('.single-table div.dashboard-table-body').slimScroll({
        wheelStep: scroll_speed,
        height: table_height + 'px'
    });
  }

  if ($('.height-push-footer').length > 0){

    viewport_height = $(window).height();
    var table_body_top = $('.height-push-footer').offset().top;
    var table_body_height = viewport_height - table_body_top - 41;

    if ($('.height-push-footer').attr('scroll-offset') != undefined) {
      table_body_height = table_body_height - $('.height-push-footer').attr('scroll-offset');
    }

    if (table_body_height < 200) {
      table_body_height = 200;
    }

    $('.height-push-footer').css('min-height', table_body_height + 'px');

    $('.height-push-footer').slimScroll({
        wheelStep: scroll_speed,
        height: table_body_height + 'px'
    });
  }

  if ($('.left-nav-box').length > 0) {
    
    var left_nav_height = parseInt($('.left-nav-box').css('height').replace('px', '')) + 80;
    var footer_top = $('footer').offset().top;

    if (footer_top > left_nav_height) {
      var new_height = footer_top - 70;
      $('.left-nav-box').css('height', new_height + 'px');
      console.log('Adjusting left nav: ' + new_height + 'px');
    }
  }

  if ($('.scroll-slim').length > 0){
    $('.scroll-slim').slimScroll({
        wheelStep: scroll_speed,
        height: '145px'
    });
  }

  $('.apt-half-right, .apt-half-left').tooltip();

  $('.action-clock').tooltip({
  	'title': 'Extra 15 minutes',
  	'placement': 'top',
  	'container': 'body'
  });

  $('i.icon-repeat').tooltip({
    'title': 'Repeated',
    'placement': 'top',
    'container': 'body'
  });

  $('.apt span').click(function(e){
    e.stopPropagation();
  	if ($(this).attr('pshown') != 'true') {
  		var title = $(this).text();
  		var content = '<div class="popover-custom-content">'+
  										'<div class="popover-content-line">'+
  											'<i class="icon-calendar-pop"></i><span>Friday, May 23, 2014</span>'+
  										'</div>'+
  										'<div class="popover-content-line">'+
  											'<i class="icon-clock-pop"></i><span>9:00am - 9:30am</span>'+
  										'</div>'+
  										'<div class="popover-content-line">'+
  											'<i class="icon-ok-pop"></i><span>4 of 4 Spots Available</span>'+
  										'</div>'+
  									'</div>';
  		$(this).attr('pshown', 'true');
  		$(this).popover({
  			'title': title,
		  	'content': content,
		  	'placement': 'right',
		  	'container': 'body',
		  	'html': true,
		  	'trigger': 'manual'
		  });
		  $(this).popover('show');
      open_popovers.push($(this));
  	} else {
  		$(this).attr('pshown', 'false');
  		$(this).popover('destroy');
  	}
  });

  $('#messages').click(function(e){
    e.stopPropagation();
  	if ($(this).attr('pshown') != 'true') {
  		var title = $(this).text();
  		var content = '<div class="popover-message-content">'+
  										'<div class="popover-message-line">'+
  											'<span>SMS reminders are sent at 10:00AM</span>'+
  											'<a href="#"><i class="icon-cart"></i></a>'+
  											'<small>Balance: $0.00</small>'+
  										'</div>'+
  										'<div class="popover-message-line">'+
  											'<span>SMS reminders are sent at 7:00AM</span>'+
  											'<a href="#"><i class="icon-cart"></i></a>'+
  											'<small>Balance: $5.00</small>'+
  										'</div>'+
  										'<div class="popover-message-line">'+
  											'<span>SMS reminders are sent at 5:00AM</span>'+
  											'<a href="#"><i class="icon-cart"></i></a>'+
  											'<small>Balance: $10.00</small>'+
  										'</div>'+
  									'</div>';
  		$(this).attr('pshown', 'true');
  		$(this).popover({
		  	'content': content,
		  	'placement': 'bottom',
		  	'container': 'body',
		  	'html': true,
		  	'trigger': 'manual'
		  });
		  $(this).popover('show');
      open_popovers.push($(this));
  	} else {
  		$(this).attr('pshown', 'false');
  		$(this).popover('destroy');
  	}
  });

  $('a#calendar-button').click(function(e){
    e.stopPropagation();
    if ($(this).attr('pshown') !== 'true') {
      var title = $(this).text();
      var content = '<div id="inline-datepicker">'+
                    '</div>';
      var left = $('#calendar-button').offset().left - 100;
      if (left < 0) {
        left = 15;
      }
      var top = $('#calendar-button').offset().top + $('#calendar-button').height() + 12;
      var template_style = 'top: '+top+'px; left: '+left+'px; display: block; position: absolute; z-index: 99999;';
      console.log(template_style);
      $(this).attr('pshown', 'true');
      $(this).popover({
        'content': content,
        'placement': 'bottom',
        'container': 'body',
        'html': true,
        'trigger': 'manual',
        'template': '<div id="calendar-popover" class="popover"><div class="arrow"></div><div id="popover-content-datepicker"></div></div>'
      });
      
      $(this).popover('show');
      open_popovers.push($(this));
      $('#popover-content-datepicker').datepicker();

      $('#calendar-popover').attr('style', template_style);

    } //else {
      //$(this).attr('pshown', 'false');
      //$(this).popover('destroy');
    //}
  });

  $('.dashboard-table tbody tr').hover(function(){
    $(this).find('div.apt:not(.apt-add)').append('<a data-toggle="modal" data-target=".edit-booking" class="action action-edit" href="#"></a>');
  }, function(){
    $(this).find('div.apt a.action-edit').remove();
  });

  $('small.help').popover({
      //'title': title,
      'content': '<div class="popover-custom-content">'+
                   'Set this to 60 minutes if you only accept bookings on the hour, 30 minutes if you acceot them either on the hour or every half hour, etc.'+
                 '</div>',
      'placement': 'right',
      'container': 'body',
      'html': true,
      'trigger': 'hover'
    });
  /*$('small.help').click(function(e){
    e.stopPropagation();
    if ($(this).attr('pshown') != 'true') {
      //var title = $(this).text();
      var content = '<div class="popover-custom-content">'+
                      'Custom content goes here'+
                    '</div>';
      $(this).attr('pshown', 'true');
      $(this).popover({
        //'title': title,
        'content': content,
        'placement': 'right',
        'container': 'body',
        'html': true,
        'trigger': 'hover'
      });
      $(this).popover('show');
      open_popovers.push($(this));
    } else {
      $(this).attr('pshown', 'false');
      $(this).popover('destroy');
    }
  });*/

  $('*').not('#calendar-button').not('#messages').not('.apt span').not('small.help').click(function(){
    for (var i = 0; i < open_popovers.length; i++) {
      var item = open_popovers.pop();
      item.attr('pshown', 'false');
      item.popover('destroy');
    }
  });
});