@extends('user.layouts.Master')
@section('content')
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<button-header :status="status"></button-header>
						</div>
						<hr>
						<div class="content">
							<div v-if="status" v-cloak>
								<form-kategori :datavalue="datavalue" token={{ csrf_token() }} urlform={{route('Post-Tambah-Data-Kategori')}} v-if="tipeform == 'create'"></form-kategori>
								<form-kategori :datavalue="datavalue" token={{ csrf_token() }} :urlform="urlform" v-else></form-kategori>
							</div>
							<div v-else>
								<table id="datatable" class="table table-striped">
                <thead>
                  <th>#</th>
									<th>Nama Kategori</th>
                	<th>Jumlah Produk</th>
                	<th>Aksi</th>
                </thead>
                <tbody>
									@foreach ($Kategori as $Index=>$DataKategori)
										<tr>
											<td>{{$Index+=1}}</td>
											<td>{{$DataKategori->nama_kategori}}</td>
											<td>{{count($DataKategori->Produk)}}</td>
											<td>
												<buttonedit-table iddata={{IDCryptHelper::Encrypt($DataKategori->id)}} url={{route('Post-Edit-Data-Kategori', ['id' => IDCryptHelper::Encrypt($DataKategori->id)])}}></buttonedit-table>
												<buttonhapus-table jumlah={{count($DataKategori->Produk)}} url={{route('Delete-Data-Kategori', ['id' => IDCryptHelper::Encrypt($DataKategori->id)])}}></buttonhapus-table>
											</td>
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
@endsection
