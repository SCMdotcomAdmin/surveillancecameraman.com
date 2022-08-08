<?php 
session_start();
require("opener_db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>upload by josiah</title>
<script type="text/javascript" src="jquery-1.8.2.js"></script>
<script type="text/javascript" src="bootstrap.js"></script>
<script type="text/javascript" src="bootstrap-button.js"></script>
<link href="bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div style="position:relative; width:350px; margin:1em auto; padding:5px;" class="table-bordered">
 <div class="status" style="width:100%;" >
        <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo "<ul class='error'> ";
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li> <strong><font color="red">',$msg ,'</font></strong></li>'; 
		}echo "</ul>";
		unset($_SESSION['ERRMSG_ARR']);
	}
?> 
</div> 
<div style="width:100%; margin:5px;">
<form action="upload.php" method="post" enctype="multipart/form-data" name="upload" style="margin:5px;">
<label> File</label>
<input name="uploaded_file" type="file" class="input-xlarge" required/>
<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
<label> Description</label>
<textarea name="desc" cols="" rows="" class="input-xlarge" required></textarea>
<br />
<input name="Upload" type="submit" value="Upload" class="btn" />
</form>
</div>

<hr />

<div>
			<table cellpadding="0"  width="100%" class="table table-bordered">
            <thead>
                <tr>
                    <th><strong>Id</strong></th>
                    <th><strong>Description</strong></th>
                    <th><strong>Functions </strong></th>
                </tr>  
            </thead>
           	 <tbody>             
              <?php
   			$list4 = "SELECT * FROM up_files ";
			$result4 = $connector->query($list4);
			if(mysql_num_rows($result4) > 0)
				{
				while($data4 = mysql_fetch_assoc($result4))
					{					
				 echo "
				 <tr>
                    <td>{$data4['id']}</td>                   
				 <td>
				    [File] <br>
					<strong>Description ::</strong><br> {$data4['fdesc']} 
					<br />				  		   
				   <strong>Uploaded On ::</strong><br> {$data4['fdatein']}				   
				   </td>
				   
				    <td>
					<a href='{$data4['floc']}' title='download file' target='_blank' >Download</a>						<br />
					<img src = '{$data4['floc']}' width='90' height='90'>
					</td>            
				</tr> 	 
				 ";
		// replace the A href link with 
					
					}
					
				}
					?>
             
                       
             
             </tbody>
            <tfoot></tfoot>
        </table>
</div>

<div>
By josiah <br />
 http://bethelinvest.wordpress.com <br />
 http://josina08.wordpress.com
</div>
</div>



</body>
</html>