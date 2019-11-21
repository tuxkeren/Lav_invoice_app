<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:12px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:15px;
            padding:1px;
            width:650px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:18px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:650px;
        }
        td, tr, th{
            padding:5px;
            border:1px solid #333;
            width:50px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <caption>
                --: INVOICE :--
            </caption>
            <thead>
                <tr>
                    <th colspan="2">Invoice No. <strong>#{{ $invoice->id }}</strong></th>
                    <th colspan="2" align="right">{{ $invoice->created_at->format('D, d M Y') }}</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <h4>Perusahaan: </h4>
                        <p>tuxWeb.<br>
                            Jl Dang Merdu Km. 1<br>
                            081364811010<br>
                            support@tuxkeren.site
                        </p>
                    </td>
                    <td colspan="2">
                        <h4>Pelanggan: </h4>
                        <p>{{ $invoice->customer->name }}<br>
                        {{ $invoice->customer->address }}<br>
                        {{ $invoice->customer->phone }} <br>
                        {{ $invoice->customer->email }}
                        </p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                </tr>
                @foreach ($invoice->detail as $row)
                <tr>
                    <td>{{ $row->product->title }}</td>
                    <td align="right">Rp {{ number_format($row->price) }}</td>
                    <td align="right">{{ $row->qty }}</td>
                    <td align="right">Rp {{ $row->subtotal }}</td>
                </tr>
                @endforeach
                <tr>
                    <th colspan="3" align="right">Subtotal:</th>
                    <td align="right"><strong>Rp {{ number_format($invoice->total) }}</strong></td>
                </tr>
                <tr>
                    <th colspan="3" align="right">Pajak 2%:</th>
                    <td align="right"><strong>Rp {{ number_format($invoice->tax) }}</strong></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" align="right">Total:</th>
                    <td align="right"><strong>Rp {{ number_format($invoice->total_price) }}</strong></td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>
