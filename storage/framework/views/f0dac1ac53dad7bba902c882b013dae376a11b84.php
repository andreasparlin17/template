

<?php $__env->startSection('konten'); ?>
<div class="container mt-5">
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($item); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php else: ?>
    
<?php endif; ?>


    <div class="card">
    <div class="card-body">
        <form action="<?php echo e('/buku/'.$data->judul_buku); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
         <div class="mb-3">
          <h1>Id: <?php echo e($data->id); ?></h1>  
        </div>   
          <div class="mb-1">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input value="<?php echo e($data->judul_buku); ?>" type="text" class="form-control" name="judul_buku" id="judul_buku">
            </div>
          <div class="mb-1">
            <label for="id_kategori" class="form-label">kategori</label>
            <input value="<?php echo e($data->id_kategori); ?>" type="text" class="form-control" name="id_kategori" id="id_kategori">
            </div>
          <div class="mb-1">
            <label for="id_penerbit" class="form-label">id_penerbit</label>
            <input value="<?php echo e($data->id_penerbit); ?>" type="text" class="form-control" name="id_penerbit" id="id_penerbit">
            </div>
          <div class="mb-1">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input value="<?php echo e($data->pengarang); ?>" type="text" class="form-control" name="pengarang" id="pengarang">
            </div>
          <div class="mb-1">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input value="<?php echo e($data->tahun_terbit); ?>" type="text" class="form-control" name="tahun_terbit" id="tahun_terbit">
            </div>
          <div class="mb-1">
            <label for="isbn" class="form-label">isbn</label>
            <input value="<?php echo e($data->isbn); ?>" type="text" class="form-control" name="isbn" id="isbn">
            </div>
          <div class="mb-1">
            <label for="j_buku_baik" class="form-label">Buku Baik</label>
            <input value="<?php echo e($data->j_buku_baik); ?>" type="text" class="form-control" name="j_buku_baik" id="j_buku_baik">
            </div>
          <div class="mb-1">
            <label for="Buku Rusak" class="form-label">Buku Rusak</label>
            <input value="<?php echo e($data->j_buku_rusak); ?>" type="text" class="form-control" name="j_buku_rusak" id="j_buku_rusak">
            </div>
          <button type="submit" class="btn btn-primary float-end mt-1 ">Update</button>
        </form>
    </div>
    </div>    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud2\resources\views/buku/edit.blade.php ENDPATH**/ ?>