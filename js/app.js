jQuery(document).ready(function($) {
    function getTopDistance() {
        let topDistance = $('.site-header').offset().top;
        console.log(topDistance);
        if (topDistance > 100) {
            $('.site-header').addClass('h80');
        } else {
            $('.site-header').removeClass('h80');
        }
    }


    $('#toggle').click(function() {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
    });
    $(window).scroll(getTopDistance);
    getTopDistance();


    $('#sidebar-icon').click(sidebarToggle);
    $('.sidebar-content .item').click(()=>{
        $('#sidebar').removeClass('translate0');
    })
    function sidebarToggle(){
        $('#sidebar').toggleClass('translate0');
        $('.s-layout__sidebar img').toggleClass('rotate180');
    }

});