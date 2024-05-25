document.querySelector('form').addEventListener('submit', function(event) {
    setTimeout(function() {
        document.querySelector('input[name="antwort"]').value = '';
    }, 1000);
});
