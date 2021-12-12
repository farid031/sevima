    <div class="container-fluid">
        <main class="tm-main">
            <div class="col-lg-12">
                <form action="<?php echo base_url('C_my_post/post_action') ?>" method="post" class="tm-comment-form" enctype="multipart/form-data">
                    <?php if (!empty($this->session->flashdata('failed'))) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $this->session->flashdata('failed'); ?>
                        </div>
                    <?php } ?>
                    <h2 class="tm-color-primary tm-post-title mb-4">Post Gambar</h2>
                    <div class="mb-4">
                        <span>Pilih Gambar</span>
                        <input class="form-control" type="file" name="gambar" id="gambar" placeholder="Pilih Gambar" onchange="loadFile(event)">
                        <img id="output" width="100%" height="100%" />
                    </div>
                    <div class="mb-4">
                        <span>Tulis Keterangan</span>
                        <textarea class="form-control" name="keterangan" placeholder="Tulis Keterangan"></textarea>
                    </div>
                    <div>
                        <table width="100%">
                            <tr>
                                <td align="right"><button type="submit" align="right" style="background-color: #0CC;" class="btn btn-success btn-lg">Post</button></td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>