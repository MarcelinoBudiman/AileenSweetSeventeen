const textInput = document.getElementById('text-input');
const startTypingButton = document.getElementById('start-typing');

startTypingButton.addEventListener('click', () => {
    const textToType = 'Hello, this is a typing animation!';
    let currentIndex = 0;

    const typeText = () => {
        if (currentIndex < textToType.length) {
            textInput.value += textToType.charAt(currentIndex);
            currentIndex++;
            setTimeout(typeText, 100); // Adjust typing speed (milliseconds)
        }
    };

    textInput.value = ''; // Clear the input field
    typeText();
});
