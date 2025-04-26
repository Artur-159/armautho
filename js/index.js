import { getElement, docReady, comboHover, tabSwitch, callPopup, openPopupByBtn, $, $$, closeAllMenues, slideDown, slideUp, scrollPage, initSlider } from "./imports/utils.js";
import { initGlobalFunctions, detectContentHeight } from "./main.js";



let newsSlider = null;
const newsSliderOpts = {
	slidesPerView: 1,
	speed: 1000,
	loop: true,
	autoplay: {
		delay: 2000,
		disableOnInteraction: false,
	},
	breakpoints: {
		1200: {
			slidesPerView: 4,
		},
		1024: {
			slidesPerView: 3,
		},
		576: {
			slidesPerView: 2,
		},
	},
};

if ($$('.slider_section .swiper-container').length > 0) {

	new Swiper(".slider_section .swiper-container", {
		slidesPerView: 1,
		speed: 1000,
		loop: true,
		slidesPerView: 1,
		effect: 'fade',
		fadeEffect: {
			crossFade: true
		},
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
		},
		navigation: {
			nextEl: false,
			prevEl: false,
		},
		pagination: {
			el: ".swiper-pagination",
		},
	});
}


function initializeNewsSlider() {
	if (typeof Swiper !== 'undefined') {
		if (window.innerWidth < 1024) {
			if (!newsSlider) {
				newsSlider = new Swiper('.news_section .swiper-container', newsSliderOpts);
			}
		} else {
			if (newsSlider) {
				newsSlider.destroy(true, true);
				newsSlider = null;
			}
		}
	}
}

let hasSrcset = $$('.news_section [data-srcset]').length > 0;
if (hasSrcset) {
	$$('.news_section [data-srcset]').forEach((element) => {
		element.setAttribute('srcset', element.getAttribute('data-srcset'));
		element.removeAttribute('data-srcset');
	});
}

let hasSrc = $$('.news_section [data-src]').length > 0;
if (hasSrc) {
	$$('.news_section [data-src]').forEach((element) => {
		element.setAttribute('src', element.getAttribute('data-src'));
		element.removeAttribute('data-src');
	});
}

const dropToggle = (evt) => {
	evt.preventDefault();
	let target = evt.currentTarget;
	let parent = target.parentNode;
	let dropBlock = parent.querySelector('.faq_list .drop_block');

	if (!parent.classList.contains('opened')) {
		closeAllMenues(evt);
		evt.stopPropagation();
		parent.classList.add('opened');
		if (dropBlock) {
			slideDown(dropBlock);
		}
	}
};

const toggleFaqList = (e) => {
	if (e.target.classList.contains('question_block')) {
		const btn = e.target;
		const currentItem = btn.parentNode;
		if (currentItem.classList.contains('opened')) {
			currentItem.classList.remove('opened');
		} else {
			if ($$('.faq_list .opened').length) {
				$('.faq_list .opened').classList.remove('opened');
			}
			currentItem.classList.add('opened');
		}
	}
};



const scrollEvents = (scrollSize) => {
	initializeNewsSlider();
};

docReady(() => {
	initGlobalFunctions();
	scrollPage(scrollEvents);

	if ($$('.faq_list').length > 0) {
		const faqBtn = getElement('.faq_list');
		faqBtn.onClick(toggleFaqList);
		$('.faq_list li:first-child .question_block').click();
	}

	if (typeof Swiper !== 'undefined' && $$('.inner_slider .swiper-container').length > 0) {
		new Swiper(".inner_slider .swiper-container", {
			slidesPerView: 1,
			freeMode: true,
			watchSlidesProgress: true,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	}

	if ($$('.tab_btns').length > 0) {
		const tabBtns = getElement('.tab_btns');
		tabBtns.onClick(tabSwitch, 'button');
	}

	let popupBtns = document.querySelectorAll('.popup_btn');
	popupBtns.forEach((btn) => {
		btn.addEventListener('click', openPopupByBtn);
	});
});

window.addEventListener('load', () => {
	detectContentHeight();
	initializeNewsSlider();
	window.addEventListener('resize', () => {
		detectContentHeight();
		initializeNewsSlider();
	});
});
