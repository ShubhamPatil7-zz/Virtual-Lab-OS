<?php
    include "nav5.php";
?>
    <div class="container" style="width:90%;">
        <ul class="collapsible" data-collapsible="accordion" style="margin-top: 50px;">
            <li>
                <div class="collapsible-header "><i class="material-icons">info</i>Objectives of LRU page replacement policy </div>
                <div class="collapsible-body"><p>
				
				1.Optimal policy looking back in time.<br />
				2.Programs tend to follow similar behavior <br/>
				3.Simplest page replacement algorithm.<br />
				4.It is amendable to full statistical analysis.

				
				</p>
                </div>
            </li>



            <li>
                <div class="collapsible-header "><i class="material-icons">grade</i>Procedure</div>
                <div class="collapsible-body"><p>
											   Step 1: Start the program. <br /> 
                                               Step 2: Read the number of pages to be replaced. <br />
                                               Step 3: Use the recent past as a predictor of the near future.<br />
                                               Step 4: Replace the page that hasn’t been referenced for the longest time.<br />
                                               Step 5: Maintain a “stack” of recently used pages. <br />
                                               Step 6: Repeat for all page values in given string <br />
                                               Step 7: Take note of number of page fault,HIT and MISS.<br/>
                                               Step 8: Stop the program.</br></p>
                </div>
            </li>
            <li>
                <div class="collapsible-header "><i class="material-icons">new_releases</i>Limitations</div>
                <div class="collapsible-body"><p>1. Expensive to implement in practice.<br /> 
												 2.  Its performance tends to degenerate under many quite common reference patterns. <br />
											  </p>	  
                </div>
            </li>
        </ul>
     </div>
 </body>
 </html>