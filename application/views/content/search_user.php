    <div class="container-fluid">
        <main class="tm-main">
            <div class="row tm-row">
                <td align="right"><a href="<?php echo base_url('C_my_post/form_post') ?>"><button align="right" style="background-color: #0CC;" class="btn btn-success btn-lg">Upload Gambar</button></a>
            </div>
            <div class="row tm-row">
                <?php foreach ($list_user as $data) { ?>
                    <article class="col-12 col-md-6 tm-post">
                        <hr class="tm-hr-primary">
                        <a href="post.html" class="effect-lily tm-post-link tm-pt-40">
                            <div class="tm-post-link-inner" style="height: 70%; width: 70%;">
                                <img src="#" alt="Image" class="img-fluid">
                            </div>
                        </a>
                        <p class="tm-pt-30">
                            <?php echo $data->user_fullname ?>
                        </p>
                        <div class="d-flex justify-content-between tm-pt-45">
                            <span class="tm-color-primary">
                                <?php if ($data->is_follow == 'tidak') { ?>
                                    <button type="submit" align="right" class="btn btn-success btn-lg" onclick="follow(<?php echo $data->user_id ?>)">Follow</button>
                                <?php } elseif ($data->is_follow == 'ya')  { ?>
                                    <button type="submit" align="right" class="btn btn-danger btn-lg" onclick="unfollow(<?php echo $data->user_id ?>)">Unfollow</button>
                                <?php } ?>
                            </span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span><?php echo $data->follower ?> followers</span>
                            <span></span>
                        </div>
                    </article>
                <?php } ?>
            </div>