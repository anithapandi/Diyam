<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="BI.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="Portfolio.css">

</head>
<style>

</style>
<body>
<div class="container">
	<div class="bgBI">
		<div class="tab">
          <button class="tablinks" onclick="opentab(event, 'BI')" id="defaultOpen">Business Intelligence</button>
          <button class="tablinks" onclick="opentab(event, 'BA')">Business Analytics</button>
          <button class="tablinks" onclick="opentab(event, 'Data')">Data Integration Solutions</button>
        </div>

        <div id="BI" class="tabcontent">
        <?php 
          echo "<h3>Business Intelligence</h3>";
          echo "Yes, you hear the word buzz... here comes the Business intelligence!!!<br><br>";
          echo "BI has come a long way - from assistance with report generation to self-service platforms for discovery and analytical insight.<br><br>";
          echo "BI tools are essentially data-driven Decision Support Systems (DSS). BI is sometimes used interchangeably with briefing books, report and query tools and executive information systems.<br><br>";
          echo "BI supports corporate executives, business managers and other operational workers make better and more informed business decisions. Companies also use BI to cut costs, identify new business opportunities, and spot inefficient business processes ripe for re-engineering.<br><br><br>";
          echo "What We Do...<br><br>";
          echo "We refer to the tools, technologies, applications and practices used to collect, integrate, analyze, and present an organization’s raw data in order to create insightful and actionable business information. We provide a technology-driven process is made up of several related activities including Data mining, online analytical processing, Querying and Reporting with a high quality.<br>";
         ?>
        </div>

        <div id="BA" class="tabcontent">
          <?php 
          echo "<h3>Business Analytics</h3>";
          echo "Business analytics (BA) refers to skills, technologies, practices for continuous iterative exploration and investigation of past business performance to gain insight and drive business planning. Business analytics focuses on developing new insights and understanding of business performance based on data and Statistical methods.<br><br>";
          echo "In other words, querying, reporting, OLAP known as BI, and alert tools can answer questions such as what happened, how many, how often, where the problem is, and what actions are needed. Business analytics can answer questions like why is this happening, what if these trends continue, what will happen next (predict), and what is the best outcome that can happen (optimize). <br><br>";
          echo "What We Do...<br><br>";
          echo "With BA we provide extensive use of data, statistical analysis, including explanatory and Predictive modeling and fact-based management to drive decision making. Analytics may be used as input for human decisions or may drive fully automated decisions. <br>";
         ?> 
        </div>

        <div id="Data" class="tabcontent">
           <?php 
          echo "<h3>Data Integration Solutions</h3>";
          echo "Data integration is the combination of technical and business processes used to combine data from disparate sources into meaningful and valuable information. A complete data integration solution delivers trusted data from various sources.<br><br>";
          echo "What We Do...<br><br>";
          echo "We transform data in any style and deliver it to any system, supporting faster time to value and reduced IT risk. The integrated platform delivers a wide range of data quality capabilities from data profiling, standardization, matching and enrichment to active data-quality monitoring. <br>";
         ?> 
        </div>

		<div class="clearfix"></div>
	</div>
</div>

</body>
</html>