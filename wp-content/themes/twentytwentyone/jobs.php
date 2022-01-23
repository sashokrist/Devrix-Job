<?php
/**
 * Template Name: devrix
 */

get_header();
?>
<div class="container">
    <div class="justify-content-center">
        <header class="site-header">
            <h2>Job Offers</h2>
        </header>
        <?php
        global $wpdb;
        $results = $wpdb->get_results("SELECT * FROM jobs order by id DESC");
        foreach ($results as $res) {
        ?>
        <div class="row justify-content-center">
            <div class="card" style="width: 50rem;">
                <div class="card-body">
                    <div class="col-md-8 job-title">
                        <h2 class="card-title"><a class="meta-company" href="/devrix/job?id=<?= $res->id ?>"><?=  $res->title; ?></a></h2>
                    </div>
                    <div class="col-md-8 meta-date">
                        <a class="meta-company" href="/devrix/job?id=<?= $res->id ?>"><?= $res->company_name . '<small> Published: ' . human_time_diff( strtotime( $res->publish ),
			                 current_time( 'timestamp',1 ) ) . '</small>';
			                ?></a>
                    </div>
                    <div class="has-text-align-right">
                        <a class="meta-company" href="/devrix/job?id=<?= $res->id ?>">
                            <img src="https://i.imgur.com/ZbILm3F.png" alt=""></a>
                    </div>
                    <div class="col-md-8 job-details">
                        <span class="job-location"><a class="meta-company" href="/devrix/job?id=<?= $res->id ?>"><?= $res->location; ?></a></span>
                        <span class="job-type"><a class="meta-company" href="/devrix/job?id=<?= $res->id ?>"> <?= $res->position; ?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
get_footer();

?>
