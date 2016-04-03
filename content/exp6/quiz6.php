<?php
    include "nav6.php";
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
      <h4><u>First In First Out</u></h4>
      <p style="font-size:1.2em">Ans 1)  FIFO</p>
	  <p style="font-size:1.2em">Ans 2)  Both P and Q are true, but Q is not the reason for P.</p>
	  <p style="font-size:1.2em">Ans 3)  sometimes increase the number of faults </p>
      <p style="font-size:1.2em">Ans 4)  192 </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
	<div class="container" style="width:80%;">
    <p><blockquote style="margin-top: 50px;"><h5>Which of the following page replacement algorithms suffers from Belady’s anomaly?
</h5></blockquote></p>
    <p>
    <input name="group1" type="radio" id="test1" />
    <label for="test1"> FIFO</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test2" />
    <label for="test2">LRU</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test3"  />
    <label for="test3">OPTIMAL Page Replacement</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test4" />
    <label for="test4">Both LRU and FIFO</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5>A virtual memory system uses First In First Out (FIFO) page replacement policy and allocates a fixed number of frames to a process. 
	Consider the following statements: <br/>P: Increasing the number of page frames allocated to a process sometimes increases the page fault rate.
	<br/>Q: Some programs do not exhibit locality of reference. <br/>
		Which one of the following is TRUE?</h5></blockquote></p>
    <p>
    <input name="group2" type="radio" id="test6" />
    <label for="test6">Both P and Q are true, and Q is the reason for P</label>
    </p>
    <p>
    <input name="group2" type="radio" id="test7" />
    <label for="test7"> Both P and Q are true, but Q is not the reason for P. </label>
    </p>
    <p>
    <input name="group2" type="radio" id="test9"  />
    <label for="test9">P is false, but Q is true</label>
    </p>
    <p>
    <input name="group2" type="radio" id="test10" />
    <label for="test10"> Both P and Q are false</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5> Consider a virtual memory system with FIFO page replacement policy. 
	For an arbitrary page access pattern, increasing the number of page frames in main memory will</h5></blockquote></p>
    <p>
    <input name="group3" type="radio" id="test11" />
    <label for="test11"> always decrease the number of page faults</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test12" />
    <label for="test12"> always increase the number of page faults</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test13"  />
    <label for="test13">sometimes increase the number of page faults</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test14" />
    <label for="test14">never affect the number of page faults</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5> A system uses FIFO policy for page replacement. It has 4 page frames with no pages loaded to begin with. 
	The system first accesses 100 distinct pages in some order and then accesses the same 100 pages but now in the reverse order. How many page faults will occur?</h5></blockquote></p>
	<p>
    <input name="group3" type="radio" id="test11" />
    <label for="test11"> 196</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test12" />
    <label for="test12"> 192</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test13"  />
    <label for="test13">197</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test14" />
    <label for="test14">195</label>
    </p><br>
	
	</div>
	<div class="container" style="width:25%;">
    <a class="waves-effect waves-light btn modal-trigger"  data-target="modal1" href="#modal1">Submit</a>
         </div></div>
</body>
</html>