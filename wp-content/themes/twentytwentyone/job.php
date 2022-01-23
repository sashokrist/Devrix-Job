<?php
/**
 * Template Name: job
 */

get_header();
?>
<div class="container">
	<?php
	global $wpdb;
	$id = $_GET['id'];
	$result = $wpdb->get_results( "SELECT * FROM jobs WHERE id=$id" );
	foreach ( $result as $res ) {
	?>
    <div class="row justify-content-center">
        <div class="card" style="width: 40rem;">
            <div class="card-body">
                <div class="col-md-8">
                    <h4 class="card-title"><?= $res->title ?></h4>
                </div>
                <div class="col-md-8">
                   <?= $res->company_name . '<small> Published: ' . human_time_diff( strtotime( $res->publish ),
						      current_time( 'timestamp',1 ) ) . '</small>';
						?>
                </div>
                <div class="col-md-8">
                    <h4 class="card-title"><?= $res->description ?></h4>
                </div>
                <div class="has-text-align-right">
                    <img src="https://i.imgur.com/ZbILm3F.png" alt="">
                </div>
                <div class="col-md-8">
                    <span><?= $res->location ?></span>
                    <span> <?= $res->position ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
get_footer();
?>
