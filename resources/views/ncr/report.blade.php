<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        table {
            border: 1px solid #ddd;
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            text-align: center;
        }

        tr {
            border-bottom: 1px solid #ddd;
        }

        thead {
            background-color: lightgrey;
        }

        .tgl {
            width: 70px;
            height: 40px;
            padding: 10px 40px;
            background-color: lightgrey;
            text-align: center;
            border-radius: 20px;
            align-items: center;
            font-weight: normal;


        }

        nav {
            display: flex;
            background-color: white;
            font-weight: bold;
            margin-left: -40px;
            margin-bottom: 50px;
            margin-top: -10px;
        }

        li {
            display: inline;
            margin-right: 10px;
        }

        .rp {
            font-size: 20px;
            font-weight: bold;
        }

        hr {
            background-color: orange;
            border-color: orange;
            margin-top: -10px;
            height: 3px;

        }
    </style>
</head>

<body>
    <div>
        <h1>PT. ALLURE ALLUMINIO</h1>
        <hr>
        <nav>
            <ul>
                <li class="rp">Report NCR</li>
                <li class="tgl">{{$tanggal}}</li>
            </ul>
        </nav>
    </div>
    <h4>Status : Open</h4>
    <div>
        <table>
            <thead>
                <tr>
                    <th>No NCR</th>
                    <th>No FPPP</th>
                    <th>Mitra</th>
                    <th>Nama Project</th>
                    <th>Tanggal</th>
                    <th>Item</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if ($ncr_open->count() > 0)
                @foreach ($ncr_open as $ncr)
                <tr>
                    <td>{{ $ncr->nomor_ncr }}</td>
                    <td>{{ $ncr->nomor_fppp }}</td>
                    <td>{{ $ncr->nama_mitra }}</td>
                    <td>{{ $ncr->nama_proyek }}</td>
                    <td>{{ $ncr->tanggal_ncr->format('d-m-Y') }}</td>
                    <td>
                        @foreach ($ncr->ItemNcr as $item)
                        {{ $item->nama_item }},
                        @endforeach
                    </td>
                    <td>{{$ncr->status}}</td>
                    <td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8" style="color: grey;">Tidak Ada Data</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <h4>Status : Closed</p>
    </h4>
    <div>
        <table>
            <thead>
                <tr>
                    <th>No NCR</th>
                    <th>No FPPP</th>
                    <th>Mitra</th>
                    <th>Nama Project</th>
                    <th>Tanggal</th>
                    <th>Item</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if ($ncr_closed->count() > 0)
                @foreach ($ncr_closed as $ncr)
                <tr>
                    <td>{{ $ncr->nomor_ncr }}</td>
                    <td>{{ $ncr->nomor_fppp }}</td>
                    <td>{{ $ncr->nama_mitra }}</td>
                    <td>{{ $ncr->nama_proyek }}</td>
                    <td>{{ $ncr->tanggal_ncr->format('d-m-Y') }}</td>
                    <td>
                        @foreach ($ncr->ItemNcr as $item)
                        {{ $item->nama_item }},
                        @endforeach
                    </td>
                    <td>{{$ncr->status}}</td>
                    <td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8" style="color: grey;">Tidak Ada Data</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
    <h4>Status : Confirmed</h4>
    <div>
        <table>
            <thead>
                <tr>
                    <th>No NCR</th>
                    <th>No FPPP</th>
                    <th>Mitra</th>
                    <th>Nama Project</th>
                    <th>Tanggal</th>
                    <th>Item</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if ($ncr_confirmed->count() > 0)
                @foreach ($ncr_confirmed as $ncr)
                <tr>
                    <td>{{ $ncr->nomor_ncr }}</td>
                    <td>{{ $ncr->nomor_fppp }}</td>
                    <td>{{ $ncr->nama_mitra }}</td>
                    <td>{{ $ncr->nama_proyek }}</td>
                    <td>{{ $ncr->tanggal_ncr->format('d-m-Y') }}</td>
                    <td>
                        @foreach ($ncr->ItemNcr as $item)
                        {{ $item->nama_item }},
                        @endforeach
                    </td>
                    <td>{{$ncr->status}}</td>
                    <td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8" style="color: grey;">Tidak Ada Data</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</body>

</html>