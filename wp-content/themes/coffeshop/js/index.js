var $current = document.querySelector('.quant .current');
var $total = document.querySelector('.quant .total');

$('.slider').on('init', function(slick, currentSlide) {
    $current.innerHTML = currentSlide.$slider.length;
    $total.innerHTML =  currentSlide.$slides.length;
})
.on('afterChange', function(event, slick, currentSlide, nextSlide){
    $current.innerHTML = currentSlide + 1;     
});

$('.slider').slick({
    dots: true,
    swipe: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    lazyLoad: 'ondemand'
});