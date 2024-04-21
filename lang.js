// Get elements
const enLink = document.getElementById('en');
const esLink = document.getElementById('es');
const agreementEn = document.getElementById('agreement-en');
const agreementEs = document.getElementById('agreement-es');

// Function to show English content and hide Spanish content
function showKr() {
    agreementEn.style.display = 'block';
    agreementEs.style.display = 'none';
}

// Function to show Spanish content and hide English content
function showSpanish() {
    agreementEn.style.display = 'none';
    agreementEs.style.display = 'block';
}

// Event listeners for language toggle
enLink.addEventListener('click', () => {
    showEnglish();
});

esLink.addEventListener('click', () => {
    showSpanish();
});

// Initialize content to English
showEnglish();
