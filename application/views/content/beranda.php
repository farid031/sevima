    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row tm-row">
                <?php foreach ($list_gambar as $data) { ?>
                    <article class="col-12 col-md-6 tm-post">
                        <hr class="tm-hr-primary">
                        <a href="<?php echo base_url('C_detail_foto/index/'.$data->post_id) ?>" class="effect-lily tm-post-link tm-pt-40">
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
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                </div>
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>