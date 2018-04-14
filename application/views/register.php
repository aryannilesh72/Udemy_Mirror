<div id="id01" class="modal">

    <form class="modal-content animate" action="<?php echo site_url('register'); ?>" method="post" enctype="multipart/form-data">

            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <h3 align="center">Become a Udemy Instructor!</h3>


    <hr/>
       &nbsp; <p align="center">Discover a supportive community of online instructors. Get instant access to all course creation resources.</p>
        <div class="container cont">

           <input type="text" class="signup" id="fname" placeholder="First name" name="fname" required>

            <input type="text" class="signup" id="lname" placeholder="Last name" name="lname" required>
            <input type="text" class="signup" id="uname" placeholder="Username" name="uname" required>
            <input class="signup" type="email" placeholder="Enter Email" name="email" required>
            <input type="password" class="signup" id="pwd" placeholder="password" name="pwd" required>

            <input type="text" class="signup" id="role" placeholder="Instructor/Student" name="role">

            <button  name="register" value="register" class="sin" type="submit">Signup</button>

        </div>


            <button  type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

    </form>
</div>
