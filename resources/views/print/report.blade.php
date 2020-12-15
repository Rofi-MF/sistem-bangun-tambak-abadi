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
        <td colspan="7" rowspan="2" align="center"><strong>Laporan Keseluruhan Proyek {{$project->projectName}} {{$month}} {{$year}}</strong></td>
    </tr>
    <tr>
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
    </tr>
    </thead>
    <thead>
    <tr>
        <th align="center" style="border: 1px solid black">No</th>
        <th align="center" style="border: 1px solid black">Tanggal</th>
        <th align="center" colspan="3" style="border: 1px solid black">Deskripsi</th>
        <th align="center" style="border: 1px solid black">Masuk</th>
        <th align="center" style="border: 1px solid black">Keluar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($transaction as $trans)
        <tr>
            <td style="border: 1px solid black">{{$loop->iteration}}</td>
            <td style="border: 1px solid black">{{date_format(date_create($trans->date),'d F Y')}}</td>
            <td style="border: 1px solid black">{{$trans->category}}</td>
            <td style="border: 1px solid black">{{$trans->typeName}}</td>
            <td style="border: 1px solid black">{{$trans->explanation}}</td>
            <td style="border: 1px solid black" align="right">{{number_format($trans->in,0,',','')}}</td>
            <td style="border: 1px solid black" align="right">{{number_format($trans->out,0,',','')}}</td>
        </tr>
    @endforeach
    </tbody>
    <tbody>
    <tr>
        <td style="border: 1px solid black" colspan="5" align="center"><b>Total</b></td>
        <td style="border: 1px solid black" align="right"><b>{{number_format($total[0]->in,0,',','')}}</b></td>
        <td style="border: 1px solid black" align="right"><b>{{number_format($total[0]->out,0,',','')}}</b></td>
    </tr>
    <tr>
        <td style="border: 1px solid black" colspan="5" align="center"><b>Saldo</b></td>
        <td style="border: 1px solid black" colspan="2" align="right">
            <b>{{number_format($total[0]->in-$total[0]->out,0,',','')}}</b></td>
    </tr>
    </tbody>
</table>
</body>
</html>

