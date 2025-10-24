// 공통 JavaScript 기능들

// 스크롤 투 탑 기능
function initScrollToTop() {
    const scrollToTopBtn = document.getElementById('scroll-to-top');
    
    if (scrollToTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        });
        
        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
}

// 고정 문의하기 버튼 기능
function initFixedInquiryBtn() {
    const fixedInquiryBtn = document.getElementById('fixed-inquiry-btn');
    
    if (fixedInquiryBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                fixedInquiryBtn.classList.add('show');
            } else {
                fixedInquiryBtn.classList.remove('show');
            }
        });
        
        fixedInquiryBtn.addEventListener('click', function() {
            window.location.href = './sub/contact.html';
        });
    }
}

// 모바일 메뉴 초기화
function initMobileMenu() {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuToggle && mobileMenu) {
        console.log('모바일 메뉴 초기화 중...');
        
        // 클릭 이벤트 리스너 추가
        mobileMenuToggle.onclick = function(e) {
            e.preventDefault();
            e.stopPropagation();
            console.log('햄버거 버튼 클릭됨!');
            
            // 클래스 토글
            mobileMenu.classList.toggle('active');
            this.classList.toggle('active');
            
            // 상태 확인
            const isOpen = mobileMenu.classList.contains('active');
            console.log('메뉴 상태:', isOpen ? '열림' : '닫힘');
        };
        
        // 메뉴 외부 클릭 시 닫기
        document.addEventListener('click', function(e) {
            if (!mobileMenu.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                mobileMenu.classList.remove('active');
                mobileMenuToggle.classList.remove('active');
            }
        });
    } else {
        console.error('모바일 메뉴 요소를 찾을 수 없습니다.');
    }
}

// 헤더 스크롤 효과
function initHeaderScroll() {
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // 스크롤 위치에 따른 헤더 스타일 변경
        const header = document.querySelector('header');
        if (header) {
            if (scrollTop > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
    });
}

// 스크롤 애니메이션
function initScrollAnimation() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, observerOptions);
    
    // 애니메이션 대상 요소들
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    animateElements.forEach(el => observer.observe(el));
}

// 부드러운 스크롤
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// 페이지 로딩 애니메이션
function initPageLoading() {
    setTimeout(() => {
        document.body.classList.add('loaded');
    }, 100);
}

// About 페이지 서브 네비게이션 기능
function initAboutSubNavigation() {
    const subNavLinks = document.querySelectorAll('.sub-nav-link');
    const aboutSections = document.querySelectorAll('.about-section');
    
    if (subNavLinks.length === 0 || aboutSections.length === 0) {
        return; // About 페이지가 아닌 경우 종료
    }
    
    // 서브 네비게이션 클릭 이벤트
    subNavLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetSection = this.getAttribute('data-section');
            
            // 활성 클래스 업데이트
            subNavLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
            
            // 섹션 표시/숨김
            aboutSections.forEach(section => {
                section.classList.remove('active');
                if (section.id === targetSection) {
                    section.classList.add('active');
                }
            });
            
            // 부드러운 스크롤
            const targetElement = document.getElementById(targetSection);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // 스크롤에 따른 자동 네비게이션 업데이트
    let isScrolling = false;
    window.addEventListener('scroll', function() {
        if (isScrolling) return;
        
        const scrollPosition = window.scrollY + 200; // 헤더 높이 고려
        
        aboutSections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                const sectionId = section.id;
                const correspondingLink = document.querySelector(`[data-section="${sectionId}"]`);
                
                if (correspondingLink && !correspondingLink.classList.contains('active')) {
                    subNavLinks.forEach(l => l.classList.remove('active'));
                    correspondingLink.classList.add('active');
                    
                    aboutSections.forEach(s => s.classList.remove('active'));
                    section.classList.add('active');
                }
            }
        });
    });
    
    // 초기 로드 시 첫 번째 섹션 활성화
    if (aboutSections.length > 0) {
        aboutSections.forEach((section, index) => {
            if (index === 0) {
                section.classList.add('active');
            } else {
                section.classList.remove('active');
            }
        });
    }
}

// 모든 공통 기능 초기화
function initCommonFeatures() {
    initScrollToTop();
    initFixedInquiryBtn();
    initMobileMenu();
    initHeaderScroll();
    initScrollAnimation();
    initSmoothScroll();
    initPageLoading();
    initAboutSubNavigation();
}

// DOM 로드 완료 시 실행
document.addEventListener('DOMContentLoaded', function() {
    initCommonFeatures();
});
