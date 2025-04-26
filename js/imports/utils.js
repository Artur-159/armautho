import { validateInputs } from "./validator.js";


//click function
let toggleEnd = {};
let toggleCount = 0;
const $body = document.body;
const $html = document.documentElement;
const getElement = (selector) => {

	const elem = document.querySelector(selector);

	const attachedElem = Object.assign(elem, {
		onClick: function (callback, ...args) {
			this.addEventListener('click', (e) => {
				callback(e, ...args);
			});
		},
		onHover: function (callback, ...args) {
			this.addEventListener('mouseover', (e) => {
				callback(e, ...args);
			});
		},
		unHover: function (callback, ...args) {
			this.addEventListener('mouseleave', (e) => {
				callback(e, ...args);
			})
		}
	})
	return attachedElem;
}

const resetStyles = ($element, duration, display = null) => {
	if ($element.hasAttribute('data-toggle')) {

		const toggleNum = $element.getAttribute('data-toggle');

		toggleEnd[toggleNum] = setTimeout(() => {

			$element.style.height = null;
			$element.style.overflow = null;
			$element.style.transition = null;
			$element.style.position = null;
			$element.style.opacity = null;

			if (!display) {
				$element.style.display = null;
			};

			if ($element.hasAttribute('data-height')) {
				$element.removeAttribute('data-height');
			}

			$element.removeAttribute('data-toggle');
			clearTimeout(toggleEnd[toggleNum]);
		}, duration);
	}


}

const slideDown = ($element, duration = 300, type = 'ease-in-out', blockType = 'block') => {
	$element.style.display = blockType;
	let blockHeight = $element.hasAttribute('data-height') ? parseInt($element.getAttribute('data-height')) : parseFloat(window.getComputedStyle($element).height);

	let position = window.getComputedStyle($element).position == 'static' ? 'relative' : null;


	$element.style.transition = 'height ' + duration + 'ms ' + type;
	position ? $element.style.position = position : '';
	$element.style.overflow = 'hidden';

	if (!$element.hasAttribute('data-height')) {
		$element.setAttribute('data-height', blockHeight);
	}

	if ($element.hasAttribute('data-toggle')) {
		const toggleNum = $element.getAttribute('data-toggle');
		clearTimeout(toggleEnd[toggleNum]);
		$element.style.height = parseFloat(window.getComputedStyle($element).height);
	} else {
		toggleCount++;
		toggleEnd[toggleCount] = toggleCount;
		$element.setAttribute('data-toggle', toggleCount);
		$element.style.height = 0;
	}

	setTimeout(() => {
		$element.style.height = blockHeight + 'px';
		resetStyles($element, duration, blockType);
	}, 1);
}

const slideUp = ($element, duration = 300, type = 'ease-in-out') => {

	let blockHeight = parseFloat(window.getComputedStyle($element).height);
	let position = window.getComputedStyle($element).position == 'static' ? 'relative' : null;

	if (!$element.hasAttribute('data-height')) {
		$element.setAttribute('data-height', blockHeight);
	}

	if ($element.hasAttribute('data-toggle')) {
		const toggleNum = $element.getAttribute('data-toggle');
		clearTimeout(toggleEnd[toggleNum]);

	} else {
		toggleCount++;
		toggleEnd[toggleCount] = toggleCount;
		$element.setAttribute('data-toggle', toggleCount);

	}

	$element.style.height = blockHeight + 'px';
	position ? $element.style.position = position : '';
	$element.style.overflow = 'hidden';
	$element.style.transition = 'height ' + duration + 'ms ' + type;

	setTimeout(() => {
		$element.style.height = 0 + 'px';
		resetStyles($element, duration);

	}, 1);
}

const fadeIn = ($element, duration = 300, type = 'ease-in-out', blockType = 'block') => {

	$element.style.display = blockType;
	if ($element.hasAttribute('data-toggle')) {
		const toggleNum = $element.getAttribute('data-toggle');
		clearTimeout(toggleEnd[toggleNum]);
	} else {
		toggleCount++;
		toggleEnd[toggleCount] = toggleCount;
		$element.setAttribute('data-toggle', toggleCount);

	}

	$element.style.opacity = 0;
	$element.style.transition = 'opacity ' + duration + 'ms ' + type;
	$element.style.overflow = 'hidden';

	setTimeout(() => {
		$element.style.opacity = 1;
		resetStyles($element, duration, blockType);
	}, 1);
}

const fadeOut = ($element, duration = 200, type = 'ease-in-out') => {

	if ($element.hasAttribute('data-toggle')) {
		const toggleNum = $element.getAttribute('data-toggle');
		clearTimeout(toggleEnd[toggleNum]);

	} else {
		toggleCount++;
		toggleEnd[toggleCount] = toggleCount;
		$element.setAttribute('data-toggle', toggleCount);

	}
	$element.style.overflow = 'hidden';
	$element.style.transition = 'opacity ' + duration + 'ms ' + type;

	setTimeout(() => {
		$element.style.opacity = 0;
		resetStyles($element, duration);
	}, 1);
}



const closeAllMenues = (evt) => {

	// if ($$('.faq_list .opened').length > 0 && !evt.target.closest('.drop_block')) {
	// 	slideUp($('.faq_list .opened .drop_block'));
	// 	$('.faq_list .opened').classList.remove('opened');
	// }

	if ($$('.drop_block.opened').length > 0 && !evt.target.closest('.drop_inner') || evt.target.classList.contains('close_btn')) {
		slideUp($('.drop_block.opened .drop_inner'));
		$('.drop_block.opened').classList.remove('opened');
	};


	if ($body.classList.contains('search_opened') && !evt.target.closest('.search_block')) {
		$body.classList.remove('search_opened')
	}

	const closeBtn = evt.target.closest('.close_filter');
	if (closeBtn) {
		$body.classList.remove('filter_opened');

		if ($$('.clear_block.opened').length > 0) {
			$('.clear_block.opened').classList.remove('opened');
		}
	}
}


const comboHover = ($element, $block) => {
	const hoveredEl = getElement($element);
	const comboMouseOver = (e) => {
		if (e.target.tagName.toLowerCase() === 'a' || e.target.parentNode.tagName.toLowerCase() === 'a') {
			e.target.closest($block).classList.add('hovered');
		} else {
			comboMouseLeave();
		}
	}

	const comboMouseLeave = () => {
		if (document.querySelectorAll('.hovered').length > 0) {
			document.querySelectorAll($block).forEach((item) => {
				item.classList.remove('hovered');
			})
		}
	}

	hoveredEl.onHover(comboMouseOver);
	hoveredEl.unHover(comboMouseLeave);
}


const elHeight = (element) => {
	return parseFloat(window.getComputedStyle(element).height)
}

const tabSwitch = (e, btnType = 'button') => {
	e.preventDefault();
	if (e.target.tagName.toLowerCase() === btnType && !e.target.classList.contains('selected')) {
		const tabBtn = e.target;

		const currentActive = tabBtn.closest('.tab_btns').querySelector('.selected');
		const currentTab = tabBtn.closest('.tab_section').querySelector('.tab_block.selected');
		const tabId = tabBtn.getAttribute('data-tab');
		const newTab = document.querySelector(`.tab_block.${tabId}`);
		currentActive.classList.remove('selected');
		currentTab.classList.remove('selected');
		tabBtn.classList.add('selected');
		newTab.classList.add('selected');

	}

}


const checkFields = ($form) => {
	for (let i = 0; i < $form.elements.length; i++) {
		const $field = $form.elements[i];
		if ($field.tagName.toLowerCase() == 'input' || $field.tagName.toLowerCase() == 'textarea' || $field.tagName.toLowerCase() == 'select') {
			$field.addEventListener('input', () => {
				if ($field.value) {
					$field.classList.add('filled')
					if ($field.closest('div').querySelectorAll('.individual_hint').length > 0) {
						$field.closest('div').querySelector('.individual_hint').style.display = 'block';
						$field.closest('div').querySelector('.standard_hint').style.display = 'none';
					}

				} else {
					$field.classList.remove('filled');
					if ($field.closest('div').querySelectorAll('.individual_hint').length > 0) {
						$field.closest('div').querySelector('.individual_hint').style.display = 'none';
						$field.closest('div').querySelector('.standard_hint').style.display = 'block';
					}
				};

				if ($field.parentNode.classList.contains('error')) {
					validateInputs($field.closest('form'));
				}
			});
		}
	}
}


const validateBtn = () => {
	if ($$('.validate_btn').length > 0) {
		$$('.validate_btn').forEach(($btn) => {
			const $form = $btn.closest('form');

			checkFields($form);
			$form.addEventListener('submit', function (e) {
				if ($$('.page_messages .message_block').length > 0) {
					$('.page_messages .message_block').remove();
				}
				const checkValid = validateInputs($form);
				if (checkValid) {
					if (typeof (submitCallback) == 'function') {
						submitCallback(e);
					}
					return false;
				} else {
					e.preventDefault();
				}
			});

		})
	}
};

const callPopup = (popupKey) => {

	let popupBlock = document.querySelector(`.${popupKey}_popup`);
	const popupTemplate = document.querySelector(`.${popupKey}_template`);

	if (popupBlock || popupTemplate) {
		let popupCreateTime = 0;
		if (!popupBlock) {

			popupCreateTime = 300;
			$body.insertAdjacentHTML('beforeend', popupTemplate.innerHTML);
			popupBlock = document.querySelector(`.${popupKey}_popup`);
			popupTemplate.remove();
			validateBtn();
		};
		$body.classList.add('popup_opened');
		setTimeout(() => {
			popupBlock.classList.add('showed');
			const closeBtn = getElement('.showed .popup_container');
			closeBtn.onClick(closePopup);


		}, popupCreateTime)
	}
}

const openPopupByBtn = (e) => {
	const popupId = e.target.getAttribute('data-popup');
	callPopup(popupId);
}

const $ = (element) => {
	return document.querySelector(element);
}

const $$ = (elements) => {
	return document.querySelectorAll(elements);
}

const closePopup = (e) => {
	if (!e || e.target.classList.contains('popup_close')) {
		if (document.querySelectorAll('.popup_block.showed').length > 0) {
			$body.classList.remove('popup_opened');
			document.querySelector('.popup_block.showed').classList.remove('showed');
		}
	}
}

const resizeTextarea = ($area) => {
	$area.setAttribute("style", "height:" + ($area.scrollHeight) + "px");
	$area.addEventListener("input", OnInput, false);

	function OnInput() {
		this.style.height = 0;
		this.style.height = (this.scrollHeight + 10) + "px";
	}
}

const scrollPage = (animations) => {
	document.onscroll = () => {

		const scrollSize = window.scrollY;

		if (animations) {
			animations(scrollSize);
		};

	};

	document.dispatchEvent(new Event('scroll'));

}


const showDropBlock = (evt) => {
	if (evt.target.classList.contains('drop_btn') || evt.target.parentNode.classList.contains('drop_btn')) {
		const dropParent = evt.target.closest('div');
		const dropElement = dropParent.querySelector('.drop_inner');
		if (!dropParent.classList.contains('opened')) {
			closeAllMenues(evt);
			evt.stopPropagation();
			dropParent.classList.add('opened');
			slideDown(dropElement);
		}
	}
}

//detecting document ready state
const docReady = (fn) => {
	if (document.readyState === "complete" || document.readyState === "interactive") {
		setTimeout(fn, 1);
	} else {
		document.addEventListener("DOMContentLoaded", fn);
	}
	validateBtn();
}

const initSlider = ($slider, scrollSize, $sliderOptions, $status) => {
	const $sliderEl = $$($slider);
	const [firstSlider] = $$($slider);
	const initPosition = firstSlider.offsetTop + elHeight(firstSlider) / 2;

	if (scrollSize + window.innerHeight >= initPosition) {
		if ($sliderEl.length > 1) {
			$sliderEl.forEach(($slider) => {
				new Swiper($slider, $sliderOptions);
			})
		} else {
			new Swiper(firstSlider, $sliderOptions);
		}

		$status.init = false;
	}
}

export {
	resetStyles,
	slideDown,
	slideUp,
	fadeIn,
	fadeOut,
	getElement,
	docReady,
	comboHover,
	closeAllMenues,
	tabSwitch,
	callPopup,
	openPopupByBtn,
	$,
	$$,
	closePopup,
	validateBtn,
	showDropBlock,
	scrollPage,
	initSlider,
	elHeight,
	$body,
	$html
}