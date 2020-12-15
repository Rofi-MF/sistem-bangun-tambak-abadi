<table cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
        <td colspan="5" rowspan="2" align="center"><strong>Laporan Keseluruhan {{$project->projectName}} {{$month}} {{$year}}</strong></td>
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
        <th style="border: 1px solid black">No</th>
        <th style="border: 1px solid black">Tanggal</th>
        <th style="border: 1px solid black">Deskripsi</th>
        <th style="border: 1px solid black">Masuk</th>
        <th style="border: 1px solid black">Keluar</th>
    </tr>
    </thead>
    <tbody>
    @foreach($transaction as $trans)
        <tr>
            <td style="border: 1px solid black">{{$loop->iteration}}</td>
            <td style="border: 1px solid black">{{$trans->date}}</td>
            <td style="border: 1px solid black">{{$trans->explanation}}</td>
            <td style="border: 1px solid black" align="right">{{number_format($trans->in,0,',','')}}</td>
            <td style="border: 1px solid black" align="right">{{number_format($trans->out,0,',','')}}</td>
        </tr>
    @endforeach
    </tbody>
    <tbody>
    <tr>
        <td style="border: 1px solid black" colspan="3" align="center"><b>Total</b></td>
        <td style="border: 1px solid black" align="right"><b>{{number_format($total[0]->in,0,',','')}}</b></td>
        <td style="border: 1px solid black" align="right"><b>{{number_format($total[0]->out,0,',','')}}</b></td>
    </tr>
    <tr>
        <td style="border: 1px solid black" colspan="3" align="center"><b>Saldo</b></td>
        <td style="border: 1px solid black" colspan="2" align="right">
            <b>{{number_format($total[0]->in-$total[0]->out,0,',','')}}</b></td>
    </tr>
    </tbody>
</table>
