<!DOCTYPE html>
<html>
	<?php include 'includes/head.php'; ?>
	<body>
		<div class="container">
			<div class="splashSocialScreen">
			<section class="splashForm">
				<?php
					$pageTitle = 'New Group';
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
					<div class="selectLists">
						<div class="selectList">
							<label for="selectSex">
								Sex
							</label><select id="selectSex" name="sex">
								  <option value="men">Men</option>
								  <option value="women">Women</option>
								  <option value="mixed" selected>Mixed</option>
							</select>
						</div><div class="selectList">
							<label for="selectAge">
								Age
							</label><select id="selectAge" name="age">
								  <option value="men">18-30</option>
								  <option value="women">30-45</option>
								  <option value="mixed">45+</option>
								  <option value="mixed">Mixed</option>
							</select>
						</div>
					</div>
					<a class="splashButton" href="group.php">Find Group</a>
				</form>
				</section>
			</div>
		</div>
	</body>
</html>