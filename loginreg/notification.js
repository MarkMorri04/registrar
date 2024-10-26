// script.js
document.querySelector('.login-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const notification = document.getElementById('notification');
    notification.textContent = 'Invalid Username/Password';
});
