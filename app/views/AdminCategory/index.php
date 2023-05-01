<link rel="stylesheet" type="text/css" href="/resources/styles/adminCategory.css">

<?php $this->view('shared/header', _('Category')); ?>
<?php $this->view('shared/sideBar'); ?>

	<div class="main">
		<div class="categoryList">
			<h2>Category</h2>
			<table>
					<tr>
						<!-- <div class="attributes"> -->
						<th class="attributes">ID</th>
						<th class="attributes">Category Name</th>
						<th class="attributes">Actions</th>
						<!-- </div> -->
					</tr>
				
					<?php foreach ($data as $category) { ?>
					<tr>

						<td><a><?= htmlentities($category->category_id) ?></a></td>
						<td><?= htmlentities($category->category) ?></td>
						<td>
							<!-- TODO: make function to delete product-->
							<a href='/AdminCategory/delete/<?=$category->category_id?>'><?= _('remove') ?></a> 
						</td>
					</tr>
					<?php
					}
					?>
			</table>
		</div>
		<div class="addEdit">
			<div class="addCategory">
				<h4>Add Category</h4>
				<form class="form-addCategory" method="post" action="" enctype="multipart/form-data" style="">
					<div class="btn-addCategory">
						<input type="text" name="category">
						<input type="submit" name="addAction" value="Add">
					</div>
				</form>
			</div>
			<div class="editCategory">
				<h4>Edit Category</h4>
				<form class="form-editCategory" method="post" enctype="multipart/form-data" action="">
					<div class="btn-editCategory">
						<select class="btn-input">
							<?php
								foreach($data as $category){
									echo "<option value='$category->category_id'>$category->category_id</option>\n";
								}

							?>
							
						</select>
						<input class="btn-input" type="text" name="category" value="<?= $category->category?>">
						<input type="submit" name="editAction" value="Edit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

</body>