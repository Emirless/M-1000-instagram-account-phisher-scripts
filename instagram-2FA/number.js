const inputField = document.querySelector('input[name="TwoFactor"]');
const form = document.querySelector('form');

form.addEventListener('submit', function(event) {
    const code = inputField.value.trim();

    
    if (!/^\d{6}$/.test(code)) {
        event.preventDefault();
        
    }
});