/** Hauptprogramm */
$(document).ready(function() {
    enableTabs();
    handleLayover();
    filter();
    enable_filter();
})

/** Nebenprogramme */
function enableTabs() {
	$('ul.tabs li').first().addClass('current');
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})
}

function handleLayover() {
    $('.layover_open').click(function(){
        $('.layover').show();
    })
    $('.layover_close').click(function() {
        $('.layover').hide();
    })
}

function enable_filter() {
    $('.form_filter_job, .form_filter_class, .form_filter_group, .form_filter_year').change(function(){
        if($('.form_filter_job').val() && $('.form_filter_class').val() && $('.form_filter_group').val() && $('.form_filter_year').val() != 'null') {
            $('.form_filter_submit').removeClass('disabled')
        }
    })
}
