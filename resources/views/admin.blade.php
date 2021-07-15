@extends("layout")
@section("admin")

<section class="admin">
    <div class="admin_wrapper">
        <div class="row">
            <!-- admin menu  -->
            <div class="col-md-2 admin_menu">
                <div class="admin_nav">
                    <ul class="tab">
                        <li>Add product</li>
                        <li id="showproduct">show product</li>
                        <li>show cart</li>
                    </ul>
                </div>
            </div>
            <!-- end admin menu  -->

            <!-- admin setting -->
            <div class="col-md-10 admin_setting">
                <div class="row welcome">
                    <h2 class="m-5 text-center text-danger">Welcome to Admin panel</h2>
                </div>
                <div id="admin_msg">

                </div>
                <!-- <div class="row welcome_admin_panel">
                    <h1>Welcome to Admin php_ini_loaded_file</h1>
                </div> -->
                <!-- modal  -->
                <div class="row edit_modal">
                    <!-- <div class="col-sm-10 offset-sm-2 modal_wrap">
                        <div id="edit_modal_close_btn">X</div>
                        <div class="img_wrap">
                            <div class="img">
                                <img src="" alt="">

                            </div>
                        </div>
                        <div class="edit_form">
                            <form id="adminEditProuctFrom">
                                <div class="adminEditPro_form">
                                    <div class="ad_txt_field">
                                        <label for="">Product Name</label>
                                        <input type="text" name="name">
                                    </div>
                                    <div class="ad_txt_field">
                                        <label for="">Brand</label>
                                        <input type="text" name="brand">
                                    </div>
                                    <div class="ad_txt_field">
                                        <label for="">Catagory</label>
                                        <input type="text" name="catagory">
                                    </div>
                                    <div class="ad_txt_field">
                                        <label for="">price</label>
                                        <input type="number" name="price">
                                    </div>
                                </div>
                                <div class="ad_txt_detail">
                                    <div class="ad_txt_field">
                                        <label for="">Detail</label>
                                        <textarea cols="40" rows="5" name="detail"></textarea>
                                    </div>

                                    <div class="ad_txt_field">
                                        <button type="submit">Save</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div> -->
                </div>
                <!-- end modal  -->
                <!-- add product   -->
                <div class="row tabcontent admin_tabcontent_active">
                    <h3>Add product</h3>

                    <div class="col admin_add_pro">
                        <form id="addProductForm" enctype="multipart/form-data">
                            <div class="admin_pro_form">
                                <div class="ad_txt_field">
                                    <label for="">Product Name</label>
                                    <input type="text" name="name">
                                </div>
                                <div class="ad_txt_field">
                                    <label for="">Brand</label>
                                    <input type="text" name="brand">
                                </div>
                                <div class="ad_txt_field">
                                    <label for="">Catagory</label>
                                    <input type="text" name="catagory">
                                </div>
                                <div class="ad_txt_field">
                                    <label for="">price</label>
                                    <input type="number" name="price">
                                </div>
                                <div class="ad_txt_field">
                                    <label for="">Detail</label>
                                    <textarea cols="40" rows="5" name="detail"></textarea>
                                </div>
                                <div class="ad_txt_field">
                                    <label for="">Image</label>
                                    <input type="file" name="img">
                                </div>
                                <div class="ad_txt_field">
                                    <button type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end add product  -->

                <!-- show product  -->
                <div class="row tabcontent">
                    <div class="col-sm-12 product_count">
                        <span>Total product : 22345</span>
                    </div>
                    <div class="col-sm-12 amdin_pro_list">
                        <div class="pro_list_table_header d-flex">
                            <div class="column">Name</div>
                            <div class="column">Brand</div>
                            <div class="column">Catagory</div>
                            <div class="column">price</div>
                            <div class="column">detail</div>
                            <div class="column">Edit</div>
                            <div class="column">Delete</div>
                        </div>
                        <!-- <div class="pro_list_table_body d-flex">
                            <div class="column">Name</div>
                            <div class="column">Brand</div>
                            <div class="column">Catagory</div>
                            <div class="column">price</div>
                            <div class="column">detail</div>
                            <div class="column">Edit</div>
                            <div class="column">Delete</div>
                        </div> -->
                    </div>

                </div>
                <!-- end show product  -->
                <div class="row tabcontent">
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
            <!--end admin setting -->

        </div>
    </div>
</section>

@endsection