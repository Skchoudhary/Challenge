<!DOCTYPE html>
<html>
<head>
  <title>Job List</title>
  <link rel = "stylesheet" type = "text/css" href = "\CodeIgniter-3.1.4\css\bootstrap.css">
</head>
<body>
  <h2><?php echo $title; ?></h2>
  <div class="container">
    <table class="table table-bordered">
        <tr>
            <th>Job Title</th>
            <th>Job Descriptiion</th>
            <?php
            
            if ($jobs_item['Job_Title'] == 'emp'){ ?> <th>Apply</th><!-- <?php   } ?> 
            ?>
        </tr>
        <?php foreach ($jobs as $jobs_item): ?>
            <tr>
                <td><?php echo $jobs_item['Job_Title']; ?></td>
                <td><?php echo $jobs_item['Job_Desc']; ?></td>
                <?php

                if ($jobs_item['Job_Title'] == 'emp'){ ?>
                <td><?php echo form_open('Jobs/insert_applied'); ?><input type="hidden" value="<?php echo $jobs_item['Job_ID']; ?>" name="job_id"><input type="submit" name="submit" value="Apply" onclick="this.disabled=true; this.value='Applied'" /></form></td>
                <?php } ?>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
