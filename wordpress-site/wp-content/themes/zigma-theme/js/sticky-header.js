/**
 * Simple Sticky Navigation Functionality
 * For Zigma Global Wear - Kids' clothing specialist
 */
document.addEventListener('DOMContentLoaded', function() {
    const utilityHeader = document.querySelector('.utility-header');
    const logoHeader = document.querySelector('.logo-header');
    const simpleNavHeader = document.getElementById('simple-nav-header');
    const mobileToggle = document.getElementById('mobile-nav-toggle');
    const simpleNavMenu = document.querySelector('.simple-nav-menu');
    
    let combinedHeaderHeight = 0;
    if (utilityHeader) combinedHeaderHeight += utilityHeader.offsetHeight;
    if (logoHeader) combinedHeaderHeight += logoHeader.offsetHeight;
    
    let isSticky = false;
    
    // Sticky navigation on scroll
    function handleScroll() {
        if (!simpleNavHeader) return;
        
        const scrollY = window.scrollY;
        
        if (scrollY > combinedHeaderHeight && !isSticky) {
            simpleNavHeader.classList.add('sticky');
            document.body.style.paddingTop = simpleNavHeader.offsetHeight + 'px';
            isSticky = true;
        } else if (scrollY <= combinedHeaderHeight && isSticky) {
            simpleNavHeader.classList.remove('sticky');
            document.body.style.paddingTop = '0';
            isSticky = false;
        }
    }
    
    // Mobile menu toggle
    function initMobileMenu() {
        if (!mobileToggle || !simpleNavMenu) return;
        
        mobileToggle.addEventListener('click', function() {
            simpleNavMenu.classList.toggle('mobile-open');
            
            // Update toggle button text
            if (simpleNavMenu.classList.contains('mobile-open')) {
                mobileToggle.innerHTML = '✕';
            } else {
                mobileToggle.innerHTML = '☰';
            }
        });
        
        // Close mobile menu when clicking nav links
        const navLinks = simpleNavMenu.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                simpleNavMenu.classList.remove('mobile-open');
                mobileToggle.innerHTML = '☰';
            });
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!simpleNavHeader.contains(e.target)) {
                simpleNavMenu.classList.remove('mobile-open');
                mobileToggle.innerHTML = '☰';
            }
        });
    }
    
    // Handle window resize
    function handleResize() {
        // Recalculate header heights
        combinedHeaderHeight = 0;
        if (utilityHeader) combinedHeaderHeight += utilityHeader.offsetHeight;
        if (logoHeader) combinedHeaderHeight += logoHeader.offsetHeight;
        
        // Reset sticky state if needed
        if (window.innerWidth > 768) {
            simpleNavMenu.classList.remove('mobile-open');
            if (mobileToggle) mobileToggle.innerHTML = '☰';
        }
        
        // Adjust body padding if sticky
        if (isSticky && simpleNavHeader) {
            document.body.style.paddingTop = simpleNavHeader.offsetHeight + 'px';
        }
    }
    
    // Highlight current page in navigation
    function highlightCurrentNav() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.nav-link');
        
        navLinks.forEach(link => {
            const linkPath = new URL(link.href).pathname;
            if (linkPath === currentPath || 
                (currentPath === '/' && linkPath.includes('index'))) {
                link.classList.add('active');
            }
        });
    }
    
    // Smooth scrolling for anchor links
    function initSmoothScrolling() {
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        
        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    const offsetTop = target.offsetTop - (isSticky ? simpleNavHeader.offsetHeight : combinedHeaderHeight);
                    
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }
    
    // ===== SLIDESHOW FUNCTIONALITY =====
    let currentSlideIndex = 0;
    let slideInterval;
    
    function initSlideshow() {
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const slideshowWrapper = document.querySelector('.slideshow-wrapper');
        
        if (slides.length === 0) return;
        
        // Calculate tallest image and adjust container height
        function adjustSlideshowHeight() {
            let maxHeight = 400; // minimum height
            const images = document.querySelectorAll('.slide-content img');
            
            images.forEach(img => {
                if (img.complete) {
                    const aspectRatio = img.naturalWidth / img.naturalHeight;
                    const calculatedHeight = slideshowWrapper.offsetWidth / aspectRatio;
                    maxHeight = Math.max(maxHeight, Math.min(calculatedHeight, 600));
                } else {
                    img.onload = function() {
                        adjustSlideshowHeight();
                    };
                }
            });
            
            if (slideshowWrapper) {
                slideshowWrapper.style.height = maxHeight + 'px';
            }
        }
        
        // Adjust height initially and on window resize
        adjustSlideshowHeight();
        window.addEventListener('resize', adjustSlideshowHeight);
        
        // Auto-advance slides every 5 seconds
        slideInterval = setInterval(function() {
            changeSlide(1);
        }, 5000);
        
        console.log('✅ Slideshow initialized with', slides.length, 'slides');
    }
    
    function showSlide(index) {
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        
        // Hide all slides
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Show current slide
        if (slides[index]) {
            slides[index].classList.add('active');
        }
        if (dots[index]) {
            dots[index].classList.add('active');
        }
    }
    
    function changeSlide(direction) {
        const slides = document.querySelectorAll('.slide');
        currentSlideIndex += direction;
        
        // Wrap around if at beginning or end
        if (currentSlideIndex >= slides.length) {
            currentSlideIndex = 0;
        } else if (currentSlideIndex < 0) {
            currentSlideIndex = slides.length - 1;
        }
        
        showSlide(currentSlideIndex);
    }
    
    function currentSlide(index) {
        currentSlideIndex = index - 1; // Convert to 0-based index
        showSlide(currentSlideIndex);
    }
    
    // Make slideshow functions global for onclick handlers
    window.changeSlide = changeSlide;
    window.currentSlide = currentSlide;
    
    // Initialize all functionality
    function init() {
        handleScroll(); // Initial check
        initMobileMenu();
        highlightCurrentNav();
        initSmoothScrolling();
        initSlideshow(); // Initialize slideshow
        
        // Event listeners
        window.addEventListener('scroll', handleScroll);
        window.addEventListener('resize', handleResize);
        
        console.log('✅ Simple Navigation initialized');
    }
    
    // Start the app
    init();
    
    // Global object for debugging
    window.ZigmaTheme = window.ZigmaTheme || {};
    window.ZigmaTheme.SimpleNav = {
        version: '1.0.0',
        isSticky: () => isSticky,
        toggleMobile: () => mobileToggle ? mobileToggle.click() : null
    };
});