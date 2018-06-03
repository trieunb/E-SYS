@extends('layouts.master')
@section('style')
@endsection
@section('sidebar')
    @parent
@endsection
@section('content')
<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">DS Nhóm Nguyên Vật Liệu</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="/nhom-loai/create">NHÓM NGUYÊN VL</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">DS Nhóm Nguyên Vật Liệu</li>
            </ol>
        </div>
    </div>
    <div class="row">
	    <div class="col-md-12">
	        <div class="card  card-box">
	            <div class="card-head">
	                <header>MANAGED TABLE</header>
	                <div class="tools">
	                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                </div>
	            </div>
	            <div class="card-body ">
	                <div class="row">
	                    <div class="col-md-6 col-sm-6 col-xs-6">
	                        <div class="btn-group">
	                            <a href="/nhom-loai/create" id="addRow1" class="btn btn-info">
	                                Thêm Mới <i class="fa fa-plus"></i>
	                            </a>
	                        </div>
	                    </div>
	                    <div class="col-md-6 col-sm-6 col-xs-6">
	                        <div class="btn-group pull-right">
	                            <button class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
	                                <i class="fa fa-angle-down"></i>
	                            </button>
	                            <ul class="dropdown-menu pull-right">
	                                <li>
	                                    <a href="javascript:;">
	                                        <i class="fa fa-print"></i> Print </a>
	                                </li>
	                                <li>
	                                    <a href="javascript:;">
	                                        <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
	                                </li>
	                                <li>
	                                    <a href="javascript:;">
	                                        <i class="fa fa-file-excel-o"></i> Export to Excel </a>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	                <table class="table table-striped table-bordered table-hover table-checkable order-column full-width" id="example4">
	                    <thead>
	                        <tr>
	                            <th width="5%">
	                                <!-- <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
	                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
	                                    <span></span>
	                                </label> -->
	                            </th>
	                            <th width="10%"> MS Nhóm </th>
	                            <th> Tên nhóm nguyên vật liệu </th>
	                            <th width="10%"> Actions </th>
	                            
	                        </tr>
	                    </thead>
	                    <tbody>
	                        <tr class="odd gradeX">
	                            <td>
	                                <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
	                                    <input type="checkbox" class="checkboxes" value="1" />
                                         <span></span>
	                                </label>
	                            </td>
	                            <td> 1 </td>
	                            <td>
	                                Hải sản
	                            </td>
	                            <td class="valigntop">
                                    <a href="/nhom-loai/edit/1" class="btn btn-tbl-edit btn-xs">
										<i class="fa fa-pencil"></i>
									</a>
									<button class="btn btn-tbl-delete btn-xs">
										<i class="fa fa-trash-o "></i>
									</button>
	                            </td>
	                        </tr>
	                        <tr class="odd gradeX">
	                            <td>
	                                <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
	                                    <input type="checkbox" class="checkboxes" value="2" />
                                         <span></span>
	                                </label>
	                            </td>
	                            <td> 2 </td>
	                            <td>
	                                Rau củ quả
	                            </td>
	                            <td class="valigntop">
                                    <a href="/nhom-loai/edit/2" class="btn btn-tbl-edit btn-xs">
										<i class="fa fa-pencil"></i>
									</a>
									<button class="btn btn-tbl-delete btn-xs">
										<i class="fa fa-trash-o "></i>
									</button>
	                            </td>
	                        </tr>
	                    </tbody>
	                </table>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection
@section('script')
<!-- <script src="../assets/js/pages/table/table_data.js" ></script> -->
<script src="../assets/modules/nhom_nvl/js/index.js" ></script>
@endsection