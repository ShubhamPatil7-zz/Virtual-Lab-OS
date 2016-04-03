<?php
    include "nav6.php";
?>
    <div class="container" style="width:90%;">
        <ul class="collapsible" data-collapsible="accordion" style="margin-top: 50px;">
            <li>
                <div class="collapsible-header "><i class="material-icons">info</i>Objectives of FIFO page replacement policy </div>
                <div class="collapsible-body"><p>
				
				1.FIFO is cheap and intuitive.  <br />
				2.This algorithm experiences Bélády's anomaly. <br/>
				3.First in,first out is applicable during replacement.<br />
				4.Removes page in memory the  longest.
				</p>
                </div>
            </li>



            <li>
                <div class="collapsible-header "><i class="material-icons">grade</i>Procedure</div>
                <div class="collapsible-body"><p>
											   Step 1: Start the program. <br /> 
                                               Step 2: Read the number of pages to be replaced. <br />
                                               Step 3: Use the oldest as a predictor of the near future.<br />
                                               Step 4: Replace the page that hasn’t been referenced for the longest time.<br />
                                               Step 5: Maintain a “stack” of used pages. <br />
                                               Step 6: Repeat for all page values in given string <br />
                                               Step 7: Take note of number of page fault,HIT and MISS.<br/>
                                               Step 8: Stop the program.</br></p>
                </div>
            </li>
            <li>
                <div class="collapsible-header "><i class="material-icons">new_releases</i>Limitations</div>
                <div class="collapsible-body"><p>1.More memory does not lead to better performance<br /> 
												 2.It performs poorly in practical application and rarelu used in its unmodified form.<br />
											  </p>	  
                </div>
            </li>
        </ul>
     </div>
 </body>
 </html>