<!DOCTYPE html>
<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <!-- Latest compiled and minified CSS -->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function(){ 
    $('#characterLeft').text('500 characters left');
    $('#message').keydown(function () {
        var max = 500;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});

		</script>
		<link href="notes.css" rel="stylesheet"></link>
	</head>
	<body>
	
		<div class="container" id="leftThing">
	      	<nav class="navbar navbar-inverse navbar-fixed-top">
	            <div class="container">
	                  <a class="navbar-brand" href="index.html">Notr</a>
	            </div>
	        </nav>
	    </div>
		
<div class="container col-md-10 col-md-offset-4">
<div class="col-md-5">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Note Form</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="500" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
        </form>
    </div>
</div>
</div>

		<div class="container col-md-12">   
			<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Previous Notes</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Date</th>
								<th>Notes</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Trident</td>
								<td>Internet
									 Explorer 4.0</td>
								
							</tr>
							<tr>
								<td>Trident</td>
								<td>Internet
									 Explorer 5.0</td>
							</tr>
							<tr>
								<td>Trident</td>
								<td>Internet
									 Explorer 5.5</td>
							</tr>
							<tr>
								<td>Trident</td>
								<td>Internet
									 Explorer 5.5</td>
							</tr>
							<tr>
								<td>Trident</td>
								<td>Internet
									 Explorer 5.5</td>	
							</tr>
							<tr>
								<td>Trident</td>
								<td>Internet
									 Explorer 5.5</td>
							</tr>
							</tbody>
						</table>
					
				</div> <!-- /widget-content -->
			
			</div> <!-- /widget -->
            </div>

		   
	</body>
</html>