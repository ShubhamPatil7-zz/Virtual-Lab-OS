<?php
    include 'nav1.php';
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
      <h4><u>First Come First Serve</u></h4>
      <p style="font-size:1.2em">Ans 1)  Multiprogramming</p>
	  <p style="font-size:1.2em">Ans 2)  Throughput</p>
	  <p style="font-size:1.2em">Ans 3)  All of the above </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
  


	<div class="container" style="width:80%;">
    <p><blockquote style="margin-top: 50px;"><h5>Which technique was introduced because a single job could not keep both the CPU and the I/O devices busy??</h5></blockquote></p>
    <p>
    <input name="group1" type="radio" id="test1" />
    <label for="test1">Time Sharing</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test2" />
    <label for="test2">Spooling</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test3"  />
    <label for="test3">Preemptive scheduling</label>
    </p>
    <p>
    <input name="group1" type="radio" id="test4" />
    <label for="test4">Multiprogramming</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5>CPU performance is measured through ________.</h5></blockquote></p>
    <p>
    <input name="group2" type="radio" id="test6" />
    <label for="test6">Throughput</label>
    </p>
    <p>
    <input name="group2" type="radio" id="test7" />
    <label for="test7">MHz</label>
    </p>
    <p>
    <input name="group2" type="radio" id="test9"  />
    <label for="test9">Flaps</label>
    </p>
    <p>
    <input name="group2" type="radio" id="test10" />
    <label for="test10">None of the above</label>
    </p><br>
	
	<div class="container" style="width:100%;">
    <p><blockquote><h5>Which of the following is a criterion to evaluate a scheduling algorithm?</h5></blockquote></p>
    <p>
    <input name="group3" type="radio" id="test11" />
    <label for="test11">CPU Utilization: Keep CPU utilization as high as possible</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test12" />
    <label for="test12">Throughput: number of processes completed per unit time</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test13"  />
    <label for="test13">Waiting Time: Amount of time spent ready to run but not running.</label>
    </p>
    <p>
    <input name="group3" type="radio" id="test14" />
    <label for="test14">All of the above</label>
    </p><br>
	
	</div>
	<div class="container" style="width:25%;">
    <a class="waves-effect waves-light btn modal-trigger"  data-target="modal1" href="#modal1">Submit</a>
         </div></div><!--<i class="material-icons right">send</i></button></div>-->
	</body>
	</html>