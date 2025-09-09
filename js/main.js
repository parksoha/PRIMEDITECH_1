/**
 * PRIMEDITECH Custom Theme - Main JavaScript
 * 
 * @package PRIMEDITECH
 * @version 1.0
 */

(function($) {
    'use strict';

    // DOM이 로드되면 실행
    $(document).ready(function() {
        initMobileMenu();
        initScrollToTop();
        initSmoothScroll();
        initFormValidation();
        initAnimations();
        initLazyLoading();
        initAccessibility();
    });

    /**
     * 모바일 메뉴 초기화
     */
    function initMobileMenu() {
        const mobileMenuToggle = $('#mobile-menu-toggle');
        const mobileMenu = $('#mobile-menu');
        const body = $('body');

        if (mobileMenuToggle.length && mobileMenu.length) {
            mobileMenuToggle.on('click', function(e) {
                e.preventDefault();
                $(this).toggleClass('active');
                mobileMenu.toggleClass('active');
                body.toggleClass('menu-open');
                
                // 접근성 개선
                const isOpen = mobileMenu.hasClass('active');
                $(this).attr('aria-expanded', isOpen);
                $(this).attr('aria-label', isOpen ? '메뉴 닫기' : '메뉴 열기');
            });

            // 메뉴 외부 클릭 시 닫기
            $(document).on('click', function(e) {
                if (!$(e.target).closest('.header').length) {
                    mobileMenu.removeClass('active');
                    mobileMenuToggle.removeClass('active');
                    body.removeClass('menu-open');
                    mobileMenuToggle.attr('aria-expanded', 'false');
                    mobileMenuToggle.attr('aria-label', '메뉴 열기');
                }
            });

            // ESC 키로 메뉴 닫기
            $(document).on('keydown', function(e) {
                if (e.key === 'Escape' && mobileMenu.hasClass('active')) {
                    mobileMenu.removeClass('active');
                    mobileMenuToggle.removeClass('active');
                    body.removeClass('menu-open');
                    mobileMenuToggle.attr('aria-expanded', 'false');
                    mobileMenuToggle.attr('aria-label', '메뉴 열기');
                    mobileMenuToggle.focus();
                }
            });
        }
    }

    /**
     * 스크롤 투 탑 버튼 초기화
     */
    function initScrollToTop() {
        const scrollToTopBtn = $('#scroll-to-top');

        if (scrollToTopBtn.length) {
            // 스크롤 이벤트
            $(window).on('scroll', function() {
                if ($(this).scrollTop() > 300) {
                    scrollToTopBtn.addClass('show');
                } else {
                    scrollToTopBtn.removeClass('show');
                }
            });

            // 클릭 이벤트
            scrollToTopBtn.on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 800, 'easeInOutQuart');
            });
        }
    }

    /**
     * 부드러운 스크롤 초기화
     */
    function initSmoothScroll() {
        // 앵커 링크에 부드러운 스크롤 적용
        $('a[href*="#"]:not([href="#"])').on('click', function(e) {
            const target = $(this.getAttribute('href'));
            
            if (target.length) {
                e.preventDefault();
                const offset = target.offset().top - 80; // 헤더 높이 고려
                
                $('html, body').animate({
                    scrollTop: offset
                }, 800, 'easeInOutQuart');
            }
        });
    }

    /**
     * 폼 유효성 검사 초기화
     */
    function initFormValidation() {
        const contactForm = $('.contact-form-element');
        
        if (contactForm.length) {
            contactForm.on('submit', function(e) {
                e.preventDefault();
                
                const form = $(this);
                const formData = new FormData(this);
                const submitBtn = form.find('button[type="submit"]');
                const originalText = submitBtn.text();
                
                // 유효성 검사
                if (validateForm(form)) {
                    // 로딩 상태
                    submitBtn.prop('disabled', true).text('전송 중...');
                    
                    // AJAX 전송 (실제 구현 시 WordPress AJAX 사용)
                    setTimeout(function() {
                        // 성공 메시지
                        showNotification('메시지가 성공적으로 전송되었습니다.', 'success');
                        form[0].reset();
                        submitBtn.prop('disabled', false).text(originalText);
                    }, 2000);
                }
            });
        }
    }

    /**
     * 폼 유효성 검사
     */
    function validateForm(form) {
        let isValid = true;
        const requiredFields = form.find('[required]');
        
        requiredFields.each(function() {
            const field = $(this);
            const value = field.val().trim();
            
            if (!value) {
                showFieldError(field, '이 필드는 필수입니다.');
                isValid = false;
            } else if (field.attr('type') === 'email' && !isValidEmail(value)) {
                showFieldError(field, '올바른 이메일 주소를 입력해주세요.');
                isValid = false;
            } else {
                clearFieldError(field);
            }
        });
        
        return isValid;
    }

    /**
     * 이메일 유효성 검사
     */
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    /**
     * 필드 에러 표시
     */
    function showFieldError(field, message) {
        clearFieldError(field);
        field.addClass('error');
        field.after(`<span class="field-error">${message}</span>`);
    }

    /**
     * 필드 에러 제거
     */
    function clearFieldError(field) {
        field.removeClass('error');
        field.siblings('.field-error').remove();
    }

    /**
     * 애니메이션 초기화
     */
    function initAnimations() {
        // Intersection Observer로 스크롤 애니메이션
        if ('IntersectionObserver' in window) {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, observerOptions);

            // 애니메이션 대상 요소들
            $('.service-card, .product-card, .news-card, .about-stats .stat-item').each(function() {
                observer.observe(this);
            });
        }
    }

    /**
     * 지연 로딩 초기화
     */
    function initLazyLoading() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            $('img[data-src]').each(function() {
                imageObserver.observe(this);
            });
        }
    }

    /**
     * 접근성 개선
     */
    function initAccessibility() {
        // 키보드 네비게이션
        $('.nav-menu a, .mobile-nav-menu a').on('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                $(this)[0].click();
            }
        });

        // 포커스 관리
        $('.btn, .service-link, .product-link, .news-link').on('focus', function() {
            $(this).addClass('focus-visible');
        }).on('blur', function() {
            $(this).removeClass('focus-visible');
        });

        // 스킵 링크
        $('body').prepend('<a href="#main-content" class="skip-link">본문으로 건너뛰기</a>');
    }

    /**
     * 알림 메시지 표시
     */
    function showNotification(message, type = 'info') {
        const notification = $(`
            <div class="notification notification-${type}">
                <span class="notification-message">${message}</span>
                <button class="notification-close" aria-label="알림 닫기">&times;</button>
            </div>
        `);

        $('body').append(notification);

        // 자동 제거
        setTimeout(function() {
            notification.fadeOut(300, function() {
                $(this).remove();
            });
        }, 5000);

        // 수동 제거
        notification.find('.notification-close').on('click', function() {
            notification.fadeOut(300, function() {
                $(this).remove();
            });
        });
    }

    /**
     * 언어 변경 함수
     */
    window.changeLanguage = function(lang) {
        const currentUrl = window.location.href;
        const baseUrl = currentUrl.split('/')[0] + '//' + currentUrl.split('/')[2];
        
        if (lang === 'ko') {
            window.location.href = baseUrl;
        } else {
            window.location.href = baseUrl + '/' + lang + '/';
        }
    };

    /**
     * 유틸리티 함수들
     */
    const Utils = {
        // 디바운스 함수
        debounce: function(func, wait, immediate) {
            let timeout;
            return function() {
                const context = this;
                const args = arguments;
                const later = function() {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                const callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        },

        // 스로틀 함수
        throttle: function(func, limit) {
            let inThrottle;
            return function() {
                const args = arguments;
                const context = this;
                if (!inThrottle) {
                    func.apply(context, args);
                    inThrottle = true;
                    setTimeout(() => inThrottle = false, limit);
                }
            };
        },

        // 요소가 뷰포트에 있는지 확인
        isInViewport: function(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }
    };

    // 전역으로 유틸리티 함수 노출
    window.PRMUtils = Utils;

    // jQuery 애니메이션 이징 함수 추가
    $.easing.easeInOutQuart = function(x, t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
        return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
    };

})(jQuery);

// CSS 애니메이션 클래스
const style = document.createElement('style');
style.textContent = `
    .animate-in {
        animation: fadeInUp 0.6s ease-out forwards;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .skip-link {
        position: absolute;
        top: -40px;
        left: 6px;
        background: #2c5aa0;
        color: #fff;
        padding: 8px;
        text-decoration: none;
        border-radius: 4px;
        z-index: 1000;
        transition: top 0.3s;
    }
    
    .skip-link:focus {
        top: 6px;
    }
    
    .notification {
        position: fixed;
        top: 20px;
        right: 20px;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 15px 20px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        z-index: 10000;
        display: flex;
        align-items: center;
        gap: 10px;
        max-width: 400px;
    }
    
    .notification-success {
        border-left: 4px solid #28a745;
    }
    
    .notification-error {
        border-left: 4px solid #dc3545;
    }
    
    .notification-info {
        border-left: 4px solid #17a2b8;
    }
    
    .notification-close {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
        color: #666;
    }
    
    .field-error {
        color: #dc3545;
        font-size: 12px;
        margin-top: 5px;
        display: block;
    }
    
    .error {
        border-color: #dc3545 !important;
    }
    
    .focus-visible {
        outline: 2px solid #2c5aa0;
        outline-offset: 2px;
    }
    
    .lazy {
        opacity: 0;
        transition: opacity 0.3s;
    }
    
    .lazy.loaded {
        opacity: 1;
    }
`;
document.head.appendChild(style);
