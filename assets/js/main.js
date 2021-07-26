
var closeBtn = document.querySelector('.close-btn');
var closeMenu = document.querySelector('#close-menu');
var closeCategory = document.querySelector('#close-category');
var menuIcon = document.querySelector('.menu-icon');
var primaryMenu = document.querySelector('.primary-menu');
var overlay = document.querySelector('.overlay');
var categoryIcon = document.querySelector('.vertical-menu-category__title');
var toggleBtn = document.querySelector('.vertical-menu__wrapper');
var catetagoryList = document.querySelector('.vertical-menu-category__list');
var mediaSize = 1023;
var windowWidth = window.innerWidth;


const app = {

    // Open and close cart 
    handleCartList: function () {

        const cartIcon = document.querySelector('.header-action__cart-header');
        const cartList = document.querySelector('.header-action__cart-list')

        cartIcon.onclick = function () {
            cartList.classList.toggle('visible');
        }

        closeBtn.onclick = function() {
            let cartList = document.querySelector('.header-action__cart-list');
            cartList.classList.remove('visible');
        }
    },

    // Toggle category 
    toggleCategory: function () {
        let toggleMenuStatus = false;
        let getCategory = document.querySelector('.vertical-menu-category__list');
        let closeCat = document.querySelector('.vertical-menu-category__list .close-btn')
        let menuItem = document.querySelectorAll('.vertical-menu-category__link');
        let menuIcon = document.querySelector('.menu-icon');
        let primaryMenu = document.querySelector('.primary-menu');
        let footerMenuIcon = document.querySelector('.footer-menu');
        let closeMenu = document.querySelector('.primary-menu .close-btn');


        if (windowWidth >= 1200) {
            toggleBtn.onclick = function () {
                 
                if(toggleMenuStatus === false) {
                    getCategory.style.visibility = 'visible';
                    getCategory.style.opacity = '1';
                    getCategory.style.height = '472px';
                    
                    menuItemLength = menuItem.length;
            
                    for(let i = 0; i < menuItemLength; i++) {
                        menuItem[i].style.opacity = '1';
                        menuItem[i].style.visibility = 'visible';
                    }
            
                    toggleMenuStatus = true;
                }
                
                else if(toggleMenuStatus === true) {
                    getCategory.style.visibility = 'hidden';
                    getCategory.style.opacity = '0';
                    getCategory.style.height = '0';
            
                    for(let i = 0; i < menuItemLength; i++) {
                        menuItem[i].style.opacity = '0';
                    }
            
                    toggleMenuStatus = false;
                }
            }
        }

        // else {
        //     toggleBtn.addEventListener('click', () => {
        //         getCategory.classList.add('active-menu')
        //     })
        //     closeCat.addEventListener('click', () => {
        //         getCategory.classList.remove('active-menu')
        //     })

        //     menuIcon.addEventListener('click', () => {
        //         primaryMenu.classList.toggle('active-menu')
        //     })
        //     footerMenuIcon.addEventListener('click', () => {
        //         primaryMenu.classList.toggle('active-menu')
        //     })
        //     closeMenu.addEventListener('click', () => {
        //         primaryMenu.classList.remove("active-menu")
                
        //     })
        // }
        
        
        
    },

    closeMenu: function () {

        
    },

    // Handle responsive menu 
    responsiveMenu: function () {

    },

    // Fixed header on top
    fixedHeader: function () {
        const scrollTopBtn = document.getElementById('scroll-top');
        const header = document.querySelector('.page-header')
        const topBar = document.querySelector('.header-topbar');
        const account = document.querySelector('.header-action__account')
        const searchBar = document.querySelector('.header-search');
        const searchKey = document.querySelector('.header-search__search-key');
        const verticalMenu = document.querySelector('.vertical-menu__wrapper');
        const hotline = document.querySelector('.hotline');
        const menuIcon = document.querySelector('.menu-icon');

        window.onscroll = function () {
            if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                scrollTopBtn.classList.add('show-scroll-btn');
                scrollTopBtn.onclick = function () {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
                header.classList.add('header-sticky')
                topBar.classList.add('hidden');
                searchKey.classList.add('hidden');
                verticalMenu.classList.add('hidden');
                account.classList.add('hidden');

                searchBar.classList.add('hidden');

                hotline.classList.add('hidden');

                menuIcon.classList.add('tablet-menu-icon');
            }

            else if(document.body.scrollTop == 0 || document.documentElement.scrollTop == 0) {
                
                scrollTopBtn.classList.remove('show-scroll-btn');
                header.classList.remove('header-sticky')
                topBar.classList.remove('hidden');
                searchKey.classList.remove('hidden');
                verticalMenu.classList.remove('hidden');
                account.classList.remove('hidden');

                searchBar.classList.remove('hidden');

                hotline.classList.remove('hidden');

                menuIcon.classList.remove('tablet-menu-icon');
            }
        }
    },

    // Drop down menu on tablet and mobile 
    dropdownMenu: function () {
        const dropdownBtn = document.querySelectorAll('.dropdown-btn')

        dropdownBtns = dropdownBtn.length;
        var i;
        for (i = 0; i < dropdownBtns; i++) {
            dropdownBtn[i].addEventListener('click', function () {
                var dropdownContent = this.nextElementSibling;
                if(dropdownContent.style.display == 'block') {
                    dropdownContent.style.display = 'none';
                } else {
                    dropdownContent.style.display = 'block';
                }
            });
        }
    },

    

    start: function () {

        this.handleCartList();

        this.toggleCategory();

        this.closeMenu();

        this.responsiveMenu();

        // this.handleMenu();

        this.fixedHeader();

        this.dropdownMenu();
        
    }
}

app.start();






