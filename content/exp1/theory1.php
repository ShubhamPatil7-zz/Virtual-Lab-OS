<?php
    include 'nav1.php';
?>
    <div class="container" style="width:90%;">
    <ul class="collapsible" data-collapsible="accordion" style="margin-top: 50px;">
        <li>
          <div class="collapsible-header active"><i class="material-icons">info_outline</i>What is FCFS?</div>
          <div class="collapsible-body"><p>As the name indicates ,the First Come First Served (FCFS) scheduling algorithm allocates CPU time to the processes based on the order in which they enter the "ready" queue.The first entered process is serviced first.  </p></div>
        </li>



        <li>
          <div class="collapsible-header active"><i class="material-icons">filter_drama</i>Concept</div>
          <div class="collapsible-body"><p>The Process that arrives to the system first executes completely and only then the next process begins. Now to understand this better let’s understand this scheduling process along with an example.</p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">place</i>Real Life Analogy</div>
          <div class="collapsible-body"><p>Eg: Passengers arriving at bus stop and waiting in queue for the bus to arrive.<br><br>
                           Consider the system to be a bus stop; the passengers arriving at the stop are the processes and the bus being the processor which executes this system. The time required to get into the bus is the execution time and the time passengers have to wait in queue is the waiting time of the passenger.<br><br>
                           A Passenger A(process) arrives at the Bus Stop(System) at time 0 and the time required for the passenger to get into the bus is 2min(Execution time). This Passenger will execute first, i.e he will get into bus first. Similarly Passenger B(process) arrives at the Bus Stop(System) at time 2 and the time required for the passenger to get into the bus is 2min(Execution time). Passenger C(process) arrives at the Bus Stop(System) at time 3 and the time required for the passenger to get into the bus is 1min(Execution time). Now the 3Passengers(Processes)wait in queue for the bus to arrive at the bus stop and climb the bus in First Come First Serve Basis. <br><br>
                           Now when the bus arrives Passenger A gets into the bus first as he has arrived first at the bus stop, its execution time is 2min and at the same time Passenger B arrives at the bus stop so immediately without waiting at the bus stop Passenger B gets into the bus after Passenger A. As FCFS is non pre-emptive process, Passenger C will have to wait in queue for 1 minute as it arrival time is 3 and passenger B end time is 4min, so Passenger C has to wait for 1min while Passenger B is climbing the bus. 1min is the waiting time of Passenger C. 
    </p></div>
        </li>
        <li>
          <div class="collapsible-header"><i class="material-icons">whatshot</i>Example</div>
          <div class="collapsible-body"><p>Process    Burst Time<br>
                                            P1&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 		24 <br>
                                            P2&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp		03 <br>
                                            P3&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp		03 <br>
                        Suppose that the processes arrive in the order: P1 , P2 , P3 <br><br>
                        The Gantt Chart for the schedule is: 0 24 27 30 <br><br>
                        Waiting time for P1 = 0; P2 = 24; P3 = 27 <br><br>
                        Average waiting time: (0 + 24 + 27)/3 = 17 <br><br>
                       </p>
          </div>
        </li>
      </ul>
    </div>
</body>
</html>