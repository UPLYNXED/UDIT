<!DOCTYPE html>
<html>
	<?php include 'includes/head.php'; ?>
	<body>
		<div class="container">
			<div class="splashSocialScreen">
			<section class="splashForm">
				<?php
					$pageTitle = 'New Social Group';
					$menuVisible = true;
					include 'includes/nav.php';
				?>
				<form>
				<b>Choose your branch(es)</b>
					<input type="checkbox" id="rememberIT">
					<label for="rememberIT">
						<div class="checkbox"></div>
						<span class="branchBody branchIT">IT</span>
					</label>
					<input type="checkbox" id="rememberTechnology">
					<label for="rememberTechnology">
						<div class="checkbox"></div>
						<span class="branchBody branchTechnology">Technology</span>
					</label>
					<input type="checkbox" id="rememberEducation">
					<label for="rememberEducation">
						<div class="checkbox"></div>
						<span class="branchBody branchEducation">Education</span>
					</label>
					<input type="checkbox" id="rememberFashion">
					<label for="rememberFashion">
						<div class="checkbox"></div>
						<span class="branchBody branchFashion">Fashion</span>
					</label>
					<input type="checkbox" id="rememberFinance">
					<label for="rememberFinance">
						<div class="checkbox"></div>
						<span class="branchBody branchFinance">Finance</span>
					</label>
					<input type="checkbox" id="rememberRestaurant">
					<label for="rememberRestaurant">
						<div class="checkbox"></div>
						<span class="branchBody branchRestaurant">Restaurant</span>
					</label>
				<br /><br /><br />
				<b>Sex</b>
					<select>
					  <option value="men">Men</option>
					  <option value="women">Women</option>
					  <option value="mixed">Mixed</option>
					</select>
				<b>Age</b>
					<select>
					  <option value="men">18-30</option>
					  <option value="women">30-45</option>
					  <option value="mixed">45+</option>
					  <option value="mixed">Mixed</option>
					</select>
					<input type="submit" name="btnAction" value="Generate Group">
				</form>
				</section>
			</div>
		</div>
	</body>
</html>