@extends('admin.admin_master')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Add Supplier Page</h4><br><br>

                            <form method="POST" action="{{ route('update.password') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Mobile
                                        No</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="mobile_no">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Address</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="address">
                                    </div>
                                </div>


                                <input type="submit" class="btn btn-info waves-effect waves-light" value="add supplier">
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
