<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BUSINESS CLEARANCE</title>
	<style>
		body{  font-family: Arial, Helvetica, sans-serif;margin: 0px; padding: 0px;}
		p{ text-align: justify; }
		.text-center{ text-align: center; }
		.logo{ height: 50px; width: auto; }

		.letterhead{ border: 0px solid #333; width: 100%; position: relative;}
		.letterhead	tbody td{  padding: 10px; }
		.letterhead .logo-holder{ width: 10%; border: 0px solid #333;  }
		.letterhead .brgy-holder{ width: 90%; border: 0px solid #d00;}
		.letterhead	.temporary-text{ position: absolute; right: 5px; top: 10px; font-weight: 600; color: #fff; font-size: 10px; border: 1px solid #777777; background: #777777;  }

		.brgy-holder .brgy-text{ font-size: 18px; font-weight: 600; }
		.brgy-holder .city-text{ font-size: 10px; }
		.heading{ border: 0px solid #333;  padding:10px 20px;}
		.heading h2{ border: 0px solid #000; padding: 0px; margin: 0px; letter-spacing: 5px; }
		.heading p{ margin: 0px; padding: 0px; }
		.heading .clearance-no{ font-size: 10px; }

		.content{ border: 0px solid #333;  padding:10px 20px; }	
		.sub-content{ padding: 0px 20px; padding-bottom: 10px; }
		.sub-content p,.content p{ line-height: 18px; font-size: 11px; }
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


	</style>
</head>
<body>
	<table class="letterhead" cellpadding="0" cellspacing="0">
		<tbody>
			<tr>
				<td class="logo-holder"><img src="{{asset('placeholder/brgy.svg')}}" class="logo" alt=""></td>
				<td class="brgy-holder">
					<div>Republic of the Philippines</div>
					<div class="brgy-text">BARANGAY PASO DE BLAS</div>
					<div class="city-text">VALENZUELA CITY, METRO MANILA</div>
					<div class="temporary-text">TEMPORARY</div>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="heading">
		<h2 class="text-center">-CERTIFICATE-</h2>
		<p class="text-center clearance-no">No. <u>BBCL-19-000128-0000001</u></p>
	</div>

	<div class="content">
		<p>To whom it may concern:</p>
		<p>The Barangay Government of <strong>BARANGAY PASO DE BLAS, VALENZUELA CITY</strong> has no objection to the <strong>New Application</strong> of the:</p>
		<h4 class="text-center">BARANGAY BUSINESS CLEARANCE</h4>
		<p class="text-center">to</p>
		<h3 class="text-center">JAY SON SARI-SARI STORE</h3>
		<p class="text-center pside50">UNIT 4 CYT BUILDING PASO DE BLAS, VALENZUELA CITY</p>
		<h5 class="text-center">DTI REGISTRATION NO: <u>45645722</u></h5>
	</div>
	<div class="sub-content">
		<p>The issuance of the Clearance is subject to the condition that the above enterprise has complied with an shall continue to comply with all existing national and local government laws, rules &amp; regulations and city &amp; barangay ordinances pertaining to the operation of a business establishment and that its operations shall not be an environmental and social hazard.</p>
		<p>This Clearance shall be considered automatically revoked, null and void should the above enterprise be found to have violated or failed to comply with the above condition.</p>
		<p>Issue this <u>{{Carbon::now()->format("d")}} day of {{Carbon::now()->format("F Y")}}</u> at <strong>Barangay Paso de Blas, Valenzuela City</strong> and valid up to <u>{{Carbon::now()->addDays(30)->format("d")}} day of {{Carbon::now()->addDays(30)->format("F Y")}}</u> (30 Days).</p>
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
				<div class="position">PUNONG BARANGAY</div>
				<div class="or-number">OR No. EOR-000001</div>
			</td>
		</tr>
	</table>
</body>
</html>