<?php
    include "nav3.php";
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
      <h4><u>Round Robin </u></h4>
      <p style="font-size:1.2em">Ans 1)  I/O scheduling</p>
	  <p style="font-size:1.2em">Ans 2)  Multiprocessors OS</p>
	  <p style="font-size:1.2em">Ans 3)  Round Robin </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>


	<div class="container" style="width:80%;">
    <p><blockquote style="margin-top: 50px;"><h5>Round Robin scheduling is used in ?</h5></blockquote></p>
    <p>
    <input name="group1" type="radio" id="test1" />
    <label for="test1">Disk scheduling</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test2" />
    <label for="test2">CPU scheduling</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test3"  />
    <label for="test3">I/O scheduling</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test4" />
    <label for="test4">Multitasking</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5>Super computers typically employ _______. </h5></blockquote></p>
    <p>
    <input name="group2" type="radio" id="test6" />
    <label for="test6"> Real time Operating system</label>
    </p>
    <p>
    <input name="group2" type="radio" id="test7" />
    <label for="test7">Multiprocessors OS </label>
    </p>
    <p>
    <input name="group2" type="radio" id="test9"  />
    <label for="test9">Desktop OS </label>
    </p>
    <p>
    <input name="group2" type="radio" id="test10" />
    <label for="test10">None of the above</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5> An optimal scheduling algorithm in terms of minimizing the average waiting time of a given set of processes is ________ ?</h5></blockquote></p>
    <p>
    <input name="group3" type="radio" id="test11" />
    <label for="test11">FCFS scheduling algorithm </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test12" />
    <label for="test12">SJF scheduling algorithm </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test13"  />
    <label for="test13">Round Robin scheduling algorithm </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test14" />
    <label for="test14">None of the above</label>
    </p><br>
	
	</div>
	<div class="container" style="width:25%;">
    <a class="waves-effect waves-light btn modal-trigger"  data-target="modal1" href="#modal1">Submit</a>
         </div></div>
</body>
</html>