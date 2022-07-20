<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>North Main Credit Union - Loan Rates</title>
	
	<style>

	table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}
table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}
table tr {
  background: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}
table th,
table td {
  padding: .625em;
  text-align: center;
}
table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}
@media screen and (max-width: 600px) {
  table {
    border: 0;
  }
  table caption {
    font-size: 1.3em;
  }
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  table td:before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  table td:last-child {
    border-bottom: 0;
  }
}

	</style>

	<?php include '../inc/header.php';?>
	
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85131597-1', 'auto');
  ga('send', 'pageview');

</script>
	
</head>

<body class="home3 header3">

	<div id="wrapper">
		<header id="header" class="site-header">

			<?php include '../inc/top-bar.php';?>
			
			<?php include '../inc/nav.php';?>
			
		</header><!-- .site-header -->

		<div id="content" class="site-content">
			<div class="page-title parallax-window" style="background-image: url('../images/loans-title.jpg'); background-position: top center;">
				<div class="container">
					<h1>Loan Rates</h1>
				</div><!-- .container -->
			</div><!-- .page-title -->

			<main id="main" class="site-main">
				<section id="our-university">
					<div class="container">

						<div class="row">
							<div class="col-md-12">
							
							
							
							<table width="100%">
								<thead>
									<tr>
										<th width="75%" scope="col">Loan Type</th>
										<th width="25%" scope="col">Rate**</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td data-label="Loan Type">New &amp; Used Auto Loans</td>
										<td data-label="Rate*">3.89%</td>
									</tr>

									<tr>
										<td data-label="Loan Type">New &amp; Used Items<br>
									    (Such as tractors, lawn mowers, motorcycles, campers, boats, ATV's, etc.)</td>
										<td data-label="Rate*">5.75%</td>
									</tr>
									<tr>
									  <td data-label="Loan Type">Personal Loans</td>
									  <td data-label="Rate*">9.75%</td>
								  </tr>
								</tbody>
							</table>
						<!-- table -->
						<p><br>
						  *Effective March 8, 2022. Loans subject to credit approval. 3.25% Annual Percentage Rate  offer based on a credit score of 725+ for a 36-month term. The actual rate may  vary depending on credit qualifications and loan term. A North Main Credit  Union share account is required. Rates and terms are subject to change without  notice. The monthly payment on a $10,000 car loan for 36 months with a rate of  3.89% APR would be $300.00.<br>
						  <br>
						  **APR is the Annual Percentage Rate. The Annual Percentage  Rate is the advertised rate and can vary based on creditworthiness and terms of  the loan.&nbsp; Your rate can be higher or lower depending on credit  performance. Financing up to the retail value of the auto is available. Rate is  subject to change without notice.&nbsp;<br>
  <br>
						  ***Finance charges begin on the date the loan is made and  interest accrues during the payment deferral period. First payment due date is  dependent upon repayment method chosen. For example, a loan with a monthly  payment would be due within one month of loan disbursal.&nbsp;<br>
  <br>
						  Fees associated with this extension of credit:&nbsp;</p>
                        <ul type="disc">
                          <li>$40 Loan Application Fee </li>
                          <li>$18 Georgia MV1 Fee for vehicle loans </li>
                          <li>$15 E-title fee for vehicle loans </li>
                          <li>$400 Guaranteed Automobile Protection-GAP       Fee (optional and may be included in financed loan amount) </li>
                          <li>$25 Credit Report Fee </li>
                        </ul>
                        For more information on our loan rates, please <a href="contact-us.php" title="Contact Us">contact us</a>.
<p>&nbsp;</p>
						  </div>
						</div><!-- .intro-wrap -->

					</div><!-- .container -->
				</section><!-- #our-university -->


			</main><!-- .site-main -->
		</div><!-- .site-content -->

		<?php include '../inc/footer.php';?>
						
	</div><!-- #wrapper -->
	<?php include '../inc/modals.php';?>
	<?php include '../inc/scripts.php';?>
</body>
</html>
