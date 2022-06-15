<a class="btn btn-info" href="?action=add">Add user</a>
				<br>
				<br>
				<table class="table table-hover table-bordered table-striped">
					<thead>
						<tr>
							<th>id</th>
							<th>username</th>
							<th>email</th>
							<th>address</th>
							<th>gender</th>
							<th>privliges</th>
							<th>controls</th>
						</tr>
					</thead>
					<tbody>
<?php 

include_once "functions/connect.php";
	$select = "SELECT * FROM users";
	$query = $conn -> query($select);
	$id=0;
	foreach($query as $user) {


 ?>
						<tr>
							<td><?= ++$id ?></td>
							<td><?= $user['username'] ?></td>
                            <td><?= $user['email'] ?></td>
							<td><?= $user['address'] ?></td>
							<td><?php 

							if($user['gender'] == 0 ) {
								echo "Male";
							} else {
								echo "Female";
							}


							 ?></td>
							<td><?= 
			// ternary operator
			$user['priv'] ==0 ? 'Admin' : 'User' ;
 
							 ?></td>
							 <td>
								<a class="btn btn-primary" href="?action=edit&id=<?= $user['id']?>">Edit</a>
								<!-- <a class="btn btn-danger" href="">Delete</a> -->
								<!-- Button trigger modal -->
										<a class="btn btn-danger" data-toggle="modal" data-target="#<?php echo $user['id']?>">Delete</a>
										
										

										<!-- Modal -->
										<div class="modal fade" id="<?php echo $user['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
											are you sure to delete user : <?= $user['username']?>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<a class="btn btn-danger" href="functions/userdelete.php?id=<?=$user['id']?>">confirm</a>
											</div>
											</div>
										</div>
										</div>
							</td>
						</tr>
						
			<?php 	} ?>
					</tbody>
				</table>