
<DOCTYPE! html>

<head>

<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="inc/styles.css">
<title>Ashes Series 2017/18 Performances</title>

<meta name="robots" content="noindex, nofollow">

</head>

<body>



<!--Form Action Post-->


<form action="index.php" method="POST" name="ashes" id="ashes" class="ashes">

<!--End-->



<!--Heading Section-->

<img src="images/ashes-logo-small.png" alt="Ashes 2017">
<h1>Ashes 2017-18 Australia Vs England </h1>


<hr/>

<!--End heading Section-->

<div class="fieldarea">
<p>Select your Australian or English player to find out how they have performed in the Ashes series to date.</p>

<select name="player" id="player">
<option value="">Select your player</option>

<optgroup label = "Australia" id="optlabel">
<option value="David Warner">David Warner</option>
<option value="Cameron Bancroft">Cameron Bancroft</option>
<option value="Usman Khawaja">Usman Khawaja</option>
<option value="Steve Smith">Steve Smith(C)</option>
<option value="Shaun Marsh">Shaun Marsh</option>
<option value="Mitch Marsh">Mitch Marsh</option>
<option value="Peter Handscomb">Peter Handscomb</option>
<option value="Tim Paine">Tim Paine</option>
<option value="Pat Cummins">Pat Cummins</option>
<option value="Mitch Starc">Mitch Starc</option>
<option value="Nathan Lyon">Nathan Lyon</option>
<option value="Josh Hazlewood">Josh Hazlewood</option>

<optgroup label = "England" id="optlabel">
<option value="Alistair Cook">Alistair Cook</option>
<option value="Mark Stoneman">Mark Stoneman</option>
<option value="James Vince">James Vince</option>
<option value="Joe Root">Joe Root(C)</option>
<option value="Dawid Malan">Dawid Malan</option>
<option value="Jonny Bairstow">Jonny Bairstow</option>
<option value="Moeen Ali">Moeen Ali</option>
<option value="Chris Woakes">Chris Woakes</option>
<option value="Craig Overton">Craig Overton</option>
<option value="Tom Curran">Tom Curran</option>
<option value="Stuart Broad">Stuart Broad</option>
<option value="James Anderson">James Anderson</option>


</select>


</div>


<button type="submit" value="add">Submit
</button>



<section id="summary">


<?php include('inc/controller.php');?>
  

</section>

<section id="runs">

<p>Leading Run Scorers</p>

<hr>
<input type="submit" value="Most runs" name="runs" id="leading">
</input>

</section>

<section id="summaryruns">

<?php include('inc/runs.php');?>
  
</section>


<section id="wickets">

<p>Leading Wicket Takers</p>

<hr>
<input type="submit" value="Most wickets" name="wickets" id="leading">
</input>


</section>

<section id="summarywickets">

<?php include('inc/wickets.php');?>
  
</section>



</div>



</form>


</body>
</html>

