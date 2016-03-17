<?php
    include 'nav4.php';
?>	
 <div class="container" style="width:90%;">
<ul class="collapsible" data-collapsible="accordion" style="margin-top: 50px;">
    <li>
      <div class="collapsible-header "><i class="material-icons">info</i>Objectives of Round Robin scheduling with priority</div>
      <div class="collapsible-body"><p>:   1. Allocate CPU to process with highest priority.<br/>
										   2. Can be preemptive or non-preemptive <br/>
										   3.  Starvation (indefinite blocking) may occur.<br/>
	
	</div>
    </li>
	
	
	
	<li>
      <div class="collapsible-header "><i class="material-icons">grade</i>Procedure</div>
      <div class="collapsible-body"><p>Step 1: Start the program <br/>
									   Step 2: Read the number of processes to be inserted <br/>
									   Step 3: Read the Priorities of processes<br/>
									   Step 4: sort the priorities and Burst times in ascending order<br/>
						   			   Step 5: calculate the waiting time of each process wt[i+1]=bt[i]+wt[i]<br/>
									   Step 6: calculate the turnaround time of each process tt[i+1]=tt[i]+bt[i+1]<br/>
									   Step 7: Calculate the average waiting time and average total turnaround time and display it.<br/>
									   Step 8: Stop the program.<br/>
</p>
	  </div>
    </li>
    
	<li>
      <div class="collapsible-header "><i class="material-icons">new_releases</i>Limitations</div>
      <div class="collapsible-body"><p>Starvation of lower priority processes is possible if large no of higher priority processes keep arriving.	</p>	  
	</div>
	</li>
 </div>
 </body>
 </html>