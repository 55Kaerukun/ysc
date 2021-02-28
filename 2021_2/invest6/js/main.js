$(function(){

    
    // banner1 click
    $(".banner1, .banner3_area").on('click', function(){
        // $('#form2').hide();
        // $('#form1').show();
        $("html,body").animate({scrollTop:$('#form1').offset().top - 50});
        return false;
    });

    //banner2 click
    $(".banner2").on('click', function(){
        // $('#form1').hide();
        // $('#form2').show();
        $("html,body").animate({scrollTop:$('#form2').offset().top - 50});
        return false;
    });



    $(window).on('scroll load', function (){


        $('.animate__animated').each(function(){
            // スクロールの値を取得
            var scroll = $(window).scrollTop();
    
            // ウインドウの高さを取得
            var windowHeight = $(window).height();


            // faqの高さ
            var faqHeight = $(".faq").offset().top;

    
            // ターゲットが可視範囲に入ったらscroll-inクラスを付与
            if (scroll > windowHeight){
                $(this).addClass('animate__backInLeft show');

                if (scroll > faqHeight){
                    $(this).removeClass('animate__backInLeft show');
                }


            }
            else {
                //$(this).removeClass('scroll-in');
                $(this).removeClass('animate__backInLeft show');
            }


        });


    
    });



    

});