<?php

$data = '<tr id="'. $single_art_work['id'] .'">';
$data .= '<td><input class="show-to-page" type="checkbox" value="'. $single_art_work['id']; .'" ' . ($single_art_work['collections'] == 0 && $single_art_work['collections'] != null) ? "checked" : " " .'/></td>';
$data .= ' <td><img class="thumimage" src="'. site_url($get_image['pricture']); .'"></td>';
$data .= '<td>'. $get_exsibiter_details['first_name'][0] . ' ' . $get_exsibiter_details['last_name'][0]; .'</td>';
$data .= '<td>'. $single_art_work['name_of_the_art']; .'</td>';
$data .= '<td>$'. number_format($single_art_work['price_of_the_art'],2); .'</td>';
$data .= '<td>'. $single_art_work['edition_count']; .'</td>';
$data .= '<td>'. date('m/d/Y',strtotime($single_art_work['created_at'])); .'</td>';
$data .= '<td>';
$data .= '<a href="javascript:void(0)" onclick="show_edit(''. $single_art_work['id']; .'',''. site_url(); .'')">';
$data .= '<form method="post" id="wp_seller_edit_show_artwork_'. $single_art_work['id']; .'" action="'. admin_url('admin-ajax.php') .'">';
$data .= '<input type="hidden" name="action" id="action" value="seller_get_artwork_data" />';
$data .= '<input type="hidden" name="main_id" id="main_id" value="'. $single_art_work['id']; .'" />';
$data .= '<img src="'. get_template_directory_uri(); .'/assets/icon/edit_icon.png">'
$data .= '</form></a></td><td>';
$data .= '<a href="javascript:void(0)" onclick="removeArtwork(''. $single_art_work['id']; .'',''. $single_art_work['store_product_id']; .'',1)">';
$data .= '<img src="'. get_template_directory_uri(); .'/assets/icon/274c.png"> </a></td></tr>';
<<<<<<< HEAD
<<<<<<< HEAD
echo 'abc';
echo 'abc';
echo 'abc';
=======
echo 'test';
>>>>>>> 7f21e4d348fd6dd55b9b295227dd4af3c8ce5694
=======
echo 'abc';
echo 'abc';
echo 'abc';
echo 'test';
>>>>>>> 28f5eb985f5c9bf38f550ae308e7d00ce3a2e677
