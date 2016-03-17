<?php
	include "nav3.php";
	?>
<div class="container" style="width:90%;">
	<ul class="collapsible" data-collapsible="accordion" style="margin-top: 50px;">
		<li>
			<div class="collapsible-header active"><i class="material-icons">info_outline</i>What is RR?</div>
			<div class="collapsible-body">
				<p> Round-robin (RR) is one of the algorithms employed by process and network schedulers in computing. <br>
					As the term is generally used, time slices are assigned to each process in equal portions and in circular order, handling all processes without priority (also known as cyclic executive). 
				</p>
			</div>
		</li>
		<li>
			<div class="collapsible-header active"><i class="material-icons">filter_drama</i>Concept</div>
			<div class="collapsible-body">
				<p>
					Each process is provided a fix time to execute called quantum. <br />
					Once a process is executed for given time period. Process is preempted and other process executes for given time period.<br />
					Context switching is used to save states of preempted processes.
				</p>
			</div>
		</li>
		<li>
			<div class="collapsible-header"><i class="material-icons">place</i>Real Life Analogy</div>
			<div class="collapsible-body">
				<p> Kids playing on a swing for a fixed time period and then giving other kids in queue a chance to sit on the swing. The kid done sitting on the swing and wishes to sit on the swing again, waits in the queue.
					Let us assume each kid to be a process and the time period for which the kid wishes to sit on the swing be the burst time of that kid. The fixed period of time for which each kid is allowed to sit on the swing which kids have decided amongst themselves is the quantum time for that swing. 
					Suppose there are 3kids wishing to sit on the swing naming jay, rahul and shubham. Jay is the first in the queue and wishes to sit on the swing for 10min in total. Rahul is second in the queue and wishes to sit on the swing for 15min in total. Shubham is third in the queue and wishes to sit on the swing for 5min in total. The quantum time of the swing is 5min.
					As Jay is first in the queue he will be the first process that executes for 5min, now Jay will get off the swing and allow the next process in queue to execute. Jay has executed for 5min, therefore now his execution time reduces to 5min and then he waits in the queue as his execution time is not 0. Now 
					Rahul gets on the swing and executes for 5min and gets off the swing and waits in the queue with execution time reduced to 10min.
					Now its shubham’s turn to get on the swing and even shubham executes for 5min and gets of the swing, as shubham’s total burst time is 5min and he has already executed for 5min, because his burst time is same as execution time  therefore he does not have to wait in the queue. 
					Now only Jay and Rahul are in queue for execution. Next in the queue is Jay who sits on the swing for 5min and now his burst time and total execution time are equal even he leaves the queue. Now only Rahul is left in the queue, he executes for 5min and joins the queue as there is no process in the queue rahul executes immediately.
				</p>
			</div>
		</li>
		<li>
			<div class="collapsible-header"><i class="material-icons">whatshot</i>Example </div>
			<div class="collapsible-body">
				<p>Time Quantum=3 <br>
					Process    Burst Time<br>
					aaa			5 <br>
					bbb			12 <br>
					ccc			8 <br>
					ddd			20 <br>
					Output:
					Burst_time    Waiting_time     Turnaround_time<br>
					5				0				5  <br>
					12				5				13 <br>
					8				13				25 <br>
					20				25				45 <br>
					Average Waiting_time=10.75<br>
					Average Turnaround_time=22.00<br>
				</p>
			</div>
		</li>
	</ul>
</div>
</body>
</html>