<div class="col-md-6">
    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
        <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('https://cdnharuman.herokuapp.com/e-lib/e-lib_mail.jpg')"></div>
    </div>
</div>
</div>
</div>
</div>
</section>
</main>
<footer class="footer py-5">
    <div class="container">

        <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
                <p>Copyright <?php echo '© ' . date('Y') . ' ' . $_ENV['NAMA_PEMBUAT']  ?>. All rights reserved</p>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<!--   Core JS Files   -->
<script src="<?php echo $_ENV['LINK_WEB']  ?>assets/js/core/popper.min.js"></script>
<script src="<?php echo $_ENV['LINK_WEB']  ?>assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo $_ENV['LINK_WEB']  ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?php echo $_ENV['LINK_WEB']  ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo $_ENV['LINK_WEB']  ?>assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.slim.min.js?v=3.2.1"></script>
</body>

</html>