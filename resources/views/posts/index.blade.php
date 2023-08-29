@extends('layouts.master')

@section('title', 'AdminController')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Posts</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <button class="btn btn-success">เพิ่มโพสต์</button>
            </div>
            <table class="table mt-5" id="postsTable">
                <thead>
                    <tr>
                        {{-- <th class="nowrap text-center">ลำดับ</th> --}}
                        <th class="nowrap text-center">ชื่องาน</th>
                        <th class="nowrap text-center">วันที่จัดงาน</th>
                        <th class="nowrap text-center">สถานที่จัดงาน</th>
                        <th class="nowrap text-center">ราคาบัตรเข้างาน</th>
                        <th class="nowrap text-center">ช่องทางการซื้อบัตร</th>
                        <th class="nowrap text-center">ข้อมูลเพิ่มเติม</th>
                        <th class="nowrap text-center">รูป</th>
                        <th class="nowrap text-center">วันที่สร้าง</th>
                    </tr>                 
                </thead>                
            </table>            
        </div>
    </div>
@endsection

@section('scripts')
<script>
    var postsData = @json($posts);
    console.log(postsData);
    $(document).ready(function () {
        $('#postsTable').DataTable({
            data: postsData,
            columns :[
                {data: 'post_title'},
                {data: 'post_date'},
                {data: 'post_at'},
                {data: 'post_price'},
                {data: 'post_ticket'},
                {data: 'post_detail'},
                {data: 'post_image'},
                {data: 'created_at'},
            ]
        })
    });
    
</script>

@endsection
