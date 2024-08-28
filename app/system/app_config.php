<?php

	//application details
		$apps[$x]['name'] = "System";
		$apps[$x]['uuid'] = "b7ef56fd-57c5-d4e8-bb4b-7887eede2e78";
		$apps[$x]['category'] = "System";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "1.1";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Displays information for CPU, HDD, RAM and more.";
		$apps[$x]['description']['en-gb'] = "Displays information for CPU, HDD, RAM and more.";
		$apps[$x]['description']['ar-eg'] = "";
		$apps[$x]['description']['de-at'] = "Zeigt Informationen über die CPU, Festplatten, Speicher und anderes an.";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-de'] = "Zeigt Informationen über die CPU, Festplatten, Speicher und anderes an.";
		$apps[$x]['description']['es-cl'] = "Muestra información del sistema como RAM, CPU y Disco Duro";
		$apps[$x]['description']['es-mx'] = "";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-fr'] = "Affiche les information sur le sytème comme les informations sur la RAM, la CPU et le Disque Dur.";
		$apps[$x]['description']['he-il'] = "";
		$apps[$x]['description']['it-it'] = "";
		$apps[$x]['description']['ka-ge'] = "აჩვენებს ინფორმაციას CPU-ის, HDD-ის, RAM-ის და ა.შ. შესახებ.";
		$apps[$x]['description']['nl-nl'] = "Laat informatie zien over CPU, HardDisk, RAM en meer.";
		$apps[$x]['description']['pl-pl'] = "";
		$apps[$x]['description']['pt-br'] = "";
		$apps[$x]['description']['pt-pt'] = "Exibe informações do CPU, disco rígido, memória RAM e muito mais.";
		$apps[$x]['description']['ro-ro'] = "";
		$apps[$x]['description']['ru-ru'] = "Отображает на дисплее информацию о Процессоре, Пямяти, Дисковых накопителях и другоую.";
		$apps[$x]['description']['sv-se'] = "";
		$apps[$x]['description']['uk-ua'] = "";

	//permission details
		$y=0;
		$apps[$x]['permissions'][$y]['name'] = "system_view_info";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "5243e0d2-0e8b-277a-912e-9d8b5fcdb41d";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "system_view_cpu";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "5243e0d2-0e8b-277a-912e-9d8b5fcdb41d";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "system_view_hdd";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "5243e0d2-0e8b-277a-912e-9d8b5fcdb41d";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "system_view_ram";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "5243e0d2-0e8b-277a-912e-9d8b5fcdb41d";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "system_view_database";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "system_view_memcache";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "5243e0d2-0e8b-277a-912e-9d8b5fcdb41d";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "system_view_backup";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "5243e0d2-0e8b-277a-912e-9d8b5fcdb41d";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "software_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "5243e0d2-0e8b-277a-912e-9d8b5fcdb41d";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "system_view_support";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "7497ade1-b6f4-473d-9859-92c957c36503";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "software_add";
		//$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "software_edit";
		//$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "software_delete";
		//$apps[$x]['permissions'][$y]['groups'][] = "superadmin";

	//default settings
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "eef8aa3e-0083-4d12-ab14-c98b837b3ddb";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "theme";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "dashboard_system_counts_chart_main_color";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "#2a9df4";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "333fc545-5983-46fc-a0bb-55aba59fe75a";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "theme";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "dashboard_system_counts_chart_sub_color";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "#d4d4d4";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "1f19c516-20e9-4b30-91e9-cb1fecc45632";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "theme";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "dashboard_cpu_usage_chart_main_color";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "#03c04a";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_order'] = "10";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "3051e572-654b-411f-b2c1-86644023738c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "theme";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "dashboard_cpu_usage_chart_main_color";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "#ff9933";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_order'] = "20";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "f2125a18-f5f7-4a51-8557-9bfa72eb7a50";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "theme";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "dashboard_cpu_usage_chart_main_color";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "#ea4c46";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_order'] = "30";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "b09127bc-386e-4e4c-9531-0858174b6ea5";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "theme";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "dashboard_cpu_usage_chart_sub_color";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "#d4d4d4";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "119d7d1a-ef5d-462d-b2f1-c8f23dc9d766";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "theme";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "dashboard_disk_usage_chart_main_color";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "#03c04a";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_order'] = "10";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9527ef8a-68e0-487a-8c5d-f227e12ca7d9";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "theme";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "dashboard_disk_usage_chart_main_color";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "#ff9933";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_order'] = "20";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "c7f6ee8d-f626-4ac1-8785-d69594e55236";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "theme";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "dashboard_disk_usage_chart_main_color";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "array";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "#ea4c46";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_order'] = "30";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "08dae8e8-53ee-40b0-a7d6-5a577671f3e4";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "theme";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "dashboard_disk_usage_chart_sub_color";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "text";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "#d4d4d4";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "false";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "93193159-0033-43a6-99d5-5dc652b38724";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "session";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "filesystem_retention_days";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "1";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Number of days to keep PHP session files on the server until the maintenance application deletes them";

?>
