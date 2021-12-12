    <div class="container-fluid">
        <main class="tm-main">
            <div class="row tm-row">
                <td align="right"><a href="<?php echo base_url('C_my_post/form_post') ?>"><button align="right" style="background-color: #0CC;" class="btn btn-success btn-lg">Upload Gambar</button></a>
            </div>
            <div class="row tm-row">
                <?php foreach ($list_gambar as $data) { ?>
                    <article class="col-12 col-md-6 tm-post">
                        <hr class="tm-hr-primary">
                        <a href="post.html" class="effect-lily tm-post-link tm-pt-40">
                            <div class="tm-post-link-inner" style="height: 70%; width: 70%;">
                                <img src=" <?php echo base_url($data->post_file_url) ?>" alt="Image" class="img-fluid">
                            </div>
                        </a>
                        <p class="tm-pt-30">
                            <?php echo $data->post_desc ?>
                        </p>
                        <div class="d-flex justify-content-between tm-pt-45">
                            <span class="tm-color-primary"><?php echo date('d M Y, H:i:s', strtotime($data->post_file_created_at)) ?></span>
                            <span>by <?php echo $data->user_fullname ?></span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span>0 like</span>
                            <span>0 comments</span>
                        </div>
                    </article>
                <?php } ?>
            </div>