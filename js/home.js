// jQuery area start
$(document).ready(function(){
    // start modal search box
    $(".search-btn").click(function(){
        $(".search_modal_container").toggleClass("active");
    })
    $(".search_modal_container").click(function(e){
        if(!e.target.classList.contains("search_box")){
            $(".search_modal_container").removeClass("active");
        }
    })
    // end modal search box
    // start heading section
    $(window).scroll(function(){
        var getScrollTop = $(this).scrollTop();
        
        if(getScrollTop >= 100){
            $("#navbar").addClass("active");
        }else {
            $("#navbar").removeClass("active");
        }

        console.log(getScrollTop);
        if(getScrollTop >= 750){
            $(".product_item").addClass("active");
        }else {
            $(".product_item").removeClass("active");
        }

        if(getScrollTop >= 1600){
            $(".about_us_section").addClass("active");
        }else {
            $(".about_us_section").removeClass("active");
        }

        if(getScrollTop >= 2100){
            $(".stablished_content_container").addClass("active");
        }else {
            $(".stablished_content_container").removeClass("active");
        }
        if(getScrollTop >= 3100){
            $(".blog_section").addClass("active");
        }else{
            $(".blog_section").removeClass("active");
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
    // $(window).click(function(e){
    //     if(!e.target.classList.contains("fa-edit") && !e.target.classList.contains("product_edit_form")){
    //         $(".edit_btn").removeClass("active");
    //         $(".product_content").removeClass("active");
    //         $(".product_edit_form").removeClass("active");
    //     }
    // })
    // end product show item section
})


// jQuery area end