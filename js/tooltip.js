// 커서를 따라다니는 툴팁 JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const tooltip = document.getElementById('tooltip');
    const tooltipText = document.getElementById('tooltip-text');
    
    if (!tooltip || !tooltipText) return;
    
    // 툴팁을 숨김
    tooltip.style.display = 'none';
    
    // 모든 요소에 마우스 이벤트 추가
    document.addEventListener('mouseover', function(e) {
        const target = e.target;
        
        // data-tooltip 속성이 있는 요소만 처리
        if (target.hasAttribute('data-tooltip')) {
            const tooltipContent = target.getAttribute('data-tooltip');
            tooltipText.textContent = tooltipContent;
            tooltip.style.display = 'block';
        }
    });
    
    document.addEventListener('mouseout', function(e) {
        const target = e.target;
        
        if (target.hasAttribute('data-tooltip')) {
            tooltip.style.display = 'none';
        }
    });
    
    // 마우스 움직임에 따라 툴팁 위치 업데이트
    document.addEventListener('mousemove', function(e) {
        if (tooltip.style.display === 'block') {
            const x = e.clientX + 10;
            const y = e.clientY + 10;
            
            tooltip.style.left = x + 'px';
            tooltip.style.top = y + 'px';
        }
    });
});
