      
    $(document).ready(function() {
     
        $('.first-slider').slick({
            dots: false,
            infinite: true,
            centerMode: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            nextArrow:$("#right-btn"),
            prevArrow:$("#left-btn"),
            responsive: [
            {
                breakpoint: 768,
                settings: {
                dots: false,
                infinite: true,
                centerMode: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows:false,
              }
            },
            {
                breakpoint: 480,
                settings: {
                dots: false,
                infinite: true,
                centerMode: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows:false,
              }
            }
          ]
        }); 
        
        $('.relatedproducts').slick({
            dots: false,
            infinite: true,
            centerMode: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            centerPadding: 0,
            autoplay: false,
            nextArrow:$("#nextbtn"),
            prevArrow:$("#prevbtn"),
        
            responsive: [
            {
                breakpoint: 768,
                settings: {
                dots: false,
                infinite: true,
                centerMode: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 3000,

              }
            },
            {
                breakpoint: 480,
                settings: {
                dots: false,
                infinite: true,
                centerMode: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 3000,

              }
            }
          ]
        });
      
     
    });








