SET @main_nav = (SELECT term_id FROM wpRuvF8_terms where name = 'main_navigation' limit 1);
SET @main_nav_ar = (SELECT term_id FROM wpRuvF8_terms where name = 'main_navigation_ar' limit 1);

UPDATE `wpRuvF8_options` SET `option_value` = concat('a:14:{s:7:"browser";b:0;s:7:"rewrite";i:1;s:12:"hide_default";i:0;s:10:"force_lang";i:1;s:13:"redirect_lang";i:0;s:13:"media_support";i:0;s:4:"sync";a:0:{}s:10:"post_types";a:2:{i:0;s:4:"news";i:1;s:7:"product";}s:10:"taxonomies";a:0:{}s:7:"domains";a:0:{}s:7:"version";s:5:"1.8.4";s:12:"default_lang";s:2:"ar";s:9:"nav_menus";a:1:{s:9:"egyptfoss";a:1:{s:7:"primary";a:2:{s:2:"en";i:',(select @main_nav),';s:2:"ar";i:',(select @main_nav_ar),';}}}s:16:"previous_version";s:6:"1.7.12";}') where option_name = 'polylang';