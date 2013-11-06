<div class="row">
    <div class="well span4 offset1">
        <form id="commentForm" method="POST" action="/users/p_signup">
          <fieldset>
            <p>
              <label for="cfname">First Name</label>
              <input id="cfname" name="first_name"type="text" required/>
            </p>
            <p>
              <label for="clname">Last Name</label>
              <input id="cfname" name="last_name"type="text" required/>
            </p>
            <p>
              <label for="cemail">E-Mail</label>
              <input id="cemail" type="email" name="email" required/>
            </p>
            <p>
              <label for="cpwd">Password</label>
              <input id="cpwd" type="password" name="password" minlength="3" 
                  type="text" required></input>
            </p>
            <p>
              <input class="submit" type="submit" value="Sign up"/>
            </p>
          </fieldset>
        </form>
    </div>
    <div class="span6 offset1">
        <h2>Sign up to see what all of your friends are posting!</h2>
    </div>
    <script>
        //validator script
        $("#commentForm").validate();
    </script>
</div> <!--/row-->
