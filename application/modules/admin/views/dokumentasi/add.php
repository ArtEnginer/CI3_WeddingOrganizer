<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Header -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Tambah Dokumentasi</h6>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin'); ?>"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dokumentasi'); ?>">dokumentasi</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">
  <?php echo form_open_multipart('admin/dokumentasi/add_dokumentasi'); ?>

  <div class="row">

    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="mb-0">Foto</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label class="form-control-label" for="pic">Foto Utama:</label>
            <input type="file" name="picture" class="form-control" id="pic">
          </div>
          <div class="form-group">
            <label class="form-control-label" for="ket">Keterangan:</label>
            <textarea name="keterangan" class="form-control" id="ket" rows="3"></textarea>
          </div>


        </div>
        <div class="card-footer text-right">
          <input type="submit" value="Tambah Dokumentasi Baru" class="btn btn-primary">
        </div>
      </div>
    </div>
  </div>

  </form>