<table cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
        <td colspan="8" rowspan="2" align="center">
            <strong>Laporan @if($category == 'Masuk') Pemasukan - {{$type->typeName}} @elseif($category == 'Keluar')
                    Pengeluaran - {{$type->typeName}} @endif {{$project->projectName}} {{$month}} {{$year}}</strong>
        </td>
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
        <th style="border: 1px solid black" align="center">No</th>
        <th style="border: 1px solid black" align="center">Tanggal</th>
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
            <td style="border: 1px solid black" align="right">{{number_format($trans->price,0,',','')}}</td>
            <td style="border: 1px solid black" align="right">{{number_format($trans->total,0,',','')}}</td>
        </tr>
    @endforeach
</table>
