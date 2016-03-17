<?php
    include 'content/nav.php';
?>
    <br/><br/><br/>
    <div class="container">
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="College_Name" type="text" class="validate">
                        <label for="College_Name">College Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">Comments</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container" style="width:20%;">
        <a class="waves-effect waves-teal btn-flat" onclick="Materialize.toast('Thank You For Your Feedback', 5000)">Submit</a>
    </div>
    
</body>
</html>