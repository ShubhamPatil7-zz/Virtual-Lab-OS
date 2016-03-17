<?php
    include "nav3.php";
?>
    <div class="container" style="width:90%;">
        <ul class="collapsible" data-collapsible="accordion" style="margin-top: 50px;">
            <li>
                <div class="collapsible-header "><i class="material-icons">info</i>Objectives of Round Robin scheduling</div>
                <div class="collapsible-body"><p>1.	One of the oldest, simplest, fairest and most widely used algorithm. <br /> 
                                               2.	Processes are dispatched in a FIFO manner but are given a limited amount of CPU time called a time-slice or a quantum. <br />
                                               3.	Pre-emptive in nature,therefore effective in time sharing environments in which the system needs to guarantee reasonable response time for interactive users.  <br />
                                               4.	Length of quantum is most interesting feature.<br />
                                               5.	Process can allocate the CPU for one quantum at one time <br /></p>
                </div>
            </li>



            <li>
                <div class="collapsible-header "><i class="material-icons">grade</i>Procedure</div>
                <div class="collapsible-body"><p>Step 1: Start the program <br /> 
                                               Step 2: Read the number of processes to be inserted <br />
                                               Step 3: Read the burst times of the processes.<br />
                                               Step 4: Read the Time Quantum.<br />
                                               Step 5: if the burst time of a process is greater than time Quantum then subtract time quantum form the burst time <br />
                                               Step 6: Else, assign the burst time to time quantum<br />
                                               Step 7: Calculate the average waiting time and average total turnaround time and display it.<br/>
                                               Step 8: Stop the program.</br></p>
                </div>
            </li>
            <li>
                <div class="collapsible-header "><i class="material-icons">new_releases</i>Limitations</div>
                <div class="collapsible-body"><p>1. Large time quantum and context switching.(RR --> FCFS)<br /> 
                                               2. The average waiting time is often quite long. <br /></p>	  
                </div>
            </li>
        </ul>
     </div>
 </body>
 </html>