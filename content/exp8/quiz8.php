<?php
    include "nav8.php";
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
      <h4><u>Least Frequently Used</u></h4>
      <p style="font-size:1.2em">Ans 1) Least Frequently Used </p>
	  <p style="font-size:1.2em">Ans 2) 8 </p>
	  <p style="font-size:1.2em">Ans 3) 3  </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
	<div class="container" style="width:80%;">
    <p><blockquote style="margin-top: 50px;"><h5>LFU stands for ?
</h5></blockquote></p>
    <p>
    <input name="group1" type="radio" id="test1" />
    <label for="test1">List Frequency Used</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test2" />
    <label for="test2">Listt Frequency Used</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test3"  />
    <label for="test3">Least Frequently Used </label>
    </p>
    <p>
    <input name="group1" type="radio" id="test4" />
    <label for="test4">Least Frequency Use</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5>Assume that there are 3 page frames which are initially empty,if the page referenced string is 1,2,3,4,2,1,5,3,2,4,6, the number of page faults used ?</h5></blockquote></p>
    <p>
    <input name="group2" type="radio" id="test6" />
    <label for="test6"> 8 </label>
    </p>
    <p>
    <input name="group2" type="radio" id="test7" />
    <label for="test7"> 6 </label>
    </p>
    <p>
    <input name="group2" type="radio" id="test9"  />
    <label for="test9"> 2 </label>
    </p>
    <p>
    <input name="group2" type="radio" id="test10" />
    <label for="test10"> 4 </label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5> Assume that there are 3 page frames which are initially empty,if the page referenced string is 1,2,3,4,2,1,5,3,2,4,6, the number of page hits used ?</h5></blockquote></p>
    <p>
    <input name="group3" type="radio" id="test11" />
    <label for="test11"> 0 </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test12" />
    <label for="test12"> 2 </label>
    </p>
    <p>
    <input name="group3" type="radio" id="test13"  />
    <label for="test13"> 1 </label>
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