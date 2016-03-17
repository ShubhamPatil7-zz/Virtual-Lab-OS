<?php
    include 'content/nav.php';
?>
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a href="#test02">Scheduling Algorithms</a></li>
                <li class="tab col s3"><a href="#test01">Page Replacement Policies</a></li>
                <li class="tab col s3"><a href="#test04">Deadlock & Multithreading</a></li>
            </ul>
        </div>
    </div>
    <div id="test02" class="col s12" style="width:97%;">
    <table style="width:100%;margin-top: 50px;">
        <tr>
            <td><blockquote>1.</td>
            <td><h5>What does TAT stand for ??</h5></td>
            <td>
            <p>
            <input name="group1" type="radio" id="test1" />
            <label for="test1">Turn All Time</label>
            </p></td>
            <p><td>
            <input name="group1" type="radio" id="test2" />
            <label for="test2">Time Around Time</label>
            </td></p>
            <p><td>
            <input name="group1" type="radio" id="test3"  />
            <label for="test3">Turn Around Time</label>
            <td></p><p>
            <input name="group1" type="radio" id="test4" />
            <label for="test4">Total Around Time</label>
            </p></td> 
        </tr>
        <tr>
            <td><blockquote>2.</td>
            <td><h5>Which of the following is preferable ??</h5></td>
            <td>
            <p>
            <input name="group2" type="radio" id="test5" />
            <label for="test5">Maximum Throughput<br>& Minimum Turnaround time</label>
            </p></td>
            <p><td>
            <input name="group2" type="radio" id="test6" />
            <label for="test6">Minimum Throughput<br>& Maximum Turnaround time</label>
            </td></p>
            <p><td>
            <input name="group2" type="radio" id="test7"  />
            <label for="test7">Maximum Throughput<br>& Maximum Turnaround time</label>
            <td></p><p>
            <input name="group2" type="radio" id="test8" />
            <label for="test8">Minimum Throughput<br>& Minimum Turnaround time</label>
            </p></td> 
        </tr>
        <tr>
            <td><blockquote>3.</td>
            <td><h5>Which of the following is correct??</h5></td>
            <td>
            <p>
            <input name="group3" type="radio" id="test9" />
            <label for="test9">TurnaroundTime = BurstTime + WaitingTime</label>
            </p></td>
            <p><td>
            <input name="group3" type="radio" id="test10" />
            <label for="test10">TurnaroundTime = FinishTime- ArrivalTime</label>
            </td></p>
            <p><td>
            <input name="group3" type="radio" id="test11"  />
            <label for="test11">Both of the above</label>
            <td></p><p>
            <input name="group3" type="radio" id="test12" />
            <label for="test12">None of the above</label>
            </p></td> 
        </tr>
        <tr>
            <td><blockquote>4.</td>
            <td><h5>Which of the following is correct??</h5></td>
            <td>
            <p>
            <input name="group4" type="radio" id="test13" />
            <label for="test13">Waiting Time = ArrivalTime - StartTime</label>
            </p></td>
            <p><td>
            <input name="group4" type="radio" id="test14" />
            <label for="test14">Waiting Time = StartTime - ArrivalTime</label>
            </td></p>
            <p><td>
            <input name="group4" type="radio" id="test15"  />
            <label for="test15">Waiting Time = StartTime + ArrivalTime</label>
            <td></p><p>
            <input name="group4" type="radio" id="test16" />
            <label for="test16">None of the above</label>
            </p></td> 
        </tr>
    </table></div></div>
    <div  id="test01" class="col s12" style="width:97%;">
    <table style="width:100%">
        <tr>
            <td><blockquote>1.</td>
            <td><h5>Scheduling is a method to:</h5></td>
            <td>
            <p>
            <input name="group5" type="radio" id="test17" />
            <label for="test17">Increase CPU utilization</label>
            </p></td>
            <p><td>
            <input name="group5" type="radio" id="test18" />
            <label for="test18">Obtain efficient data</label>
            </td></p>
            <p><td>
            <input name="group5" type="radio" id="test19"  />
            <label for="test19">Keep the memory more free</label>
            <td></p><p>
            <input name="group5" type="radio" id="test20" />
            <label for="test20">None of these</label>
            </p></td> 
        </tr>
        <tr>
            <td><blockquote>2.</td>
            <td><h5>SJN stands for _______ .</h5></td>
            <td>
            <p>
            <input name="group6" type="radio" id="test21" />
            <label for="test21">Shorter Job New</label>
            </p></td>
            <p><td>
            <input name="group6" type="radio" id="test22" />
            <label for="test22">Shortest Job Never</label>
            </td></p>
            <p><td>
            <input name="group6" type="radio" id="test23"  />
            <label for="test23">Shortest Job Next</label>
            <td></p><p>
            <input name="group6" type="radio" id="test24" />
            <label for="test24">Shortest Reaming Job Next</label>
            </p></td> 
        </tr>
        <tr>
            <td><blockquote>3.</td>
            <td><h5>SRT stands for _______ .</h5></td>
            <td>
            <p>
            <input name="group7" type="radio" id="test25" />
            <label for="test25">Shortest Remaining Time</label>
            </p></td>
            <p><td>
            <input name="group7" type="radio" id="test26" />
            <label for="test26">Shortest Remainder Time</label>
            </td></p>
            <p><td>
            <input name="group7" type="radio" id="test27"  />
            <label for="test27">Shortest Running Time</label>
            <td></p><p>
            <input name="group7" type="radio" id="test28" />
            <label for="test28">None of the above</label>
            </p></td> 
        </tr>
        <tr>
            <td><blockquote>4.</td>
            <td><h5>Short term scheduler is also known as :</h5></td>
            <td>
            <p>
            <input name="group8" type="radio" id="test29" />
            <label for="test29">Admission scheduler</label>
            </p></td>
            <p><td>
            <input name="group8" type="radio" id="test30" />
            <label for="test30">Dispatcher scheduler</label>
            </td></p>
            <p><td>
            <input name="group8" type="radio" id="test31"  />
            <label for="test31">Swapping scheduler</label>
            <td></p><p>
            <input name="group8" type="radio" id="test32" />
            <label for="test32">Process scheduler</label>
            </p></td> 
        </tr>
    </table></div>
 <div  id="test04" class="col s12" style="width:97%;">
    <table style="width:100%">
        <tr>
            <td><blockquote>1.</td>
            <td><h5>Bankers algorithm is used _______ .</h5></td>
            <td>
            <p>
            <input name="group9" type="radio" id="test33" />
            <label for="test33">To prevent deadlock</label>
            </p></td>
            <p><td>
            <input name="group9" type="radio" id="test34" />
            <label for="test34">To avoid deadlock</label>
            </td></p>
            <p><td>
            <input name="group9" type="radio" id="test35"  />
            <label for="test35">To recover from deadlock</label>
            <td></p><p>
            <input name="group9" type="radio" id="test36" />
            <label for="test36">All of these</label>
            </p></td> 
        </tr>
        <tr>
            <td><blockquote>2.</td>
            <td><h5>Which condition leads to Deadlock?</h5></td>
            <td>
            <p>
            <input name="group10" type="radio" id="test37" />
            <label for="test37">Hold and wait</label>
            </p></td>
            <p><td>
            <input name="group10" type="radio" id="test38" />
            <label for="test38">No Preemption</label>
            </td></p>
            <p><td>
            <input name="group10" type="radio" id="test39"  />
            <label for="test39">Mutual principal</label>
            <td></p><p>
            <input name="group10" type="radio" id="test40" />
            <label for="test40">Both (a) and (b)</label>
            </p></td> 
        </tr>
        <tr>
            <td><blockquote>3.</td>
            <td><h5>Which of the following resources can cause deadlock?</h5></td>
            <td>
            <p>
            <input name="group11" type="radio" id="test41" />
            <label for="test41">Read only files</label>
            </p></td>
            <p><td>
            <input name="group11" type="radio" id="test42" />
            <label for="test42">Shared programs</label>
            </td></p>
            <p><td>
            <input name="group11" type="radio" id="test43"  />
            <label for="test43">Shared resources like Printers</label>
            <td></p><p>
            <input name="group11" type="radio" id="test44" />
            <label for="test44">All of these</label>
            </p></td> 
        </tr>
        </table></div>
    
    <div class="container" style="width:25%;">
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit<i class="material-icons right">send</i></button>
    </div>
</body>    
</html>