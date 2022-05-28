</div>
</div>

</main>
<footer>
    <p>Copyright © 2022 <?php require_once __DIR__ . '../../../inc/env.php';
                        echo $_ENV['NAMA_PEMBUAT'] ?>. All rights reserved</p>

</footer>
</body>
<script type="text/javascript">
    let username = document.form_login.username;
    let password = document.form_login.password;

    let username_error = document.getElementById('email_error');
    let pass_error = document.getElementById('pass_error');

    username.addEventListener('textInput', username_Verify);
    password.addEventListener('textInput', pass_Verify);

    function validated() {
        if (username.value.length < 4) {
            username.style.border = "1px solid red";
            username.style.display = "block";
            username.focus();
            return false;
        }
        if (password.value.length < 4) {
            password.style.border = "1px solid red";
            pass_error.style.display = "block";
            password.focus();
            return false;
        }

    }

    function username_Verify() {
        if (username.value.length >= 3) {
            username.style.border = "1px solid silver";
            username_error.style.display = "none";
            return true;
        }
    }

    function pass_Verify() {
        if (password.value.length >= 3) {
            password.style.border = "1px solid silver";
            pass_error.style.display = "none";
            return true;
        }
    }
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11?v=1.0.0"></script>
<?php
if (isset($_SESSION['error_login']) and $_SESSION['error_login'] == true); ?>
<script>
    Swal.fire({
        title: 'Login Gagal',
        text: 'Username atau Password Salah',
        icon: 'error',
        confirmButtonText: 'OK'
    })
</script>
<?php
unset($_SESSION['error_login']);

?>

</html>