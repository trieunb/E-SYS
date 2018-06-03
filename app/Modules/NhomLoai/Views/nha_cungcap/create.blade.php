@extends('layouts.master')
@section('sidebar')
    @parent
@endsection
@section('content')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Thêm Nhóm Nguyên Vật Liệu</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/nhom-loai/ncc">NHÓM NGUYÊN VL</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Thêm Nhóm Nguyên Vật Liệu</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Thêm Mới</header>
                </div>
                <div class="card-body" id="bar-parent1">
                    <form action="#" id="form_sample_1" class="form-horizontal">
                        <div class="form-body">
                        <div class="form-group row">
                            <label class="control-label col-md-3">Tên nhà cung cấp:
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" data-required="1" class="form-control" /> </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Điện thoại 1:
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" data-required="1" class="form-control" /> </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Điện thoại 2:
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" data-required="1" class="form-control" /> </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">TĐịa chỉ:
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" data-required="1" class="form-control" /> </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Tài khoản NH
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" data-required="1" class="form-control" /> </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Người liên hệ 1:
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" data-required="1" class="form-control" /> </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3">Phone người ĐD 1:
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-4">
                                <input type="text" name="name" data-required="1" class="form-control" /> </div>
                        </div>
                        <div class="form-group row">
                                <label class="control-label col-md-3">Người đại diện 2:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" name="name" data-required="1" class="form-control" /> </div>
                            </div>
                        <div class="form-group row">
                                <label class="control-label col-md-3">Phone người ĐD 2:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" name="name" data-required="1" class="form-control" /> </div>
                            </div>
                        <div class="form-group">
                            <div class="offset-md-3 col-md-9">
                                <button type="submit" class="btn btn-info">Thêm</button>
                                <button type="button" class="btn btn-default">Xóa Trắng</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection