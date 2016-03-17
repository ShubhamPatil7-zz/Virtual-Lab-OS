<?php
    include 'nav2.php';
?>
	<div class="container" style="width:90%;">
<ul class="collapsible" data-collapsible="accordion" style="margin-top: 50px;">
    <li>
      <div class="collapsible-header "><i class="material-icons">info</i>Objectives of SJF scheduling</div>
      <div class="collapsible-body"><p>1.Associate with each process the length of its next CPU burst<br/>
									   2.Reduction in waiting time for short processes.<br/>
									   3.Optimal<br/>
									   4.Gives minimum average waiting time for a given set of processes<br/>
									   5.Two schemes : Non preemptive and Preemptive ,but difficult to implement<br/> 
	</p> 
	</div>
    </li>
	
	
	<li>
      <div class="collapsible-header "><i class="material-icons">grade</i>Procedure</div>
      <div class="collapsible-body"><p>Step 1: When the CPU is available, assign it to the process with the shortest next CPU burst. <br /> 
									   Step 2: Break ties on a FCFS basis. <br />
									   Step 3: When a new process arrives at the ready queue, compare its CPU burst with remaining time for current process.<br />
									   Step 4: If new process has shorter burst, preempt current process.<br />
									   Step 5: Calculate the waiting time and turn around time and display it.<br />
									   Step 6: Calculate the average waiting time and average total turnaround time and display it.<br/>
									   Step 7: Stop the program.</p></p>
	  </div>
    </li>
    
	<li>
      <div class="collapsible-header "><i class="material-icons">new_releases</i>Limitations</div>
      <div class="collapsible-body"><p>1. Cannot be implemented because it requires future knowledge and can’t actually predict the length of next burst.<br /> 
									   2. Can lead to unfairness or starvation<br />
									   3. Doesn’t always minimize average turnaround time<br/>
									   4. Elapsed time (i.e., execution-completed-time) must be recorded, it results an additional overhead on the processor.<br/></p>	  
	</div>
	</li>
 </div>
 
 </body>
 </html>