<table class="responsive-table highlight centered" border id="processcal">
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
            $j=$i+1;
            echo "<tbody><tr><td id='pn$i'>Process$j</td><td id='bt$i'><input type='number' min='1' max='20' id='btv$i' required/></td><td id='p$i'><input type='number' min='1' max='10' id='pv$i'
                 required/></td><td id='tat$i' disabled></td><td id='wt$i' disabled></td></tr></tbody>";
        }
        echo "</table>";
        echo "<center><button class='btn waves-effect waves-light' type='submit' onclick='rrp(".$_GET['n'].")'>Submit
             <i class='material-icons right'>send</i></button></center>";
        echo "<button class='btn waves-effect waves-light' style='margin-left:20px;' type='submit' onclick='window.print();'>Print
          <i class='material-icons right'>launch</i></button></div>";
?>