import './bootstrap';
import 'bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';
import 'datatables/media/css/jquery.dataTables.css';
import 'animate.css/animate.min.css';
import 'bxslider/dist/jquery.bxslider.min.js';
import 'bxslider/dist/jquery.bxslider.min.css'; 

$(document).ready(function() {
    $('.bxslider').bxSlider({
        auto: true,           // Enable auto sliding
        pause: 4000,          // Pause time for each slide in milliseconds
        speed: 500,           // Speed of transition between slides
        slideWidth: 600,      // Width of each slide
        minSlides: 1,         // Minimum number of slides visible at a time
        maxSlides: 1,         // Maximum number of slides visible at a time
        slideMargin: 10,      // Margin between slides
        moveSlides: 1         // Number of slides to move at a time
    });

    //ticker
    $('.bxslider-ticker').bxSlider({
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 'auto',
        slideMargin: 20,
        ticker: true,
        speed: 9000
      });
});