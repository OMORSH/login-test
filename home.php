<?php
session_start();

	if(isset($_POST['logout']))
	{	
		session_unset();
		session_destroy();
		header('location:log.php');
	}

	
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>home page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
    	h1{color: red;}
    	h2{color: purple;}
    	h3{color: blue;}
    	h4{color: maroon;}
    </style>
</head>
<body>
<header>

 <br><br>
<nav>
	<a class="nav-brand" href="home"><img src="logo.jpg"></a>
</nav>
<strong>
<a href="Home.html.">Home</a>
<a href="About.html">About</a>
<a href="Services.html">Services</a>
<a href="Contacts.html">Contacts</a>
<a href="Help.html.">Help</a>

</strong>

</header>

<center><h1>HIV MANAGEMENT WEBSITE</h1></center>

<p>This is an HIV management website where you are to learn of everything about HIV/AIDS. HIV is not a death sentence and should not be a cause of fear anymore.Sometimes people living with HIV are described as having AIDS,this is incorrect.You can live long and healthy life with HIV without ever developing AIDS.But only if you know your status.</p>
<p>Treatments now are so good,that with an early dignosis and correct treatment that is taken regularly,the virus can be supressed to such low levels it becomes undetectable so your own health is protected and incredibly,you can't pass it on. </p>
<p>There is a global plan to end AIDS by 2030 and the first part is for everyone to know their HIV status so we all have our part to play.</p>
<center><h2><b><u>HOW HIV/AIDS IS TRANSMITTED</u></b></h2></center>
<p>In recent statistics on people diagonised with HIV/AIDS,it was noted that most of them acquired the killer disease through the following ways:</p>
<li>
<ol>1.<b>Sexual contact</b>.This is mainly through unprotected vaginal or anal sex.It is also possible to contract HIV through unprotected oral sex but the risks however are far lower. </ol>
<ol>2.<b>Using unsterilised equipment</b>.When an individual uses an equipment that is not sterilised he/she is highly susceptible to HIV/AIDS incase it was previously used by an infected person. </ol>
<ol>3.<b>Blood transfusion</b>.In such a case HIV spreads to an individual if he/she receives infected blood from an individual living with HIV/AIDS.However,the medical personnel are advised to conduct thorough screening of blood before blood transfusion. </ol>
<ol>4.<b>Mother to child transmission</b>.Hiv spreads from an infected mother to the child during birth if proper care is not administered during the birth process.Hiv also spreads from an infected mother to the child during breastfeeding. However this only applies if the walls of the mouth of the child are wounded and the chances of them coming into direct contact with the mother's milk very high making the child prone to the virus at an early age. </ol>
<ol>5.<b>Wife inheritance</b>.Though not a common practice nowadays,some communuties still hold the practice of wife inheritence.HIV can be spread through this practice since the husband who died might have died from the virus, leaving the infected wives. Wife inheritence is a major factor since the spread of the virus becomes contagious among the wives.Wife inheritance was a major practice among many communities  and the successive family members susceptible since not much preventive measures were well known in those timesd</ol>
</li>
<br><br>
<center><h3><b><u>EFFECTS OF HIV/AIDS</u></b></h3></center>
HIV/AIDS has brought some major effects to the society creating some big gap among them with those who are not infected and in the society too.These major effects include:
<li>
<ol>1.<b>Stigmatization in the society</b>.This builds lower self-esteem in an individual living with HIV/AIDS.This may shorten his/her life period hence they need a lot of care,protection and love. </ol>
<ol>2.<b>Increases the rate of orphans in the society</b>.This is because these children  loose both parents.The children end up suffering because they end up being negleted by not only the family members but also the ignorant society members and the children in one way end up suffering stigmatization too.</ol>
<ol>3.<b>Reduced workforce</b>.This leads to low Gross Domestic Produce in a country since workers fall sick and become weak as time goes by.Death becomes the ultimate result leading to complete loss. </ol>
<ol>4.<b>Poverty</b>.HIV/AIDS has brought poverty especially to the third world countries since most of the money is spent on import of the drugs, medication and supply of food thus leading to a lower GDP.Poverty also rises in the family when the bread weaner dies due to HIV/AIDS. </ol>
</li>
<br><br>
<center><h4><b><u>MANAGEMENT OF HIV AND AIDS.</u></b></h4></center>
Once one has contracted HIV/AIDS it doesn't mean it is the end. Solutions can either be long term or short term. Both solutions are aimed at meeting the welfare of the individual. Some of the solutions are:
<li>
	<ol>1. Identifying your hobbies and talents, work on them.</ol>
	<ol>2. Utilising your free time by reading useful articles.</ol>
	<ol>3. Socialising by interacting with friends and making new friends to avoid loneliness that could lead to lowered self esteem.</ol>
	<ol>4. Attending seminars that deal with issues relating with HIV/AIDS.</ol>
	<ol>5. Attending church services to build on self esteem.</ol>
	<ol>6. Maintain drug usage inorder to suppress the virus activity. </ol>
	<ol>7. Maintaining proper diet, specifically a sufficient well balanced diet and eating healthy foods to keep the body's immune system strong.</ol>
	<ol>8. Doing  alot of exercises to keep physically fit.</ol>
</li>
<br>

<footer>
	
</footer>
</body> 
</html>
