<?php
    include "nav8.php";
?>
    <div class="container" style="width:90%;">
        <ul class="collapsible" data-collapsible="accordion" style="margin-top: 50px;">
            <li>
                <div class="collapsible-header "><i class="material-icons">info</i>Objectives of LFU page replacement policy </div>
                <div class="collapsible-body"><p>
				
				1.Removes pages that are least frequently used.<br />
				2.Easy to use and simple. <br/>
				3.Counter is used to record the frequency of the page.<br />
				4.Less frequent page is replaced by new incoming one.<br/>
				</p>
                </div>
            </li>



            <li>
                <div class="collapsible-header "><i class="material-icons">grade</i>Procedure</div>
                <div class="collapsible-body"><p>
											   Step 1: Start the program. <br /> 
                                               Step 2: Read the number of pages to be replaced. <br />
                                               Step 3: Initialize Frame and Freq array to -1<br />
                                               Step 4: Check for Page Hit. If yes then Goto step 8(increment) else Goto step 4	<br />
                                               Step 5: Create array of page counts and store it in 'count' array. <br />
                                               Step 6: find the least frequently used page from the pages in FRAME. <br />
                                               Step 7: Replace page in frame by current page and increment counter and print frame.<br/>
                                               Step 8: Stop the program.</br></p>
                </div>
            </li>
            <li>
                <div class="collapsible-header "><i class="material-icons">new_releases</i>Limitations</div>
                <div class="collapsible-body"><p>1.A pure LFU system is fairly uncommon.<br /> 
												 2.Intuitive approach but not without faults.<br />
											  </p>	  
                </div>
            </li>
        </ul>
     </div>
 </body>
 </html>