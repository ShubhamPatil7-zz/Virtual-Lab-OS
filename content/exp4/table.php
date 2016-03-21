<b>Enter the Quantum Time</b>
<input type="number" id="Q"/>

<table class="responsive-table highlight centered" id="processcal">
    <thead>
        <tr>
            <th>Process</th>
            <th>Burst Time</th>
            <th>Priority</th>
            <th>Turn Around Time</th>
            <th>Waiting Time</th>
        </tr>
    </thead>
<?php
        for($i=0;$i<$_GET['n'];$i++)
        {
            echo "<tbody><tr><td id='pn$i'>P$i</td><td id='bt$i'><input type='number' id='btv$i' required/></td><td id='p$i'><input type='number' id='pv$i'
                 required/></td><td id='tat$i' disabled></td><td id='wt$i' disabled></td></tr></tbody>";
        }
        echo "</table>";
        echo "<center><button class='btn waves-effect waves-light' type='submit' onclick='rrp(".$_GET['n'].")'>Submit
             <i class='material-icons right'>send</i></button></center>";
?>