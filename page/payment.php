<div id="wapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb">
                    <i class="fa-solid fa-house-chimney"></i>
                    <ul class="list_item">
                        <li class="">
                            <i class="fa-solid fa-angle-right"></i>
                            <a href="">Trang chủ</a>
                        </li>
                        <li class="">
                            <i class="fa-solid fa-angle-right"></i>
                            <a href="">Thanh toán</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <!-- ===== CONTENT ==== -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-4">
                            <div class="section_cart pe-3">
                                <div class="section_cart_head">
                                    <h3 class="section_cart_title">
                                        Thông tin khách hàng
                                    </h3>
                                </div>
                                <div class="section_cart_content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-6 gx-0">
                                                <div class="mb-3 pe-2">
                                                    <label for="" class="form-label">Họ tên <span class="text-danger">(*)</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6 gx-0">
                                                <div class="mb-3 ps-2">
                                                    <label for="" class="form-label">Email</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6 gx-0">
                                                <div class="mb-3 pe-2">
                                                    <label for="" class="form-label">Số điện thoại <span class="text-danger">(*)</span></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-6 gx-0">
                                                <div class="mb-3 ps-2">
                                                    <label for="" class="form-label">Tỉnh/Thành Phố <span class="text-danger">(*)</span></label>
                                                    <select class="form-select" name="">
                                                        <option selected>Chọn Tỉnh Thành Phố</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 gx-0">
                                                <div class="mb-3 pe-2">
                                                    <label for="" class="form-label">Quận/Huyện <span class="text-danger">(*)</span></label>
                                                    <select class="form-select" name="">
                                                        <option selected>Chọn Quận Huyện</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 gx-0">
                                                <div class="mb-3 ps-2">
                                                    <label for="" class="form-label">Phường/Xã <span class="text-danger">(*)</span></label>
                                                    <select class="form-select" name="">
                                                        <option selected>Chọn Phường/Xã</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 gx-0">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Địa chỉ <span class="text-danger">(*)</span></label>
                                                    <input type="text" placeholder="Ví dụ: 185A, Đ.Nguyễn Trãi" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-12 gx-0">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Ghi chú <span class="text-danger">(nếu có)</span></label>
                                                    <textarea name="" id="" rows="5" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="section_cart pe-3">
                                <div class="section_cart_head">
                                    <h3 class="section_cart_title">
                                        Thông tin đơn hàng
                                    </h3>
                                </div>
                                <div class="section_cart_content">
                                    <div class="box_order">
                                        <ul class="list_order">
                                            <li>
                                                <p>
                                                    sản phẩm
                                                </p>
                                                <p>
                                                    tổng
                                                </p>
                                            </li>
                                            <!-- -----------  -->

                                            <li>
                                                <p>
                                                    Bánh mì chà bông
                                                </p>
                                                <p>
                                                    20.000.000đ
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Gà hầm xã 
                                                </p>
                                                <p>
                                                    18.000.000đ
                                                </p>
                                            </li>
                                            
                                            <!-- ----------  -->
                                            <li>
                                                <p>
                                                    Tổng đơn hàng
                                                </p>
                                                <p>
                                                    20.000.000đ
                                                </p>
                                            </li>
                                        </ul>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="Input-1" name="payment">
                                                <label for="Input-1" class="form-check-label">Thanh toán bằng thẻ</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="Input-2" name="payment">
                                                <label for="Input-2" class="form-check-label">Thanh toán tại nhà</label>
                                            </div>
                                        </div>
                                        <div class="pt-3 float-end">
                                            <input type="submit" name="order_submit" class="btn_order" value="Đặt Hàng">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>