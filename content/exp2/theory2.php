<?php
    include 'nav2.php';
?>

<div class="container" style="width:90%;">
<ul class="collapsible" data-collapsible="accordion" style="margin-top: 50px;">
    
	<li>
      <div class="collapsible-header active"><i class="material-icons">info_outline</i>What is SJF?</div>
      <div class="collapsible-body"><p>The Shortest Job first (SJF) algorithm can be viewed as priority based scheduling where each task is priortised in order of the time required to complete the task.<br />In simple words,the lower the time required for completing a process the higher is it's priority in SJF algorithm.  </p></div>
    </li>
	
	
	<li>
      <div class="collapsible-header active"><i class="material-icons">filter_drama</i>Concept</div>
      <div class="collapsible-body"><p>The process with the shortest/smallest burst time is executed first completely without any intervention and only then the next process begins. Let us understand this scheduling process better along with a real life example. </p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Real Life Analogy</div>
      <div class="collapsible-body"><p>Eg: Supermarket Express Exit Lane, here the customers with fewer no. of items are allowed to exit quickly and  the one’s with more number of items take a longer time to exit.<br><br>
				       Let us assume the customers to be processes, the no of items bought by each customer be the burst time of that customer and the express lane is the processor of the system which executes the processes.<br><br>
				       When a Customer A fills his basket with 4 items and wishes to exit, he will be allowed to exit immediately as customer A is the first process, meanwhile if more customers arrive at the express lane suppose Customer B with 7items,  Customer C with 5items and Customer D with 6items.<br><br>
				       Once Customer A has exited, the process with minimal burst time will execute next which is customer C with 5items in our example. Now again processor will check which customer has fewer no. of items between customer D and Customer B. Customer D will execute next as it has lower burst time than Customer B. Finally Customer B will execute last.<br><br> 
                                       In our example, customer B could be starved  due to having bought large no. of items, i.e:  it has to wait for a long time in the queue for its execution to begin as there are many customers having shorter burst time than that process.
</p></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Example</div>
      <div class="collapsible-body"><p>Process	Wait Time : Service Time - Arrival Time<br>
					P0	3 - 0 = 3<br>
					P1	0 - 0 = 0<br>
					P2	16 - 2 = 14<br>
					P3	8 - 3 = 5<br>
					Average Wait Time: (3+0+14+5) / 4 = 5.50<br>
				   </p>
      </div>
    </li>
  </ul>
</div>
</body>
</html>