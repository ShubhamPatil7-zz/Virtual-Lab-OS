<?php
    include "nav7.php";
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
      <h4><u>Optimal Page Replacement</u></h4>
      <p style="font-size:1.2em">Ans 1)  Will not be used for the longest time in the future.</p>
	  <p style="font-size:1.2em">Ans 2)  7 </p>
	  <p style="font-size:1.2em">Ans 3)  sometimes increases the number of page faults </p>
      <p style="font-size:1.2em">Ans 4)  2 </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
	<div class="container" style="width:80%;">
    <p><blockquote style="margin-top: 50px;"><h5>The optimal page replacement algorithm will select the page that?
</h5></blockquote></p>
    <p>
    <input name="group1" type="radio" id="test1" />
    <label for="test1">Has not been used for the longest time in the past.</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test2" />
    <label for="test2">Will not be used for the longest time in the future.</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test3"  />
    <label for="test3">Has been used least number of times.</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test4" />
    <label for="test4">Has been used most number of times.</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5>A process has been allocated 3 page frames. Assume that none of the pages of the process are available in the memory initially. <br/>
	The process makes the following sequence of page references (reference string): 1, 2, 1, 3, 7, 4, 5, 6, 3, 1 <br/>
	If optimal page replacement policy is used, how many page faults occur for the above reference string?</h5></blockquote></p>
    <p>
    <input name="group2" type="radio" id="test6" />
    <label for="test6"> 7 </label>
    </p>
    <p>
    <input name="group2" type="radio" id="test7" />
    <label for="test7"> 8 </label>
    </p>
    <p>
    <input name="group2" type="radio" id="test9"  />
    <label for="test9"> 9 </label>
    </p>
    <p>
    <input name="group2" type="radio" id="test10" />
    <label for="test10"> 10 </label>
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
    <p><blockquote><h5>Given String:1, 2, 1, 3, 7, 4, 5, 6, 3, 1 <br/>  Least Recently Used (LRU) page replacement policy is a practical approximation to optimal page replacement. 
	For the above reference string, how many more page faults occur with LRU than with the optimal page replacement policy?</h5></blockquote></p>
	<p>
    <input name="group3" type="radio" id="test11" />
    <label for="test11"> 0 </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test12" />
    <label for="test12"> 1 </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test13"  />
    <label for="test13"> 2 </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test14" />
    <label for="test14"> 3 </label>
    </p><br>
	
	</div>
	<div class="container" style="width:25%;">
    <a class="waves-effect waves-light btn modal-trigger"  data-target="modal1" href="#modal1">Submit</a>
         </div></div>
</body>
</html>