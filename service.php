<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Food Paradise Services</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
		.carousel-inner > .item > img {
  			width:640px;
  			height:360px;
		}
		.carousel-caption p
		{
			color:#FF5936;
			font-size: 2.2rem;
    		font-family: 'Lobster', cursive;
			font-weight:bold;
        }
        .carousel-caption h3
        {
            color: #ffff00;
			font-size: 2.8rem;
            font-weight:bold;
            font-family: 'Lobster', cursive;
            
        }
		

		#showcase{
			background-color:grey;
		}

	</style>
</head>
<body>
<section id="showcase" class="bg-dark">
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/1.jpg" alt="Los Angeles" style="width:100%;">
		<div class="carousel-caption">
        <h3>Cooking Course</h3>
        <p>20000</p>
      </div>
      </div>

      <div class="item">
        <img src="img/2.jpg" alt="Chicago" style="width:100%;">
		<div class="carousel-caption">
        <h3>Review</h3>
        <p>3000</p>
      </div>
      </div>
    
      <div class="item">
        <img src="img/3.jpg" alt="New york" style="width:100%;">
		<div class="carousel-caption">
        <h3>Recipe Highlight</h3>
        <p>8500</p>
      </div>
      </div>

	  <div class="item">
        <img src="img/5.jpg" alt="Los Angeles" style="width:100%;">
		<div class="carousel-caption">
        <h3>Article Writing</h3>
        <p>6000</p>
      </div>
      </div>

      <div class="item">
        <img src="img/6.jpg" alt="Chicago" style="width:100%;">
		<div class="carousel-caption">
        <h3>Food Photography</h3>
        <p>10000</p>
      </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>	
</section>


<div class="container">
	<h1 class="page-header text-center"></h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">	
				<div class="text-center">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary pull-left"><span class="glyphicon glyphicon-plus"></span> New</a>
				<a href="welcome.php" class="btn btn-info"><span></span> Home</a>
				<a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a>
    			</div>
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>Serial</th>
						<th>Service Name</th>
						<th>Organization Name</th>
						<th>Payment Method</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							include_once('source/config.php');
							$sql = "SELECT * FROM members";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['servicename']."</td>
									<td>".$row['orgname']."</td>
									<td>".$row['payment']."</td>
									<td>
										<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}
							
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</style>
</html>