<script src="js/lib/jquery.min.js"></script>
<script src="js/lib/bootstrap/bootstrap.min.js"></script>
<script>
    document.getElementById('submitBtn').addEventListener('click', function(e) {
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirm_password').value;
        var message = document.getElementById('message');

        if (password !== confirmPassword) {
            message.innerHTML = 'Password tidak cocok';
            e.preventDefault(); // Hindari pengiriman formulir jika password tidak cocok
        } else {
            message.innerHTML = '';
        }
    });
</script>