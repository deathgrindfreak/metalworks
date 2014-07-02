<?php


// Include the header
$page_title = 'M&euml;talW&ouml;rks: A Forum for All Things Metal!';
include "includes/header.php";


// Print any error messages if they exist
if (isset($errors) && !empty($errors)) {
	echo '<h1>Error!</h1><p class="error">The following errors(s) occurred:<br/>'; 
	
	foreach ($errors as $msg) {
		echo " - $msg<br/>\n";
	}
	
    echo '</p><p>Please try again.</p>'; 
}

// Redirect page if both checkbox and button are set
if (isset($_POST['rules_submit']) && isset($_POST['agree_to_rules'])) {
	header('Location: register.php');
}
    
?>
	
<main id="main_page" style="height: auto">
  <div>
	<div id="center_container" style="height: auto; width: 940px; padding-right: 10px">
        <form action="register_rules.php" method="post">
            <fieldset style="border: 1px solid #ccc">
                <legend><strong>Forum Rules</strong></legend>
                <div id="page">
                    <table cellpadding="0" cellspacing="3" border="0" width="100%">
                        <tr>
                            <td>In order to proceed, you must agree with the following rules:</td>
                        </tr>
                        <tr>
                            <td>
                                <div style="background-color: #ffffff; border:thin inset; padding: 0px 6px 6px 6px; height: 250px; overflow: auto;">
                                    <p>M&euml;talW&ouml;rks values solid contributions, that are both civil and contribute to the community as a whole</p>
                                    <h4 style="font-size: 13px">Post in the Correct Forum</h4>
                                    <p>&bull; Users are expected to read the forum descriptions before posting and post accordingly.</p>
                                    <p>&bull; Users caught repeatedly violating this rule may be disiplined accordingly</p>
                                    <h4 style="font-size: 13px">Be Respectful</h4>
                                    <p>&bull; Please be tolerant and think of others when posting</p>
                                    <p>&bull; Flaming or abusing users will result in an insta-ban</p>
                                    <h4 style="font-size: 13px">Above All, Be Metal</h4>
                                    <p>&bull; This is a Metal forum after all, go post about Lady Gaga somewhere else.</p>
                                </div>
                            </td> 
                        </tr>
                    </table>
                </div>

                <label id="page">
                    <input type="checkbox" name="agree_to_rules" value="agree"/>
                    <strong>I have read, and agree to abide by the rules stated above</strong>
                </label>
            </fieldset>
            <div style="padding-left:445px; margin-top: 6px"><input type="submit" name="rules_submit" value="Register"/></div>
        </form>
	</div>
  </div>
</main>

<?php include "includes/footer.html"; ?>
