// 언어별 번역 매핑 (영어 → 한국어)
const translations = {
    // Navigation
    'About': '소개',
    'Services': '서비스',
    'Industries': '산업분야',
    'Contact': '문의',
    'Home': '홈',
    
    // Main Banner
    'Beyond Precision, Building Trust': '정밀을 넘어, 신뢰를 만든다',
    'Completing customer trust with ±0.001mm precision and data-driven quality management': '±0.001mm의 정밀도와 데이터 기반 품질 관리로 고객의 신뢰를 완성합니다',
    'About Us': '회사 소개',
    'Core Fields': '핵심 분야',
    'Building Trust with Technology, Creating Value with Quality': '기술력으로 믿음을, 품질로 가치를',
    'Taking responsibility from samples to mass production with 98% on-time delivery rate and 10+ CNC equipment': '98% 납기 준수율과 10대+ CNC 장비로 샘플부터 양산까지 책임집니다',
    'Key Customers': '주요 고객사',
    'Get Quote': '견적 문의',
    'Work Process': '작업 프로세스',
    'Our Services': '서비스',
    
    // Main Page
    'About PRIMEDITECH': 'PRIMEDITECH 소개',
    'PRIMEDITECH is a leading company in Korea\'s precision engineering industry, trusted by global leaders in medical, aerospace, and advanced industrial sectors.': 'PRIMEDITECH은 의료, 항공우주, 첨단 산업 분야의 글로벌 리더들이 신뢰하는 한국의 정밀 공학 산업을 선도하는 기업입니다.',
    'Through a foundation built on technical expertise and continuous innovation, we specialize in providing high-precision components that meet the most demanding international standards.': '기술적 전문성과 지속적인 혁신을 바탕으로 구축된 기반을 통해, 가장 까다로운 국제 표준을 충족하는 고정밀 부품 제공에 특화되어 있습니다.',
    'Through our skilled engineering team and state-of-the-art manufacturing capabilities, we ensure that every component we produce reflects the highest levels of quality, reliability, and performance.': '숙련된 엔지니어링 팀과 최첨단 제조 역량을 통해, 우리가 생산하는 모든 부품이 최고 수준의 품질, 신뢰성, 성능을 반영하도록 보장합니다.',
    
    // Core Values
    'Core Values': '핵심 가치',
    'Excellence': '우수성',
    'Absolute Quality Without Compromise': '타협 없는 절대적 품질',
    'Innovation': '혁신',
    'Innovation-Driven Precision Engineering': '혁신 중심의 정밀 공학',
    'Agility': '민첩성',
    'Customer-Centric Adaptability': '고객 중심의 적응성',
    
    // Work Process
    'Work Process': '작업 프로세스',
    'From consultation to delivery, we ensure quality at every step': '상담부터 납품까지, 모든 단계에서 품질을 보장합니다',
    'Consultation & Quotation': '상담 및 견적',
    'Drawing review and manufacturability analysis, accurate quotation provision': '도면 검토 및 가공 가능성 분석, 정확한 견적서 제공',
    'Within 24 hours': '24시간 이내',
    'Machining': '가공',
    'Optimal machining path design and precision machining using high-precision CNC equipment': '최적의 가공 경로 설계 및 고정밀 CNC 장비를 이용한 정밀 가공',
    '5 days (business days standard)': '5일 (영업일 기준)',
    'Surface Treatment': '표면처리',
    'Application of various surface treatment technologies including aluminum anodizing and stainless steel passivation': '알루미늄 양극산화, 스테인리스 패시베이션 등 다양한 표면 처리 기술 적용',
    '2 days (business days standard)': '2일 (영업일 기준)',
    'Quality Inspection': '품질검사',
    'Precision dimensional measurement using CMM, quality inspection and inspection report preparation': 'CMM을 이용한 정밀 치수 측정 및 품질 검사, 검사 보고서 작성',
    '1 day (business days standard)': '1일 (영업일 기준)',
    'Delivery': '납품',
    'Safe packaging and on-time delivery, provision of delivery documents and quality certificates': '안전한 포장 및 정시 납품, 납품 서류 및 품질 증명서 제공',
    
    // Statistics
    'Customers': '고객사',
    'Export': '수출액',
    'Company Info': '회사 소개',
    'Download Brochure': '브로셔 다운로드',
    
    // Fields
    'Medical': '의료',
    'Aerospace': '항공우주',
    'Robotics': '로보틱스',
    'Industrial': '산업용',
    
    // Partners
    'Partners': '협력사',
    'Key Customers': '주요 고객사',
    'Inquiry': '문의하기',
    
    // About Page
    'About Us': '회사 소개',
    'Introduction': '소개',
    'History': '연혁',
    'Certifications': '인증서',
    'Facilities': '시설',
    'Clients': '고객사',
    'Directions': '오시는 길',
    
    // Contact Page
    'Contact Info': '연락처 정보',
    'Visit Our Office': '사무실 방문',
    'Call Us': '전화 문의',
    'Email Us': '이메일 문의',
    'Business Hours': '영업시간',
    'Weekdays 08:00 - 17:30': '평일 08:00 - 17:30',
    
    // Services Page
    'Workflow Management': '워크플로우 관리',
    'DFM Support': 'DFM 지원',
    'CNC Processing': 'CNC 가공',
    'Pre/Post-treatment': '전/후처리',
    'Quality Inspection': '품질 검사',
    
    // Industries Page
    'Medical Device Manufacturing': '의료기기 제조',
    'Robotic Systems': '로봇 시스템',
    'Aerospace Manufacturing': '항공우주 제조',
    'Industrial Manufacturing': '산업 제조',
    
    // Common
    'View all certifications': '모든 인증서 보기',
    'Close': '닫기',
    'Previous': '이전',
    'Next': '다음'
};

// 언어 전환 JavaScript
function changeLanguage(lang) {
    // localStorage에 선택된 언어 저장
    localStorage.setItem('selectedLanguage', lang);
    
    // 모든 언어 버튼에서 active 클래스 제거
    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // 클릭된 버튼에 active 클래스 추가
    document.querySelector(`[data-lang="${lang}"]`).classList.add('active');
    
    // 기존 data-ko, data-en 방식 지원
    const elements = document.querySelectorAll('[data-ko][data-en]');
    elements.forEach(element => {
        if (lang === 'ko') {
            element.textContent = element.getAttribute('data-ko');
        } else if (lang === 'en') {
            element.textContent = element.getAttribute('data-en');
        }
    });
    
    // 새로운 자동 번역 방식 (개선된 방법)
    const allElements = document.querySelectorAll('h1, h2, h3, h4, h5, h6, p, span, div, a, button, li, td, th');
    let translatedCount = 0;
    
    allElements.forEach(element => {
        // 자식 요소가 있는지 확인 (복잡한 구조 방지)
        if (element.children.length > 0) {
            return; // 자식 요소가 있으면 건너뛰기
        }
        
        const currentText = element.textContent.trim();
        
        // 너무 긴 텍스트는 건너뛰기 (100자 이상)
        if (currentText.length > 100) {
            return;
        }
        
        if (lang === 'ko') {
            // 영어에서 한국어로 변환
            if (translations[currentText]) {
                element.textContent = translations[currentText];
                translatedCount++;
                console.log(`번역됨: "${currentText}" → "${translations[currentText]}"`);
            }
        } else if (lang === 'en') {
            // 한국어에서 영어로 변환
            const englishText = Object.keys(translations).find(key => translations[key] === currentText);
            if (englishText) {
                element.textContent = englishText;
                translatedCount++;
                console.log(`번역됨: "${currentText}" → "${englishText}"`);
            }
        }
    });
    
    // 추가: 특정 클래스나 ID를 가진 요소들도 번역
    const specificElements = document.querySelectorAll('.slide-title, .slide-subtitle, .btn, .section-title, .nav-menu a');
    specificElements.forEach(element => {
        if (element.children.length > 0) return;
        
        const currentText = element.textContent.trim();
        
        if (lang === 'ko') {
            if (translations[currentText]) {
                element.textContent = translations[currentText];
                translatedCount++;
                console.log(`특정 요소 번역됨: "${currentText}" → "${translations[currentText]}"`);
            }
        } else if (lang === 'en') {
            const englishText = Object.keys(translations).find(key => translations[key] === currentText);
            if (englishText) {
                element.textContent = englishText;
                translatedCount++;
                console.log(`특정 요소 번역됨: "${currentText}" → "${englishText}"`);
            }
        }
    });
    
    console.log(`총 ${translatedCount}개 요소가 번역되었습니다.`);
    
    // 디버깅: 번역 매핑 상태 확인
    console.log('현재 번역 매핑 상태:');
    console.log('영어 → 한국어 매핑 개수:', Object.keys(translations).length);
    
    // 현재 페이지의 주요 텍스트들 확인
    const testElements = document.querySelectorAll('.slide-title, .slide-subtitle, .btn');
    console.log('현재 페이지의 주요 텍스트들:');
    testElements.forEach((el, index) => {
        if (el.children.length === 0) {
            console.log(`${index}: "${el.textContent.trim()}"`);
        }
    });
    
    console.log(`${lang === 'ko' ? '한국어' : 'English'}로 전환`);
}

// 저장된 언어 불러오기
function loadSavedLanguage() {
    const savedLang = localStorage.getItem('selectedLanguage');
    if (savedLang) {
        changeLanguage(savedLang);
    } else {
        // 기본값은 영어
        changeLanguage('en');
    }
}

// 페이지 로드 시 저장된 언어 불러오기
document.addEventListener('DOMContentLoaded', function() {
    // 저장된 언어 불러오기 (없으면 영어 기본값)
    loadSavedLanguage();
});
