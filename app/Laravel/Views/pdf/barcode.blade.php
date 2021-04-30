<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Barcode Generator</title>
	<style>
		body{
			font-family: 'Helvetica';
			font-size: 12px;
		}
	</style>
</head>
<body>
	<div><b>{{Str::upper($barcode->partner?$barcode->partner->name:"n/a")}} - {{Str::upper($barcode->product_name)}} ({{$barcode->code}})</b></div>
	<div><b style="color: #dd0000;">{{$barcode->qty}}</b> BARCODES</div>
	<table>
		@foreach(range(1,$barcode->qty/3) AS $index => $value)
		<tr>
			@foreach(range(1,3) as $i => $v)
			<td>
				<div style="width: 150px; border: 1px solid #000; height: auto; padding: 5px; margin-right: 5px; height: auto;">
					<div style="font-size:6px; text-align: center;">THE NOOK LIFESTYLE STORE</div>
					<img src="data:image/png;base64,{{DNS1D::getBarcodePNG(Str::upper($barcode->code), "C39E+",8,450)}}" alt="barcode" style="height: 40px;  width: auto; margin: 0px auto; clear: both; "   />

					<div style="font-size:6px; margin-top: 42px; text-align: center">- - - {{Str::upper($barcode->code)}} - - -</div>
					<div style="font-size:8px; margin-top: 0px; height: auto;"><b>{{Str::upper($barcode->partner?$barcode->partner->name:"n/a")}}</b></div><br/>

					<div style="font-size:8px; margin-top: -15px; height: auto;">{{Str::upper($barcode->product_name)}}</div>
					<div style="font-size:9px; margin-top: 0px; text-align: center;"><b>Php {{Helper::money_format($barcode->price)}}</b></div>
				</div>
			</td>
			@endforeach
			
		</tr>
		@endforeach

	</table>

	

</body>
</html>