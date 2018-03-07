
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Feedback Form</title>
	<script src="feedbackformvalidation.js"></script>
	<script>
	required.add('Name','NOT_EMPTY','Name');
	required.add('Email','EMAIL','Email');
	required.add('Subject','NOT_EMPTY','Subject');
	required.add('Message','NOT_EMPTY','Message');
	required.add('AntiSpam','NOT_EMPTY','Anti-Spam Question');
	
	function checkMessageCount() {
		var maxlen = 1000;
		var len = document.getElementById('Message').value.length;
		document.getElementById('charsleft').innerHTML = 'You have ' + (maxlen - len) + ' characters remaining';
	}

	</script>
	<link rel="stylesheet" type="text/css" href="feedbackform.css">
	</head>
	<body>
<div class="feedback"><div class="feedback-default">
<form accept-charset="utf-8" name="feedbackform" method="post" action="feedbackformprocess.php" onsubmit="return validate.check(this)" align="center">
<table border="0" align="center">
<tr>
 <td colspan="2">
  <h2>Feedback Form</h2>
 
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="Name">Name<span class="required_star"> * </span></label>
 </td>
 <td valign="top">
  <input class="feedback_text" type="text" name="Name" id="Name" maxlength="100" />
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="Email">Email<span class="required_star"> * </span></label>
 </td>
 <td valign="top">
  <input class="feedback_textbig" type="text" name="Email" id="Email" maxlength="100" />
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="Telephone">Telephone</label>
 </td>
 <td valign="top">
  <input class="feedback_text" type="text" name="Telephone" id="Telephone" maxlength="20" />
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="Webpage">Webpage address</label>
 </td>
 <td valign="top">
  <input class="feedback_textbig" type="text" name="Webpage" id="Webpage" maxlength="100" />
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="Subject">Subject<span class="required_star"> * </span></label>
 </td>
 <td valign="top">
  <input class="feedback_text" type="text" name="Subject" value="General Feedback" id="Subject" maxlength="50" />
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="Message">Message<span class="required_star"> * </span></label>
 </td>
 <td valign="top">
  <textarea class="feedback_textarea" name="Message" id="Message" maxlength="1000" onKeyUp="checkMessageCount()" /></textarea>
  <br />
 
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center" >
 
  </div>
 </td>
</tr>
<tr>
 <td colspan="2" align="center">
  <br /><br />
  <input type="text" id="url" name="url" />
  <input type="submit" value="Submit Feedback" id="form_submit_button"  />
  <br /><br />
  
 </td>
</tr>
</table>
</form>
</div></div>
</body>
</html>