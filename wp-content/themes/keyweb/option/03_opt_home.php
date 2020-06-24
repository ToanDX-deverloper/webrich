<?php

$options = array (

	array(	"namePanel" => "Trang chủ"),

	

// ==========================================================

	array(	"nameSection" => "Box cho phần giới thiệu"),

	array(	"name" => "home_aboutus_title",

			"label" => "Tiêu đề phần giới thiệu",

			"description" => "",

			"default" => "Giới Thiệu",

			"type" => "text"),

	array(	"name" => "home_number_aboutus",

			"label" => "Số mục hiển thị phần bên trái mục giới thiệu",

			"description" => "Liên quan đến các ô bên dưới. Lưu xong nhấn F5 để số lượng nhập bên dưới cập nhật",

			"default" => "2",

			'choices' => array('1' => '1', '2' => '2',),

			"type" => "select"),

	array(	"name" => "home_aboutus_img",

			"label" => "Hỉnh ảnh icon thứ ",

			"description" => "Tỉ lệ ảnh(70x70)",

			"default" => "",

			"type" => "image",
			"repeat"=>"home_number_aboutus"),

	
	
	array(	"name" => "home_aboutus_left_text",

			"label" => "Text  icon  ",

			"description" => "",

			"default" => "100% Tự Nhiên",

			"type" => "text",

			"repeat"=>"home_number_aboutus"),

	array(	"name" => "home_aboutus_left_text2",

			"label" => "Text icon  ",

			"description" => "",

			"default" => "100% Tự Nhiên",

			"type" => "text",

			"repeat"=>"home_number_aboutus"),


	array(	"name" => "home_content_image",

			"label" => "Hình ảnh chính cho phần giới thiệu ",

			"description" => "Tỉ lệ ảnh(550x600)",

			"default" => "",

			"type" => "image"),

	array(	"name" => "home_number_aboutus1",

			"label" => "Số mục hiển thị phần bên phải mục giới thiệu",

			"description" => "Liên quan đến các ô bên dưới. Lưu xong nhấn F5 để số lượng nhập bên dưới cập nhật",

			"default" => "2",

			'choices' => array('1' => '1', '2' => '2',),

			"type" => "select"),
	array(	"name" => "home_aboutus_img1",

			"label" => "Hình ảnh bên phải  ",

			"description" => "Tỉ lệ ảnh(70x70)",

			"default" => "",

			"type" => "image",
			"repeat"=>"home_number_aboutus1"),

	array(	"name" => "home_aboutus_right_text",

			"label" => "Text icon  ",

			"description" => "",

			"default" => "Sản phẩm tự nhiên",

			"type" => "text",

			"repeat"=>"home_number_aboutus1"),

	array(	"name" => "home_aboutus_right_text2",

			"label" => "Text icon ",

			"description" => "",

			"default" => "Chất lượng tốt nhất",

			"type" => "text",

			"repeat"=>"home_number_aboutus1"),




// Phần banner 1 
	array(	"nameSection" => "Box cho phần banner1"),

	array(	"name" => "home_banner_img1",

			"label" => "Hình ảnh banner 1",

			"description" => "Tỉ lệ ảnh(1200x375)",

			"default" => "",

			"type" => "image"),
	array(	"name" => "home_banner_img11",

			"label" => "Hình ảnh banner 11",

			"description" => "Tỉ lệ ảnh(1200x375)",

			"default" => "",

			"type" => "image"),
						
	array(	"name" => "banner1_txt_up",

			"label" => "Văn bản cho text 1 ",

			"description" => "",

			"default" => "Thực phẩm tốt",

			"type" => "text"),

	array(	"name" => "banner1_txt_center",

			"label" => "Văn bản cho text 2 ",

			"description" => "",

			"default" => "Cảm xúc vui",

			"type" => "text"),

	array(	"name" => "banner1_txt_down",

			"label" => "Văn bản cho text 3 ",

			"description" => "",

			"default" => "Thực phẩm của chúng tôi luôn tươi mới, không chất độc hại",

			"type" => "text"),

// Phần chữ "sản phẩm của chúng tôi"
	array(	"nameSection" => "Tiêu đề 'Sản phẩm của chúng tôi'"),
	array(	"name" => "home_collection_title",

			"label" => "Phần title Sản phẩm của chúng tôi",

			"description" => "",

			"default" => "Sản phẩm của chúng tôi",

			"type" => "text"),

// Phần chữ "sản phẩm nổi bật"
	array(	"nameSection" => "Tiêu đề 'Sản phẩm nổi bật'"),

	array(	"name" => "home_product_featured_title",

				"label" => "Sản phẩm nổi bật title ",

				"description" => "",

				"default" => "Sản phẩm nổi bật",

				"type" => "text"),
	array(	"name" => "get_id_featured",

			"label" => "Nhập id của sản phẩm ",

			"description" => "",

			"default" => "Sản phẩm nổi bật",

			"type" => "text"),
	


// Phần gallery 
	array(	"nameSection" => "Box cho phần ảnh gallery"),
	array(	"name" => "home_number_gallery",

			"label" => "Số mục hiển thị phần bên phải mục giới thiệu",

			"description" => "Liên quan đến các ô bên dưới. Lưu xong nhấn F5 để số lượng nhập bên dưới cập nhật",

			"default" => "6",

			'choices' => array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6',),

			"type" => "select"),

	array(	"name" => "home_gallery_img",

			"label" => "Hình ảnh thứ của Gallery ",

			"description" => "",

			"default" => "",

			"type" => "image",
			"repeat"=>"home_number_gallery"),

// Phan nhan xet khach hang

	array(	"nameSection" => "Box cho phần Nhận Xết của Khách Hàng"),

	array(	"name" => "home_nhanxet_title",

			"label" => "Tiêu đề phần nhận xét",

			"description" => "",

			"default" => "Nhận Xét Của Khách Hàng",

			"type" => "text"),

	array(	"name" => "home_nhanxet_background",

			"label" => "Ảnh background",

			"description" => "Tỉ lệ ảnh(1920x1000)",

			"default" => "",

			"type" => "image"),

	
    array(	"name" => "home_number_nhanxet",

			"label" => "Số mục hiển thị phần nhận xét khách hàng",

			"description" => "Liên quan đến các ô bên dưới. Lưu xong nhấn F5 để số lượng nhập bên dưới cập nhật",

			"default" => "6",

			'choices' => array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6',),

			"type" => "select"),
	array(	"name" => "home_nhanxet_user",

			"label" => "Tiêu đề phần nhận xét",

			"description" => "",

			"default" => "Toàn Đỗ",

			"type" => "text",
			"repeat"=>"home_number_nhanxet"),

	array(	"name" => "home_nhanxet_desc",

			"label" => "Tiêu đề phần nhận xét",

			"description" => "",

			"default" => "Chúng tôi rất hài lòng về sản phẩm của Suplo. Cảm ơn bạn đã mang đến sản phẩm tuyệt vời như vậy. Chúng tôi sẽ tiếp tục",

			"type" => "text","repeat"=>"home_number_nhanxet"),

// Người sáng lập
	array(	"nameSection" => "Box cho phần Người sáng lập"),

	array(	"name" => "home_creator_title",

			"label" => "Tiêu đề người sáng lập",

			"description" => "",

			"default" => "Đội Ngũ Của Chúng Tôi",

			"type" => "text"),

	array(	"name" => "teamer_img_1",

			"label" => "Ảnh người sáng lập thứ 1",

			"description" => "Kích thước ảnh ( 500x400px)",

			"default" => "",

			"type" => "image"),

	array(	"name" => "teamer_name_1",

		"label" => "Tên người sáng lập",

		"description" => "",

		"default" => "Đỗ Xuân Toàn",

		"type" => "text"),

	array(	"name" => "teamer_position_1",

		"label" => "Chức danh ",

		"description" => "",

		"default" => "Người sáng lập",

		"type" => "text"),

	array(	"name" => "teamer_content_1",

		"label" => "Câu nói khẩu hiệu",

		"description" => "",

		"default" => "Chúng tôi luôn quan tâm đến những gì bạn cần.Chúng tôi mong muốn mang đến những sản phẩm tốt nhất tới tay của khách hàng. ",

		"type" => "text"),
	array(	"name" => "social_fb_1",

		"label" => "Link facebook",

		"description" => "",

		"default" => "",

		"type" => "text"),
	array(	"name" => "social_yt_1",

		"label" => "Link Youtube",

		"description" => "",

		"default" => "",

		"type" => "text"),
	array(	"name" => "social_ins_1",

		"label" => "Link Intasgram",

		"description" => "",

		"default" => "",

		"type" => "text"),
	array(	"name" => "social_tw_1",

		"label" => "Link Twitter",

		"description" => "",

		"default" => "",

		"type" => "text"),
	
	array(	"name" => "teamer_img_2",

			"label" => "Ảnh người sáng lập thứ 2",

			"description" => "Kích thước ảnh ( 500x400px)",

			"default" => "",

			"type" => "image"),

	array(	"name" => "teamer_name_2",

		"label" => "Tên người sáng lập",

		"description" => "",

		"default" => "Đỗ Xuân Toàn",

		"type" => "text"),

	array(	"name" => "teamer_position_2",

		"label" => "Chức danh ",

		"description" => "",

		"default" => "Người sáng lập",

		"type" => "text"),

	array(	"name" => "teamer_content_2",

		"label" => "Câu nói khẩu hiệu",

		"description" => "",

		"default" => "Chúng tôi luôn quan tâm đến những gì bạn cần.Chúng tôi mong muốn mang đến những sản phẩm tốt nhất tới tay của khách hàng. ",

		"type" => "text"),
	array(	"name" => "social_fb_2",

		"label" => "Link facebook",

		"description" => "",

		"default" => "",

		"type" => "text"),
	array(	"name" => "social_yt_2",

		"label" => "Link Youtube",

		"description" => "",

		"default" => "",

		"type" => "text"),
	array(	"name" => "social_ins_2",

		"label" => "Link Instagram",

		"description" => "",

		"default" => "",

		"type" => "text"),
	array(	"name" => "social_tw_2",

		"label" => "Link Twitter",

		"description" => "",

		"default" => "",

		"type" => "text"),
array(	"name" => "teamer_img_3",

			"label" => "Ảnh người sáng lập thứ 3",

			"description" => "Kích thước ảnh ( 500x400px)",

			"default" => "",

			"type" => "image"),

	array(	"name" => "teamer_name_3",

		"label" => "Tên người sáng lập",

		"description" => "",

		"default" => "Đỗ Xuân Toàn",

		"type" => "text"),

	array(	"name" => "teamer_position_3",

		"label" => "Chức danh ",

		"description" => "",

		"default" => "Người sáng lập",

		"type" => "text"),

	array(	"name" => "teamer_content_3",

		"label" => "Câu nói khẩu hiệu",

		"description" => "",

		"default" => "Chúng tôi luôn quan tâm đến những gì bạn cần.Chúng tôi mong muốn mang đến những sản phẩm tốt nhất tới tay của khách hàng. ",

		"type" => "text"),
	array(	"name" => "social_fb_3",

		"label" => "Link facebook",

		"description" => "",

		"default" => "",

		"type" => "text"),
	array(	"name" => "social_yt_3",

		"label" => "Link Youtube",

		"description" => "",

		"default" => "",

		"type" => "text"),
	array(	"name" => "social_ins_3",

		"label" => "Link Instagram",

		"description" => "",

		"default" => "",

		"type" => "text"),
	array(	"name" => "social_tw_3",

		"label" => "Link Twitter",

		"description" => "",

		"default" => "",

		"type" => "text"),

// Phần banner 2 

	array(	"nameSection" => "Box cho banner 2"),

	array(	"name" => "banner2_big_text",

			"label" => "Chữ to",

			"description" => "",

			"default" => "Từ nông trại đến tay người tiêu dùng",

			"type" => "text"),

	array(	"name" => "home_banner2_background",

			"label" => "Hình nền ",

			"description" => "Tỉ lệ ảnh(1920x1000)",

			"default" => "",

			"type" => "image"),
	
	array(	"name" => "banner2_medium_text",

			"label" => "Chữ vừa",

			"description" => "",

			"default" => "Giảm giá mùa hè ",

			"type" => "text"),

	array(	"name" => "banner2_small_text",

			"label" => "Chữ nhỏ",

			"description" => "",

			"default" => "Ngay hôm nay ",

			"type" => "text"),
	
	array(	"name" => "banner2_sale_text",

			"label" => "Giảm %",

			"description" => "",

			"default" => "50%",

			"type" => "text"),	


);


$arrOpt=array_merge($arrOpt,$options);



?>