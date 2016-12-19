<?php
include ('build/header.php');
?>
		<div class="row">
			<div class="col-md-2">
				<!--Linker kant-->
			</div>
			<div class="col-md-6">
				<h1>Klas koppelen</h1>
				<form method="post" accept-charset="utf-8">
					
					<div class="form-group">
						Kind
						<select required class="form-control" name="parent">
							<?php
							foreach (accountManagement::getChild() as $child) {
								echo'
								<option value="'.$child['username'].'">'.$child['username'].'</option>';
							}
							?>
						</select>
						</div>
						
						<div class="form-group">
						Vak
						<select required class="form-control" name="child">
							<?php
							foreach (accountManagement::getSubject() as $subject) {
								echo'
								<option value="'.$subject['name'].'">'.$subject['name'].'</option>';
							}
							?>
						</select>
						</div>
						<input type="submit" class="btn btn-primary" name="save_parentship" value="Koppelen">
					</form>
					
	</body>
</html>