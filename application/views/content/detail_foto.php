<div class="container-fluid">
    <main class="tm-main">
        <?php foreach ($gambar as $data) { ?>
            <div class="row tm-row">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <!-- Video player 1422x800 -->
                    <img src="<?php echo base_url($data->post_file_url) ?>"width="70%" height="70%" controls class="tm-mb-40"/>
                </div>
            </div>
            <div class="row tm-row">
                <div class="col-lg-8 tm-post-col">
                    <div class="tm-post-full">
                        <div class="mb-4">
                            <?php echo $data->post_desc ?>
                        </div>

                        <!-- Comments -->
                        <div>
                            <h2 class="tm-color-primary tm-post-title">Comments</h2>
                            <hr class="tm-hr-primary tm-mb-45">
                            <div class="tm-comment tm-mb-45">
                                <figure class="tm-comment-figure">
                                    <img src="img/comment-1.jpg" alt="Image" class="mb-2 rounded-circle img-thumbnail">
                                    <figcaption class="tm-color-primary text-center">Mark Sonny</figcaption>
                                </figure>
                                <div>
                                    <p>
                                        Praesent aliquam ex vel lectus ornare tritique. Nunc et eros
                                        quis enim feugiat tincidunt et vitae dui. Nullam consectetur
                                        justo ac ex laoreet rhoncus. Nunc id leo pretium, faucibus
                                        sapien vel, euismod turpis.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="tm-color-primary">REPLY</a>
                                        <span class="tm-color-primary">June 14, 2020</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tm-comment-reply tm-mb-45">
                                <hr>
                                <div class="tm-comment">
                                    <figure class="tm-comment-figure">
                                        <img src="img/comment-2.jpg" alt="Image" class="mb-2 rounded-circle img-thumbnail">
                                        <figcaption class="tm-color-primary text-center">Jewel Soft</figcaption>
                                    </figure>
                                    <p>
                                        Nunc et eros quis enim feugiat tincidunt et vitae dui.
                                        Nullam consectetur justo ac ex laoreet rhoncus. Nunc
                                        id leo pretium, faucibus sapien vel, euismod turpis.
                                    </p>
                                </div>
                                <span class="d-block text-right tm-color-primary">June 21, 2020</span>
                            </div>
                            <form action="" class="mb-5 tm-comment-form">
                                <h2 class="tm-color-primary tm-post-title mb-4">Your comment</h2>
                                <div class="mb-4">
                                    <input class="form-control" name="name" type="text">
                                </div>
                                <div class="mb-4">
                                    <input class="form-control" name="email" type="text">
                                </div>
                                <div class="mb-4">
                                    <textarea class="form-control" name="message" rows="6"></textarea>
                                </div>
                                <div class="text-right">
                                    <button class="tm-btn tm-btn-primary tm-btn-small">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>