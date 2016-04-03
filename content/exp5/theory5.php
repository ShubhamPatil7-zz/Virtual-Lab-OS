<?php
	include "nav5.php";
	?>
<div class="container" style="width:90%;">
	<ul class="collapsible" data-collapsible="accordion" style="margin-top: 50px;">
		<li>
			<div class="collapsible-header active"><i class="material-icons">info_outline</i>What is LRU ?</div>
			<div class="collapsible-body">
				<p> The least recently used (LRU) page replacement algorithm,similar to NRU keeps track of page usage over a short period of time.<br/>
					LRU works on the idea that pages that have been most heavily used in the past few instructions are most likely to be used heavily in the next few instructions too. 
					</p>
			</div>
		</li>
		<li>
			<div class="collapsible-header active"><i class="material-icons">filter_drama</i>Concept</div>
			<div class="collapsible-body">
				<p>
					When a page fault occurs, throw out the page that has been unused for the longest time.<br />
					This strategy is called LRU (Least Recently Used) paging.<br />
					It is necessary to maintain a linked list of all pages in memory, with the most recently used page at the front and the least recently used page at the rear.				
				</p>
			</div>
		</li>
		<li>
			<div class="collapsible-header"><i class="material-icons">whatshot</i>Example </div>
			<div class="collapsible-body">
				<p><img src="eg.png"></p>
			</div>
		</li>
	</ul>
</div>
</body>
</html>