@extends('layouts.dashboard')

@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Product</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Add Product</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Basic Information</h4>
                            <p class="card-title-desc">Fill all information below</p>

                            <form action="{{route('store_product')}}" method="POST" enctype="multipart/form-data"> @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="productname">Product Name</label>
                                            <input id="productname" name="name" type="text" class="form-control"
                                                placeholder="Product Name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="manufacturername">Brand</label>
                                            <input id="manufacturername" name="brand" type="text" class="form-control"
                                                placeholder="Brand">
                                        </div>

                                        <div class="mb-3">
                                            <label for="price">Discount Price</label>
                                            <input id="price" name="discount" type="text" class="form-control"
                                                placeholder="Price">
                                        </div>

                                        <div class="mb-3">
                                            <label for="price">Actual Price</label>
                                            <input id="price" name="price" type="text" class="form-control"
                                                placeholder="Price">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="disabledInput">Categories</label>
                                            <select name="category_id" class="form-control">
                                                <option value="">select category</option>
                                                @foreach ($categories as $item)

                                                <option value="{{$item->id}}">{{$item->name}}</option>

                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="price">Discount in Percentage</label>
                                            <input id="price" name="percentage_discount" type="text"
                                                class="form-control" placeholder="Price">
                                        </div>

                                        <div class="mb-3">
                                            <label for="productdesc">Product Description</label>
                                            <textarea name="description" class="form-control" id="productdesc" rows="5"
                                                placeholder="Product Description"></textarea>
                                        </div>

                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Product Images</h4>


                                        <div class="fallback">
                                            <input name="image" type="file" multiple />
                                        </div>

                                        <div class="dz-message needsclick">
                                            <div class="mb-3">
                                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                            </div>

                                            <h4>Drop files here or click to upload.</h4>
                                        </div>

                                    </div>

                                </div>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                                        Changes
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>

                    <!-- end card-->


                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())

                    </script> © Skote.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection
