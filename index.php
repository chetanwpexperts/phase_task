<?php
require "db.php";

$message = "";

/** insert data to table **/
if(isset($_POST['savepahse']))
{
	$phases = $_POST['name'];
	foreach($phases as $phase)
	{
		$sql = "INSERT INTO phase (name) VALUES ('".$phase."')";

		if ($mysqli->query($sql) === TRUE) 
		{
			$message = "<div class='successmessage'>Phases are saved successfully</div>"; 
		} else {
			$message = "<div class='errormessage'>Error: " .  $exec . "<br>" . $mysqli->error . "</div>";
		}
	}
}

/**
* get students **/
$sql = "SELECT id, name FROM phase";
$st = $mysqli->query($sql);
$phases = array();
if ($st->num_rows > 0) 
{
	// output data of each row
	while($row = $st->fetch_assoc()) 
	{
		$phases[] = $row;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Dummy</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.form-group.field_wrapper div {
    clear: both;
    margin-top: 0.5rem;
	height: 40px;
}

img.remove_button {
    position: relative;
    top: -37px;
    left: 34.7rem;
    border-radius: 50%;
	cursor:pointer;
}
.successmessage {
    padding: 0.5rem;
    text-align: center;
    background: #426843ba;
    width: 50%;
    color: #f9f9f9;
    font-weight: 600;
    margin-top: 2rem;
    border-radius: 5px;
}
.errormessage{
	padding: 0.5rem;
    text-align: center;
    background: #d73b22ba;
    width: 50%;
    color: #f9f9f9;
    font-weight: 600;
    margin-top: 2rem;
    border-radius: 5px;
}
</style>
<script>
jQuery(document).ready(function($)
{
    var maxField = 10; // limit
    var addButton = $('.add_button');
    var wrapper = $('.field_wrapper');
    var fieldHTML = '<div><input class="form-control" type="text" name="name[]" value="" required /> <img src="remove-icon.png" style="width:6%;" class="remove_button" /></div>';
    var x = 1;
    
	// add input row
    $(addButton).click(function()
	{
        if(x < maxField)
		{ 
            x++;
            $(wrapper).append(fieldHTML);
        }
    });
    
	// delete input row
    $(wrapper).on('click', '.remove_button', function(e)
	{
        $(this).parent('div').remove();
        x--;
    });
});
</script>
</head>
<body>
<div class="container-lg">
    <div class="">
        <div class="table-wrapper">
            <div class="table-title">
				<?php echo $message;?>
                <div class="row">
					<div class="col-sm-8">
					<p>&nbsp;</p>
					<h2>Add <b>Phases</b></h2> </div>
					<p>&nbsp;</p>
					<div class="col-sm-12">
						<form name="phase" action="index.php" id="formtm" method="post">
							<div class="after-add-more">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group field_wrapper">
											<div>
												<input type="text" name="name[]" class="form-control" value="" required /> 
											</div>
										</div>
									</div>
									<a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png" style="width:6%;margin: 10px auto;" /></a>
									
								</div>
								<div class="row">
									<div class="col-md-6">
										<button class="btn btn-primary" type="submit" name="savepahse">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<p>&nbsp;</p>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered src-table1">
							<thead>
								<tr>
									<th>Id</th>
									<th>Phase Name</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								if(count($phases) > 0)
								{
									$totalphases = count($phases);
									$i = 1;
									foreach($phases as $phase)
									{
										?>
										<tr id="check_<?php echo $i;?>" data-total-record="<?php echo $totalphases;?>" data-tr-id_<?php echo $i;?>="<?php echo $phase['id'];?>" data-name-<?php echo $i;?>="<?php echo $phase['name'];?>">
											<td><?php echo $phase['id'];?></td>
											<td><a href="phase_view.php?id=<?php echo $phase['id'];?>"><?php echo $phase['name'];?></a></td>
										</tr>
										<?php
										$i++;
									}
								}
								?>
								      
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>  
	</div>
</div>
</body>
</html>