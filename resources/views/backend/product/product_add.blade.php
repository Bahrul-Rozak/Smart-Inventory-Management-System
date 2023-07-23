@extends('admin.admin_master')
@section('admin')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Product Page </h4><br><br>
                            <form method="post" action="{{ route('product.store') }}" id="myForm">
                                @csrf
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Product Name </label>
                                    <div class="form-group col-sm-10">
                                        <input name="name" class="form-control @error('name') is-invalid @enderror" type="text" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Supplier Name </label>
                                    <div class="col-sm-10">
                                        <select name="supplier_id" class="form-select @error('supplier_id') border-danger @enderror" aria-label="Default select example">
                                            <option selected="">Open this select menu</option>
                                            @foreach ($supplier as $supp)
                                                <option value="{{ $supp->id }}" @selected(old('supplier_id') == $supp->id) >{{ $supp->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('supplier_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Unit Name </label>
                                    <div class="col-sm-10">
                                        <select name="unit_id" class="form-select @error('unit_id') border-danger @enderror" aria-label="Default select example">
                                            <option selected="">Open this select menu</option>
                                            @foreach ($unit as $uni)
                                                <option value="{{ $uni->id }}" @selected(old('unit_id') == $uni->id)>{{ $uni->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('unit_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Category Name </label>
                                    <div class="col-sm-10">
                                        <select name="category_id" class="form-select @error('category_id') border-danger @enderror" aria-label="Default select example">
                                            <option selected="">Open this select menu</option>
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}" @selected(old('category_id') == $cat->id)>{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Product">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    supplier_id: {
                        required: true,
                    },
                    unit_id: {
                        required: true,
                    },
                    category_id: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'Please Enter Your Product Name',
                    },
                    supplier_id: {
                        required: 'Please Select One Supplier',
                    },
                    unit_id: {
                        required: 'Please Select One Unit',
                    },
                    category_id: {
                        required: 'Please Select One Category',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
