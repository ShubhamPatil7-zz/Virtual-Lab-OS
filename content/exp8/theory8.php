<?php
	include "nav8.php";
	?>
<div class="container" style="width:90%;">
	<ul class="collapsible" data-collapsible="accordion" style="margin-top: 50px;">
		<li>
			<div class="collapsible-header active"><i class="material-icons">info_outline</i>What is LFU page replacement ?</div>
			<div class="collapsible-body">
				<p> 
				
				This is a type of cache algorithm used to manage memory within a computer.<br/>When the cache is full and requires more room the system will purge the item with the lowest reference frequency.
				
				</p>
			</div>
		</li>
		<li>
			<div class="collapsible-header active"><i class="material-icons">filter_drama</i>Concept</div>
			<div class="collapsible-body">
				<p>
					
					 The standard characteristics of this method involve the system keeping track of the number of times a block is referenced in memory.<br/>
					 Assign a counter to every block that is loaded into the cache.<br/> Each time a reference is made to that block the counter is increased by one.<br/> When the cache reaches capacity and has a new block waiting to be inserted the system will search for the block with the lowest counter and remove it from the cache.
							
				</p>
			</div>
		</li>
		<li>
		<div class="collapsible-header"><i class="material-icons">whatshot</i>Example </div>
			<div class="collapsible-body">
				<p>
				
				<img src="e8.jpg">
				
				
				</p>
			</div>
		</li>
	</ul>
</div>
</body>
</html>