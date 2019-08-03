@extends('master-layout')

@section('content')


<!-- san pham -->
<main id="lien-he" class="mt-5">
    <div class="container">
        
            <!-- hàng 1 -->
            <div class="row ">
        
                <!-- bản đồ -->
                <div class="col-md-12">
                    <h5>BẢN ĐỒ</h5>
                    <iframe class="mt-2"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14894.285133003395!2d105.77032909999998!3d21.04983335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1562837184570!5m2!1svi!2s"
                        frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
            </div>

            <!-- hàng 2 -->
            <div class="row ">
                <!-- Phần thông tin liên hệ -->
                <div class="col-left col-md-4 mt-3 ">
                    <div class="panel panel-defaul panel-no-border ">
                        <div class="panel-heading mt-2">
                            <div class="panel-title">
                                <h4>LIÊN HỆ</h4>
                            </div>
                        </div>
                        
                        <div class="panel-body mt-3">
                            <p style="font-size: 15px ; line-height: 30px;font-family:Arial,Helvetica,sans-serif;">
                                <strong>CÔNG TY THỰC PHẨM SẠCH MYTAMMART VIỆT NAM</strong>
                                <br>
                                <strong>Địa chỉ:</strong> A11, Ngõ 100, Đường Trung Kính, Phường Yên Hòa, Quận Cầu Giấy
                                <br>
                                <strong>Giấy chứng nhận ĐKKD:</strong> 0104567410 do sở kế hoạch và đầu tư
                                <br>
                                Thành phố Hà Nội cấp ngày 14
                                <br>
                                <strong>Email:</strong> cskh@mytammart.vn
                                <br>
                                <strong>Facebook:</strong> http://www.facebook.com/mytammart.com.vn
                                <br>
                                <strong>Website:</strong> http://www.mytammart.vn
                                <hr>

                            </p>
                            <p style="font-size: 15px ; line-height: 30px;font-family:Arial,Helvetica,sans-serif;">
                                <i class="fa fa-home"></i> A11, Ngõ 100, Đường Trung Kính, Phường Yên Hòa, Quận Cầu Giấy
                                <br>
                                <i class="fa fa-phone"></i> 0967.26.88.26
                                <br>
                                <i class="fa fa-envelope"></i> cskh@mytammart.vn
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Phần gửi ý kiến -->
                <div class="col-right col-md-8 mt-3">
                    <div class="panel panel-defaul panel-no-border ">
                        <div class="panel-heading mt-2">
                            <div class="panel-title">
                                <h4>GỬI Ý KIẾN CỦA BẠN</h4>
                            </div>
                        </div>
                        <div class="panel-body mt-4">
                            <strong>Hoặc gửi liên hệ cho chúng tôi theo mẫu dưới đây:</strong>
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                    {{ $err }}<br>
                                    @endforeach
                                </div>
                            @endif
                            @if(session('thongbao'))
                                <script>
                                    // <div class = "alert alert-success">{{ session('thongbao') }}</div>
                                    alert('{{ session('thongbao') }}');
                                </script>
                            @endif
                            <form action="{{route('store')}}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="inf">
                                        <input class="form-control " name="fullname" type="text" placeholder="Họ và tên *">
                                    </div>
                                    <div class="inf">
                                        <input class="form-control " name="phone" type="text" placeholder="Sđt *">
                                    </div>
                                    <div class="inf">
                                        <input class="form-control" name="email" type="email" placeholder="Email *" >
                                    </div>
                                    <div class="inf">
                                        <input class="form-control" name="title" type="text" placeholder="Tiêu đề *">
                                    </div>
                                    <div class="content-inf mt-5">
                                        <textarea class="form-control" rows="5" placeholder="Nội dung liên hệ *" name="content"></textarea>
                                    </div>
                                    <span style="font-size: 14px ; color: red">Dấu * là phần không được để trống</span>
                                    <div class="btn-submit-form mt-3">
                                        <button type="submit" class="btn btn-sendcontact mt-10 mb-10" >Gửi liên hệ</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


       

    </div>
</main>

@endsection