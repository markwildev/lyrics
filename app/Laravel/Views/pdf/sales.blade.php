<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sales Report</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            /* font-family: Verdana, Arial, sans-serif; */
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            /* background-color: #2d3436; */
            background-color: #ddd;
            color: #000;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
       
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        /* font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; */
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
        text-align: center
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    .b{
        border: 1px solid black;
    }
   
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 40%;">
            
                <pre>

<br /><br />
Sales Report                
Date: {{ date('M d, Y', strtotime($from)) }} - {{ date('M d, Y', strtotime($to)) }}
</pre>


            </td>
            <td align="center">
                {{-- <img src="/path/to/logo.png" alt="Logo" width="64" class="logo"/> --}}
                <img src="{{  asset('assets/images/janlex.png') }}" width='64' >
            </td>
            <td align="right" style="width: 40%;">

                <h3>JANLEX MOTORCYCLE PART</h3>
                <pre>
                    Street 26
                    123456 City
                    Baloc,Nueva Ecija
                </pre>
            </td>
        </tr>

    </table>
</div>


<br/>

{{-- <div class="invoice">
   
</div> --}}

<div class="invoice-box">

    <table cellpadding="0" cellspacing="0">
        <tr align="center" >
        <td class="b">Date</td>
        <td class="b" style="text-align: center">Total Gross Sales</td>
        <td class="b">Total Net Sales</td>
        </tr>
   @php
    $total_net = 0;   
    $total_gross = 0;   
    @endphp    
@foreach ($sales as $sale)
      <tr align="center">
      <td class="b">{{ date('M d,Y', strtotime($sale->date)) }}</td>
      <td class="b" style="text-align: center">{{ number_format($sale->gross_sales,2) }}</td>
      <td class="b">{{ number_format($sale->net_sales,2) }}</td>
      </tr> --}}
       @php
        $total_gross += $sale->gross_sales;
        $total_net += $sale->net_sales;
     @endphp 
@endforeach
<tr align="center" >
    <td class="b"><strong>Total</strong></td>
    <td class="b" style="text-align: center"><strong>{{ number_format($total_gross,2) }}</strong></td>
    <td class="b"><strong> {{ number_format($total_net ,2)}}</strong></td>
    </tr>
   <tr align="center">
        <td colspan="3"><strong>---- End of File ----</strong> </td>
      </tr>
        {{-- <tr align="center">
        <td colspan="5"><strong>---- End of File ----</strong> </td>
      </tr>
    </table> --}}
{{--    
    <table cellpadding="0" cellspacing="0" style="width:80%">
        <tr align="center">
        <td class="b">Date</td>
        <td class="b" style="text-align: center">Total Gross Sales</td>
        <td class="b">Total Net Sales</td>
        </tr> --}}
    {{-- @php
    $total_net = 0;   
    $total_gross = 0;   
    @endphp     --}}
{{-- @foreach ($sales as $sale)
      <tr align="center">
      <td class="b">{{ date('M d,Y', strtotime($sale->date)) }}</td>
      <td class="b" style="text-align: center">{{ number_format($sale->gross_sales,2) }}</td>
      <td class="b">{{ number_format($sale->net_sales,2) }}</td>
      </tr> --}}
      {{-- @php
        $total_gross += $sale->gross_sales;
        $total_net += $sale->net_sales;
     @endphp --}}
{{-- @endforeach --}}
      {{-- <tr align="center">
        <td ><strong>Total</strong> </td>
        <td  style="text-align: center"><strong>{{ number_format($total_gross,2) }}</strong></td>
        <td><strong> {{ number_format($total_net ,2)}}</strong></td>
      </tr> --}}
      {{-- <tr align="center">
        <td colspan="4"><strong>---- End of File ----</strong> </td>
      </tr> --}}
    </table>
  </div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} Janlex Motorcyle Parts - All rights reserved.
            </td>
            <td align="right" style="width: 50%;">
                Janlex 
            </td>
        </tr>

    </table>
</div>
</body>
</html>