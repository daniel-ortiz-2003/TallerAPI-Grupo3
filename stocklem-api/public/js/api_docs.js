document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.nav-link');
    const resourceSections = document.querySelectorAll('.resource-section');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            navLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
            resourceSections.forEach(section => section.classList.add('d-none'));
            const targetResource = this.getAttribute('data-resource');
            const targetSection = document.getElementById(targetResource);
            if (targetSection) {
                targetSection.classList.remove('d-none');
            }
        });
    });

    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        const methodCards = document.querySelectorAll('.method-card');
        methodCards.forEach(card => {
            const methodText = card.textContent.toLowerCase();
            const parentSection = card.closest('.resource-section');
            if (methodText.includes(searchTerm)) {
                card.style.display = 'block';
                if (searchTerm.length > 0) {
                    parentSection.classList.remove('d-none');
                }
            } else {
                card.style.display = searchTerm.length > 0 ? 'none' : 'block';
            }
        });
        if (searchTerm.length === 0) {
            const activeResource = document.querySelector('.nav-link.active').getAttribute('data-resource');
            resourceSections.forEach(section => {
                if (section.id === activeResource) {
                    section.classList.remove('d-none');
                } else {
                    section.classList.add('d-none');
                }
            });
        }
        highlightSearchTerm(searchTerm);
    });

    const collapseElements = document.querySelectorAll('[data-bs-toggle="collapse"]');
    collapseElements.forEach(element => {
        const targetId = element.getAttribute('data-bs-target');
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            targetElement.addEventListener('show.bs.collapse', function() {
                element.classList.remove('collapsed');
            });
            targetElement.addEventListener('hide.bs.collapse', function() {
                element.classList.add('collapsed');
            });
        }
    });
});

function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(function() {
        showCopyFeedback();
    }).catch(function(err) {
        console.error('Error al copiar: ', err);
        fallbackCopyTextToClipboard(text);
    });
}

function fallbackCopyTextToClipboard(text) {
    const textArea = document.createElement("textarea");
    textArea.value = text;
    textArea.style.top = "0";
    textArea.style.left = "0";
    textArea.style.position = "fixed";
    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();
    try {
        document.execCommand('copy');
        showCopyFeedback();
    } catch (err) {
        console.error('Fallback: No se pudo copiar', err);
    }
    document.body.removeChild(textArea);
}

function copyCode(button) {
    const codeBlock = button.parentElement;
    const code = codeBlock.querySelector('pre').textContent;
    copyToClipboard(code);
}

function showCopyFeedback() {
    const tooltip = document.createElement('div');
    tooltip.className = 'position-fixed bg-success text-white px-3 py-2 rounded shadow';
    tooltip.style.top = '20px';
    tooltip.style.right = '20px';
    tooltip.style.zIndex = '9999';
    tooltip.textContent = '¡Copiado al portapapeles!';
    document.body.appendChild(tooltip);
    setTimeout(() => {
        if (tooltip.parentNode) {
            tooltip.parentNode.removeChild(tooltip);
        }
    }, 2000);
}

if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
}

function highlightSearchTerm(searchTerm) {
    const methodCards = document.querySelectorAll('.method-card');
    methodCards.forEach(card => {
        let content = card.innerHTML;
        content = content.replace(/<mark class="search-highlight">(.*?)<\/mark>/gi, '$1');
        if (searchTerm && searchTerm.length > 2) {
            const regex = new RegExp(`(${searchTerm})`, 'gi');
            content = content.replace(regex, '<mark class="search-highlight">$1</mark>');
        }
        card.innerHTML = content;
    });
}

document.getElementById('searchInput').addEventListener('input', function() {
    const searchTerm = this.value.toLowerCase();
    highlightSearchTerm(searchTerm);
});