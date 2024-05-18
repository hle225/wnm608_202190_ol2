<?php

include_once "lib/php/functions.php";

?>	

<header>
	<div class="layout-header">
		<div class="layout-aside sitename">
			<a href="index.php"><h1>CHICHAUS</h1></a>
		</div>
			
		<div class="layout-main">
			<div class="layout-main-cols">
				<div class="layout-main-col" style="flex-direction: row;">
					
				</div>
				<div class="layout-main-col display-flex">
					<nav class="nav nav-flex">
						<ul>
							<li><a href="log_in.php">LOG IN</a></li>
							<li>
								<a href="cart.php">
									CART
									<span class="badge"><?= makeCartBadge(); ?></span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
