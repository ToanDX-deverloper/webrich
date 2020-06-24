<?php

$options = array (

	array(	"namePanel" => "Trang hệ thống cửa hàng"),

	array(	"nameSection" => "Số cửa hàng hệ thống cửa hàng"),

	array(	"name" => "number_htch",

			"label" => "Số hệ thống cửa hàng  sẽ hiển thị",

			"description" => "Liên quan đến các ô bên dưới. Lưu xong nhấn F5 để số lượng nhập bên dưới cập nhật",

			"default" => '6',

			'choices' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', ),

			"type" => "select"),

	array(	"name" => "htch_img",

			"label" => "Hình ảnh cửa hàng ",

			"description" => "",

			"default" => '',

			"type" => "image",

		    "repeat" => "number_htch"),

	array(	"name" => "htch_map",

			"label" => "Link google map của cửa hàng",

			"description" => "",

			"default" => '',

			"type" => "text",
			
		    "repeat" => "number_htch"),


	array(	"name" => "htch_name_address",

			"label" => "Địa chỉ cửaa hàng ",

			"description" => "",

			"default" => '',

			"type" => "text",
			
		    "repeat" => "number_htch"),

	array(	"name" => "htch_phone",

			"label" => "Điện thoại cửa hàng",

			"description" => "",

			"default" => '',

			"type" => "text",
			
		    "repeat" => "number_htch"),


);

$arrOpt=array_merge($arrOpt,$options);
?>