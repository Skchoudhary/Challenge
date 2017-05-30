<!DOCTYPE html>
<html>
<head>
    <title>Add Jobs</title>
</head>
<body>
    <?php echo validation_errors(); ?>

    <?php echo form_open('Jobs/insert_jobposted'); ?>

    <label >Job Title</label>
    <input type="input" name="title"  required="" /><br />
    <label>Job Description</label>
    <textarea maxlength="100" name="description" required=""></textarea><br />
    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>