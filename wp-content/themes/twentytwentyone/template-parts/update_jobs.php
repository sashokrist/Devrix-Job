<?php

/**
 * Template Name: devrix_update_jobs
 */
get_header();
$id     = $_GET['id'];
$result = $wpdb->get_results( "SELECT * FROM jobs WHERE id=$id" );
foreach ( $result as $job ) { ?>
    <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="width: 40rem;">
                        <h2 class="card-title text-center">Update Job</h2>
                        <div class="card-body">
                            <form method='POST'>
                                <input type="hidden" value="<?php
								echo $job->id; ?>" name="id">
                                <div class="form-group">
                                    <label>Title:</label>
                                    <input type="text" class="form-control" value="<?= $job->title ?>" name="title" required>
                                </div>
                                <div class="form-group">
                                    <label>Description:</label>
                                    <textarea class="form-control" rows="5" name="description" required><?= $job->description ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Company name:</label>
                                    <input type="text" class="form-control" value="<?= $job->company_name ?>" name="company_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Job location:</label>
                                    <input type="text" class="form-control" value="<?= $job->location ?>" name="location" required>
                                </div>
                                <div class="form-group">
                                    <label>Job position:</label>
                                    <input type="text" class="form-control" value="<?= $job->position ?>" name="position" required>
                                </div>
                                <button type="submit" name='insert' class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
}
if ( isset( $_POST['insert'] ) ) {
	global $wpdb;

	$id           = htmlspecialchars( $_POST['id'] );
	$title        = htmlspecialchars( $_POST['title'] );
	$description  = htmlspecialchars( $_POST['description'] );
	$company_name = htmlspecialchars( $_POST['company_name'] );
	$location     = htmlspecialchars( $_POST['location'] );
	$position     = htmlspecialchars( $_POST['position'] );

	if ( empty( $title || $description || $company_name || $location || $position ) ) {
		echo '<div class="error">Please for fill all the fields</div>';
	}

	$wpdb->update(
		'jobs',
		array(
			'title'        => $title,
			'description'  => $description,
			'company_name' => $company_name,
			'publish'      => date( "Y-m-d h:i:sa" ),
			'location'     => $location,
			'position'     => $position
		),
		array( 'id' => $id ),
		array(
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%s'
		)
	);
	echo '<script> window.location.replace("/devrix/admin");</script>';
}
get_footer();
?>
