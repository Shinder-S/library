{include file="header.tpl"}

<div class="login-box"> 
    <h1>Login Here</h1>
    <form action="validate" method="POST" class="form">
        <label for="loginUser">Email</label>
        <input type="email" required class="" id="loginUser" name="loginUser" placeholder="Enter Email">

        <label for="loginPassword">Password</label>
        <input type="password" required class="" id="loginPassword" name="loginPassword" placeholder="Enter Password">

        <input type="submit" value="LOG IN" class="submit-btn" ></button>


    </form>
</div>
    
 

{include file="footer.tpl"}