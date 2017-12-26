disableSelection(document.body);

$(document).ready(function() {
    $('.portfolio').innerfade({speed: 'slow', timeout: 3002, type: 'sequence', containerheight: '175px'});
//        $('.portfolio1').innerfade({speed: 'slow', timeout: 3002, type: 'sequence', containerheight: '175px'});
//        $('.portfolio2').innerfade({speed: 'slow', timeout: 2630, type: 'sequence', containerheight: '175px'});
//        $('.portfolio3').innerfade({speed: 'slow', timeout: 3469, type: 'sequence', containerheight: '175px'});
//        $('.portfolio4').innerfade({speed: 'slow', timeout: 2620, type: 'sequence', containerheight: '175px'});
//        $('.portfolio5').innerfade({speed: 'slow', timeout: 3489, type: 'sequence', containerheight: '175px'});
//        $('.portfolio6').innerfade({speed: 'slow', timeout: 2379, type: 'sequence', containerheight: '175px'});
//        $('.portfolio7').innerfade({speed: 'slow', timeout: 2592, type: 'sequence', containerheight: '175px'});

    $('#slider_left').innerfade({speed: 'slow', timeout: 4000, type: 'sequence', containerheight: '242px'});
    $('#slider_right').innerfade({speed: 'slow', timeout: 4500, type: 'sequence', containerheight: '242px'});

    $('#slider_page').innerfade({speed: 'slow', timeout: 3000, type: 'sequence', containerheight: '175px'});
});