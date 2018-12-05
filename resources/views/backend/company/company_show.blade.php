
@extends('backend.adminpanel')
@section('content')
  <!-- Orders -->
  <div class="orders">
    <div class="row justify-content-center">
      <div class="col-xl-4">
        <div class="card">
          <div class="card-body">
            <h4 class="box-title">Company Name </h4>
          </div>
          <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table ">
                <thead>
                  <tr>
                    <th class="serial">Serial</th>
                    <th>Company Name</th>

                  </tr>
                </thead>
                <tbody>
                  @php
                    $serail = 1;
                  @endphp
                  @foreach ($companies as $company)
                    <tr>
                      <td class="serial">{{$serail}}.</td>
                      <td>  <span class="name">{{$company->company_name}}</span> </td>

                    </tr>
                    @php
                      $serail++;
                    @endphp
                  @endforeach


                </tbody>
              </table>
            </div> <!-- /.table-stats -->
          </div>
        </div> <!-- /.card -->
      </div>  <!-- /.col-lg-8 -->


    </div>
  </div>
  <!-- /.orders -->
@endsection
