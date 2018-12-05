
@extends('backend.adminpanel')

@section('content')
  <div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">


      <!-- All Information  -->
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <h1 class="text-center">Medicine Add</h1>
              <form  action="{{route('medicine_create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="medicine_name">Medicine Name</label>
                  <input type="text" class="form-control" id="medicine_name"  placeholder="Enter Medicine Name" name="medicine_name">
                </div>
                <div class="form-group">
                  <label for="medicine_quantity">Medicine Quantity</label>
                  <input type="text" class="form-control" id="medicine_quantity"  placeholder="Enter Medicine Quantity" name="medicine_quantity">
                </div>
                <div class="form-group">
                  <label for="medicine_description">Medicine Description(optional)</label>
                  <input type="text" class="form-control" id="medicine_description"  placeholder="Enter Medicine Description" name="medicine_description">
                </div>
                <div class="form-group">
                  <label for="company_id">Company Name</label>
                  <select class="form-control" name="company_id">
                    <option value="">---select one---</option>
                    @foreach ($companies as $company)
                      <option value="{{$company->id}}">{{$company->company_name}}</option>
                    @endforeach
                  </select>
                  {{-- <input type="text" class="form-control" id="company_id" placeholder="Enter Company Name" name="company_id"> --}}
                </div>
                <div class="form-group">
                  <label for="disease_id">Disease Name</label>
                  <select class="form-control js-example-basic-single" name="disease_id">
                    <option value="">---select one---</option>
                    @foreach ($diseases as $disease)
                      <option value="{{$disease->id}}">{{$disease->disease_name}}</option>
                    @endforeach
                  </select>
                  {{-- <input type="text" class="form-control" id="disease_id"  placeholder="Enter Disease Name" name="disease_id"> --}}
                </div>
                <div class="form-group">
                  <label for="medicine_image">Packet Image(optional)</label>
                  <input type="file" class="form-control" id="medicine_image"  name="medicine_image">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>


      </div>
      <!-- /All Information -->

      <div class="clearfix"></div>

    </div>
    <!-- .animated -->
  </div>
@endsection
