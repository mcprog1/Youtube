<?php
// Destroy previous session data
if(session_id() != '') session_destroy();

// Get file upload status
if(isset($_GET['err'])){
    if($_GET['err'] == 'bf'){
        $errorMsg = 'Please select a video file to upload.';
    }elseif($_GET['err'] == 'ue'){
        $errorMsg = 'Sorry, there was an error on uploading your file.';
    }elseif($_GET['err'] == 'fe'){
        $errorMsg = 'Sorry, only MP4, AVI, MPEG, MPG, MOV and WMV files are allowed.';
    }else{
        $errorMsg = 'Some problems occurred, please try again.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post" enctype="multipart/form-data" action="upload.php">
    <?php echo (!empty($errorMsg))?'<p class="err-msg">'.$errorMsg.'</p>':''; ?>
    <label for="title">Title:</label>
    <input type="text" name="title" value="" />
    <label for="description">Description:</label>
    <textarea name="description" cols="20" rows="2" ></textarea>
    <label for="tags">Tags:</label>
    <input type="text" name="tags" value="" />
    
    <label for="tags">Privacy:</label>
    <select name="privacy">
        <option value="public">Public</option>
        <option value="private">Private</option>
    </select>
    <label for="file">Choose Video File:</label> <input type="file" name="file" >
    <input name="videoSubmit" type="submit" value="Upload">
</form>
</body>
</html>