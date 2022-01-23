<?php

/**
 * Template Name: devrix_add_jobs
 */
get_header();
?>
<div class="container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width: 40rem;">
                    <h2 class="card-title text-center">Add Job</h2>
                    <div class="card-body">
                        <form method='POST'>
                            <div class="form-group">
                                <label>Title:</label>
                                <input type="text" class="form-control" placeholder="Enter Title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label>Description:</label>
                                <textarea class="form-control" rows="5" name="description" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Company name:</label>
                                <input type="text" class="form-control" placeholder="Enter Company name"
                                       name="company_name" required>
                            </div>
                            <div class="form-group">
                                <label>Job location:</label>
                                <input type="text" class="form-control" placeholder="Enter location" name="location"
                                       required>
                            </div>
                            <div class="form-group">
                                <label>Job position:</label>
                                <input type="text" class="form-control" placeholder="Enter Job position" name="position"
                                       required>
                            </div>
                            <button type="submit" name='insert' class="btn btn-primary">Add Job</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if ( isset( $_POST['insert'] ) ) {
	global $wpdb;

	$title        = htmlspecialchars( $_POST['title'] );
	$description  = htmlspecialchars( $_POST['description'] );
	$company_name = htmlspecialchars( $_POST['company_name'] );
	$location     = htmlspecialchars( $_POST['location'] );
	$position     = htmlspecialchars( $_POST['position'] );

	if ( empty( $title || $description || $company_name ||  $location || $position ) ) {
		echo '<div class="error">Please for fill all the fields</div>';
	}

	$sql = $wpdb->insert(
		'jobs',
		array(
			'title'        => $title,
			'description'  => $description,
			'company_name' => $company_name,
			'publish'      => date( "Y-m-d h:i:sa" ),
			'location'     => $location,
			'position'     => $position,
		)
	);

	if ( $sql == true ) {
		echo '<script>
        window.location.replace("/devrix/");
            </script>';
	} else {
		echo '<script> alert("Not Inserted") </script>';
	}
}
get_footer();
?>
