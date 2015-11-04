$(function(){
	$('a.item').click(function() {
		$('.item').removeClass('active');
		$(this).addClass('active');
	})
	$('div.step').click(function(){
		$('.step').removeClass('active');
		$(this).addClass('active');

	})
	$('.ui.dropdown')
  .dropdown()
;
	$('.ui.accordion')
		.accordion();
	$('.menu .item')
  .tab()
;
$('.ui.sticky')
  .sticky({
    context: '#context'
  })
;

});