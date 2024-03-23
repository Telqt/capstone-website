<?php 

include_once("header.php");

?>

<div class="signup-container">
    <div class="signup-left">
        <h1>Signup 	&#128221;</h1>
        <p>Already have an account? <a href="signup.php">Login</a></p>
        <form action="signup.inc.php" method="post">

            <div class="field">
                <input type="text" name="email" id="email" required autocomplete="off">
                <label for="email">Email</label>
                <svg viewBox="0 0 24 25" fill="none" focusable="false" class="chakra-icon css-1ouhgs0"><path d="M17 21.3H7c-3 0-5-1.5-5-5v-7c0-3.5 2-5 5-5h10c3 0 5 1.5 5 5v7c0 3.5-2 5-5 5z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17 9.8l-3.13 2.5c-1.03.82-2.72.82-3.75 0L7 9.8" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>

            <div class="field">
                <input type="password" name="password" id="email" required autocomplete="off">
                <label for="password">Password</label>
                <svg viewBox="0 0 24 25" fill="none" focusable="false" class="chakra-icon css-1ouhgs0"><path d="M16.423 10.249V8.102a4.552 4.552 0 00-4.55-4.551 4.55 4.55 0 00-4.57 4.53v2.168" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path clip-rule="evenodd" d="M15.683 22.05h-7.64a3.792 3.792 0 01-3.793-3.792V13.97a3.792 3.792 0 013.792-3.792h7.641a3.792 3.792 0 013.792 3.792v4.29a3.792 3.792 0 01-3.792 3.791z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.863 15.004v2.22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>

            <div class="field">
                <input type="password" name="rpassword" id="email" required autocomplete="off">
                <label for="rpassword">Repeat Password</label>
                <svg viewBox="0 0 24 25" fill="none" focusable="false" class="chakra-icon css-1ouhgs0"><path d="M16.423 10.249V8.102a4.552 4.552 0 00-4.55-4.551 4.55 4.55 0 00-4.57 4.53v2.168" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path clip-rule="evenodd" d="M15.683 22.05h-7.64a3.792 3.792 0 01-3.793-3.792V13.97a3.792 3.792 0 013.792-3.792h7.641a3.792 3.792 0 013.792 3.792v4.29a3.792 3.792 0 01-3.792 3.791z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11.863 15.004v2.22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </div>
            
            <button type="submit">SIGNUP</button>
        </form>
    </div>
    <div class="login-right">
        <img src="./img/login.png" alt="login">
        <p>Creating an account makes shopping with us a breeze! </p>
    </div>
</div>
