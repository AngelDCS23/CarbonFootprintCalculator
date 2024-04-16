function fadeLabel(input) {
    var label = input.nextElementSibling;
    if (input.value.trim() !== '') {
        label.classList.add('hidden');
    } else {
        label.classList.remove('hidden');
    }
}