<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BFP CERTIFICATE</title>
	<style>
		body{  font-family: Arial, Helvetica, sans-serif;margin: 0px; padding: 0px;}
		p{ text-align: justify; }
		.text-center{ text-align: center; }
		.logo{ height: 50px; width: auto; margin-top: 10px; }

		.letterhead{ border: 0px solid #333; width: 100%; position: relative;}
		.letterhead	tbody td{  padding: 10px; }
		.letterhead .logo-holder{ width: 25%; border: 0px solid #333;  }
		.letterhead .city-holder{ width: 75%; border: 0px solid #d00;}
		.letterhead	.temporary-text{ position: absolute; right: 5px; top: 10px; font-weight: 600; color: #fff; font-size: 10px; border: 1px solid #777777; background: #777777;  }

		.city-holder .city-text{ font-size: 16px; font-weight: 600; }
		.mayor-holder .mayor-text{ font-size: 10px; }
		.heading{ border: 0px solid #333;  padding:10px 20px;}
		.heading h2{ border: 0px solid #000; padding: 0px; margin: 0px; letter-spacing: 2px; }
		.heading p{ margin: 0px; padding: 0px; }
		.heading .clearance-no{ font-size: 10px; }

		.content{ border: 0px solid #333;  padding:10px 20px; }	
		.sub-content{ padding: 0px 20px; padding-bottom: 10px; }
		.sub-content p,.content p{ line-height: 16px; font-size: 10px; }
		.identity{ width: 100%; position: relative; border: 0px solid #33; }
		.identity .qrcode-holder{ width: 50%; }
		.identity .signature-holder{ width: 50%; vertical-align: text-top; }
		.identity .signature-holder .title{font-size: 10px; margin-top: 10px; font-weight: 600;}
		.identity .qrcode-holder div{ padding: 20px; }
		.identity .qrcode-holder div img{ padding-left: 0px; }
		.signature-holder div{padding: 0px 10px;}
		.signature-holder .name{ font-size: 12px; font-weight: 600; padding-top: 20px; }
		.signature-holder .position{ font-size: 10px; }
		.signature-holder .or-number{ font-size: 8px; text-decoration: underline; }
		.pside50{ padding: 0px 50px; }
		.nt15{margin-top: -15px;}
		.text-bold{ font-weight: 600; }

		.or-holder div{ font-size: 10px; padding-left: 20px; }
		.text-danger{ color: #dd0000; }

	</style>
</head>
<body>
	<table class="letterhead" cellpadding="0" cellspacing="0">
		<tbody>
			<tr>
				<td class="logo-holder">
					<img src="{{asset('placeholder/dilg.svg')}}" class="logo" alt="" style="margin-right: 5px;">
					<img src="{{asset('placeholder/bfp.png')}}" class="logo" alt="">
				</td>
				<td class="city-holder">
					<div>Republic of the Philippines</div>
					<div class="city-text">Department of Interior and Local Government</div>
					<div class="mayor-text">BUREAU OF FIRE PROTECTION</div>
					<div class="temporary-text">TEMPORARY</div>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="heading">
		<h2 class="text-center">-FIRE SAFETY INSPECTION CERTIFICATE-</h2>
		<p class="text-center clearance-no text-bold">(FOR BUSINESS PERMIT)</p>
		<p class="text-center clearance-no">No. <u>BFP-19-000128-0000001</u></p>

	</div>

	<div class="content">
		<p>To whom it may concern:</p>
		<p>By virtue ofthe provisions of RA 9514 otherwise known as the Fire Code of the Philippines of 2008, the application for <b>FIRE SAFETY INSPECTION CERTIFICATE</b> of:</p>
		<h3 class="text-center">JAY SON SARI-SARI STORE</h3>
		<p class="text-center nt15">(NAME OF ESTABLISHMENT)</p>

		<p>owned and managed by: <b><u>JAY P. SON</u></b> with postal address at <b><u>UNIT 4 CYT BUILDING PASO DE BLAS, VALENZUELA CITY</u></b> is hereby <b>GRANTED</b> after said building structure or facility has been duly inspected with the findings that it has fully complied with the fire safety and protection requirements of the Fire Code of the Philippines of 2008 and its implementing Rules and Regulations.</p>
	</div>
	<div class="sub-content">
		<p>This certificate is being issued for <b><u>THE PURPOSE OF SECURING BUSINESS PERMIT</u></b>.</p>
		<p>This certiifcate is valid until <b><u>{{Carbon::now()->addDays(30)->format("d F Y")}} 11:59 PM</u></b>.</p>
		<p>Violation of Fire Code provisions shall ipso facto cause this certificate null and void, and shall hold the owner of the building liable to the penalties provided for the said Fire code.</p>
		

	</div>

	<table class="identity" cellpadding="0" cellspacing="0">
		<tr>
			<td class="or-holder">
				<div><b>Fire Code Fees:</b></div>
				<div>Amount Paid: <b><u>PHP 700.00</u></b></div>
				<div>O.R. Number: </div>
				<div>Date: </div>
			</td>
			<td class="signature-holder">
				<div class="title">RECOMMEND APPROVAL:</div>
				<div class="name">SF04 ANDRES DELA CRUZ, BFP</div>
				<div class="position">CHIEF, FSES</div>
			</td>
		</tr>
		<tr>
			<td class="qrcode-holder">
				<div class="qr">
					<img src="data:image/png;base64,,{{DNS2D::getBarcodePNG("449856u45867456987456887234827398424", "QRCODE",3.5,3.5)}}" alt="barcode">
				</div>
			</td>
			<td class="signature-holder">
				<div class="title">APPROVED:</div>
				<div class="name">CINSP JUAN DELA CRUZ</div>
				<div class="position">CITI/MUNICIPAL FIRE MARSHAL</div>
			</td>
		</tr>
	</table>

	<div class="sub-content">
		<p class="text-danger"><b>NOTE: "This Certificate does not take the place of any license required by law and is not transferable. Any change in the use of occupancy of the premises shall require a new certificate."</b></p>
	</div>
</body>
</html>