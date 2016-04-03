<table class="responsive-table highlight centered" id="processcal">
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
            echo "<tbody><tr><td>Process $i</td><td id='at$i'><input type='number' min='1' max='20' id='atv$i' disabled value='0'/></td><td id='bt$i'><input type='number' min='1' max='20' id='btv$i' required/></td><td id='tat$i' disabled></td><td id='wt$i' disabled></td></tr></tbody>"; 
       else
           echo "<tbody><tr><td>Process $i</td><td id='at$i'><input type='number' min='1' max='20' id='atv$i' required /></td><td id='bt$i'><input type='number' min='1' max='20' id='btv$i' required/></td><td id='tat$i' disabled></td><td id='wt$i' disabled></td></tr></tbody>";
    
    }
    echo "</table>";
    echo "<center><button class='btn waves-effect waves-light' type='submit' onclick='rr(".$_GET['n'].")'>Submit
         <i class='material-icons right'>send</i></button></center>";
?>