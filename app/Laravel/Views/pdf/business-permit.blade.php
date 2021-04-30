<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BUSINESS PERMIT</title>
	<style>
		body{  font-family: Arial, Helvetica, sans-serif;margin: 0px; padding: 0px;}
		p{ text-align: justify; }
		.text-center{ text-align: center; }
		.logo{ height: 50px; width: auto; }

		.letterhead{ border: 0px solid #333; width: 100%; position: relative;}
		.letterhead	tbody td{  padding: 10px; }
		.letterhead .logo-holder{ width: 10%; border: 0px solid #333;  }
		.letterhead .city-holder{ width: 90%; border: 0px solid #d00;}
		.letterhead	.temporary-text{ position: absolute; right: 5px; top: 10px; font-weight: 600; color: #fff; font-size: 10px; border: 1px solid #777777; background: #777777;  }

		.city-holder .city-text{ font-size: 18px; font-weight: 600; }
		.mayor-holder .mayor-text{ font-size: 10px; }
		.heading{ border: 0px solid #333;  padding:10px 20px;}
		.heading h2{ border: 0px solid #000; padding: 0px; margin: 0px; letter-spacing: 5px; }
		.heading p{ margin: 0px; padding: 0px; }
		.heading .clearance-no{ font-size: 10px; }

		.content{ border: 0px solid #333;  padding:10px 20px; }	
		.sub-content{ padding: 0px 20px; padding-bottom: 10px; }
		.sub-content p,.content p{ line-height: 18px; font-size: 10px; }
		.identity{ width: 100%; position: relative; border: 0px solid #33; }
		.identity .qrcode-holder{ width: 50%; }
		.identity .signature-holder{ width: 50%; }
	
		.identity .qrcode-holder div{ padding: 20px; }
		.identity .qrcode-holder div img{ padding-left: 0px; }
		.signature-holder div{padding: 0px 10px;}
		.signature-holder .name{ font-size: 12px; font-weight: 600; padding-top: 50px; }
		.signature-holder .position{ font-size: 10px; }
		.signature-holder .or-number{ font-size: 8px; text-decoration: underline; }
		.pside50{ padding: 0px 50px; }
		.nt15{margin-top: -15px;}

	</style>
</head>
<body>
	<table class="letterhead" cellpadding="0" cellspacing="0">
		<tbody>
			<tr>
				<td class="logo-holder"><img src="{{asset('placeholder/city/valenzuelacity.png')}}" class="logo" alt=""></td>
				<td class="city-holder">
					<div>Republic of the Philippines</div>
					<div class="city-text">VALENZUELA CITY</div>
					<div class="mayor-text">OFFICE OF THE MAYOR</div>
					<div class="temporary-text">TEMPORARY</div>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="heading">
		<h2 class="text-center">-MAYOR'S PERMIT-</h2>
		<p class="text-center clearance-no">No. <u>BBP-19-000128-0000001</u></p>
	</div>

	<div class="content">
		<p>To whom it may concern:</p>
		<p>Pursuant to the Metropolitan Manila Revenue Code, Ordinance No. 82-03, After Payment on as taxes, fees and charges, etc. and compliance with existing requirements of permit is hereby granted to herein taxpayer:</p>
		<h3 class="text-center">JAY SON SARI-SARI STORE</h3>
		<p class="text-center nt15">TAXPAYER'S NAME</p>

		<h4 class="text-center pside50">UNIT 4 CYT BUILDING PASO DE BLAS, VALENZUELA CITY</h4>
		<p class="text-center nt15">LOCATION/ADDRESS OF BUSINESS</p>

		<h3 class="text-center">SARI-SARI STORE</h3>
		<p class="text-center nt15">NATURE OF BUSINESS</p>
	</div>
	<div class="sub-content">
		<p>This provisional grant of privilege is subject to the compliance of requirements imposed by other City Hall departments, and to possible reasssessment of fees after inspection of the premises subject of this Business Permit/License. the GRANTOR reserves its right to revoke and cancel all the privileges hereby granted at any time if the GRANTEE is guilty of fraud, deceit or misrepresentation or found in violation of any city laws or ordiances or provisions of the memorandum of agreement submitted with the grantee's application. All fees given by the GRANTEE in the approval of this business permit/license will be consequently retained by the GRANTOR as liquidated damages or otherwise forfeited.</p>
		<p>Issue this <u>16th day of November 2019</u> at <strong>Valenzuela City Hall</strong> and valid up to <u>16th day of December 2019</u> (30 Days).</p>
		<p><strong>VALID ONLY AT THE BUSINESS ADDRESS INDICATED HEREIN.</strong></p>
	</div>

	<table class="identity" cellpadding="0" cellspacing="0">
		<tr>
			<td class="qrcode-holder">
				<div class="qr">
					<img src="data:image/png;base64,,{{DNS2D::getBarcodePNG("449856u45867456987456887234827398424", "QRCODE",3.5,3.5)}}" alt="barcode">
				</div>
			</td>
			<td class="signature-holder">
				<div class="name">HON. JUAN DELA CRUZ</div>
				<div class="position">VALENZUELA CITY MAYOR</div>
				<div class="or-number">OR No. EOR-000001</div>
			</td>
		</tr>
	</table>
</body>
</html>