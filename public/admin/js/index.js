// // slider image
// const sliders = document.querySelectorAll(".slider_img");
// // console.log(sliders);
// // count total sliders
// const totalSliders = sliders.length;
//  var i =0;
//  CustomSlider();

// function CustomSlider() {
//     for(let j=0; j<totalSliders; j++){
//         sliders[j].style.display = 'none';
//         // slide left
//         // sliders[j].style.left = `{}`;
        
//     } 
//     i++;
//     if(i>totalSliders){
//         i=1;
//     }
//     sliders[i-1].style.display = 'block';
//     // sliders[i-1].style.transform = `translateX(${-100 * (i-1)}vw)`;
//     setTimeout(CustomSlider, 4000);
// }



// slider

jQuery(".owl-carousel").owlCarousel({
    autoplay: true,
    lazyLoad: true,
    loop: true,
  //   margin: 20,
     /*
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    */
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    nav: true,
    dots:false,
    responsive: {
      0: {
        items: 1
      },
  
      600: {
        items: 1
      },
  
      1024: {
        items: 2
      },
  
      1366: {
        items: 1
      }
    }
  });