@extends('layout/client')
@section('judul')
    Asesor | LSP POLITAP
@endsection

@section('layanan')
    active
@endsection

@section('css')
    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th,
        #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            background-color: #f1f1f1;
        }
    </style>
@endsection

@section('javascript')
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endsection

@section('isi')
    <!-- ***** Header ***** -->
    <div style="background-image: url('{{ asset('general/assets/images/head1.jpg') }}')" class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fas fa-users"></i> Asesor </h1>
                    <span>Lembaga Sertifikasi Profesi Politeknik Negeri Ketapang</span>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Akhir Header ***** -->

    <!-- ***** Konten ***** -->
    <!-- Asesor -->
    <body class="hm-gradient">
        <main>
            <div class="container mt-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."
                            title="Type in a name">
                        <table id="myTable" class="table table-striped">
                            <tr class="header" style="background-color: #c20303c5">
                                <th style="width:10px; color: #ddd">#</th>
                                <th style="width:60%; color: #ddd">Nama</th>
                                <th style="width:40%; color: #ddd">Kode Asesor</th>
                            </tr>
                            @foreach ($asesor as $asu)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $asu->nama }}</td>
                                    <td>{{ $asu->nik }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <!-- ***** Akhir Konten ***** -->
@endsection
