<?php



$options = array (

	array(	"namePanel" => "Cấu hình Header"),

	array(	"nameSection" => "Header Top"),

	array(	"name" => "header_phone",

			"label" => "Số điện thoại công ty",

			"description" => "",

			"default" => "(+84)934 323 882",

			"type" => "text"),

	array(	"name" => "header_email",

			"label" => "Email công ty",

			"description" => "Liên hệ email",

			"default" => "hotro@keyweb.vn",

			"type" => "text"),
	array(	"name" => "header_times",

			"label" => "Thời gian làm việc",

			"description" => "",

			"default" => "Mở cửa từ 8:00 - 22:00",

			"type" => "text"),


	array(	"nameSection" => "Header Main"),

	array(	"name" => "logo",

			"label" => "Ảnh logo",

			"description" => "Upload và chọn ảnh cho logo(Tỉ lệ: 126x60px)",

			"default" => "",

			"type" => "image"),

);

$arrOpt=array_merge($arrOpt,$options);





?>