function validateNumberInput(event) {
    let input = event.target;
    input.value = input.value.replace(/[^0-9]/g, '');
    if (input.value.length > 6) {
        input.value = input.value.slice(0, 6);
    }
}