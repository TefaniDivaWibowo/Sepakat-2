<div class="container-fluid admin-content">
  <div class="row">
    <div class="col-xs-10">
      <h1><i class="fa fa-fw fa-user"></i> Perusahaan Manufaktur</h1>
    </div>
    <div class="col-xs-2" style="padding-top:3%;">
      <button class="btn btn-primary" data-target="#ModalAdd" data-toggle="modal" type="button"><i class="fa fa-fw fa-plus-circle"></i> Tambah Data</button>
    </div>
  </div>
  <hr />
  <table class="table table-striped table-bordered table-hover">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No Telepon</td>
            <td>Email</td>
            <td>Bukti</td>
            <td>Kategori</td>
            <td>Barang yang dibutuhkan</td>
            <td>Provinsi</td>
            <td>Kota</td>
            <td colspan="2"></td>
        </tr>
      <?php 
        $no = 0;
        foreach($manufaktur as $u){ 
        $no++;
      ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $manufaktur[$no-1]['nama']; ?></td>
            <td><?php echo $manufaktur[$no-1]['alamat']; ?></td>
            <td><?php echo $manufaktur[$no-1]['no_telp']; ?></td>
            <td><?php echo $manufaktur[$no-1]['email']; ?></td>
            <td><?php echo $manufaktur[$no-1]['bukti']; ?></td>
            <td><?php echo $manufaktur[$no-1]['kategori']; ?></td>
            <td><?php echo $manufaktur[$no-1]['barang_dibutuhkan']; ?></td>
            <td><?php echo $manufaktur[$no-1]['provinsi']; ?></td>
            <td><?php echo $manufaktur[$no-1]['kota']; ?></td>
            <td><button align="center" class="btn btn-success" data-target="#ModalEdit" data-toggle="modal" type="button"><i class="fa fa-fw fa-pencil-square"></i> Edit</button> <button class="btn btn-danger" data-target="#ModalDelete" data-toggle="modal" type="button"><i class="fa fa-fw fa-trash-o"></i> Delete</button></td>
        </tr>
        <?php
        }
        ?>
  </table>
  <nav aria-label="Page navigation" class="text-right">
    <ul class="pagination">
      <li>
        <a href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li>
        <a href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</div>

<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="ModalAddLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalAddLabel"><i class="fa fa-fw fa-plus-circle"></i>Tambah Data Baru</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <span>Nama :</span>
          <input type="text" name="username" id="username" class="form-control" placeholder="Username" />
        </div>
        <div class="form-group">
          <span>Alamat :</span>
          <input type="text" name="password" id="password" class="form-control" placeholder="Password" />
        </div>
        <div class="form-group">
          <span>Alamat :</span>
          <input type="text" name="password" id="password" class="form-control" placeholder="Password" />
        </div>
        <div class="form-group">
          <span>Alamat :</span>
          <input type="text" name="password" id="password" class="form-control" placeholder="Password" />
        </div>
        <div class="form-group">
          <span>Alamat :</span>
          <input type="text" name="password" id="password" class="form-control" placeholder="Password" />
        </div>
        <div class="form-group">
          <span>Alamat :</span>
          <input type="text" name="password" id="password" class="form-control" placeholder="Password" />
        </div>
        <div class="form-group">
          <span>Alamat :</span>
          <input type="text" name="password" id="password" class="form-control" placeholder="Password" />
        </div>
        <div class="form-group">
          <span>Alamat :</span>
          <input type="text" name="password" id="password" class="form-control" placeholder="Password" />
        </div>
        <div class="form-group">
          <span>Alamat :</span>
          <input type="text" name="password" id="password" class="form-control" placeholder="Password" />
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
        <button type="button" class="btn btn-primary">Tambahkan Data</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="ModalEditLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalEditLabel"><i class="fa fa-fw fa-pencil-square"></i>Sunting Data</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <span>ID User :</span>
          <input disabled type="text" name="iduser" id="iduser" class="form-control" placeholder="ID User" value="2" />
        </div>
        <div class="form-group">
          <span>Username :</span>
          <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="moklet"/>
        </div>
        <div class="form-group">
          <span>Password :</span>
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="fewfwe"/>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
        <button type="button" class="btn btn-primary">Simpan Perubahan</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ModalDeleteLabels"><i class="fa fa-fw fa-trash-o"></i>Hapus Data</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin akan menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batalkan</button>
        <button type="button" class="btn btn-primary">Hapus Data</button>
      </div>
    </div>
  </div>
</div>
