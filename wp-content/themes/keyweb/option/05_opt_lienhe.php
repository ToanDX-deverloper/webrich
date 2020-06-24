<?php

$options = array (

	array(	"namePanel" => "Trang liên hệ"),

	

	array(	"nameSection" => "Liên hệ (Địa chỉ, Phone, Email)"),

	array(	"name" => "lh_diachi_title",

			"label" => "Text Địa chỉ",

			"description" => "Note: Khi bạn thay đổi ở footer hoặc header thì đã địa chỉ, phone, email đã tự động thay đổi nhé",

			"default" => 'Địa chỉ',

			"type" => "text"),

	array(	"name" => "lh_phone_title",

			"label" => "Text Phone",

			"description" => "",

			"default" => 'Số điện thoại',

			"type" => "text"),

	array(	"name" => "lh_email_title",

			"label" => "Text Email",

			"description" => "",

			"default" => 'Email',

			"type" => "text"),

			
	array(	"nameSection" => "Bản đồ chỉ đường"),

	array(	"name" => "lienhe_map",

			"label" => "Nhập iframe của bản đồ Google Map",

			"description" => "",

			"default" => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0431702437213!2d105.78247956440714!3d21.03095858599718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4c7d5152a7%3A0xa6fd0e9a5a068a5f!2zVmnhu4d0IMOBIFRvd2Vy!5e0!3m2!1svi!2s!4v1586171507124!5m2!1svi!2s" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',

			"type" => "textarea"),

	
			

);

$arrOpt=array_merge($arrOpt,$options);



?>