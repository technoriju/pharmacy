@extends('manage.layouts.common-template')
@push('title')
    <title>Pharmacy - Medicine Add</title>
@endpush
@section('body')
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add Medicine</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{$url}}" method="post">
                                                @csrf
                                                @if((Request::segment(4) !== null) && Request::segment(4) == 'edit')
                                                  {{method_field('PUT')}}
                                                @endif
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        @if(isset($errors) && count($errors)>0)
                                                           <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
                                                        @endif
                                                        @if(session('error')!== null)
                                                            <div class="alert alert-danger" role="alert">{{session('error')}}</div>
                                                        @endif
                                                        @if(session('success')!== null)
                                                            <div class="alert alert-success" role="alert">{{session('success')}}</div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Medicine Name (*)</label>
                                                            <input name="medicine_name" type="text" class="form-control" id="" placeholder="Medicine Name" value="{{ $data->medicine_name ?? old('medicine_name')}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">

                                                    </div>
                                                    <div class="col-md-6">
                                                     <div class="form-group">
                                                      <button type="submit" name="sub" value="submit" class="btn btn-primary">@if(isset($data)) Update @else Submit @endif</button>
                                                     </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Input group -->

                                </div>
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

   <script>

   </script>

@endpush
