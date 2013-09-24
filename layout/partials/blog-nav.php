		
			<div class="tabbable">
				<ul class="nav nav-tabs">
					<li <?php if (!strpos("//" . $_SERVER['REQUEST_URI'], "posts")) echo "class='active'"; ?>>
						<a href="#tab1" data-toggle="tab">Recent Posts</a>
					</li>
					<li>
						<a href="#tab2" data-toggle="tab">Archive</a>
					</li>
					<?php if (strpos("//" . $_SERVER['REQUEST_URI'], "posts")) echo "<li class='active'><a href='#tab3' data-toggle='tab'>Comments</a></li>"; ?>
				</ul>
				<div class="tab-content">
					<div class="tab-pane<?php if (!strpos("//" . $_SERVER['REQUEST_URI'], "posts")) echo " active"; ?>" id="tab1">
						<p>Recent</p>
					</div>
					<div class="tab-pane" id="tab2">
						<p>Archive</p>
					</div>
					<?php 
					if (strpos("//" . $_SERVER['REQUEST_URI'], "posts")) 
						echo "
					<div class='tab-pane active' id='tab3'>
					<br />
						<!-- Form and button to add new comments -->
						<form method='post' class='form-horizontal' role='form'>
							<div class='form-group' style='width:300px'>
								<input class='form-control' type='text' name='name' id='name' placeholder='Display Name' />
								<br />
								<input class='form-control' type='text' name='email' id='email' placeholder='Email Address' />
							</div>
							<div class='form-group' style='width:500px'>
								<textarea class='form-control' rows='5' class='input-xlarge' placeholder='Comment'></textarea>
								<br />
								<button type='submit' class='btn'>Submit Comment</button>
							</div>
						</form>
					</div>";
					?>
				</div>
			</div>
