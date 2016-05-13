@extends('template')

@section('title')
  Admin | Activities
@endsection

@section('header')
  Activities
@endsection

@section('body')
  <div class="box">
    <div class="box-body">
      <button class="btn btn-primary" data-toggle="modal" data-target="#modal-new-oportunity">Tambah Activity</button>

      <table class="table">
        <thead>
          <tr>
            <th>
              No
            </th>
            <th>
              Nama Activity
            </th>
            <th>
              Tempat
            </th>
            <th>
              Tanggal
            </th>
            <th>
              Deskripsi
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
                Rapat Akhir Bulan
              </td>
              <td>
                Kantor
              </td>
              <td>
                30-0{{$i + 1}}-2016
              </td>
              <td>
                Membahas Customers
              </td>
              <td>
                <div class="btn-groups">
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
  <div id="modal-new-oportunity" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Activity</h4>
        </div>
        <div class="modal-body">
          <form class="form" action="" method="get">
            <div class="form-group">
              <label>Activity</label>
              <input class="form-control" type="text" name="activity" placeholder="Text">
            </div>
            <div class="form-group">
              <label>Tempat</label>
              <input class="form-control" type="text" name="tempat" placeholder="Text">
            </div>
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" name="">
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <input class="form-control" type="text" name="amount" placeholder="Text">
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