/**
 * PRIMEDITECH Custom Theme - GTranslate Plugin Integration
 * 
 * @package PRIMEDITECH
 * @version 1.0
 */

(function($) {
    'use strict';

    // GTranslate 설정 및 커스터마이징
    const GTranslateConfig = {
        // 지원 언어 목록
        supportedLanguages: ['ko', 'en', 'zh', 'ja', 'de', 'fr'],
        
        // 언어별 표시명
        languageNames: {
            'ko': '한국어',
            'en': 'English',
            'zh': '中文',
            'ja': '日本語',
            'de': 'Deutsch',
            'fr': 'Français'
        },
        
        // 언어별 플래그 이미지
        languageFlags: {
            'ko': 'https://flagcdn.com/w20/kr.png',
            'en': 'https://flagcdn.com/w20/us.png',
            'zh': 'https://flagcdn.com/w20/cn.png',
            'ja': 'https://flagcdn.com/w20/jp.png',
            'de': 'https://flagcdn.com/w20/de.png',
            'fr': 'https://flagcdn.com/w20/fr.png'
        },
        
        // 현재 언어 감지
        currentLanguage: getCurrentLanguage(),
        
        // GTranslate API 설정
        apiKey: '', // 실제 사용 시 API 키 입력
        apiUrl: 'https://translation.googleapis.com/language/translate/v2'
    };

    // DOM이 로드되면 실행
    $(document).ready(function() {
        initGTranslate();
        initLanguageSwitcher();
        initLanguageDetection();
        initCustomLanguageSelector();
    });

    /**
     * GTranslate 초기화
     */
    function initGTranslate() {
        // GTranslate 플러그인이 로드되었는지 확인
        if (typeof window.gtranslateSettings !== 'undefined') {
            customizeGTranslateWidget();
        } else {
            // GTranslate 플러그인이 없을 경우 커스텀 언어 선택기 사용
            createCustomLanguageSelector();
        }
    }

    /**
     * GTranslate 위젯 커스터마이징
     */
    function customizeGTranslateWidget() {
        // GTranslate 위젯 스타일 커스터마이징
        const style = document.createElement('style');
        style.textContent = `
            .gtranslate_wrapper {
                position: relative;
                display: inline-block;
            }
            
            .gtranslate_wrapper select {
                appearance: none;
                -webkit-appearance: none;
                -moz-appearance: none;
                background: #fff;
                border: 2px solid #e9ecef;
                border-radius: 8px;
                padding: 8px 35px 8px 12px;
                font-size: 14px;
                font-weight: 500;
                color: #333;
                cursor: pointer;
                transition: all 0.3s ease;
                min-width: 120px;
            }
            
            .gtranslate_wrapper select:hover {
                border-color: #2c5aa0;
                box-shadow: 0 0 0 3px rgba(44, 90, 160, 0.1);
            }
            
            .gtranslate_wrapper select:focus {
                outline: none;
                border-color: #2c5aa0;
                box-shadow: 0 0 0 3px rgba(44, 90, 160, 0.2);
            }
        `;
        document.head.appendChild(style);

        // GTranslate 이벤트 리스너 추가
        $(document).on('change', '.gtranslate_wrapper select', function() {
            const selectedLanguage = $(this).val();
            handleLanguageChange(selectedLanguage);
        });
    }

    /**
     * 커스텀 언어 선택기 생성
     */
    function createCustomLanguageSelector() {
        const languageSwitcher = $('.language-switcher, .mobile-language-switcher');
        
        if (languageSwitcher.length) {
            languageSwitcher.each(function() {
                const container = $(this);
                const existingSelect = container.find('select');
                
                if (existingSelect.length) {
                    // 기존 select를 커스텀 스타일로 변경
                    customizeExistingSelect(existingSelect);
                } else {
                    // 새로운 언어 선택기 생성
                    const customSelector = createCustomSelector();
                    container.html(customSelector);
                }
            });
        }
    }

    /**
     * 기존 select 커스터마이징
     */
    function customizeExistingSelect(select) {
        select.addClass('custom-language-select');
        
        // 옵션에 플래그 이미지 추가
        select.find('option').each(function() {
            const option = $(this);
            const value = option.val();
            
            if (GTranslateConfig.languageFlags[value]) {
                option.attr('data-flag', GTranslateConfig.languageFlags[value]);
            }
        });

        // 변경 이벤트 리스너
        select.on('change', function() {
            const selectedLanguage = $(this).val();
            handleLanguageChange(selectedLanguage);
        });
    }

    /**
     * 커스텀 언어 선택기 생성
     */
    function createCustomSelector() {
        let html = '<div class="custom-language-selector">';
        html += '<button class="language-trigger" aria-haspopup="true" aria-expanded="false">';
        html += `<img src="${GTranslateConfig.languageFlags[GTranslateConfig.currentLanguage]}" alt="${GTranslateConfig.languageNames[GTranslateConfig.currentLanguage]}">`;
        html += `<span>${GTranslateConfig.languageNames[GTranslateConfig.currentLanguage]}</span>`;
        html += '<i class="fas fa-chevron-down"></i>';
        html += '</button>';
        html += '<ul class="language-dropdown" role="menu">';
        
        GTranslateConfig.supportedLanguages.forEach(function(lang) {
            const isActive = lang === GTranslateConfig.currentLanguage ? 'active' : '';
            html += `<li class="language-option ${isActive}" data-lang="${lang}" role="menuitem">`;
            html += `<img src="${GTranslateConfig.languageFlags[lang]}" alt="${GTranslateConfig.languageNames[lang]}">`;
            html += `<span>${GTranslateConfig.languageNames[lang]}</span>`;
            html += '</li>';
        });
        
        html += '</ul>';
        html += '</div>';
        
        return html;
    }

    /**
     * 언어 선택기 초기화
     */
    function initLanguageSwitcher() {
        // 커스텀 언어 선택기 이벤트
        $(document).on('click', '.language-trigger', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const dropdown = $(this).siblings('.language-dropdown');
            const isOpen = dropdown.hasClass('active');
            
            // 다른 드롭다운 닫기
            $('.language-dropdown').removeClass('active');
            $('.language-trigger').attr('aria-expanded', 'false');
            
            if (!isOpen) {
                dropdown.addClass('active');
                $(this).attr('aria-expanded', 'true');
            }
        });

        // 언어 옵션 클릭
        $(document).on('click', '.language-option', function(e) {
            e.preventDefault();
            const selectedLang = $(this).data('lang');
            handleLanguageChange(selectedLang);
            
            // 드롭다운 닫기
            $(this).closest('.language-dropdown').removeClass('active');
            $(this).closest('.custom-language-selector').find('.language-trigger').attr('aria-expanded', 'false');
        });

        // 외부 클릭 시 드롭다운 닫기
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.custom-language-selector').length) {
                $('.language-dropdown').removeClass('active');
                $('.language-trigger').attr('aria-expanded', 'false');
            }
        });

        // ESC 키로 드롭다운 닫기
        $(document).on('keydown', function(e) {
            if (e.key === 'Escape') {
                $('.language-dropdown').removeClass('active');
                $('.language-trigger').attr('aria-expanded', 'false');
            }
        });
    }

    /**
     * 언어 변경 처리
     */
    function handleLanguageChange(language) {
        if (!GTranslateConfig.supportedLanguages.includes(language)) {
            console.warn('지원하지 않는 언어입니다:', language);
            return;
        }

        // 로딩 상태 표시
        showLanguageLoading();

        // URL 변경 또는 페이지 리다이렉트
        if (language === 'ko') {
            // 한국어는 기본 URL
            window.location.href = window.location.origin;
        } else {
            // 다른 언어는 /언어코드/ 경로
            const currentPath = window.location.pathname;
            const newPath = currentPath.startsWith('/' + language + '/') 
                ? currentPath 
                : '/' + language + currentPath;
            window.location.href = window.location.origin + newPath;
        }
    }

    /**
     * 언어 로딩 상태 표시
     */
    function showLanguageLoading() {
        const languageSelectors = $('.language-switcher, .mobile-language-switcher');
        
        languageSelectors.addClass('loading');
        
        // 로딩 스피너 추가
        languageSelectors.find('select, .language-trigger').prop('disabled', true);
        
        // 3초 후 로딩 상태 해제 (실제로는 페이지가 리다이렉트됨)
        setTimeout(function() {
            languageSelectors.removeClass('loading');
            languageSelectors.find('select, .language-trigger').prop('disabled', false);
        }, 3000);
    }

    /**
     * 현재 언어 감지
     */
    function initLanguageDetection() {
        const currentLang = getCurrentLanguage();
        GTranslateConfig.currentLanguage = currentLang;
        
        // HTML lang 속성 설정
        $('html').attr('lang', currentLang);
        
        // 언어별 폰트 적용
        applyLanguageFont(currentLang);
    }

    /**
     * 현재 언어 가져오기
     */
    function getCurrentLanguage() {
        const path = window.location.pathname;
        const langMatch = path.match(/^\/([a-z]{2})\//);
        
        if (langMatch) {
            return langMatch[1];
        }
        
        // URL에서 언어를 찾을 수 없으면 브라우저 언어 확인
        const browserLang = navigator.language || navigator.userLanguage;
        const langCode = browserLang.split('-')[0];
        
        if (GTranslateConfig.supportedLanguages.includes(langCode)) {
            return langCode;
        }
        
        // 기본값은 한국어
        return 'ko';
    }

    /**
     * 언어별 폰트 적용
     */
    function applyLanguageFont(language) {
        const fontMap = {
            'ko': "'Noto Sans KR', 'Malgun Gothic', sans-serif",
            'en': "'Noto Sans', 'Arial', sans-serif",
            'zh': "'Noto Sans SC', 'Microsoft YaHei', sans-serif",
            'ja': "'Noto Sans JP', 'Hiragino Sans', sans-serif",
            'de': "'Noto Sans', 'Arial', sans-serif",
            'fr': "'Noto Sans', 'Arial', sans-serif"
        };
        
        const fontFamily = fontMap[language] || fontMap['ko'];
        $('body').css('font-family', fontFamily);
    }

    /**
     * 커스텀 언어 선택기 초기화
     */
    function initCustomLanguageSelector() {
        // 커스텀 언어 선택기 스타일 추가
        const style = document.createElement('style');
        style.textContent = `
            .custom-language-selector {
                position: relative;
                display: inline-block;
            }
            
            .language-trigger {
                display: flex;
                align-items: center;
                gap: 8px;
                padding: 8px 12px;
                background: #fff;
                border: 2px solid #e9ecef;
                border-radius: 8px;
                cursor: pointer;
                transition: all 0.3s ease;
                font-size: 14px;
                font-weight: 500;
                color: #333;
            }
            
            .language-trigger:hover {
                border-color: #2c5aa0;
                box-shadow: 0 0 0 3px rgba(44, 90, 160, 0.1);
            }
            
            .language-trigger:focus {
                outline: none;
                border-color: #2c5aa0;
                box-shadow: 0 0 0 3px rgba(44, 90, 160, 0.2);
            }
            
            .language-trigger img {
                width: 20px;
                height: 15px;
                border-radius: 2px;
                object-fit: cover;
            }
            
            .language-trigger i {
                font-size: 12px;
                transition: transform 0.3s ease;
            }
            
            .language-trigger[aria-expanded="true"] i {
                transform: rotate(180deg);
            }
            
            .language-dropdown {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: #fff;
                border: 2px solid #e9ecef;
                border-radius: 8px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
                z-index: 1000;
                max-height: 200px;
                overflow-y: auto;
                margin-top: 4px;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-10px);
                transition: all 0.3s ease;
            }
            
            .language-dropdown.active {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }
            
            .language-option {
                display: flex;
                align-items: center;
                gap: 8px;
                padding: 10px 12px;
                cursor: pointer;
                transition: background-color 0.2s ease;
                border-bottom: 1px solid #f0f0f0;
            }
            
            .language-option:last-child {
                border-bottom: none;
            }
            
            .language-option:hover {
                background-color: #f8f9fa;
            }
            
            .language-option.active {
                background-color: #2c5aa0;
                color: #fff;
            }
            
            .language-option img {
                width: 20px;
                height: 15px;
                border-radius: 2px;
                object-fit: cover;
            }
            
            .language-option span {
                font-size: 14px;
                font-weight: 500;
            }
            
            .loading {
                opacity: 0.7;
                pointer-events: none;
            }
            
            .loading::after {
                content: '';
                position: absolute;
                top: 50%;
                left: 50%;
                width: 16px;
                height: 16px;
                margin: -8px 0 0 -8px;
                border: 2px solid #2c5aa0;
                border-top: 2px solid transparent;
                border-radius: 50%;
                animation: spin 1s linear infinite;
            }
            
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        `;
        document.head.appendChild(style);
    }

    /**
     * 언어 변경 이벤트 리스너
     */
    $(document).on('languageChanged', function(e, language) {
        console.log('언어가 변경되었습니다:', language);
        GTranslateConfig.currentLanguage = language;
        
        // 언어별 콘텐츠 업데이트 (필요시)
        updateLanguageContent(language);
    });

    /**
     * 언어별 콘텐츠 업데이트
     */
    function updateLanguageContent(language) {
        // 언어별 콘텐츠 업데이트 로직
        // 예: 날짜 형식, 숫자 형식 등
        updateDateFormat(language);
        updateNumberFormat(language);
    }

    /**
     * 날짜 형식 업데이트
     */
    function updateDateFormat(language) {
        const dateFormatMap = {
            'ko': 'YYYY년 MM월 DD일',
            'en': 'MMMM DD, YYYY',
            'zh': 'YYYY年MM月DD日',
            'ja': 'YYYY年MM月DD日',
            'de': 'DD. MMMM YYYY',
            'fr': 'DD MMMM YYYY'
        };
        
        // 날짜 형식 적용 로직
        console.log('날짜 형식 업데이트:', dateFormatMap[language]);
    }

    /**
     * 숫자 형식 업데이트
     */
    function updateNumberFormat(language) {
        const numberFormatMap = {
            'ko': 'ko-KR',
            'en': 'en-US',
            'zh': 'zh-CN',
            'ja': 'ja-JP',
            'de': 'de-DE',
            'fr': 'fr-FR'
        };
        
        // 숫자 형식 적용 로직
        console.log('숫자 형식 업데이트:', numberFormatMap[language]);
    }

    // 전역 함수로 노출
    window.GTranslateCustom = {
        changeLanguage: handleLanguageChange,
        getCurrentLanguage: getCurrentLanguage,
        getSupportedLanguages: function() {
            return GTranslateConfig.supportedLanguages;
        }
    };

})(jQuery);
