<table class="responsive-table highlight centered" border id="processcal">
    <thead>
        <tr>
            <th>Process</th>
            <th>Arrival Time</th>
            <th>Burst Time</th>
            <th>Turn Around Time</th>
            <th>Waiting Time</th>
        </tr>
    </thead>
<?php
       
    for($i=0;$i<$_GET['n'];$i++)
        {
         	$j=$i+1;
			if($i==0)
			{
				echo "<tbody><tr><td>Process $j</td><td id='at$i'><input type='number' min='1' max='20' id='atv$i' value='0' disabled/></td><td id='bt$i'><input type='number' min='1' max='20' id='btv$i'
                 required/></td><td id='tat$i' disabled></td><td id='wt$i' disabled></td></tr></tbody>";
       }else{
        echo "<tbody><tr><td>Process $j</td><td id='at$i'><input type='number' min='1' max='20' id='atv$i' required/></td><td id='bt$i'><input type='number' min='1' max='20' id='btv$i'
                 required/></td><td id='tat$i' disabled></td><td id='wt$i' disabled></td></tr></tbody>";
        }
		}
        echo "</table>";
        echo "<center><button class='btn waves-effect waves-light' type='submit' onclick='sjf(".$_GET['n'].")'>Submit
             <i class='material-icons right'>send</i></button></center><br>";
		echo "<button class='btn waves-effect waves-light' type='submit' onclick='datasend1(".$_GET['n'].")'>Show Gantt
             <i class='material-icons right'>launch</i></button>";
        echo "<button class='btn waves-effect waves-light' style='margin-left:20px;' type='submit' onclick='window.print();'>Print
          <i class='material-icons right'>launch</i></button></div>";
?>