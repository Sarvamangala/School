<?php

include 'config.php';

?>
<div>
	<fieldset>
                <legend><b>Create New Library</b></legend>
                <form method="POST" id="create_lib_form">
				Give a name here:
                    <input type="text" name="Displayname" id="Displayname" value=""  >
                    <br/>
											Give a ID:
                    <input type="text" name="userid" id="userid" value=""  >
        
                    <br/>
                    <input type="submit" value="Create Library" , id = "createlib"/>
                </form>
            </fieldset>

</div>


<?

$userid=$_SESSION['userid'];
if(isset($_POST["action"])){

// creates library
	if($_POST["action"]=="createlib")
    {
		$libname=$_POST["libname"];

		$sql_insert = "INSERT into `Library`
  			(`Displayname`,'userid'
			)
		    VALUES
		    ('$Displayname','$userid'
			)
			";

          mysql_query($sql_insert,$link) or die("Insertion Failed:" . mysql_error());
		  echo "Library Created, Library ID:".mysql_insert_id();
		exit();
	}
?>