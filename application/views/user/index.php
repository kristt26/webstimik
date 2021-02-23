<div ng-controller="userController">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-warning">
          <div class="card-header">
            <h5 class="card-title"><i class="fas fa-plus-square fa-1x"></i>&nbsp;&nbsp; Input User</h5>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form role="form" ng-submit="save()">
              <div class="form-group">
                <label for="username" class="col-form-label col-form-label-sm">Username</label>
                <input type="text" class="form-control  form-control-sm" id="username" ng-model="model.username"
                  placeholder="inputkan username" autocomplete="off" required>
              </div>
              <div class="form-group" ng-show="simpan">
                <label for="password" class="col-form-label col-form-label-sm">Password</label>
                <input type="password" class="form-control  form-control-sm" id="password" ng-model="model.password"
                  placeholder="inputkan password" required autocomplete="off">
              </div>
              <div class="form-group">
                <label for="nama_depan" class="col-form-label col-form-label-sm">Nama Depan</label>
                <input type="text" class="form-control  form-control-sm" id="nama_depan" ng-model="model.nama_depan"
                  placeholder="Nama Depan" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label for="nama_belakang" class="col-form-label col-form-label-sm">Nama Belakang</label>
                <input type="text" class="form-control  form-control-sm" id="nama_belakang" ng-model="model.nama_belakang"
                  placeholder="Nama Belakang" autocomplete="off" required>
              </div>
              <div class="form-group d-flex justify-content-between">
                <button type="button" class="btn btn-warning btn-sm" ng-show="!simpan" ng-click="clear()">Clear</button>
                <button type="submit" class="btn btn-primary btn-sm pull-right">{{simpan ? 'Simpan': 'Ubah'}}</button>
              </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <div class="col-md-8">
        <div class="card card-warning">
          <div class="card-header">
            <h5 class="card-title"><i class="fas fa-th-list"></i>&nbsp;&nbsp; List User</h5>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-sm table-hover table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Level</th>
                  <th>Nama</th>
                  <th><i class="fas fa-cog"></i></th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="item in datas">
                  <td>{{$index+1}}</td>
                  <td>{{item.username}}</td>
                  <td>{{item.level}}</td>
                  <td>{{item.nama_depan + ' ' + item.nama_belakang}}</td>
                  <td>
                    <button type="button" class="btn btn-warning btn-sm" ng-click="edit(item)"><i
                        class="fas fa-edit"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>
</div>
