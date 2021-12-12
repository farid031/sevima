<footer class="row tm-row">
    <hr class="col-12">
    <div class="col-md-6 col-12 tm-color-gray">
        Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-external-link">TemplateMo</a>
    </div>
    <div class="col-md-6 col-12 tm-color-gray tm-copyright">
        Copyright 2020 Xtra Blog Company Co. Ltd.
    </div>
</footer>
</main>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/templatemo-script.js') ?>"></script>

<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };

    function follow(user_id) {
        if (window.confirm('Apakah Anda yakin akan memfollow pengguna ini?')) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('C_search_user/follow') ?>",
                data: {
                    user_id: user_id
                },
                success: function(response) {
                    window.location.reload();
                },
                error: function() {
                    alert("Invalide!");
                }
            });
        }
    }

    function unfollow(user_id) {
        if (window.confirm('Apakah Anda yakin akan melakukan unfollow pada pengguna ini?')) {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('C_search_user/unfollow_action') ?>",
                data: {
                    user_id: user_id
                },
                success: function(response) {
                    window.location.reload();
                },
                error: function() {
                    alert('error');
                }
            });
        }
    }
</script>

</body>

</html>