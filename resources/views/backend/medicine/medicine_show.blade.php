
@extends('backend.adminpanel')
@section('content')
  <!-- Orders -->
  <div class="orders">
    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <div class="card-body">
            <h4 class="box-title">Medicine List </h4>
          </div>
          <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table ">
                <thead>
                  <tr>
                    <th class="serial">Serial</th>
                    <th class="avatar">Image</th>
                    <th>Medicine Name</th>
                    <th>Medicine Quantity</th>
                    <th>Description</th>
                    <th>Company Name</th>
                    <th>Disease Name</th>
                    <th>reserve Name</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $serail = 1;
                  @endphp
                  @foreach ($medicines as $medicine)
                    <tr>
                      <td class="serial">{{$serail}}.</td>
                      <td class="avatar">
                        <div class="round-img">
                          <a href="#"><img class="rounded-circle" src="{{asset('/storage')}}/{{$medicine->medicine_image}}" alt=""></a>
                        </div>
                      </td>

                      <td>  <span class="name">{{$medicine->medicine_name}}</span> </td>
                      <td>  <span class="name">{{$medicine->medicine_quantity}}</span> </td>
                      <td> <span class="name">{{$medicine->medicine_description}}</span> </td>
                      <td><span class="name">{{$medicine->company_id}}</span></td>
                      {{-- <td><span class="name">{{$medicine->companies->company_name}}</span></td> --}}
                      <td><span class="name">{{$medicine->disease_id}}</span></td>
                      <td>
                        <span class="badge badge-complete">{{$medicine->medicine_name}}</span>
                      </td>
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
