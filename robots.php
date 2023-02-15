<?php
 header("Content-Type: text/plain");
 ?>

User-Agent: *
Disallow: /search/
Disallow: /inc/
Disallow: /bitrix/
Disallow: /*show_include_exec_time=*
Disallow: /*show_page_exec_time=*
Disallow: /*show_sql_stat=*
Disallow: /*bitrix_include_areas=*
Disallow: /*clear_cache=*
Disallow: /*clear_cache_session=*
Disallow: /*ADD_TO_COMPARE_LIST
Disallow: /*ORDER_BY
Disallow: /*?print=*
Disallow: /*&amp;print=*
Disallow: /*print_course=*
Disallow: /*?action=*
Disallow: /*&amp;action=*
Disallow: /*register=*
Disallow: /*forgot_password=*
Disallow: /*change_password=*
Disallow: /*login=*
Disallow: /*logout=*
Disallow: /*auth=*
Disallow: /*backurl=*
Disallow: /*back_url=*
Disallow: /*BACKURL=*
Disallow: /*BACK_URL=*
Disallow: /*back_url_admin=*
Disallow: /*?utm_source=*
Disallow: /*?bxajaxid=*
Disallow: /*&amp;bxajaxid=*
Disallow: /*?view_result=*
Disallow: /*&amp;view_result=*
Disallow: *?*
Disallow: *personal*
Disallow: /basket/
Disallow: */filter/clear/apply/
Disallow: */filter/
Disallow: /polzovatelskoe-soglashenie/
Disallow: *PAGEN*
Disallow: *?city=*
Disallow: /compare/
Disallow: *?PAGEN*
Disallow: /test/
Disallow: /testovyy-tovar/
Disallow: /test1/
Disallow: /personal/*
Disallow: /personal/subscribe/*
Disallow: /view_test/*
Disallow: /compare/*
Disallow: /500.html
Allow: */bestway-aktsiya/bassejny/filter/depth-from-122/length-from-412/width-from-201/apply/*
Allow: */intex/karkasnye-bassejny/filter/form2-is-krugliy/apply/*
Allow: */intex/karkasnye-bassejny/filter/depth-from-122/width-from-457/apply/*
Allow: */intex/karkasnye-bassejny/filter/depth-from-132/width-from-549/apply/*
Allow: */intex/karkasnye-bassejny/filter/depth-from-122/width-from-366/apply/*
Allow: */intex/karkasnye-bassejny/filter/depth-from-99/width-from-366/apply/*
Allow: */intex/karkasnye-bassejny/filter/depth-from-122/width-from-366/firm-is-intex/apply/*
Allow: */intex/karkasnye-bassejny/filter/depth-from-122/width-from-488/apply/*
Allow: */intex/karkasnye-bassejny/filter/form2-is-ractangle/apply/*
Allow: */intex/karkasnye-bassejny/filter/depth-from-76-to-76/width-from-305-to-305/apply/*
Allow: */naduvnay-mebel/naduvnye-matrasy/filter/pump-is-%D0%B5%D1%81%D1%82%D1%8C/apply/*
Allow: */naduvnay-mebel/naduvnye-matrasy/filter/seats-from-2-to-2/apply/*
Allow: */naduvnay-mebel/naduvnye-matrasy/filter/seats-from-1-to-1/apply/*
Allow: /bitrix/components/
Allow: */intex/detskie-bassejny/filter/form-is-%D0%BA%D1%80%D1%83%D0%B3%D0%BB%D1%8B%D0%B9/apply/*
Allow: */naduvnay-mebel/naduvnye-krovati/filter/pump-is-%D0%B5%D1%81%D1%82%D1%8C/apply/*
Allow: /bitrix/cache/
Allow: /bitrix/js/
Allow: /bitrix/css/
Allow: /bitrix/templates/
Allow: /bitrix/panel/
Allow: /bitrix/upload/
Allow: *.js
Allow: *.css

<?$arr = explode(':',$_SERVER['HTTP_HOST']);?>
Sitemap: https://<?=$arr[0]?>/sitemap.xml










