@extends('backend.layout.master')

@section('content')
{{--<div class="col-12 col-md-12">--}}
{{--    <div class="row">--}}
{{--        <div class="col-12">--}}
{{--            <h1>Thêm mới sách</h1>--}}
{{--        </div>--}}
{{--        <div class="col-12">--}}
{{--            <form method="post" action="{{ route('admin.books.store') }}" enctype="multipart/form-data">--}}
{{--                @csrf--}}
{{--                <div class="form-group">--}}
{{--                    <label>Tên sách</label>--}}
{{--                    <label>--}}
{{--                        <input type="text" class="form-control" name="name" placeholder="Enter name" required>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Ảnh</label>--}}
{{--                    <label>--}}
{{--                        <input type="file" class="form-control-file" name="image" required>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Nội dung sách</label>--}}
{{--                    <label>--}}
{{--                        <input type="text" class="form-control" name="description" required>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Giá nhập</label>--}}
{{--                    <label>--}}
{{--                        <input type="text" class="form-control" name="cost" required>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Giá bán</label>--}}
{{--                    <label>--}}
{{--                        <input type="number" class="form-control" name="price" required>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Số lượng nhập</label>--}}
{{--                    <label>--}}
{{--                        <input type="number" class="form-control" name="quantity_import" required>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">Số lượng còn lại</label>--}}
{{--                    <label>--}}
{{--                        <input type="number" class="form-control" name="quantity_now" required>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">ID tác giả</label>--}}
{{--                    <label>--}}
{{--                        <input type="number" class="form-control" name="author_id" required>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputEmail1">ID nhà xuất bản</label>--}}
{{--                    <label>--}}
{{--                        <input type="number" class="form-control" name="publisher_id" required>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-primary">Thêm mới</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Default form</h4>
                <p class="card-description">
                    Basic form layout
                </p>
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Username</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Horizontal Form</h4>
                <p class="card-description">
                    Horizontal form layout
                </p>
                <form class="forms-sample">
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description">
                    Basic form elements
                </p>
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
              </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity1">City</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
