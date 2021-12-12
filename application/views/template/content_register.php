<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstaApps</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css') ?>"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/templatemo-xtra-blog.css') ?>" rel="stylesheet">
    <!--
    
TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
</head>

<body>
    <div class="container-fluid">
        <main class="tm-main">
            <div class="row tm-row" style="justify-content: center; vertical-align: center; margin: auto;">
                <div class="col-lg-8 tm-post-col">
                    <div class="tm-post-full">
                        <form action="<?php echo base_url('C_login/signup_action') ?>" method="post" class="mb-5 tm-comment-form">
                            <?php if (!empty($this->session->flashdata('failed'))) { ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    </button>
                                    <?php echo $this->session->flashdata('failed'); ?>
                                </div>
                            <?php } ?>
                            <h2 class="tm-color-primary tm-post-title mb-4">Sign Up</h2>
                            <div class="mb-4">
                                <input class="form-control" name="name" type="text" placeholder="Full Name">
                            </div>
                            <div class="mb-4">
                                <input class="form-control" name="username" type="text" placeholder="Username">
                            </div>
                            <div class="mb-4">
                                <input class="form-control" name="pass" type="password" placeholder="Password">
                            </div>
                            <div class="mb-4">
                                <input class="form-control" name="repass" type="password" placeholder="Retype Password">
                            </div>
                            <div>
                                <table width="100%">
                                    <tr>
                                        <td align="right"><button type="submit" align="right" style="background-color: #0CC;" class="btn btn-success btn-lg">Sign Up</button></td>
                                    </tr>
                                    <tr>
                                        <td align="left">Have an account? <a href="<?php echo base_url('C_login') ?>">Login</a></td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/templatemo-script.js') ?>"></script>
</body>

</html>