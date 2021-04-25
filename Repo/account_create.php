<style>
body { background-color: black ;color:white;}
h1 { color:red; padding-left:10px }
nav.horiz ul{margin: 0; padding:0; color: red}
nav.horiz ul li {float:left; padding: 5px 10px; list-style:none; text-align: bottom; font-size: 24px}
table, th, td {
    border: 1px solid white;
	color: white;
}
a { color: red;}
</style>

<div class="container">
    <form method="post" action="insert.php">

            <h1>Account Create</h1>

                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
				<input type="hidden" name="page" value="create">
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
    </form>
</div>
