import { closeAllMenues, getElement, slideDown, slideUp, fadeOut, $, $$, $body } from "./utils.js";


const activateMenu = (deviceType, deviceSize) => {
    const menu = getElement('.main_menu');
    const burgerBtn = $('.menu_btn');
    let openedSubs, menuDelayTime = null;

    const closeOpenedSubs = ($sub) => {
        for (let i = 0; i < $sub.length; i++) {
            $sub[i].classList.remove('opened');
            if (window.innerWidth > deviceSize) {
                fadeOut($sub[i].querySelector('.submenu_list'));
            } else {
                slideUp($sub[i].querySelector('.submenu_list'));
            }
        }
    }

    const mouseLeaveItem = (item) => {
        item.classList.remove('hovered')
    }

    const openSubWithHover = (evt) => {
        if (evt.target.classList.contains('submenu_btn') || evt.target.parentNode.classList.contains('submenu_btn')) {
            if (!deviceType && window.innerWidth > deviceSize) {
                if (menuDelayTime) {
                    clearTimeout(menuDelayTime);
                };
                const subBtn = evt.target.classList.contains('submenu_btn') ? evt.target : evt.target.parentNode;
                const subParent = subBtn.closest('li');
                const currentSubList = subParent.querySelector('.submenu_list');
                subParent.classList.add('hovered');
                menuDelayTime = setTimeout(() => {
                    if (subParent.classList.contains('hovered') && !subParent.classList.contains('opened')) {
                        subParent.classList.add('opened')
                        slideDown(currentSubList);
                    }
                }, 300)
            };
        }
    }


    const closeSubsWithOutsideClick = (e) => {
        if(!menu.contains(e.target)) {
            menu.querySelectorAll('.opened').forEach($item => {
                $item.classList.remove('opened');
                fadeOut($item.querySelector('.submenu_list'))
            })
        }
    }

    const closeSubWithHover = ($item) => {
        if (!deviceType && window.innerWidth > deviceSize && $item.classList.contains('opened')) {
            $item.classList.remove('opened');
            fadeOut($item.querySelector('.submenu_list'))
        }
    }

    const openSubWithClick = (evt) => {
        if (evt.target.classList.contains('submenu_btn')) {
            evt.preventDefault();
            const subBtn = evt.target;
            const subParent = subBtn.closest('li');
            const parentList = subBtn.closest('ul');
            const subMenu = subParent.querySelector('.submenu_list');
            const allSubs = parentList.querySelector('.submenu_list');

            if (deviceType && window.innerWidth > deviceSize) {
                evt.preventDefault();
                evt.stopPropagation();
                if (subParent.classList.contains('opened')) {
                    subParent.classList.remove('opened');
                    slideUp(subMenu);
                } else {
                    openedSubs = parentList.querySelectorAll('.opened').length > 0 ? parentList.querySelectorAll('.opened') : null;
                    if (openedSubs) {
                        closeOpenedSubs(openedSubs);
                    };

                    subParent.classList.add('opened');
                    openedSubs = menu.querySelectorAll('.opened');
                    slideDown(subMenu);


                }
            } else if (window.innerWidth <= deviceSize) {
                if (subParent.classList.contains('opened')) {
                    subParent.classList.remove('opened')
                    slideUp(subMenu);
                } else {
                    openedSubs = parentList.querySelectorAll('.opened').length > 0 ? parentList.querySelectorAll('.opened') : null;
                    if (openedSubs) {
                        closeOpenedSubs(openedSubs);
                    };
                    subParent.classList.add('opened')
                    slideDown(subMenu);
                }
            }
        }
    }

    const togglemobileMenu = () => {
        if ($body.classList.contains('menu_opened')) {
            $body.classList.remove('menu_opened');
        } else {
            openedSubs = menu.querySelectorAll('.opened').length > 0 ? menu.querySelectorAll('.opened') : null;
            if (openedSubs) {
                closeOpenedSubs(openedSubs);
                openedSubs = null;
            }
            // $('.submenu_list').hide();
            // $('.menu_inner, $body, html').animate({scrollTop: 0},0);
            $body.classList.add('menu_opened');
        }
    };

    const showDropBlock = (evt) => {
        if (evt.target.classList.contains('drop_btn') || evt.target.parentNode.classList.contains('drop_btn')) {
            const dropParent = evt.target.closest('div');
            const dropElement = dropParent.querySelector('.drop_list');
            if (!dropParent.classList.contains('opened')) {
                closeAllMenues(evt);
                evt.stopPropagation();
                dropParent.classList.add('opened');
                slideDown(dropElement);
            }
        }
    }

    $$('.submenu_btn').forEach($sub => {
        const subParrent = $sub.closest('li');
        $sub.addEventListener('mouseleave', () => {
            mouseLeaveItem(subParrent)
        })

        subParrent.addEventListener('mouseleave', () => {
            closeSubWithHover(subParrent)
        })
    })


    document.addEventListener('click', (e) => {
        if(deviceType && window.innerWidth > deviceSize && menu.querySelectorAll('.opened').length > 0) {
            closeSubsWithOutsideClick(e);
        }
    })


    // headerDropBtn.onClick(showDropBlock);


    const toggleSearch = (evt) => {
        const $searchBlock = document.querySelector('.search_block');
        const $searchInput = $searchBlock.querySelector('input');

        if (window.innerWidth > 960) {
            if (!$body.classList.contains('search_opened')) {
                evt.preventDefault();
                closeAllMenues(evt);
                evt.stopPropagation();
                setTimeout(() => {
                    if ($body.classList.contains('search_opened')) {
                        $searchInput.focus();
                    }
                }, 0);
                $body.classList.add('search_opened');

            } else if (!$searchInput.value) {
                $searchInput.focus();
                evt.preventDefault();
            } else {
                evt.stopPropagation();
            }
        }
    };

    burgerBtn.addEventListener('click', togglemobileMenu);
    menu.onClick(openSubWithClick);
    menu.onHover(openSubWithHover);

    document.querySelector('.search_btn').addEventListener('click', toggleSearch);

}


export {
    activateMenu
}