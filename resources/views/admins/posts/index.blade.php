@extends('layouts.admins.admin.app')
@section('style')
@endsection
@section('title')
    Quản lý bài viết
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.home') }}"><i class="bx bx-home-alt"></i> Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">Bài viết</li>
@endsection
@section('content')
    <div class="title">
        <div class="title-body">
            <div class="row">
                <!-- button tạo -->
                <div class="col-md-4">
                    <a href="{{ route('admin.createPost') }}" class="btn btn-primary" id="createGroup">Tạo bài viết</a>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-12 detail-course-finish">
                    @if (session('success'))
                        <div class="bg-success p-4 mt-2">
                            <p class="text-light m-0">{{ session('success') }}</p>
                        </div>
                    @elseif(session('fails'))
                        <div class="bg-danger p-4 mt-2">
                            <p class="text-light m-0">{{ session('fails') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{-- Table --}}
    <div class="box box-primary">
        <div class="box-body table-responsive">
            <div class="dataTables_wrapper form-inline dt-bootstrap">
                <table class="table table-hover table-bordered">
                    <thead class="primary">
                    <tr>
                        <th width="15%">Ảnh đại diện</th>
                        <th width="25%">Tiêu đề</th>
                        <th width="20%">Danh mục</th>
                        <th width="10%">Trạng thái</th>
                        <th width="10%">Thời gian</th>
                        <th width="10%">Tác giả</th>
                        <th width="10%">Hành động</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot></tfoot>
                </table>
            </div>
        </div>
    </div>
    {{-- MODAL --}}
    <div class="modal fade" id="modal-page" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="notication"></div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" id="btn-submit">Xác nhận</button>
                    <button type="button" class="btn btn-danger" id="btn-finish" data-bs-dismiss="modal">Hoàn thành</button>
                </div>
            </div>
        </div>
    </div>
    {{-- ./MODAL --}}
@endsection
@section('scripts')
    <script src="{{ asset('/js/admin/post_blog.js') }}?token={{ time() }}"></script>
@endsection
