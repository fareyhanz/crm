@extends('template')

@section('title')
  Admin | Sales
@endsection

@section('header')
  Sales
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <button class="btn btn-primary" data-toggle="modal" data-target="#modal-new-sales">Tambah Sales</button>

      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              No
            </th>
            <th>
              Id
            </th>
            <th>
              Nama
            </th>
            <th>
              Email
            </th>
            <th>
              Alamat
            </th>
            <th>
              Aksi
            </th>
          </tr>
        </thead>
        <body>
          @for($i=0; $i < 10; $i++)
            <tr>
              <td>
                {{$i + 1}}
              </td>
              <td>
                L0{{$i + 1}}
              </td>
              <td>
                Budi Andi
              </td>
              <td>
                budiandi@sales.com
              </td>
              <td>
                Bangkalan
              </td>
              <td>
                <div class="btn-group">
                  <button class="btn btn-defalut">Edit</button>
                  <button class="btn btn-danger">Hapus</button>
                </div>
              </td>
            </tr>
          @endfor
        </body>
      </table>
    </div>
  </div>
@endsection

@section('modal')
  <!-- Modal -->
<div id="modal-new-sales" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sales Baru</h4>
      </div>
      <div class="modal-body">
        <form class="form" action="" method="get">
          <div class="form-group">
            <label>Nama</label>
            <input class="form-control" type="text" name="name" placeholder="Nama">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="name" placeholder="Email">
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input class="form-control" type="date" placeholder="tanggal lahir">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="">
              <option value="option">Laki-laki</option>
              <option value="option">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Status Perkawinan</label>
            <select class="form-control" name="">
              <option value="option">Belum Menikah</option>
              <option value="option">Sudah Menikah</option>
            </select>
          </div>
          <div class="form-group">
            <label>Provinsi</label>
            <select class="form-control" name="">
              <option value="option">Jawa Timur</option>
            </select>
          </div>
          <div class="form-group">
            <label>Kota</label>
            <select class="form-control" name="">
              <option value="option">Bangkalan</option>
              <option value="option">Sampang</option>
              <option value="option">Pamekasan</option>
              <option value="option">Sumenep</option>
            </select>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" placeholder="Alamat" rows="4" cols="40"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="btn-group">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection