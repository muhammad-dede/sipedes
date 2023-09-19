<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    @hasSection('title')
        <title>@yield('title')</title>
    @else
        <title>Surat</title>
    @endif
</head>

<body>
    <table style="width:100%">
        <tbody>
            <tr>
                <td style="width:25%;">
                    <img src="{{ asset('') }}{{ kantorDesa() ? 'kantor-desa/' . kantorDesa()->logo : 'logo.png' }}"
                        alt="Logo" style="width:70px" />
                </td>
                <td style="width:50%; text-align:center;">
                    <strong style="font-size:20px">
                        PEMERINTAH {{ strtoupper(kantorDesa()->kabKota->nama ?? '') }}
                    </strong><br>
                    <strong style="font-size:20px">
                        KECAMATAN {{ strtoupper(kantorDesa()->kecamatan->nama ?? '') }}
                    </strong><br>
                    <strong style="font-size:20px">
                        KELURAHAN {{ strtoupper(kantorDesa()->kelurahan->nama ?? '') }}
                    </strong><br>
                    <span style="font-size:14px">
                        {{ ucwords(kantorDesa()->alamat ?? '') }}
                        RT {{ kantorDesa()->rt ?? '-' }}/RW {{ kantorDesa()->rw ?? '-' }}
                        - Kode Pos {{ kantorDesa()->kode_pos ?? '.....' }}
                    </span>
                </td>
                <td style="width: 25%;"></td>
            </tr>
        </tbody>
    </table>
    <hr>
    @yield('content')
</body>

</html>
