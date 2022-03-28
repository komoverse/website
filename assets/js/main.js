var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
});


$('#backtotop').on('click', function() {
    console.log("back to top");
    $('html, body').animate({
        scrollTop: $('.top-page').offset().top
    }, 500);
});

function recheckTimeline() {
    if ($(".timeline").length > 0) {

        var window_height = $(window).height();
        var current_scroll_position = $(document).scrollTop();
        var roadmap_start_position = $("#roadmap-wrapper").offset().top;
        var roadmap_stop_position = roadmap_start_position + $("#roadmap-wrapper").outerHeight();
        var roadmap_height = roadmap_stop_position - roadmap_start_position - 220;
        var progress_scroll = (window_height / 2) + current_scroll_position - roadmap_start_position - 230;
        /* modify */
        var tStart = document.getElementById("t-start");
        var tEnd = document.getElementById("t-end");
        var tHeight = (tEnd.offsetTop) - (tStart.offsetTop);
        /* end of modify */
        /*$(".timeline").height(roadmap_height);*/
        $(".timeline").height(tHeight);

        /*if (progress_scroll <= roadmap_height) {*/
        if (progress_scroll <= tHeight) {    
            $(".timeline-progress").height(progress_scroll);
        }
        
        var dQpast = document.querySelector('.d-qpast');
		var dQpastBottom = (dQpast.offsetHeight/2) + 20;	
		var quest = document.querySelector('.q-current');
        let width = quest.offsetWidth;
        var col_width = $(".q-current").offset().left + (width/2);
        $(".timeline").css("left", col_width);
        $(".timeline-progress").css("left", col_width);
    	$(".timeline").css("margin-top", dQpastBottom);
		$(".timeline-progress").css("margin-top", dQpastBottom);
    }
}

function toggleNavCommunity() {
        $('.second-nav-more').hide();
        $('.second-nav-community').show(200);
}

function toggleNavMore() {
        $('.second-nav-community').hide();
        $('.second-nav-more').show(200);
}

function hideSecondNav() {
        $('.second-nav-community').hide(200);
        $('.second-nav-more').hide(200);
}

$(document).ready(function() {
    console.log("initiated");
    recheckTimeline();
    $('.second-nav-community').on("mouseleave", function(){$('.second-nav-community').hide(200)});
    $('.second-nav-more').on("mouseleave", function(){$('.second-nav-more').hide(200)});
    $('.exit-second-nav').on("mouseenter", function(){$('.second-nav-community').hide(200);$('.second-nav-more').hide(200);})
});
$(document).scroll(function() {
    console.log("scrolled");
    recheckTimeline();
    
    if ($(document).scrollTop() < 10) {
        $("#backtotop").hide(200);
    } else {
        $("#backtotop").show(200);
    }

});

function toggleLangSwitch() {
    $('.lang-switch').toggle(200);
}

$('.lang-switch').on('mouseleave', function(){
    $('.lang-switch').hide(200);
});