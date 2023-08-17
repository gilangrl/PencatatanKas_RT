<!DOCTYPE html>
<html>
<head>
    <title>LAPORAN PEMBAYARAN</title>
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .outer-box {
            border: 1px solid #ccc;
            padding: 20px;
        }

        .header-kop {
            text-align: center;
            margin-top: -6rem;
        }

        .title h2 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .address {
            font-size: 18px;
            color: #666;
        }

        .garis {
            border-top: 2px solid #333;
            margin: 10px 0;
        }

        .titles h4 {
            font-size: 20px;
            margin-bottom: 10px;
            text-align: center;
        }

        .titles p {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="outer-box">
            <div class="header-kop">
                <div class="title" style="text-align:center; margin-top:-6rem;">
                    <h2>DATA PEMBAYARAN UANG KAS</h2>
                    <h1 class="address">WARGA RT.04</h1>
                </div>
            </div>
            <div class="garis"></div>
            <div class="titles">
                <h4>LAPORAN DATA PEMBAYARAN</h4>
                <p>Tanggal  : {{$tglCetak}}</p>
            </div>
            <table>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tanggal Pembayaran</th>
              </tr>
                @foreach ($cetakPertanggal as $item)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$item->warga->nama}}</td>
                  <td>{{$item->jumlah}}</td>
                  <td>{{$item->tanggal_pembayaran}}</td>
                </tr>
                @endforeach
            </table>
            
        </div>
        
        
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>