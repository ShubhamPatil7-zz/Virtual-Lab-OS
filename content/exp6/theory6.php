<?php
	include "nav6.php";
	?>
<div class="container" style="width:90%;">
	<ul class="collapsible" data-collapsible="accordion" style="margin-top: 50px;">
		<li>
			<div class="collapsible-header active"><i class="material-icons">info_outline</i>What is FIFO ?</div>
			<div class="collapsible-body">
				<p> 
				The first-in, first-out (FIFO) page replacement algorithm is a low overhead and simplest page replacement algorithm.<br/>As the name itself,
				the operating system keeps track of all the pages in memory in a queue, with the most recent arrival at the back, and the oldest arrival in front. 
				</p>
			</div>
		</li>
		<li>
			<div class="collapsible-header active"><i class="material-icons">filter_drama</i>Concept</div>
			<div class="collapsible-body">
				<p>
					
					 The operating system maintains a list of all pages currently in memory, with the page at the head of the list the oldest one and the page at the tail the most recent arrival.
					 <br/>When a page needs to be replaced, the page at the front of the queue (the oldest page) is selected.<br/>
					 On a page fault, the frame that has been in memory the longest is replaced.
					
				</p>
			</div>
		</li>
		<li>
			<div class="collapsible-header"><i class="material-icons">whatshot</i>Example </div>
			<div class="collapsible-body">
				<p>
				
				<img src="e6.png">
				
				</p>
			</div>
		</li>
	</ul>
</div>
</body>
</html>