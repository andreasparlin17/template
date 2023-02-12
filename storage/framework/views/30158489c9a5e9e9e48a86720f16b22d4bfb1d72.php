
<?php $__env->startSection('konten'); ?>
    <div class="container">
        <h1 style="text-align:center">table buku</h1>
        <a href="<?php echo e(route('buku.create')); ?>" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card">
            <div class="card-body">
                <table class="table" style="text-align: center">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>judul_buku</th>
                            <th>penerbit</th>
                            <th>pengarang</th>
                            <th>tahun_terbit</th>
                            <th>isbn</th>
                            <th>Jumlah buku baik</th>
                            <th>Jumlah buku rusak</th>
                            <th>Jumlah Buku</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($b->id); ?></td>
                            <td><?php echo e($b->judul_buku); ?></td>
                            <td><?php echo e($b->id_penerbit); ?></td>
                            <td><?php echo e($b->pengarang); ?></td>
                            <td><?php echo e($b->tahun_terbit); ?></td>
                            <td><?php echo e($b->isbn); ?></td>
                            <td><?php echo e($b->j_buku_baik); ?></td>
                            <td><?php echo e($b->j_buku_rusak); ?></td>
                            
                            <td><?php echo e($b->count()); ?></td>
                            <td>
                                <a href="<?php echo e(url ('/buku/'.$b->judul_buku.'/edit')); ?>" class="btn btn-success btn-sm">Edit</a>
                                <form action="<?php echo e('/buku/'.$b->judul_buku); ?>" method="post" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud2\resources\views/buku/index.blade.php ENDPATH**/ ?>