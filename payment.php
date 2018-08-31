<?php
/**
 *
 * Template Name: Payment

 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); 

$string=implode(",",$_SESSION['form_data']);
echo "<h1>".$string."</h1>";

if (isset($_GET['payment_id']) && isset($_GET['status'])) {
  $payment_id = $_GET['payment_id'];
  $status = $_GET['status'];
  echo $payment_id.$status;
  global $wpdb;
  //$data_id = $wpdb->get_results( "SELECT data_id FROM VSZ_CF7_DATA_ENTRY_TABLE_NAME WHERE " );
    $wpdb->update(VSZ_CF7_DATA_ENTRY_TABLE_NAME, array('value' => $payment_id), array('data_id'=>$_SESSION['data_id'],'name'=>'payment-id'));
    $wpdb->update(VSZ_CF7_DATA_ENTRY_TABLE_NAME, array('value' => $status), array('data_id'=>$_SESSION['data_id'],'name'=>'payment-status'));
} else {
  //Handle the case where there is no parameter
}
//payment_id=MOJO8831005A14539186&status=success
?>




<?php get_footer();
