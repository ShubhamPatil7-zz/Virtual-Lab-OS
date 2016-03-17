<?php
    include 'nav4.php';
?>

<div class="container" style="width:90%;">
<ul class="collapsible" data-collapsible="accordion" style="margin-top: 50px;">
    <li>
      <div class="collapsible-header active"><i class="material-icons">info_outline</i>What is Round Robin with Priority ?</div>
      <div class="collapsible-body"><p> Round-robin (RR) is one of the algorithms employed by process and network schedulers in computing.<br /> 
	  As the term is generally used, time slices are assigned to each process in equal portions and in circular order, handling all processes without priority (also known as cyclic executive). </p></div>
    </li>
	
	
	
	<li>
      <div class="collapsible-header active"><i class="material-icons">filter_drama</i>Concept</div>
      <div class="collapsible-body"><p>The operating system assigns a fixed priority to every process, and the scheduler arranges the processes in the ready queue in order of their priority.<br />
	  Lower priority processes get interrupted by incoming higher priority processes.<br />
	Overhead is not minimal, nor is it significant in this case. Waiting time and response time depend on the priority of the process. Higher priority processes have smaller waiting and response times. <br />Deadlines can be easily met by giving higher priority to the earlier deadline processes.
</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Real Life Analogy</div>
      <div class="collapsible-body"><p> This algorithm is similar to round robin only difference here is that each process is given a priority and accordingly they are executed.<br />
	  Processes are not executed according to the queue, they are executed according to their priorties.<br />
	  Amusement park queue system to enjoy the ride, the queue consists of people with various types of passes some have VIP pass whereas others have normal pass. <br />
	  The one with VIP is given higher priority.Let us assume the ride to be the system, the people waiting in the queue be the processes which have to be executed. Time each person wishes to enjoy the ride is the burst time for that person. Quantum time is the time the ride runs at one go.<br />
		Now lets understand along with example, suppose there are 3people named jay, Rahul, Shubham who are in the queue for a roller coaster ride, here jay, Rahul and shubham are the processes. Jay has normal pass and wishes to enjoy the ride for 4min, Rahul has a VIP pass and wishes to enjoy the ride for 8min whereas Shubham has a VVIP pass and wishes to enjoy the ride for 8min.<br />
		The Roller Coaster runs for 4minutes,which is the quantum time for the system. So according to the priority Shubham will have highest priority and will execute first no matter in what position is Shubham in the queue. After which Rahul will execute as he has 2nd highest priority and then jay will execute.<br />
		After the 1st round jay will not come back in the queue as his total execution time and burst time are same, so only Rahul and Shubham come back in the queue and again their priorties are checked for execution. Shubham having higher priority will execute first and then only then Rahul will be allowed to enjoy the ride.
</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Example </div>
      <div class="collapsible-body"><p>Time Quantum=3 <br>
										:  Process    Burst Time   Priority<br>
												1	   		10		4<br>
												2            2		2<br>
												3	   		 4 		1<br>
												4	   		 7 		3<br>

								Output:<br>
								Burst Time   Priority	WT	  TAT<br>
									4	   		1		 0	   4 <br>        
									2           2		 4	   6<br>
									7	   		3 		 6    13<br>
									10	   		4 		13	  23<br>

									
									Average Waiting_time=5.75<br>
									Average Turnaround_time=12.50<br>
									
					
					
					
					</p>
      </div>
    </li>
  </ul>
</div>
</body>
</html>