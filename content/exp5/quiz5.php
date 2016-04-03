<?php
    include "nav5.php";
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
      <h4><u>Least Recently Used</u></h4>
      <p style="font-size:1.2em">Ans 1)  OPTIMAL < FIFO < LRU</p>
	  <p style="font-size:1.2em">Ans 2)  2</p>
	  <p style="font-size:1.2em">Ans 3)  3 </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>


	<div class="container" style="width:80%;">
    <p><blockquote style="margin-top: 50px;"><h5>Consider the virtual page reference string 1, 2, 3, 2, 4, 1, 3, 2, 4, 1 <br />
On a demand paged virtual memory system running on a computer system that main memory size of 3 pages frames which are initially empty.<br/>
 Let LRU, FIFO and OPTIMAL denote the number of page faults under the corresponding page replacements policy. Then
</h5></blockquote></p>
    <p>
    <input name="group1" type="radio" id="test1" />
    <label for="test1"> OPTIMAL < LRU < FIFO</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test2" />
    <label for="test2">OPTIMAL < FIFO < LRU</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test3"  />
    <label for="test3">OPTIMAL = LRU</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test4" />
    <label for="test4">OPTIMAL = FIFO</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5>Least Recently Used (LRU) page replacement policy is a practical approximation to optimal page replacement. 
	1, 2, 1, 3, 7, 4, 5, 6, 3, 1 ,how many more page faults occur with LRU than with the optimal page replacement policy? </h5></blockquote></p>
    <p>
    <input name="group2" type="radio" id="test6" />
    <label for="test6"> 0 </label>
    </p>
    <p>
    <input name="group2" type="radio" id="test7" />
    <label for="test7"> 1 </label>
    </p>
    <p>
    <input name="group2" type="radio" id="test9"  />
    <label for="test9"> 2 </label>
    </p>
    <p>
    <input name="group2" type="radio" id="test10" />
    <label for="test10"> 3 </label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5> A system uses 3 page frames for storing process pages in main memory. It uses the Least Recently Used (LRU) page replacement policy.<br/>
	Assume that all the page frames are initially empty. What is the total number of page faults that will occur while processing the page reference string given below?
    4, 7, 6, 1, 7, 6, 1, 2, 7, 2 </h5></blockquote></p>
    <p>
    <input name="group3" type="radio" id="test11" />
    <label for="test11">4 </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test12" />
    <label for="test12"> 5 </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test13"  />
    <label for="test13"> 6 </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test14" />
    <label for="test14"> 7 </label>
    </p><br>
	
	</div>
	<div class="container" style="width:25%;">
    <a class="waves-effect waves-light btn modal-trigger"  data-target="modal1" href="#modal1">Submit</a>
         </div></div>
</body>
</html>