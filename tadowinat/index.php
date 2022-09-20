<?php
include('public/header.php');
include('include/connection.php');
?>
	<!-- End navbar -->
	<!-- Start Content -->
	<div class="content">
       <div class="container">
         <div class="row">
			 <div class="col-md-9">
				<?php
                  $query="SELECT *FROM posts ORDER BY id DESC";
				  $result=mysqli_query($conn,$query);
				  while($row=mysqli_fetch_assoc($result)){
					?>
						<div class="post">
									<div class="post-image">
										<a href="post.php?id=<?php echo $row['id'];?>"><img src="uploads/<?php echo $row['postImage'];?>"></a>
									</div>
									<div class="post-title">
										<h4><a href="post.php?id=<?php echo $row['id'];?>"><?php echo $row['postTitle'];?></a></h4>
									</div>
									<div class="post-details">
										<p class="post-info">
											<span> <i class="fa-solid fa-user"></i> <?php echo $row['postAuthor'] ;?> </span>
											<span><i class="fa-solid fa-calendar-days"></i> <?php echo $row['postDate'] ;?></span>
											<span><i class="fa-solid fa-tag"></i> <?php echo $row['postCat'] ;?></span>
											<p class="postContent">
												<?php
                                                 if( strlen($row['postContent'])>150){
													$row['postContent']=substr($row['postContent'],0,300)."...";
												 }
												 echo $row['postContent'];
												?>
											</p>
											<a href="post.php?id=<?php echo $row['id'];?>"><button class="btn btn-custom">اقرأ المزيد</button></a>
									</div>
						</div>
			<?php
			}
			?>
			 </div>
			 <div class="col-md-3">
                <!-- categories -->
				<div class="categories">
                 <h4>التصنيفات</h4>
				 <ul>
					<?php 
                       $query = "SELECT * FROM categories ORDER BY id DESC";
					   $result=mysqli_query($conn,$query);
					   while($row=mysqli_fetch_assoc($result)){

					?>
					<li>
					 <a href="cateigory.php?category=<?php echo $row['categoryName']  ?>">
						<span><i class="fa-solid fa-tag"></i></span>
						<span><?php echo $row['categoryName']; ?></span>
					 </a>
					</li>
					<?php
					   }
					 ?>
				 </ul>
				</div>
				<!-- end categories -->
				<!-- start latest posts -->
				<div class="last-post">
					<h4>أحدث المنشورات</h4>
					<ul>
					<?php 
                       $query = "SELECT * FROM posts ORDER BY id DESC LIMIT 5  ";
					   $result=mysqli_query($conn,$query);
					   while($row=mysqli_fetch_assoc($result)){
					?>
						<li>
						<a href="post.php?id=<?php echo $row['id'];?>">
								<span class="span-image"><img src="uploads/<?php echo $row['postImage'];?>" alt="image1"></span>
								<span><?php  echo $row['postTitle'];?></span>
							</a>
					    </li>
						<?php
					   }
					   ?>
				    </ul>
				</div>
				<!-- end latest posts -->
			 </div>
		 </div>
	   </div>
	</div>
	<!-- End Content -->
	<?php
include('public/footer.php');
?>
