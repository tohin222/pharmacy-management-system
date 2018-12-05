@extends('backend.adminpanel')
@section('content')
  <!-- Orders -->
  <div class="orders">
    <div class="row justify-content-center">
      <div class="col-xl-10">
        <div class="card">
          <div class="card-body">
            <h4 class="box-title">Medicine List </h4>
          </div>
          <div class="card-body--">
            <div class="table-stats order-table ov-h">
              <table class="table " id="example">
                <thead>
                  <tr>
                    <th class="serial">Serial</th>
                    <th>Medicine Name</th>
                    <th>Medicine Quantity</th>
                    <th>input</th>
                    <th>Add</th>

                  </tr>
                </thead>
                <tbody>
                  @php
                    $serail = 1;
                  @endphp
                  @foreach ($medicines as $medicine)
                    <tr>
                      <td class="serial">{{$serail}}.</td>
                      <td>  <span class="name">{{$medicine->medicine_name}}</span> </td>
                      <td>  <span class="name">{{$medicine->medicine_quantity}}</span> </td>
                      <td>  <span class="name"><input type="text" name="" id="{{$medicine->id}}"> </span> </td>

                      <td>  <span class="name"><button type="submit" name="button" class="btn btn-warning add_button" value="{{$medicine->id}}">Add</button></span> </td>


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


@section('footer_scripts')
  <script>
    $(document).ready(function(){
      $('.add_button').click(function(){
       var idwehave = $(this).val();
       var quantity = $('#'+idwehave).val();
      // var price_from_table = $(this).closest('tr').find('.price_from_table').html();

       if(quantity==''){
         alert("Kiccu Nai!!");
       }
       else{
         var link = '/addmedicine/'+idwehave+'/'+quantity;
         window.location.href = link;
       }
      });
    });
    
  </script>
@endsection
