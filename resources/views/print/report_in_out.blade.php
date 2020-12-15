<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Print</title>
    <style type="text/css" media="print">
        body {
            color: #000000;
            font-size: 10pt;
            font-family: "Times New Roman", Times, serif;
            text-align: justify;
        }

        footer {
            position: fixed;
            bottom: 0;
        }

        @page {
            size: 297cm 210cm;
            margin: 1cm;
            margin: 2cm 2cm 2cm 2cm;
        }

        .head {
            font-size: 20px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 40px;
            text-align: center;
            font-family: "Times New Roman", Times, serif;
        }

        .subhead {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-family: "Times New Roman", Times, serif;
        }

        ol {
            list-style-type: none;
            counter-reset: item;
            padding: 0px;
        }

        ol > li {
            display: table;
            counter-increment: item;
            margin-bottom: 0.6em;
        }

        ol > li:before {
            content: counters(item, ".") ". ";
            display: table-cell;
            padding-right: 0.6em;
        }

        li ol > li {
            margin: 0;
        }

        li ol > li:before {
            content: counters(item, ".") " ";
        }

        .table {
            margin: 20px 0px 20px 50px;
        }

        .isi {
            margin: 20px 0px 20px 0px;
        }

        .breakhere {
            page-break-before: always;
        }
    </style>
    <style type="text/css" media="screen">
        body {
            color: #000000;
            font-size: 10pt;
            font-family: "Times New Roman", Times, serif;
            margin: 0 10% 0 10%;
            text-align: justify;
        }

        @page {
            size: 297cm 210cm;
            margin: 1cm;
        }

        .head {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 40px;
            text-align: center;
            font-family: "Times New Roman", Times, serif;
        }

        .subhead {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-family: "Times New Roman", Times, serif;
        }

        ol {
            list-style-type: none;
            counter-reset: item;
            padding: 0px;
        }

        ol > li {
            display: table;
            counter-increment: item;
            margin-bottom: 0.6em;
        }

        ol > li:before {
            content: counters(item, ".") ". ";
            display: table-cell;
            padding-right: 0.6em;
        }

        li ol > li {
            margin: 0;
        }

        li ol > li:before {
            content: counters(item, ".") " ";
        }

        .table {
            margin: 20px 0px 20px 50px;
        }

        .isi {
            margin: 20px 0px 20px 0px;
        }

        .breakhere {
            page-break-before: always;
        }
    </style>
</head>
<body>
<div align="right" style="padding-right:30px; background-color:#000000;margin-bottom:50px" id="Button"><input
        type="button" name="button" class="button" value="Print"
        onclick="document.getElementById('Button').style.display='none';window.print();" title="cetak data"/> <input
        type="button" name="button" class="button" value="Close" onclick="window.close();"/></div>
<table cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
        <td colspan="8" rowspan="2" align="center">
            <strong>
                Laporan @if($category == 'Masuk') Pemasukan {{$type->typeName}} @else Pengeluaran {{$type->typeName}} @endif Proyek {{$project->projectName}} {{$month}} {{$year}}
            </strong>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    </thead>
    <thead>
    <tr class="bg-primary">
        <th style="border: 1px solid black" align="center" width="10px">No</th>
        <th style="border: 1px solid black" align="center" width="150px">Tanggal</th>
        <th style="border: 1px solid black" align="center" colspan="2">Deskripsi</th>
        <th style="border: 1px solid black" align="center">Satuan</th>
        <th style="border: 1px solid black" align="center">Qty</th>
        <th style="border: 1px solid black" align="center">Harga</th>
        <th style="border: 1px solid black" align="center">Total</th>
    </tr>
    </thead>
    <tbody>
    @foreach($transaction as $trans)
        <tr>
            <td style="border: 1px solid black">{{$loop->iteration}}</td>
            <td style="border: 1px solid black" align="center">{{date_format(date_create($trans->date),'d F Y')}}</td>
            <td style="border: 1px solid black">{{$trans->typeName}}</td>
            <td style="border: 1px solid black">{{$trans->explanation}}</td>
            <td style="border: 1px solid black" align="center">{{$trans->unit}}</td>
            <td style="border: 1px solid black" align="center">{{$trans->qty}}</td>
            <td style="border: 1px solid black" align="right">{{number_format($trans->price,0,',','.')}}</td>
            <td style="border: 1px solid black" align="right">{{number_format($trans->total,0,',','.')}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

