@extends('utama/layout/main')
@section('title', 'Peserta')
@section('container')

<section class="p-5 tm-container-outer tm-bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">
                <h2 class="text-uppercase mb-4">Data Peserta Terdaftar dan Sudah Terverifikasi</h2>
                <p class="mb-4">Nullam auctor, sapien sit amet lacinia euismod, lorem magna lobortis massa, in tincidunt
                    mi metus quis lectus. Duis nec lobortis velit. Vivamus id magna vulputate, tempor ante eget, tempus
                    augue. Maecenas ultricies neque magna.</p>
            </div>
        </div>
    </div>
</section>

<div class="container" style="margin-top: 20px;">
    <div class="app-main__outer">
        <div class="app-main__inner">
            <!-- Table -->
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Data Peserta Terdaftar</div>
                        <div class="table-responsive">
                            <div class="container" style="margin-top: 20px; margin-bottom: 20px;">

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Tgl Daftar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($peserta as $data)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$data->nama}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->tgl()}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>
</div>
@endsection()
