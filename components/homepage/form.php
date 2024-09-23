<div class="formview">
    <div class="formbg"></div>

    <div class="form">
    <div class="state">
        <button class="loginOption">Log In</button>
        <button class="registerOption">Register</button>
    </div>
    <div class="underline"></div>
        <div class="login">
            <form action="./backend/formconn/login.php" method="post">
                <label for="user">Email/Phone Number:</label>
                <input type="text" id='user'>
                <label for="password">Password:</label>
                <input type="password" id='password'>
                <input type="submit">
            </form>
        </div>
        <div class="register">
            <form action="" method="post">  
                <label for="name">Name:</label>
                <input type="text" id="name">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone">
                <label for="address">Address:</label>
                <input type="text" id="address">
                <label for="pass">Password:</label>
                <input type="password" id="pass">
                <label for="conpass">Confirm Password:</label>
                <input type="password" id="conpass">
                <input type="submit">
                
            </form>
        </div>
    </div>
</div>
<div class="loginerror">
    
</div>