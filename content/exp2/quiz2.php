<?php
    include 'nav2.php';
?>
    <script type = "text/javascript">
	$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
	</script>


<!-- Modal Trigger -->
  

  <!-- Modal Structure -->
  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
      <h4><u>Shortest Job First</u></h4>
      <p style="font-size:1.2em">Ans 1)  SJF without preemption</p>
	  <p style="font-size:1.2em">Ans 2)  SJF</p>
	  <p style="font-size:1.2em">Ans 3)  knowing the length of next CPU request </p>
      <p style="font-size:1.2em">Ans 4)  SRTN : Shortest Remaining Time Next </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>

	<div class="container" style="width:80%;">
    <p><blockquote style="margin-top: 50px;"><h5>1) The optimum CPU scheduling algorithm is </h5></blockquote></p>
    <p>
    <input name="group1" type="radio" id="test1" />
    <label for="test1">FIFO</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test2" />
    <label for="test2">SJF with preemption</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test3"  />
    <label for="test3">SJF without preemption</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test4" />
    <label for="test4">Round Robin</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5>In terms of average wait time the optimum scheduling algorithm is _______ </h5></blockquote></p>
    <p>
    <input name="group2" type="radio" id="test1" />
    <label for="test1">FCFS</label>
    </p>
    <p>
    <input name="group2" type="radio" id="test2" />
    <label for="test2">SJF</label>
    </p>
    <p>
    <input name="group2" type="radio" id="test3"  />
    <label for="test3">Priority</label>
    </p>
    <p>
    <input name="group2" type="radio" id="test4" />
    <label for="test4">RR</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5>The real difficulty with SJF in short term scheduling is ______</h5></blockquote></p>
    <p>
    <input name="group3" type="radio" id="test1" />
    <label for="test1">it is too good an algorithm</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test2" />
    <label for="test2">knowing the length of the next CPU request</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test3"  />
    <label for="test3">it is too complex to understand</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test4" />
    <label for="test4">None of the above</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5>Preemptive Shortest Job First scheduling is sometimes called : ______ </h5></blockquote></p>
    <p>
    <input name="group3" type="radio" id="test1" />
    <label for="test1">Fast SJF scheduling</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test2" />
    <label for="test2">EDF scheduling – Earliest Deadline First</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test3"  />
    <label for="test3">HRRN scheduling – Highest Response Ratio Next</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test4" />
    <label for="test4">SRTN scheduling – Shortest Remaining Time Next</label>
    </p><br>
	
	</div>
	<div class="container" style="width:25%;">
    <a class="waves-effect waves-light btn modal-trigger"  data-target="modal1" href="#modal1">Submit</a>
         </div></div>
	</body>
	</html>