// jQuery area start
$(document).ready(function(){
    // start heading section
    $(window).scroll(function(){
        var getScrollTop = $(this).scrollTop();
        
        if(getScrollTop >= 100){
            $("#navbar").addClass("active");
        }else {
            $("#navbar").removeClass("active");
        }
    })
    $("#banner-carousel").owlCarousel({
        items : 1,
        loop : true,
        autoplay : true,
        autoplayTimeout : "5000",
        smartSpeed: "1000",
        autoplayHoverPause: true,
        animateIn : "animate__fadeIn",
        animateOut: "animate__fadeOut"
    });
    // $(".banner_btn").hover(()=>{
    //     console.log("in")
    //     $(this).css({
    //         "background-color" :"blue",
    //     })
    // },()=>{
    //     console.log("out")
    //     $(this).css({
    //         "background-color" :"gray",
    //     })
    // })

    // end heading section

    // Start Product show item section
    $(".edit_btn").click(function(){
        $(this).toggleClass("active");
        $(this).parent().find(".product_content").toggleClass("active");
        $(this).parent().find(".product_edit_form").toggleClass("active");
    })
    $(window).click(function(e){
        if(!e.target.classList.contains("fa-edit")){
            $(".edit_btn").removeClass("active");
            $(".product_content").removeClass("active");
            $(".product_edit_form").removeClass("active");
        }
    })
    // end product show item section
})


// jQuery area end