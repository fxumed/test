$('.param').click(function(){
	$('#prise_'+$(this).attr('data-id')).css('display', 'block');
	$('#tarifs').css('display', 'none');

});

$('.back_main').click(function(){
	console.log('#prise_'+$(this).attr('data-id'));
	$('#prise_'+$(this).attr('data-id')).css('display', 'none');
	$('#tarifs').css('display', 'block');

});


$('.prise_param').click(function(){
	console.log('sfsf');
	$('#prise_'+$(this).attr('data-id_tarif')).css('display', 'none');
	$('#prise_end_'+$(this).attr('data-id_prise')).css('display', 'block');

});


$('.back_tarif').click(function(){
	$('#prise_end_'+$(this).attr('data-id_prise')).css('display', 'none');
	$('#prise_'+$(this).attr('data-id_tarif')).css('display', 'block');

});