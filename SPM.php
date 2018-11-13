
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="BI.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="spm.css">
</head>

<body>
<div class="container">
	<div class="bgICM">
	<div class="tab">
          <button class="tablinks" onmouseover="openspm(event, 'SPM')">Sales Performance Management</button>
          <button class="tablinks" onmouseover="openspm(event, 'ICM')">Incentive Compensation Management</button>
          <button class="tablinks" onmouseover="openspm(event, 'SPMvsICM')">SPM vs ICM</button>
        </div>

        <div id="SPM" class="tabcontent">
        <?php 
          echo "<h3>Sales Performance Management</h3>";
          echo "Sales performance management is a comprehensive solution that helps organizations drive sales alignment from planning through execution while improving efficiency, accuracy and timeliness of the associated administrative processes. <br><br>";
          echo "<b>Motivate Sales</b><br><br>";
          echo "Engage Salespeople with easy to read sales data using personalized dashboards and reports. Build trust with the sales team through transparent reporting showing salespeople their commissions and the calculation process. Provides the interface for controlling what your salespeople can see based on their role and eligibility rules.<br><br>";
          echo "Automated Sales Comp<br><br>";
          echo "Automate the jobs that other products can’t handle. Manage complex sales crediting rules. Take control of all your sales and commission data.SPM uses sophisticated plan rules and calculations and eliminate the manual labor required to make payments and manage the commission process.<br><br>";
          echo "DASHBOARD & REPORTS<br><br>";
          echo "SPM delivers immediate and transparent communication via dashboards and a suite of reports. Information can be customized with secure access levels for sales, human resources, finance and management.<br>";
         ?>
        </div>

        <div id="ICM" class="tabcontent">
          <?php 
          echo "<h3>Incentive Compensation Management</h3>";
          echo "Incentive compensation is the supplementary money an employee makes for a certain level of performance on top of their regular, base salary. Incentive compensation plan (or incentive pay plan) is a statement outlining the commission a sales rep receives when they sell a certain amount of a given product. <br><br>";
          echo "Save Time<br>";
          echo "Your time is too valuable to calculate sales commission manually with spreadsheets. With few clicks you can automate the process using IBM Incentive Compensation Management. The audit log to keep track of all the adjustments and you will receive an email confirming when the completion of the automated tasks.<br><br>";
          echo "Ease of Use & Control<br>";
          echo "Incentive Compensation Management gives you the power and authority to set up precisely what you need to have your commission calculated in detail. Incentive Compensation Management play nice with data from other programs like Salesforce, with our progressive ICM software.<br><br>";
          echo "INTEGRATION <br>";
          echo "IBM ICM uses several technologies including APIs to integrate with many other platforms including accounting systems like Salesforce, PeopleSoft. IBM ICM can interface with multiple sources of data to download and import files.<br><br>";
          echo "REPORTS & DASHBOARD BUILDER <br>";
          echo "Use IBM ICM report and dashboard builder to create the reports your business needs. IBM ICM comes with a suite of standard reports, which you can easily edit or create your own reports.";
          ?> 
        </div>

        <div id="SPMvsICM" class="tabcontent">
           <?php 
          echo "<h3>SPM vs ICM</h3>";
          echo "Sales performance management is a comprehensive solution that helps organizations drive sales alignment from planning through execution while improving efficiency, accuracy and timeliness of the associated administrative processes. <br><br>";
          echo "Incentive compensation is the supplementary money an employee makes for a certain level of performance on top of their regular, base salary. Incentive compensation plan (or incentive pay plan) is a statement outlining the commission a sales rep receives when they sell a certain amount of a given product. <br><br>";
          
         ?> 
        </div>

		<div class="clearfix"></div>
	</div>
</div>

</body>
