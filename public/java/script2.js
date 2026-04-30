function toggleForm() {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');

    // Menukar kelas 'hidden' antar form
    loginForm.classList.toggle('hidden');
    registerForm.classList.toggle('hidden');
}