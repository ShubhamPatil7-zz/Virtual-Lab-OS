<?php
    include 'content/nav.php';
?>

    <div class="container" style="width:70%;">
        <blockquote style="margin-top: 50px;"><b>Scheduling Algorithms</b></blockquote>
        <ul class="collapsible" data-collapsible="expandable">
            <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>Waiting Time</div>
                <div class="collapsible-body"><p>The sum of the periods spent waiting in the ready queue amount of time a process has been waiting in the ready queue to acquire get control on the CPU.<br><b>Waiting Time = StartTime - ArrivalTime</b></p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>Response Time</div>
                <div class="collapsible-body"><p>Amount of time it takes from when a request was submitted until the first response is produced. Remember, it is the time till the first response and not the completion of process execution(final response).</p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>Throughput</div>
                <div class="collapsible-body"><p>It is the total number of processes completed per unit time or rather say total amount of work done in a unit of time. This may range from 10/second to 1/hour depending on the specific processes.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>Turn Around Time</div>
                <div class="collapsible-body"><p>It is the amount of time taken to execute a particular process, i.e. The interval from time of submission of the process to the time of completion of the process(Wall clock time).
                <br><b>TurnaroundTime = BurstTime + WaitingTime = FinishTime- ArrivalTime</b></p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>CPU utilization</div>
                <div class="collapsible-body"><p>To make out the best use of CPU and not to waste any CPU cycle, CPU would be working most of the time(Ideally 100% of the time). Considering a real system, CPU usage should range from 40% (lightly loaded) to 90% (heavily loaded.)</p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>Load average</div>
                <div class="collapsible-body"><p>It is the average number of processes residing in the ready queue waiting for their turn to get into the CPU.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">place</i>It Is Desriable to have : </div>
                <div class="collapsible-body"><p>1.Maximize CPU utilization<br> 2.Maximize throughput<br>
                3.Minimize turnaround time <br>
                4.Minimize start time <br>
                5.Minimize waiting time <br>
                6.Minimize response time<br>
                </p></div>
            </li>
        </ul>

        <blockquote><b>Page Replacement Policies</b></blockquote>
        <ul class="collapsible" data-collapsible="expandable">
            <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>Page Hit</div>
                <div class="collapsible-body"><p>When a searched page found in main memory which is not 
				present in virtual memory,it's a page hit</p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>Page Fault</div>
                <div class="collapsible-body"><p>A page fault occurs when a program tries to access a page that is mapped in address space, but not loaded in the physical memory (the RAM). In other words, a page fault occurs when a program can not find a page that it’s looking for in the physical memory, which means that the program would have to access the paging file (which resides on the hard disk) to retrieve the desired page.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">place</i>It Is Desriable to have : </div>
                <div class="collapsible-body"><p>1. Maximum Page Hits.<br> 2. Minimum Page Fault.
            </p></div>
            </li>
        </ul>
        <!--
        <blockquote><b>Deadlocks</b></blockquote>
        <ul class="collapsible" data-collapsible="expandable">
            <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>What is a Deadlock?</div>
                <div class="collapsible-body"><p>Deadlocks are a set of blocked processes each holding a resource and waiting to acquire a resource held by another process.</p></div>
            </li>
            <li>
                <div class="collapsible-header"><i class="material-icons">whatshot</i>How to avoid Deadlocks?</div>
                <div class="collapsible-body">
                    <p>
                        Deadlocks can be avoided by avoiding at least one of the four conditions, because all this four conditions are required simultaneously to cause deadlock.<br><br>
                    1.	Mutual Exclusion : Resources shared such as read-only files do not lead to deadlocks but resources, such as printers and tape drives, requires exclusive access by a single process.<br>
                    2.	Hold and Wait: In this condition processes must be prevented from holding one or more resources while simultaneously waiting for one or more others.<br>
                    3.	No Preemption : Preemption of process resource allocations can avoid the condition of deadlocks, where ever possible.
                    <br>4.	Circular Wait : Circular wait can be avoided if we number all resources, and require that processes request resources only in strictly increasing(or decreasing) order.
                    </p>
                </div>
            </li>
        </ul>
        -->
    </div>
</body>
</html>