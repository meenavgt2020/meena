<style>
#title{
  background-color: #F4F6F7;
  font-size: 20;
}
h1{
  color: blue;
  font-family: sans-serif;
  text-align: center;
}
h4{
text-align: center;
}
#Survey-form{
margin-left:10px;
margin-right:10px;
background-color: #D7BDE2;
font-size: 30;
text-align: center;
}

</style>
<html>
<div id="title">
  <h1>Form</h1>
<body>
<div id="description">
  <h4 text-align: "center">Suggestions to improve our Game "games.com"</h4>
</div>
  <form id="Survey-form" method="POST" action="2nd.php">
<table width="450px">
<tr>
<td>
    <div id="label-name">
    <label>Name:</label>
</td>
<td>
    <input type="text" id="name" placeholder="type your name" name="Name" maxlength="50px" pattern="[a-zA-Z]*" size="30px" required="required" />
    </td>
</tr>
</div>
<tr><td>
    <div id="label-email">
    <label>Email-id:</label></td>
<td>
    <input type="text" id="email" name="mail" placeholder="type your mail-id" maxlength="50px" size="30px" required="required" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"/></td>
</tr>
    </div>
<tr><td>
    <div id="label-name">
    <label>Register-id:</label></td><td>
    <input type="number" id="number" name="register" placeholder="" min="001" max="100" required="required" />
    </td></tr>
  </div>
<tr><td>
    <div id="age">
      what is your age: </td>
      <td>
<select id="dropdown" name="age">
        <option disabled value>select any one</option>
        <option value="below-10">below 10</option>
        <option value="10-15">10-15</option>
        <option value="16-25">16-25</option>
        <option value="26-35">26-35</option>
        <option value="36-50">36-50</option>
        <option value="others">others</option>
</select>
      </td>
</tr>
    </div> 
<tr><td>
    <div id="buttons">
      <p>tell your gender:</p></td>
    <td>
<input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other 
    </div></td></tr>
    <tr><td>
<div id="games">
      what game do you like most? </td>
      <td>
<select id="dropdown" name="games">
        <option disabled value>select any one</option>
        <option value="car">car</option>
        <option value="bike">bike</option>
        <option value="puzzles">puzzles</option>
         <option value="funny-play">funny-play</option>
        <option value="others">others</option>
        </div></td></tr>
      <tr><td>
      <div id="rating">
        <br><p>Give a rating:</p></td>
<td><fieldset>
        <input type="checkbox" name="rating" value="it's good">it's good <br>
        <input type="checkbox" name="rating" value="very good">very-good <br>
        <input type="checkbox" name="rating" value="excellent">excellent<br>
        <input type="checkbox" name="rating" value="it's bad">bad<br>
        <input type="checkbox" name="rating" value="very-bad">very-bad
</fieldset>
      </div></td></tr>
       <div id="text-area">
<tr><td>
    <label>Give your suggestion:</label></td>
<td>
    <textarea name="textarea1" placeholder="type something" maxlength="1000" cols="25" rows="5" required="required"></textarea>
</td>
</tr>
</div>


<tr><td colspan="2" style="text-align:center">         
<button id="submit" type="submit" name="submit">Submit</button>        
<button id="reset" type="reset">Reset</button>
  </td></tr>


</table>
</form>
</body>
  </div>
