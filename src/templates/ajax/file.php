<?php
	
	function d($what) {
    	print '<pre>';
    	print_r($what);
    	print '</pre>';
    }
	
	/* 	Dropzone does not provide the server side implementation of handling the files, 
	* 	but the way files are uploaded is identical to simple file upload forms like this:
	
	*	<form action="" method="post" enctype="multipart/form-data">
	*		<input type="file" name="file" />
	*	</form>
	*
	* 	Find more about dropzone: http://www.dropzonejs.com/
	*/

	$ds          = '/';  //1
 
	$storeFolder = '../files';   //2
	 
	if (!empty($_FILES)) {
	     
	    $tempFile = $_FILES['file']['tmp_name'];          //3             
	      
	    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
	     
	    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
	 
	    move_uploaded_file($tempFile,$targetFile); //6
	     
	}

	d($_FILES);

?>