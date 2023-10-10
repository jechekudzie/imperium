/* JavaScript Document */
jQuery(document).ready(function() {
    'use strict';

	/* image-carousel function by = owl.carousel.js */
	jQuery('.img-carousel').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			1024:{
				items:3
			},
			1200:{
				items:4
			}
		}
	})

	/* image-carousel no margin function by = owl.carousel.js */
	jQuery('.img-carousel-content').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			1024:{
				items:3
			},
			1200:{
				items:4
			}
		}
	})

	/* service carousel no margin function by = owl.carousel.js */
	jQuery('.service-carousel').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			1024:{
				items:2
			},
			1200:{
				items:2.5
			},
			1400:{
				items:3.7
			}
		}
	})
	
	/*  Portfolio Carousel function by = owl.carousel.js */
	jQuery('.portfolio-carousel').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			1024:{
				items:3
			},
			1200:{
				items:4
			}
		}
	})

	/*  Portfolio Carousel no margin function by = owl.carousel.js */
	jQuery('.portfolio-carousel-nogap').owlCarousel({
		loop:true,
		margin:0,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			
			480:{
				items:2
			},			
			
			767:{
				items:3
			},
			1200:{
				items:4
			}
		}
	})
	
	/*  Blog post Carousel function by = owl.carousel.js */
	jQuery('.blog-carousel').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},			
			991:{
				items:2
			},
			1000:{
				items:3
			}
		}
	})
	
	/*  our-team-carousel Carousel function by = owl.carousel.js */
	jQuery('.our-team-carousel').owlCarousel({
		loop:true,
		margin:30,
		center: true,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots:true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			767:{
				items: 2
			},
			992:{
				items:3
			},
			1000:{
				items:3
			}
		}
	})
	
	/*  our-services post Carousel function by = owl.carousel.js */
	jQuery('.our-services-carousel').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			360:{
				items:1
			},
			479:{
				items:1
			},
			480:{
				items:2
			},						
			991:{
				items:2
			},
			1000:{
				items:3
			},
			1199:{
				items:3
			},
			1200:{
				items:4
			}
		}
	})
	
	/*  Blog post Carousel function by = owl.carousel.js */
	jQuery('.event-carousel').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			
			480:{
				items:2
			},			
			
			767:{
				items:3
			},
			1000:{
				items:3
			}
		}
	})		
	
	/*  Blog post Carousel function by = owl.carousel.js */
	jQuery('.client-logo-carousel').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			
			480:{
				items:2
			},			
			
			767:{
				items:3
			},
			1000:{
				items:5
			}
		}
	})	
	
	/* Fade slider for home function by = owl.carousel.js */
	jQuery('.owl-fade-one').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		autoplayTimeout:2000,
		nav:true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		items:1,
		dots: false,
		animateOut:'fadeOut',
	})	
	
	/*  testimonial one function by = owl.carousel.js */
	jQuery('.testimonial-one').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			
			480:{
				items:1
			},			
			
			767:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})		
	
	/* testimonial two function by = owl.carousel.js */
	jQuery('.testimonial-two').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			
			480:{
				items:2
			},			
			
			991:{
				items:2
			},
			1000:{
				items:3
			}
		}
	})
		
	/*  testimonial three function by = owl.carousel.js */
	jQuery('.testimonial-three').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			
			480:{
				items:2
			},			
			
			991:{
				items:2
			},
			1000:{
				items:3
			}
		}
	})
	
	/*  testimonial four function by = owl.carousel.js */
	jQuery('.testimonial-four').owlCarousel({
		loop:true,
		margin:80,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:true,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			991:{
				items:2
			}
		}
	})
	
	/*  testimonial four function by = owl.carousel.js */
	jQuery('.testimonial-five').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,		
		nav:false,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			991:{
				items:2
			}
		}
	})
	
	/*  testimonial-six function by = owl.carousel.js */
	jQuery('.testimonial-six').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,		
		nav:true,
		dots: true,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			991:{
				items:1
			},
			992:{
				items:2
			}
		}
	})
	
	/*  Our Classes function by = owl.carousel.js */
	jQuery('.our-classes').owlCarousel({
		loop:true,
		margin:30,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
        autoplay: 3000,
		nav:false,
		dots: false,
		navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			
			480:{
				items:2
			},			
			
			767:{
				items:3
			},
			1000:{
				items:5
			}
		}
	})
	
	/* image-carousel function by = owl.carousel.js */
	jQuery('.carousel-gallery').owlCarousel({
		loop:false,
		autoplaySpeed: 3000,
		navSpeed: 3000,
		paginationSpeed: 3000,
		slideSpeed: 3000,
		smartSpeed: 3000,
		autoplay: 3000,
		margin:30,
		nav:true,
		dots:true,
		navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
		responsive:{
			0:{
				items:1
			},
			480:{
				items:2
			},
			580:{
				items:2
			},
			581:{
				items:3
			},
			992:{
				items:3
			},
			993:{
				items:4
			},			
			1025:{
				items:4
			},
			1026:{
				items:5
			},
			1191:{
				items:5
			},
			1200:{
				items:6
			},
		}
	})
	
	if(jQuery('.banner-Swiper-one').length > 0){
		var mainSwiperThumb = new Swiper(".banner-Swiper-two", {
			slidesPerView: "auto",
			spaceBetween: 10,
			speed: 1500,
			loop: true,
			autoplay: {
			   delay: 3000,
			},
			freeMode: true,
			watchSlidesProgress: true,
		});
		var swiper = new Swiper(".banner-Swiper-one", {
			spaceBetween: 30,
			speed: 1500,
			loop: true,
			autoplay: {
			   delay: 3000,
			},
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			thumbs: {
				swiper: mainSwiperThumb,
			}
		});
	}
	
});
/* Document .ready END */
 