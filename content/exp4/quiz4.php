<?php
    include 'nav4.php';
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
      <h4><u>Round Robin without priority </u></h4>
      <p style="font-size:1.2em">Ans 1) Process C </p>
	  <p style="font-size:1.2em">Ans 2) CPU is allocated to process with highest priority </p>
	  <p style="font-size:1.2em">Ans 3) Currently Running Process </p>
      <p style="font-size:1.2em">Ans 3) Round Robin </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>

	<div class="container" style="width:80%;">
    <p><blockquote style="margin-top: 50px;"><h5>Process A,B,C,D have priorities 2,3,1,4 respectively.Which process will execute first? </h5></blockquote></p>
    <p>
    <input name="group1" type="radio" id="test1" />
    <label for="test1">)Process C </label>
    </p>
    <p>
    <input name="group1" type="radio" id="test2" />
    <label for="test2">)Process D</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test3"  />
    <label for="test3">)Process B</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test4" />
    <label for="test4">Process A</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5>In priority scheduling algorithm :  </h5></blockquote></p>
	
    <p>
    <input name="group2" type="radio" id="test6" />
    <label for="test6"> CPU is allocated to process with highest priority</label>
    </p>
    <p>
    <input name="group2" type="radio" id="test7" />
    <label for="test7">CPU is allocated to process with lowest priority </label>
    </p>
    <p>
    <input name="group2" type="radio" id="test9"  />
    <label for="test9">Equal priority processes cannot be scheduled </label>
    </p>
    <p>
    <input name="group2" type="radio" id="test10" />
    <label for="test10">None of the above</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5> In priority scheduling algorithm,when a process arrives at ready queue,its priority is compared with priority of : </h5></blockquote></p>
    <p>
    <input name="group3" type="radio" id="test11" />
    <label for="test11">All processes </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test12" />
    <label for="test12">Currently running process </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test13"  />
    <label for="test13">Parent process </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test14" />
    <label for="test14">Init process</label>
    </p><br> 

	<div class="container" style="width:100%;">
    <p><blockquote><h5> Time quantum is defined in :</h5></blockquote></p>
	<br/>
	<p>
    <input name="group3" type="radio" id="test11" />
    <label for="test11">SJF </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test12" />
    <label for="test12">FCFS </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test13"  />
    <label for="test13">Round Robin </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test14" />
    <label for="test14">Multilevel queue</label>
    </p><br>

	<div class="container" style="width:25%;">
    <a class="waves-effect waves-light btn modal-trigger"  data-target="modal1" href="#modal1">Submit</a>
         </div></div>
</body>
</html>