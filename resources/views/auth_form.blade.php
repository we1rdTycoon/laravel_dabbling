<style>
body, html {
   height: 100%;
}
body {
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
   text-align: center;
   background-image: -webkit-repeating-radial-gradient(center center, rgba(37, 192, 185,.8), rgba(37, 192, 185,.8) 1px, transparent 1px, transparent 100%);
   background-image: repeating-radial-gradient(center center, rgba(37, 192, 185,.8), rgba(37, 192, 185,.8) 1px, transparent 1px, transparent 100%);
   background-size: 3px 3px;
   font-family: 'Cutive Mono', monospace;
}
.box {
   width: 400px;
   background: #fff;
   padding: 0 30px 20px 30px;
   margin: 0 auto;
}
.box-form {
   display: flex;
   flex-direction: column;
}
.box-form input {
   margin-bottom: 15px;
   border: 2px solid #8ce8e3;
   padding: 15px;
   font-size: 20px;
   font-family: 'Cutive Mono', monospace;
      transition: all .3s ease;
}
.box-form input:focus {
   outline:none;
   border: 2px solid #25c0b9;
}
.box-form button {
   background: #d7fffd;
   border: 2px solid #8ce8e3;
   padding: 15px;
   font-size: 20px;
   font-family: 'Cutive Mono', monospace;
   cursor:pointer;
   transition: all .3s ease;
}
.box-form button:hover {
   background: #8ce8e3;
   border: 2px solid #25c0b9;
}
.box-form a {
   color: #25c0b9;
   text-decoration: none;
   border-bottom: 1px solid transparent;
   transition: all .3s linear;
}
.box-form a:hover {
   border-bottom: 1px solid #25c0b9;
}
h2 {
   font-size: 40px;
}

</style>
<div class="box">
   <h2>Log In</h2>
   <form class="box-form" action="/auth" method = "POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <input type="email" name = "email" placeholder="Email">
      <input type="password" name = "password" placeholder="Password">
      <button type="submit">Log in</button>
      <p><a href="">Forgot your password?</a></p>
   </form>
</div>