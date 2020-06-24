<?php

$options = array (

	array(	"namePanel" => "Cấu hình Footer"),
// Box kết nối 
	array(	"nameSection" => "Box kết nối link FaceBook,Youtube..."),

	array(	"name" => "ft_linkfb",

			"label" => "Link cho Facebook",

			"description" => "",

			"default" => "#",

			"type" => "text"),

	array(	"name" => "ft_linkins",

			"label" => "Link cho Instagram",

			"description" => "",

			"default" => "#",

			"type" => "text"),

	array(	"name" => "ft_linkyt",

			"label" => "Link cho Youtube",

			"description" => "",

			"default" => "#",

			"type" => "text"),

	array(	"name" => "ft_linktw",

			"label" => "Link cho Twitter",

			"description" => "",

			"default" => "#",

			"type" => "text"),


// Phần box bản quyền
// ===========================
	array(	"nameSection" => "Box cho phần bản quyền"),
	array(	"name" => "ft_copyright",

			"label" => "Text cho phần bản quyền",

			"description" => "",

			"default" => "Copyrights © 2020 by Keyweb. Powered by DXT",

			"type" => "text"),
// Box phần allbox
// =============================
	array(	"nameSection" => "All box Footer:Liên hệ,hỗ trợ khách hàng"),
	array(	"name" => "ft_diachi",

			"label" => "Text cho địa chỉ",

			"description" => "",

			"default" => "Số 9 Duy Tân, Tòa nhà Việt Á, Hà Nội",

			"type" => "text"),		

);

$arrOpt=array_merge($arrOpt,$options);



?>