<?php
    include "nav7.php";
?>
    <div class="container" style="width:90%;">
        <ul class="collapsible" data-collapsible="accordion" style="margin-top: 50px;">
            <li>
                <div class="collapsible-header "><i class="material-icons">info</i>Objectives of optimal page replacement policy </div>
                <div class="collapsible-body"><p>
				
				1.It looks forward in time to see which frame to replace on a page fault.  <br />
				2.Can offer near-optimal performance <br/>
				3.Also called OPT, clairvoyant replacement algorithm, or Bélády's optimal page replacement policy<br />
				</p>
                </div>
            </li>



            <li>
                <div class="collapsible-header "><i class="material-icons">grade</i>Procedure</div>
                <div class="collapsible-body"><p>
											   Step 1: Start the program. <br /> 
                                               Step 2: Read the number of pages to be replaced. <br />
                                               Step 3: Replace the page whose next use will occur farthest in the future.<br />
                                               Step 4: Keeps track of all pages referenced by the program.<br />
                                               Step 5: Then,use that data to decide which pages to swap in and out on subsequent runs <br />
                                               Step 6: Repeat for all page values in given manner <br />
                                               Step 7: Take note of number of page fault,HIT and MISS.<br/>
                                               Step 8: Stop the program.</br></p>
                </div>
            </li>
            <li>
                <div class="collapsible-header "><i class="material-icons">new_releases</i>Limitations</div>
                <div class="collapsible-body"><p>1.Cannot be implemented in a general purpose operating system<br /> 
												 2.Requires consistent pattern  for optimal performance.<br />
											  </p>	  
                </div>
            </li>
        </ul>
     </div>
 </body>
 </html>