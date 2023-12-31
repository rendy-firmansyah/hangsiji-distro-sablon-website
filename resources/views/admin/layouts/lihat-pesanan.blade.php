@extends('admin.main-dashboard')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Striped Table</h4>
                <p class="card-description">
                  Add class <code>.table-striped</code>
                </p>
                {{-- <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div> --}}
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Invoice Code</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Status</th>
                        <th>Progress</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>INV-211220223-H71N</td>
                          <td>Ahmad Fajrul</td>
                          <td>082339987234</td>
                          <td>Diproses</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td></td>
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

@endsection