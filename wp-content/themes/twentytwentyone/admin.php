<?php

/**
 * Template Name: admin
 */
if ( is_user_logged_in() ) {
get_header();

?>
<div class="container">
    <div class="justify-content-center">
        <header>
            <h2>Job Offers</h2>
        </header>
		<?php
		global $wpdb;
		$results = $wpdb->get_results( "SELECT * FROM jobs order by id DESC" );
		foreach ( $results as $res ) {
		?>
        <div class="row justify-content-center">
            <div class="card" style="width: 60rem;">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Company</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"><?= $res->id ?></th>
                            <td><?= $res->title ?></td>
                            <td><?= $res->company_name ?></td>
                            <td>
                                <a href="/devrix/update-job?id=<?= $res->id ?>" class="card-link btn btn-primary">Edit</a>
                                <form method="post" action="">
                                    <input type="hidden" value="<?= $res->id; ?>" name="id">
                                    <button type="submit" class="btn btn-danger" name="btnDelete">DELETE</button>
                                </form>
								<?php
								if ( isset( $_POST['btnDelete'] ) ) {
									echo '<script> confirm("Are you sure you want to delete this offer!"); </script>';

									$id = htmlspecialchars( $_POST['id'] );
									$wpdb->delete( 'jobs', array( 'id' => $id ), array( '%d' ) );

									echo '<script> window.location.replace("/devrix/admin/");</script>';
								}
								?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
	<?php
	}
	} else {
		echo '<script>
      alert("You dont have permissions to see this page")
        setTimeout(function(){
         window.location.replace("/devrix/");
        }, 0); 
        </script>';
	}
	get_footer();
	?>
