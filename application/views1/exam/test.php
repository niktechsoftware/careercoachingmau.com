<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/quiz/css/mock_style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/quiz/css/number_style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/quiz/css/keyboard_style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/quiz/css/jquery.alerts.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/quiz/css/aecInstructions.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/quiz/css/codemirror.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/quiz/css/calc.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/quiz/css/calc.min.css">
	<script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/json2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/top.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/oscZeno.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/oscZeno.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/jquery.corner.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/jquery.caret.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/virtual_keyboard.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/jquery.actual.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/typing.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/restrictedTyping.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/codemirror.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/javascript.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/active-line.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/quiz/js/matchbrackets.js"></script>
	<title>Assessment Exam Center</title>
	<style>
		#usefulData:hover{ text-decoration:underline; }
		#restrictedInstr td, #unrestrictedInstr td{vertical-align:top}
	</style>
	<script>
		$(document).ready(function(){
			disable_scroll();
		});
		window.onresize = function(event) {
			quizPageHeight();
		}
		checkVersion();
		$('a').mousedown(function(event){
			avoidKeyPressing(event);
		});
		var editor;
	</script>
</head>
<body onload="quizPageHeight();timer();getCandIdFromCookie();loadLabel();" onselectstart="return false;" ondragstart="return false;">
	<div id="container">
	<div id="pWait" style="height: 100%; width: 100%; z-index: 1999; position: absolute; opacity: 0.4; display: none; background: grey;">
		<div style="top:45%;position:relative;color:white">
			<center><img src="images/loading.gif" style="height:50px;width:50px;display:block;"><br><h2>Please wait</h2></center>
		</div>
	</div>
	<div id="header">
		  <table width="100%" cellspacing="0" cellpadding="0" border="0">
			<tbody>
			  <tr>
				<td align="center" id="bannerImage"><div style="margin-top:10px"><font size="4" color="#ffffff"><b>Online Assessment Mock Test</b></font></div></td>
			  </tr>
			</tbody>
		  </table>
	</div>
	<div id="questionContent">
		<div id="mainleft" style="height: 587px;">
		<div id="groups" style="width:99%;float:left;"></div>
		<div id="sectionsField">
		<fieldset><legend><span class="sect">Section</span><span id="showOptionalSecSummary" style="display:none">[Attempt any <span id="maxOptSec"></span>&nbsp;of the <span id="noOptSec"></span>&nbsp;optional sections]</span> </legend>
		<div id="sections"><table width="100%"><tbody><tr><td><div class="allSections currentSectionSelected" id="s1"><a href="#" class="tooltip tooltipSelected"><div style="text-overflow:ellipsis;width:90%;overflow:hidden;white-space:nowrap;padding-left:10px;cursor:pointer">General Awareness</div><span class="classic"><center><table width="95%" style="font-size:14px;margin-top:10px" class="question_area" cellspacing="0"><tbody><tr><td colspan="2"><b>General Awareness</b></td></tr><tr><td colspan="2"><hr></td></tr></tbody></table><table width="95%" style="margin-top:0%" class="question_area" cellspacing="5"><tbody><tr><td style="text-align:left;padding-top:10px" width="80%">Answered: </td><td valign="top"><span id="tooltip_answered">0</span></td></tr><tr><td style="text-align:left;padding-top:10px" width="80%">Not Answered: </td><td valign="top"><span id="tooltip_not_answered">1</span></td></tr><tr><td style="text-align:left;padding-top:10px" width="80%">Marked for Review: </td><td valign="top"><span id="tooltip_review">0</span></td></tr><tr><td style="text-align:left;padding-top:10px" width="80%">Not Visited: </td><td valign="top"><span id="tooltip_not_visited">49</span></td></tr></tbody></table></center></span></a></div></td></tr></tbody></table></div>
		</fieldset>
		</div>
		<div id="instructionsDiv" style="height: 525px;">
			<div style="height:90%;overflow:auto;border: 2px #ccc solid">
				<center><span><b><font size="4em" color="#2F72B7" id="sysInstruLabel">Instructions</font></b></span></center>
				<div id="firstPage" style="padding:2px">
					<span style="float: right;"><span class="viewIn">View in :</span><select id="basInst" onchange="changeSysInst(this.value,'sysInstText')"><option value="sysInstText1">English</option><option value="sysInstText2">Hindi</option></select></span>
					<br>
					<br>
				<div id="sysInstText1" style=""><p align="center"><strong><span><b>Please read the following instructions carefully</b></span></strong></p>
<p><strong><u>General Instructions:</u></strong> <br></p>
<ol>
<li>Total of 30 minutes duration will be given to attempt all the questions</li>
<li>The clock has been set at the server and the countdown timer at the top right corner of your screen will display the time remaining for you to complete the exam. When the clock runs out the exam ends by default - you are not required to end or submit your exam. </li>
<li>The question palette at the right of screen shows one of the following statuses of each of the questions numbered: 
<table>
<tbody>
<tr>
<td valign="top"><span style="PADDING-TOP: 5px" id="tooltip_not_visited">1</span></td>
<td>You have not visited the question yet.</td></tr></tbody></table>
<table>
<tbody>
<tr>
<td valign="top"><span style="PADDING-TOP: 5px" id="tooltip_not_answered">3</span></td>
<td>You have not answered the question.</td></tr></tbody></table>
<table>
<tbody>
<tr>
<td valign="top"><span style="PADDING-TOP: 5px" id="tooltip_answered">5</span></td>
<td>You have answered the question. </td></tr></tbody></table>
<table>
<tbody>
<tr>
<td valign="top"><span style="PADDING-TOP: 5px" id="tooltip_review">7</span></td>
<td>You have NOT answered the question but have marked the question for review.</td></tr></tbody></table>
<table>
<tbody>
<tr>
<td valign="top"><span style="PADDING-TOP: 12px" id="tooltip_reviewanswered">&nbsp;&nbsp;&nbsp; 9</span></td>
<td>You have answered the question but marked it for review. </td></tr></tbody></table></li>
<li style="LIST-STYLE-TYPE: none">The Marked for Review status simply acts as a reminder that you have set to look at the question again. <font color="red"><i>If an answer is selected for a question that is Marked for Review, the answer will be considered in the final evaluation.</i></font></li></ol>
<p><br><b><u>Navigating to a question : </u></b></p>
<ol start="4">
<li>To select a question to answer, you can do one of the following: 
<ol type="a">
<li>Click on the question number on the question palette at the right of your screen to go to that numbered question directly. Note that using this option does NOT save your answer to the current question. </li>
<li>Click on Save and Next to save answer to current question and to go to the next question in sequence.</li>
<li>Click on Mark for Review and Next to save answer to current question, mark it for review, and to go to the next question in sequence.</li></ol></li>
<li>You can view the entire paper by clicking on the <b>Question Paper</b> button.</li></ol>
<p><br><b><u>Answering questions : </u></b></p>
<ol start="6">
<li>For multiple choice type question : 
<ol type="a">
<li>To select your answer, click on one of the option buttons</li>
<li>To change your answer, click the another desired option button</li>
<li>To save your answer, you MUST click on <b>Save &amp; Next</b> </li>
<li>To deselect a chosen answer, click on the chosen option again or click on the <b>Clear Response</b> button.</li>
<li>To mark a question for review click on <b>Mark for Review &amp; Next</b>. <font color="red"><i>If an answer is selected for a question that is Marked for Review, the answer will be considered in the final evaluation. </i></font></li></ol></li>
<li>To change an answer to a question, first select the question and then click on the new answer option followed by a click on the <b>Save &amp; Next</b> button.</li>
<li>Questions that are saved or marked for review after answering will ONLY be considered for evaluation.</li></ol>
<p><br><b><u>Navigating through sections : </u></b></p>
<ol start="9">
<li>Sections in this question paper are displayed on the top bar of the screen. Questions in a section can be viewed by clicking on the section name. The section you are currently viewing is highlighted.</li>
<li>After clicking the <b>Save &amp; Next</b> button on the last question for a section, you will automatically be taken to the first question of the next section. </li>
<li>You can move the mouse cursor over the section names to view the status of the questions for that section. </li>
<li>You can shuffle between sections and questions anytime during the examination as per your convenience. </li></ol></div><div id="sysInstText2" style="display:none;"><p>&nbsp;</p>
<div id="instHindi">
<div>
<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="4">&nbsp; कृपया निम्नलिखित निर्देशों को ध्यान से पढ़ें </font><br><b><u>सामान्य अनुदेश</u></b> <br></h5></div>
<ol style="TEXT-ALIGN: left; LIST-STYLE-TYPE: decimal; PADDING-LEFT: 4%; PADDING-TOP: 3px">
<li>सभी प्रश्नों को हल करने के लिए आपको <b>30 </b>मिनट का समय दिया जाएगा। </li>
<li>सर्वर पर घड़ी लगाई गई है तथा आपकी स्क्रीन के दाहिने कोने में शीर्ष पर काउंटडाउन टाइमर में आपके लिए परीक्षा समाप्त करने के लिए शेष समय प्रदर्शित होगा। परीक्षा समय समाप्त होने पर, आपको अपनी परीक्षा बंद या जमा करने की जरूरत नहीं है । यह स्वतः बंद या जमा हो जाएगी। </li>
<li>स्क्रीन के दाहिने कोने पर प्रश्न पैलेट, नंबर दिए प्रत्येक प्रश्न के लिए निम्न में से कोई एक स्थिति प्रकट करती है: 
<table style="FONT-SIZE: 100%" class="instruction_area">
<tbody>
<tr>
<td><span class="not_visited" title="Not Visited">1</span></td>
<td>आप अभी तक प्रश्न पर नहीं गए हैं। </td></tr>
<tr>
<td><span class="not_answered" title="Not Answered">3</span></td>
<td>आपने प्रश्न का उत्तर नहीं दिया है। </td></tr>
<tr>
<td><span class="answered" title="Answered">5</span></td>
<td>आप प्रश्न का उत्तर दे चुके हैं। </td></tr>
<tr>
<td><span class="review" title="Not Answered &amp; Mark for Review">7</span></td>
<td>आपने प्रश्न का उत्तर नहीं दिया है पर प्रश्न को पुनर्विचार के लिए चिन्हित किया है। </td></tr>
<tr>
<td><span class="review_answered" title="Answered &amp; Mark for Review">9</span></td>
<td>आप प्रश्न का उत्तर दे चुकें हैं पर प्रश्न को पुनर्विचार के लिए चिन्हित किया है। </td></tr></tbody></table></li>
<li style="LIST-STYLE-TYPE: none">पुनर्विचार के लिए चिन्हित स्थिति सामान्यत अनुस्मारक के रूप में कार्य करती है जोकि आपने प्रश्न को दुबारा देखने के लिए सेट किया है। <font color="red"><i>दि किसी प्रश्न के लिए उत्तर चुना हो जोकि पुनर्विचार के लिए चिन्हित किया है, तब अंतिम मूल्यांकन में उस उत्तर पर ध्यान दिया जाएगा।</i></font> </li></ol><br><b><u>किसी प्रश्न पर जाना : </u></b>
<ol style="TEXT-ALIGN: left; LIST-STYLE-TYPE: decimal; PADDING-LEFT: 4%; PADDING-TOP: 3px" start="4">
<li>उत्तर देने हेतु कोई प्रश्न चुनने के लिए, आप निम्न में से कोई एक कार्य कर सकते हैं: 
<ol style="TEXT-ALIGN: left; PADDING-LEFT: 4%; PADDING-TOP: 3px" type="a">
<li>स्क्रीन के दांयी ओर प्रश्न पट्टिका में प्रश्न पर सीधे जाने के लिए प्रश्न संख्या पर क्लिक करें। ध्यान दें कि इस विकल्प का प्रयोग करने से मौजूदा प्रश्न के लिए आपका उत्तर सुरक्षित नहीं होता है। </li>
<li>वर्तमान प्रश्न का उत्तर सुरक्षित करने के लिए और क्रम में अगले प्रश्न पर जाने के लिए<b> Save and Next</b> पर क्लिक करें। </li>
<li>वर्तमान प्रश्न का उत्तर सुरक्षित करने के लिए, पुनर्विचार के लिए चिन्हित करने और क्रम में अगले प्रश्न पर जाने के लिए <b>Mark for Review and Next</b> पर क्लिक करें। </li></ol></li>
<li>आप <b>Question Paper</b> बटन पर क्लिक करके संपूर्ण प्रश्नपत्र को देख सकते हैं। </li></ol><br><b><u>प्रश्नों का उत्तर देना : </u></b>
<ol style="TEXT-ALIGN: left; LIST-STYLE-TYPE: decimal; PADDING-LEFT: 4%; PADDING-TOP: 3px" start="6">
<li>बहुविकल्प प्रकार प्रश्न के लिए 
<ol style="TEXT-ALIGN: left; PADDING-LEFT: 4%; PADDING-TOP: 3px" type="a">
<li>अपना उत्तर चुनने के लिए, विकल्प बटनों में से किसी एक पर क्लिक करें। </li>
<li>अपना उत्तर बदलने के लिए, अन्य वांछित विकल्प बटन पर क्लिक करें। </li>
<li>अपना उत्तर सुरक्षित करने के लिए, आपको <b>Save &amp; Next</b> पर क्लिक करना जरूरी है। </li>
<li>चयनित उत्तर को अचयनित करने के लिए, चयनित विकल्प पर दुबारा क्लिक करें या <b>Clear Response</b> बटन पर क्लिक करें। </li>
<li>किसी प्रश्न को पुनर्विचार के लिए चिन्हित करने हेतु <b>Mark for Review &amp; Next</b> पर क्लिक करें। <font color="red"><i>यदि किसी प्रश्न के लिए उत्तर चुना हो जोकि पुनर्विचार के लिए चिन्हित किया है, तब अंतिम मूल्यांकन में उस उत्तर पर ध्यान दिया जाएगा। </i></font></li></ol></li>
<li>किसी प्रश्न का उत्तर बदलने के लिए, पहले प्रश्न का चयन करें, फिर नए उत्तर विकल्प पर क्लिक करने के बाद <b>Save &amp; Next</b> बटन पर क्लिक करें। </li>
<li>उत्तर देने के बाद जो प्रश्न सुरक्षित हैं या पुनर्विचार के लिए चिन्हित है, सिर्फ उन पर ही मूल्यांकन के लिए ध्यान दिया जाएगा। </li></ol><br><b><u>खंडों द्वारा प्रश्न पर जाना: </u></b>
<ol style="TEXT-ALIGN: left; LIST-STYLE-TYPE: decimal; PADDING-LEFT: 4%; PADDING-TOP: 3px" start="9">
<li>इस प्रश्नपत्र में स्क्रीन के शीर्ष बार पर खंड प्रदर्शित होते हैं। किसी खंड में प्रश्न, खंड नाम पर क्लिक करके देखे जा सकते हैं। आप वर्तमान में जिस खंड का उत्तर दे रहे हैं, वह प्रकाशमान होगा। </li>
<li>किसी खंड के लिए अंतिम प्रश्न के <b>Save &amp; Next</b> बटन पर क्लिक करने के बाद, आप स्वचालित रूप से अगले खंड के प्रथम प्रश्न पर पहुंच जाओगे। </li>
<li>आप उस खंड के लिए प्रश्नों की स्थिति को देखने हेतु खंड नाम के ऊपर माउस कर्सर मूव कर सकते हो। </li>
<li>आप परीक्षा के दौरान किसी भी समय खंडों और प्रश्नों के बीच अपनी सुविधा के अनुसार फेरबदल कर सकते हो। </li></ol></div></div></div>
				<br>
				<br>
				<center><span><b><font size="4em" color="#2F72B7" id="otherInstruLabel">Other Important Instructions</font></b></span></center>
				<div id="secondPagep1" style="padding:2px">
					<span style="float: right;"><span class="viewIn">View in :</span><select id="cusInst" onchange="changeSysInst(this.value,'cusInstText')"><option value="cusInstText1">English</option><option value="cusInstText2">Hindi</option></select></span>
					<br>
					<br>
				<div id="cusInstText1" style=""><ol>
<li>This is a Mock test. The Question paper displayed is for practice purposes only. Under no circumstances should this be presumed as a sample paper.</li></ol></div><div id="cusInstText2" style="display:none;"><ol><li>This is a Mock test. The Question paper displayed is for practice purposes only. Under no circumstances should this be presumed as a sample paper.</li></ol></div></div>
			</div>
			<div style="width:100%">
				<center><input type="button" class="button back" value="Back" onclick="changeQues(iOAP.curQues);removeActiveLinks()"></center>
			</div>
		</div>
			<div id="profileDiv" style="height: 525px;">
				<center>
					<font size="4em"><b id="profileDetails">Candidate Details</b></font>
					<br>
					<table style="border-bottom: #000 1px solid; border-left: #000 1px solid; font-size: 14px; border-top: #000 1px solid; border-right: #000 1px solid;">
						<tbody><tr><td><b><span id="loginName">Roll No</span></b></td><td><b> : </b>11111</td></tr>
						<tr><td><b id="candName">Name</b></td><td><b> : </b><span class="candOriginalName">John Smith</span></td></tr>
						<tr><td><b id="candDateOfBirth">Date of Birth (DD-MM-YYYY)</b></td><td><b> : </b>22-05-1988 </td></tr>
						<tr><td id="emailIdText"><b>Email ID</b></td><td id="emailId"><b> : </b>somebody@gmail.com </td></tr>
						<tr><td id="contactNoText"><b>Contact No</b></td><td id="contactNo"><b> : </b>9999999999</td></tr>
					</tbody></table>
					<br>
					<div id="multilingualDropdown" style="display:none">
						<span class="cngLang">Change Language :</span>
						<span>
							<select id="languageSelect" onchange="selLang(this.value);"></select>
						</span>
					</div>
					<br>
				</center>
				<div style="width:100%">
					<center><input type="button" class="button back" value="Back" onclick="changeQues(iOAP.curQues);removeActiveLinks()"></center>
				</div>
			</div>
			<div id="QPDiv" style="height: 525px;">
				<div id="viewQPDiv" style="height:90%;overflow:auto">
				</div>
				<div style="width:100%">
					<center><input type="button" class="button back" value="Back" onclick="changeQues(iOAP.curQues);removeActiveLinks()"></center>
				</div>
			</div>
			
			<div id="questionCont" style="height: 525px;">
				<div id="currentQues" style="height: 483px; overflow: auto;"><div style="height: 481px; width: 100%; overflow: auto;" id="quesOuterDiv"><div id="quesNumberDiv" style="height:6%;border-bottom:1px solid #000000;margin:5px;"><div style="float : left;width:49%;font-size:1em;font-family:Arial,verdana,helvetica,sans-serif"><b>Question No. 1</b></div><div style="width:49%;float:right;"><div style="float:right"> <b>View in :</b> <select onchange="changeLang(this.value)"> <option value="1">English</option><option selected="selected" value="2">Hindi</option></select></div></div></div><div id="quesAnsContent" style="height: 439px; overflow: auto;"><div style="width:99%;margin-left:5px;font-family:Arial,verdana,helvetica,sans-serif;padding-bottom:10px;"> श्री डोनाल्ड रम्सफेल्ड, _____ थे ।</div><div style="width:100%;font-family:Arial,verdana,helvetica,sans-serif;margin-top:5px;"><table><tbody><tr><td><input type="radio" onmousedown="this.check = this.checked" onclick="if (this.check) this.checked = false" class="answer" name="answers" value="1"> </td><td style="font-family:Arial,verdana,helvetica,sans-serif;padding-right:60px">ब्रिटेन के विदेश मंत्री </td></tr><tr><td><input type="radio" onmousedown="this.check = this.checked" onclick="if (this.check) this.checked = false" class="answer" name="answers" value="2"> </td><td style="font-family:Arial,verdana,helvetica,sans-serif;padding-right:60px">U. S. A. के विदेश सचिव </td></tr><tr><td><input type="radio" onmousedown="this.check = this.checked" onclick="if (this.check) this.checked = false" class="answer" name="answers" value="3"> </td><td style="font-family:Arial,verdana,helvetica,sans-serif;padding-right:60px">फ्रांस के विदेश मंत्री </td></tr><tr><td><input type="radio" onmousedown="this.check = this.checked" onclick="if (this.check) this.checked = false" class="answer" name="answers" value="4"> </td><td style="font-family:Arial,verdana,helvetica,sans-serif;padding-right:60px">फ्रांस के उप प्रधानमंत्री </td></tr><tr><td><input type="radio" onmousedown="this.check = this.checked" onclick="if (this.check) this.checked = false" class="answer" name="answers" value="5"> </td><td style="font-family:Arial,verdana,helvetica,sans-serif;padding-right:60px">इनमें से कोई नहीं </td></tr></tbody></table></div></div></div></div>
				
				<div id="actionButton" style="width:99%;margin-left:1%;margin:5px;">
					<div style="float:left"><input type="button" onclick="compileCode();" id="compileCodeBtn" class="progrmngBtn button actionBn" value="Compile" style="display:none"></div>
					<div style="float:left"><input type="button" onclick="executeCode();" id="submitCodeBtn" class="progrmngBtn button btnEnabled" value="Submit Code" style="display:none"></div>
					<div style="float:right"><input type="button" id="saveProgram" onclick="fnSubmit('NEXT')" class="progrmngBtn button actionBn" value="Save &amp; Next" style="display: none;"></div>
					<div style="float:left"><input type="button" onclick="fnSubmit('MARK')" id="underreview" class="normalBtn button actionBn" value="Mark for Review &amp; Next"></div>
					<!--<span style="float:left"><input type="button" onclick = "fnSubmit('SKIP')" class="button actionBn" value="Skip"/></span>-->
					<div style="float:left"><input type="button" id="clearResponse" onclick="resetOption()" class="normalBtn button actionBn" value="Clear Response"></div>
					<div style="float:right"><input type="button" id="savenext" onclick="fnSubmit('NEXT')" class="normalBtn button btnEnabled" value="Save &amp; Next"></div>
					<div class="clear"></div>
				</div> 
			</div>
			<div id="sectionSummaryDiv" style="height: 525px;">
			</div>
		</div>
		<div id="mainright" style="height: 587px;">
			<div id="timer" style="height:90px">
				<div id="timerLeftSideDiv" style="width:50%;float:left;padding-top:7px;padding-bottom:7px;">
					<div id="candImg" style="height:50px;"><center><img id="candidateImg" height="50px" width="70px" src="images/NewCandidateImage.jpg"></center></div>
					<div id="usefulDataDivLeft" style="display:none;height:25px;float:right;position:relative;"><a class="blueBtn" href="#" onclick="showHelpContent(event);"><span>Useful Data</span></a></div>
				</div>
				<div id="timerRightSideDiv" style="width:50%;float:left;;padding-top:7px;padding-bottom:7px;">
					<div style="height:50px;">
						<div style="padding-top:8px;width:100%;" id="showTime"><b>Time Left :<span id="timeInMins">22:27</span></b></div>
						<div style="width:100%"><i id="candidateName" class="candOriginalName">John Smith</i></div>
					</div>
					<div id="usefulDataDivRight" style="display:none;"><a class="blueBtn" href="#" onclick="showHelpContent(event);"><span>Useful Data</span></a></div>
					<div id="showCalc" style="display:none;height:25px;padding-left:5px;float:left;position:relative;"><a class="blueBtn" href="#" onclick="loadCalculator()"><span>Calculator</span></a></div>
				</div>
				<!--<div style="width:auto">
					<a id="usefulDataLink" style="display:none;" class="blueBtn" href="#" onclick="showHelpContent(event);"><span>Useful Data</span></a>
					<a id="showCalc" style="display:none;" class="blueBtn" href="#" onclick="loadCalculator()"><span>Calculator</span></a>
					<div class="clear"></div>
				</div>-->
			</div>
			<div id="loadCalc" style="display:none;position:fixed;z-index:999;float:left;padding-top:1%;right:20px;top:120px;"></div>
			<div class="numberpanel" style="height: 497px;">
				<div id="viewSection"> <span id="viewingSect">You are viewing</span>&nbsp;<b>General Awareness</b>&nbsp;<span class="sect">Section</span>
				</div>
				<div id="quesPallet" style="height:5%;margin-left:5px">Question Palette</div>
				<div id="numberpanelQues" style="height: 258px;"><center><table style="margin-top:-2%;" cellspacing="0" class="question_area " cellpadding="0" border="0" valign="top"><tbody><tr></tr><tr><td id="qtd1"><span title="Not Answered" class="not_answered" id="1" onclick="javascript:changeQues(1);"> 1</span></td><td id="qtd2"><span title="Not Visited" class="not_visited" id="2" onclick="javascript:changeQues(2);"> 2</span></td><td id="qtd3"><span title="Not Visited" class="not_visited" id="3" onclick="javascript:changeQues(3);"> 3</span></td><td id="qtd4"><span title="Not Visited" class="not_visited" id="4" onclick="javascript:changeQues(4);"> 4</span></td></tr><tr><td id="qtd5"><span title="Not Visited" class="not_visited" id="5" onclick="javascript:changeQues(5);"> 5</span></td><td id="qtd6"><span title="Not Visited" class="not_visited" id="6" onclick="javascript:changeQues(6);"> 6</span></td><td id="qtd7"><span title="Not Visited" class="not_visited" id="7" onclick="javascript:changeQues(7);"> 7</span></td><td id="qtd8"><span title="Not Visited" class="not_visited" id="8" onclick="javascript:changeQues(8);"> 8</span></td></tr><tr><td id="qtd9"><span title="Not Visited" class="not_visited" id="9" onclick="javascript:changeQues(9);"> 9</span></td><td id="qtd10"><span title="Not Visited" class="not_visited" id="10" onclick="javascript:changeQues(10);"> 10</span></td><td id="qtd11"><span title="Not Visited" class="not_visited" id="11" onclick="javascript:changeQues(11);"> 11</span></td><td id="qtd12"><span title="Not Visited" class="not_visited" id="12" onclick="javascript:changeQues(12);"> 12</span></td></tr><tr><td id="qtd13"><span title="Not Visited" class="not_visited" id="13" onclick="javascript:changeQues(13);"> 13</span></td><td id="qtd14"><span title="Not Visited" class="not_visited" id="14" onclick="javascript:changeQues(14);"> 14</span></td><td id="qtd15"><span title="Not Visited" class="not_visited" id="15" onclick="javascript:changeQues(15);"> 15</span></td><td id="qtd16"><span title="Not Visited" class="not_visited" id="16" onclick="javascript:changeQues(16);"> 16</span></td></tr><tr><td id="qtd17"><span title="Not Visited" class="not_visited" id="17" onclick="javascript:changeQues(17);"> 17</span></td><td id="qtd18"><span title="Not Visited" class="not_visited" id="18" onclick="javascript:changeQues(18);"> 18</span></td><td id="qtd19"><span title="Not Visited" class="not_visited" id="19" onclick="javascript:changeQues(19);"> 19</span></td><td id="qtd20"><span title="Not Visited" class="not_visited" id="20" onclick="javascript:changeQues(20);"> 20</span></td></tr><tr><td id="qtd21"><span title="Not Visited" class="not_visited" id="21" onclick="javascript:changeQues(21);"> 21</span></td><td id="qtd22"><span title="Not Visited" class="not_visited" id="22" onclick="javascript:changeQues(22);"> 22</span></td><td id="qtd23"><span title="Not Visited" class="not_visited" id="23" onclick="javascript:changeQues(23);"> 23</span></td><td id="qtd24"><span title="Not Visited" class="not_visited" id="24" onclick="javascript:changeQues(24);"> 24</span></td></tr><tr><td id="qtd25"><span title="Not Visited" class="not_visited" id="25" onclick="javascript:changeQues(25);"> 25</span></td><td id="qtd26"><span title="Not Visited" class="not_visited" id="26" onclick="javascript:changeQues(26);"> 26</span></td><td id="qtd27"><span title="Not Visited" class="not_visited" id="27" onclick="javascript:changeQues(27);"> 27</span></td><td id="qtd28"><span title="Not Visited" class="not_visited" id="28" onclick="javascript:changeQues(28);"> 28</span></td></tr><tr><td id="qtd29"><span title="Not Visited" class="not_visited" id="29" onclick="javascript:changeQues(29);"> 29</span></td><td id="qtd30"><span title="Not Visited" class="not_visited" id="30" onclick="javascript:changeQues(30);"> 30</span></td><td id="qtd31"><span title="Not Visited" class="not_visited" id="31" onclick="javascript:changeQues(31);"> 31</span></td><td id="qtd32"><span title="Not Visited" class="not_visited" id="32" onclick="javascript:changeQues(32);"> 32</span></td></tr><tr><td id="qtd33"><span title="Not Visited" class="not_visited" id="33" onclick="javascript:changeQues(33);"> 33</span></td><td id="qtd34"><span title="Not Visited" class="not_visited" id="34" onclick="javascript:changeQues(34);"> 34</span></td><td id="qtd35"><span title="Not Visited" class="not_visited" id="35" onclick="javascript:changeQues(35);"> 35</span></td><td id="qtd36"><span title="Not Visited" class="not_visited" id="36" onclick="javascript:changeQues(36);"> 36</span></td></tr><tr><td id="qtd37"><span title="Not Visited" class="not_visited" id="37" onclick="javascript:changeQues(37);"> 37</span></td><td id="qtd38"><span title="Not Visited" class="not_visited" id="38" onclick="javascript:changeQues(38);"> 38</span></td><td id="qtd39"><span title="Not Visited" class="not_visited" id="39" onclick="javascript:changeQues(39);"> 39</span></td><td id="qtd40"><span title="Not Visited" class="not_visited" id="40" onclick="javascript:changeQues(40);"> 40</span></td></tr><tr><td id="qtd41"><span title="Not Visited" class="not_visited" id="41" onclick="javascript:changeQues(41);"> 41</span></td><td id="qtd42"><span title="Not Visited" class="not_visited" id="42" onclick="javascript:changeQues(42);"> 42</span></td><td id="qtd43"><span title="Not Visited" class="not_visited" id="43" onclick="javascript:changeQues(43);"> 43</span></td><td id="qtd44"><span title="Not Visited" class="not_visited" id="44" onclick="javascript:changeQues(44);"> 44</span></td></tr><tr><td id="qtd45"><span title="Not Visited" class="not_visited" id="45" onclick="javascript:changeQues(45);"> 45</span></td><td id="qtd46"><span title="Not Visited" class="not_visited" id="46" onclick="javascript:changeQues(46);"> 46</span></td><td id="qtd47"><span title="Not Visited" class="not_visited" id="47" onclick="javascript:changeQues(47);"> 47</span></td><td id="qtd48"><span title="Not Visited" class="not_visited" id="48" onclick="javascript:changeQues(48);"> 48</span></td></tr><tr><td id="qtd49"><span title="Not Visited" class="not_visited" id="49" onclick="javascript:changeQues(49);"> 49</span></td><td id="qtd50"><span title="Not Visited" class="not_visited" id="50" onclick="javascript:changeQues(50);"> 50</span></td></tr></tbody></table></center></div>
				
				<div id="typingInstDiv" style="display: none; padding: 5px; height: 381px;">
					<div id="dataDisplayDiv" style="display:none"></div>
					<div class="question_area1">
						
					<!--	Correct Word Count : <span id="correctWordCount"></span>
						<br/>
						Wrong Word Count : <span id="wrongWordCount"></span>
						<br/>-->
						<table style="width:100%">
							<tbody><tr><td id="keyStrokesCountTd">Keystrokes Count</td><td>:</td><td id="totalKeyStrokesCount"></td></tr>
							<tr><td id="backspaceCountTd">Backspace Count</td><td>:</td><td id="backSpaceCount"></td></tr>
							<tr id="errorCount" style="display:none"><td id="errorCountTd">Error Count</td><td>:</td><td id="errorCountValue"></td></tr>
							<tr><td id="totalWordCount">Total Word Count</td><td>:</td><td id="totalWordCountVal"></td></tr>
							<tr><td id="typedWordCount">Typed Word Count</td><td>:</td><td id="typedWordCountVal"></td></tr>
							<tr><td id="remainingWordCount">Pending Word Count</td><td>:</td><td id="remainingWordCountVal"></td></tr>
						</tbody></table><br>
						<span id="typingInstruSpan"><b>Instructions</b></span>
						<table id="restrictedInstr" style="display:none;margin-top:10px">
							<tbody><tr><td><b>1.</b></td><td>&nbsp;</td><td id="resInstru1">Type the highlighted character to proceed further.</td></tr>
							<tr><td><b>2.</b></td><td>&nbsp;</td><td id="resInstru2">You cannot edit the typed text.</td></tr>
							<tr><td><b>3.</b></td><td>&nbsp;</td><td id="resInstru3">You are not allowed to submit before typing the entire text.</td></tr>
							<tr><td><b>4.</b></td><td>&nbsp;</td><td id="resInstru4">On timeout, your answer will be saved automatically.</td></tr>
						</tbody></table>
						<table id="unrestrictedInstr" style="display:none;margin-top:10px">
							<tbody><tr><td><b>1.</b></td><td>&nbsp;</td><td id="unresInstru1">Type the highlighted word.</td></tr>
							<tr><td><b>2.</b></td><td>&nbsp;</td><td id="unresInstru2">You can edit the typed text.</td></tr>
							<tr><td><b>3.</b></td><td>&nbsp;</td><td id="unresInstru3">Correct/Wrong words turn Green/Red respectively.</td></tr>
							<tr><td><b>4.</b></td><td>&nbsp;</td><td id="unresInstru4">You are not allowed to submit before typing the entire text.</td></tr>
							<tr><td><b>5.</b></td><td>&nbsp;</td><td id="unresInstru5">On timeout, your answer will be saved automatically.</td></tr>
						</tbody></table>
					</div>
				</div>

				<div id="legend" style="margin-left:3px;margin:5px">
					<table width="100%" class="diff_type_notation_area_inner">
						<tbody><tr>
							<td colspan="4"><b><label id="legendLabel">Legend</label></b></td>
						</tr>
						<tr>
							<td><span class="answered">&nbsp;</span></td> <td><label id="answeredLabel">Answered</label></td>
							<td><span class="not_answered">&nbsp;</span></td> <td><label id="notAnsweredLabel">Not Answered</label></td>
						</tr>
						<tr>
							<td><span class="review">&nbsp;</span></td> <td><label id="markedLabel">Marked</label></td>
							<td><span class="not_visited">&nbsp;</span></td> <td><label id="notVisitedLabel">Not Visited</label></td>
						</tr>
					</tbody></table>
					<table width="100%">
						<tbody><tr>
							<td width="50%"><center> <input type="button" id="viewProButton" class="button1" value="Profile" title="View Profile" onclick="showModule('profileDiv');activeLink(this.id)"> </center></td>
							<td width="50%"><center><input type="button" id="viewInstructionsButton" class="button1" value="Instructions" title="View Instructions" onclick="showModule('instructionsDiv');activeLink(this.id)"> </center> </td>
						</tr>
						<tr>
							<td id="viewQPTD"><center> <input id="viewQPButton" type="button" class="button1" value="Question Paper" title="View Entire Question Paper" onclick="showQP();activeLink(this.id)"> </center></td>
							<!--<td><center> <input type="button" class="button" style="width:110px" id="finalSub" onclick="submitConfirmation('submit')" value="Submit" title="Submit Exam" disabled/></center></td>-->
							<td id="submitTD"><center><input type="button" class="button1" id="finalSub" onclick="submitConfirmation('submit');activeLink(this.id)" value="Submit" title="Submit Group" disabled=""></center></td>
						</tr>
					</tbody></table>
				</div>
				<div id="typingSubmit" style="display: none;">
					<table width="100%">
						<tbody><tr><td id="submitTD" width="50%"><center><input type="button" class="typingTestButtonDisabled" id="finalTypingSub" onclick="fnSubmit('NEXT');calculateEllapsedTime();submitConfirmation('submit');activeLink(this.id);" value="Submit" title="Submit Group" disabled=""></center></td></tr>
					</tbody></table>
				</div>
			</div>
		</div>
	</div>
		<div id="breakTimeDiv" style="display: none; height: 587px;" align="center">
			<div id="breakContentDiv">
				<div style="width:100%;padding:10px 0px" id="breakTimeCountDiv">
					<div style="width:100%;" id="breakTimeCounter"> &nbsp;</div>
				</div>
				<div id="breakSummaryDiv" style="height:90%"></div>
			</div>
			<div id="brkPrcdBtnDiv" class="buttonDiv"><input id="proceedToNextGrp" onclick="submitGroup()" type="button" class="button" value="Proceed to Next Group"></div>
			<div class="clear"></div>
		</div>
		<div id="scoreCardDiv" style="display: none; height: 587px;" align="center">
			<div id="scoreSummaryDiv"></div>
			<div class="buttonDiv" id="scoreCardBtnDiv"><input onclick="moveToFeedback();" id="scoreCardPrcdBtn" type="button" class="button" value="Proceed"></div>
			<div class="clear"></div>
		</div>
	</div>
	
	<div id="footer"><div style="width:100%;padding-top:15px;"><center><font color="white"> Version : 10.00.02</font></center></div></div>

</body></html>