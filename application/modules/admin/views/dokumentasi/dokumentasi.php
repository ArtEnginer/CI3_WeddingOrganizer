<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Kelola Dokumentasi</h6>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <a href="<?php echo site_url('admin/dokumentasi/add'); ?>" class="btn btn-sm btn-neutral">Tambah</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0">Kelola Dokumentasi</h3>
        </div>

        <?php if (count($dokumentasi) > 0) : ?>
          <div class="card-body">
            <div class="row">
              <?php foreach ($dokumentasi as $product) : ?>
                <div class="col-md-3">
                  <div class="card card-primary">
                    <div class="card-body">
                      <div class="text-center">
                        <!-- Displaying an image with alt text and applying styling -->
                        <img alt="<?php echo $product->nama; ?>" class="img img-fluid rounded" src="<?php echo base_url('assets/uploads/dokumentasi/' . $product->nama); ?>" style="width: 1000px; max-height: 800px">
                      </div>
                      <p><?php echo $product->keterangan; ?></p>
                    </div>
                    <div class="card-footer text-center">
                      <!-- Creating a delete button with a link to delete a document -->
                      <a href="<?php echo site_url('admin/dokumentasi/delete/' . $product->id); ?>" class="btn btn-info btn-sm"><i class="fa fa-trash"></i></a>
                      <!-- Uncomment the line below if you have an edit functionality -->
                      <!-- <a href="<?php echo site_url('admin/dokumentasi/edit/' . $product->id); ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a> -->
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>

            </div>
          </div>
          <div class="card-footer">
            <?php echo $pagination; ?>
          </div>
        <?php else : ?>
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <div class="alert alert-primary">
                  Belum ada data produk yang ditambahkan. Silahkan menambahkan baru.
                </div>
              </div>
              <div class="col-md-4">
                <a href="<?php echo site_url('admin/dokumentasi/add'); ?>"><i class="fa fa-plus"></i> Tambah baru</a>
                <br>
              </div>
            </div>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>