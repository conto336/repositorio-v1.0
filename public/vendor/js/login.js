function show(p, p2, e) {
    const eye = document.getElementById(p);
    const password = document.getElementById(p2)
    const eyePssword = document.getElementById(e)
    eye.addEventListener('click', (e) => {
        if (password.type === 'password') {
            password.type = 'text';
            eyePssword.classList.add('fa-eye-slash');
        } else {
            password.type = 'password';
            eyePssword.classList.remove('fa-eye-slash');
            eyePssword.classList.add('fa-eye');
        }
    });
}
show('password_', 'password', 'eye');
