<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<html>
    <center>
		<h5>LAPORAN DATA TUMBUH KEMBANG BALITA</h4>
	</center>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table-bordered table-md table">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Anak</th>
                                            <th>Bulan ke </th>
                                            <th>Panjang Bayi</th>
                                            <th>Berat Bayi</th>

                                        </tr>
                                        @php
                                            $i=1;
                                        @endphp
                                        @foreach ($progress as $k)
                                            <tr>
                                                <td>{{ $i++}}</td>
                                                <td value="{{ $k->id_anak }}">{{ $k->nama}}</td>
                                                <td>{{ $k->bulan_ke}}</td>
                                                <td>{{ $k->panjang_bayi}}</td>
                                                <td>{{ $k->berat_bayi}}</td>
                                                
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                    </html>