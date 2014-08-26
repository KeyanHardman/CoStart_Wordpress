$(document).foundation();

$('.toggle-description').on('click', function(e){
    var el = e.target,
        target = "#"+$(el).data('target');

    $(target).slideToggle('slow');

});

$('.back-link a').on('click', function(e){
    e.preventDefault();
    window.history.back();
});

$('.interested-show').on('click', function(e){
    e.preventDefault();
    var el = e.target;

    $('.interested-form').slideToggle('slow');

});

$.fn.spin.presets.tco = {
  lines: 13, // The number of lines to draw
  length: 20, // The length of each line
  width: 10, // The line thickness
  radius: 30, // The radius of the inner circle
  corners: 1, // Corner roundness (0..1)
  rotate: 0, // The rotation offset
  direction: 1, // 1: clockwise, -1: counterclockwise
  color: '#000', // #rgb or #rrggbb or array of colors
  speed: 1, // Rounds per second
  trail: 60, // Afterglow percentage
  shadow: false, // Whether to render a shadow
  hwaccel: false, // Whether to use hardware acceleration
  className: 'spinner', // The CSS class to assign to the spinner
  zIndex: 2e9, // The z-index (defaults to 2000000000)
  top: '50%', // Top position relative to parent
  left: '50%' // Left position relative to parent
};

//$('.interested-form form').ajaxForm(options);

$('.interested-form form').on('valid.fndtn.abide', function(e){
    e.preventDefault();
    $('.interested-form .spinner-container').show();
    $('.interested-form .spinner-container').spin('tco');

    $
    var jqxhr = $.post(ajaxurl,$('.interested-form form').serialize(),
        function(response){
            $('.interested-form .response').show();

            $('.interested-form .spinner-container').hide();
            $('.interested-form .spinner-container').spin(false);

            $('.interested-form form').hide();
        }
    );

});

var init,
    getTickerNum;
  
numberInit = function () {
  
  var tickerNums = document.querySelectorAll('.ticker_num_container'),
    i,
    len;
  
  for (i = 0, len = tickerNums.length; i < len; i += 1) {
    tickerNums[i].innerHTML = getTickerNum(tickerNums[i].innerHTML);
  }
  
};

getTickerNum = function (num) {
  console.log('getting ticker num for '+num);
  var i,
    len,
    html = '';
  
  num = num.toString().replace(/\D/g, '');
  
  for (i = 0, len = num.length; i < len; i += 1) {
    html += '<span class="ticker_num"><span class="middle_line"></span>' + num[i] + '</span>';
  }
  
  return html;
  
};
if($('.ticker_num_container').length){
    numberInit();
}

$('.featured-content').slick({
  dots: true,
  autoplay: true,
  autoplaySpeed: 6000,
  speed: 1000,
  fade: true
});


