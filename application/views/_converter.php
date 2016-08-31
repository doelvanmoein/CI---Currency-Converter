

<div id="container">
	<h3 style="text-align: center;">Welcome to  "CI Money Changer"</h3>

	<div id="body">
		<div class="row">
			<div class="span6">
				 <form id="form_converter">
					  <div class="form-group">
					    <label for="email">Input Your Money (IDR) :</label>
					    <input type="email" class="form-control" id="email">
					  </div>
					  <div class="form-group">
					    <label for="pwd">Convert To :</label>
					    <select name="convert_to" id="convert_to">
					    	<option>-- choose --</option>
						      <?php 
						      		foreach ($query->result() as $row) {?>
						      		  <option value="<?php echo $row->id; ?>">
						      		  		<?php echo $row->currency; ?>
						      		  	</option>			      				
						      <?php	} ?>
					    </select><br>
					    <input type="email" class="form-control" id="email" readonly="true">
					  </div>
				</form>
			</div>
			<div class="span6">
				<table class="table table-bordered table-stripped">
				    <thead>
				      <tr>
				        <th>No</th>
				        <th>Currency</th>
				        <th>Kurs</th>
				      </tr>
				    </thead>
				    <tbody>

				      <?php 
				      		$no=1;
				      		foreach ($query->result() as $row) {?>
						      <tr>
						        <td><?php echo $no++; ?></td>
						        <td><?php echo $row->currency; ?></td>
						        <td><?php echo "IDR ". $row->kurs; ?></td>
						      </tr>				      				
				      <?php	} ?>
				    </tbody>
				</table>				
			</div>
		</div>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

