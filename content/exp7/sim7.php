<?php
    include 'nav7.php';
?>
    <br/><br/><br/>
    <div class="container" style= "width:90%;">
       <div class="container" style="width:85%;">
          <div class="row">
             <form class="col s12">
                <div class="row">
                   <div class="input-field col s6">
                      <i class="material-icons prefix">content_copy</i>
                      <input type="number" id="page" length="40" class="validate">
                      <label for="page">Enter the pages </label>
                   </div>
                   <div class="input-field col s6">
                      <i class="material-icons prefix">format_list_numbered</i>
                      <input type="number" id="frame" class="validate">
                      <label for="frame">Frame size</label>
                   </div>
                </div>
                <center><a class="waves-effect waves-light btn" onclick='optimal();'>
                   <i class="material-icons right">send</i>Submit</a>
                </center>
             </form>
          </div>
          <div id="temp" style="display:none" class="card-panel indigo lighten-5"></div>
       </div>
    </div>
</body>
</html>