<div class="navbar navbar-inverse navbar-fixed-top bg-orange-600">
	<div class="navbar-header" >
		<a class="navbar-brand" href="#" style="padding: 0px !important; background-color: ">
			<img src="{{ asset('img/logo.png') }}" style="padding: 10px !important;height: 100%; background-color: ">
			<span style="font-weight: bold; color: white">
				<!-- {{ strtoupper(env('APP_NAME')) }}        -->
			</span>
		</a>

		<ul class="nav navbar-nav visible-xs-block">
			<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
		</ul>
	</div>

	<div class="navbar-collapse collapse" id="navbar-mobile">
		<ul class="nav navbar-nav"> 
			<li>
				<p class="navbar-text">
					<a href="javascript:;" onclick="$('#ModalSettingApp').modal('show');">
						<span class="badge badge-info text-dark" style="color: white">
							<small>
								{{ @Auth::user()->rusun->kode_rusun }} - {{ @Auth::user()->rusun->nama ?? 'FILTER DATA DISINI' }}
							</small>
						</span>
					</a>
				</p>
			</li>
		</ul>

		<div class="navbar-right">
			<p class="navbar-text">Selamat Datang {{ Auth::user()->name }} - <b>{{ @Auth::user()->role->nama }}</b></p>
			<p class="navbar-text"><span class="label bg-success-400">Online</span></p>

			<ul class="nav navbar-nav navbar-right">

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{ asset('assets/images/placeholder.jpg')}}" alt="">
						<span> {{ Auth::user()->name }} </span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="{{ url('admin/my-profile') }}"><i class="icon-user-plus"></i> My profile</a></li>
						<li class="divider"></li>
						<li><a href="#" onclick="$('#logout-form').submit();"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf</form>
				</li>
			</ul>
		</div>
	</div>
</div>



<!-- Second navbar -->
<div class="navbar navbar-default " id="navbar-second">
	<ul class="nav navbar-nav no-border visible-xs-block">
		<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
	</ul>

	<div class="navbar-collapse collapse" id="navbar-second-toggle">
		<ul class="nav navbar-nav">
			<li class="{{ Request::is('*dashboard*') ? 'active' : '' }}">
				<a href="{{ url('/dashboard') }}">
					<i class="icon-home4"></i> <span>Dashboard</span>
				</a>
			</li>
            <?php
            if(Auth::user()->role_id == 1){
            	?>
				<li class="{{ Request::is('*monitoring*') ? 'active' : '' }}">
					<a href="{{ url('/admin/monitoring') }}">
						<i class="icon-screen3"></i> <span>Monitoring</span>
					</a>
				</li>
            	<li class="dropdown menu_master_user">
            		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
            			<i class="icon-files-empty2 position-left"></i> Master Data <span class="caret"></span>
            		</a>

            		<ul class="dropdown-menu width-200">
            			<!-- <li class="dropdown-header">Optional layouts</li> -->
						<li class="{{ Request::is('*master_user') ? 'active' : '' }}">
            				<a href="{{ url('/admin/master_user') }}">
            					
            					Master User
            				</a>
            			</li>
						<li class="{{ Request::is('*master_role*') ? 'active' : '' }}">
            				<a href="{{ url('/admin/master_role') }}">
            					
            					Master Role
            				</a>
            			</li>
            		</ul>
            	</li>
				<li class="dropdown menu_master_user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-file-download2 position-left"></i> Permohonan <span class="caret"></span>
					</a>
					<ul class="dropdown-menu width-200">
						<li class="{{ Request::is('*permohonan-masuk*') ? 'active' : '' }}">
							<a href="{{ route('permohonan-masuk') }}" > 
								<span> Permohonan Masuk </span>
							</a>
						</li> 
						<li class="{{ Request::is('*permohonan-antrian*') ? 'active' : '' }}">
							<a href="{{ route('permohonan-antrian') }}" > 
								<span> Permohonan Antrian </span>
							</a>
						</li> 
						<li class="{{ Request::is('*permohonan-setuju*') ? 'active' : '' }}">
							<a href="{{ route('permohonan-setuju') }}" > 
								<span> Permohonan Setuju </span>
							</a>
						</li> 
						<li class="{{ Request::is('*permohonan-tolak*') ? 'active' : '' }}">
							<a href="{{ route('permohonan-tolak') }}" > 
								<span> Permohonan Tolak </span>
							</a>
						</li> 
					</ul> 
				</li>
 
					<ul class="nav navbar-nav">
						<li class="{{ Request::is('*laporan_harian*') ? 'active' : '' }}">
							<a href="{{ url('/admin/laporan_harian') }}" > 
								<i class=" icon-file-text"></i><span> Laporan Harian </span>
							</a>
						</li>  
					</ul>  
				<li class="dropdown menu_master_user">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-file-download2 position-left"></i> Laporan Keluhan <span class="caret"></span>
					</a>
					<ul class="dropdown-menu width-200">
						<li class="{{ Request::is('*laporan_keluhan/masuk*') ? 'active' : '' }}">
							<a href="{{ url('/admin/laporan_keluhan/masuk') }}" > 
								<span> Laporan Masuk </span>
							</a>
						</li> 
						<li class="{{ Request::is('*laporan_keluhan/survey*') ? 'active' : '' }}">
							<a href="{{ url('/admin/laporan_keluhan/survey') }}" > 
								<span> Laporan Survey </span>
							</a>
						</li>
						<li class="{{ Request::is('*laporan_keluhan/proses*') ? 'active' : '' }}">
							<a href="{{ url('/admin/laporan_keluhan/proses') }}" > 
								<span> Laporan Proses </span>
							</a>
						</li> 
						<li class="{{ Request::is('*laporan_keluhan/selesai*') ? 'active' : '' }}">
							<a href="{{ url('/admin/laporan_keluhan/selesai') }}" > 
								<span> Laporan Selesai </span>
							</a>
						</li> 
					</ul> 
				</li>

            	<li class="dropdown menu_master_user">
            		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
            			<i class="icon-home2 position-left"></i> Data Rusun <span class="caret"></span>
            		</a>
            		<ul class="dropdown-menu width-200">
						<li class="{{ Request::is('*master_kategori_rusun') ? 'active' : '' }}">
            				<a href="{{ url('/admin/master_kategori_rusun') }}">
            					
            					Kategori Rusun
            				</a>
            			</li>
						<li class="{{ Request::is('*master_rusun') ? 'active' : '' }}">
            				<a href="{{ url('/admin/master_rusun') }}">
            					
            					Rusun
            				</a>
            			</li> 
						<li class="{{ Route::is('rusun.index') ? 'active' : '' }}">
							<a href="{{ route('rusun.index') }}" > 
								Rusun (Landing Page)
							</a>
						</li>  

            			<li class="{{ Request::is('*master_lantai*') ? 'active' : '' }}">
            				<a href="{{ url('/admin/master_lantai') }}">
            					
            					Lantai
            				</a>
            			</li>

            			<li class="{{ Request::is('*master_wilayah*') ? 'active' : '' }}">
            				<a href="{{ url('/admin/master_wilayah') }}">
            					
            					Wilayah
            				</a>
            			</li>
            		</ul>
            	</li>
            <?php } ?>

			<li class="dropdown menu_master_user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-pencil position-left"></i> Pendataan <span class="caret"></span>
				</a> 
				<ul class="dropdown-menu width-200"> 
					<li class="{{ Request::is('*pendataan') ? 'active' : '' }}">
						<a href="{{ route('pendataan.index') }}">
							Raw Data Pendataan
						</a>
					</li> 
					<li class="{{ Request::is('*pendataan-analisa') ? 'active' : '' }}">
						<a href="{{ route('pendataan.analisa') }}">
							Analisa Pendataan
						</a>
					</li> 
				</ul>
			</li>

			<li class="{{ Request::is('*penghuni_rusun*') ? 'active' : '' }}">
				<a href="{{ url('/admin/penghuni_rusun') }}" ><i class=" icon-users"></i> <span>
					Penghuni Rusun
				</span></a>
			</li>
			<li class="dropdown menu_master_user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-files-empty2 position-left"></i> Data Tagihan <span class="caret"></span>
				</a>
				<ul class="dropdown-menu width-200">
					<li class="{{ Request::is('admin/tagihan') ? 'active' : '' }}">
						<a href="{{ url('/admin/tagihan') }}">
							
							Tagihan
						</a>
					</li>
					<li class="{{ Request::is('admin/cetaktagihan*') ? 'active' : '' }}">
						<a href="{{ url('/admin/cetaktagihan') }}">
							
							Tagihan Lunas
 						</a>
					</li>
					<li class="{{ Route::is('tagihan_va') ? 'active' : '' }}">
						<a href="{{ route('tagihan_va') }}">
							Tagihan (NEW MENU)
 						</a>
					</li>
				</ul>
			</li> 
			<li class="dropdown menu_master_user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-files-empty position-left"></i> Data Tagihan Listrik <span class="caret"></span>
				</a>
				<ul class="dropdown-menu width-200">
					<li class="{{ Request::is('admin/tagihan_listrik*') ? 'active' : '' }}">
						<a href="{{ url('/admin/tagihan_listrik') }}">
							
							Tagihan
						</a>
					</li>
					<li class="{{ Request::is('admin/cetaktagihan_listrik*') ? 'active' : '' }}">
						<a href="{{ url('/admin/cetaktagihan_listrik') }}">
							
							Tagihan Lunas
 						</a>
					</li> 
					<li class="{{ Request::is('*belumlunas_listrik*') ? 'active' : '' }}">
						<a href="{{ url('/admin/rekap_belumlunas_listrik') }}">
							
							Rekap Belum Lunas
 						</a>
					</li>
					<li class="{{ Request::is('*admin/rekap_listrik') ? 'active' : '' }}">
						<a href="{{ url('/admin/rekap_listrik') }}">	
							Rekap Harian
						 </a>
					</li>
				</ul>
			</li> 

			

			<li class="dropdown menu_master_user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-printer position-left"></i> Rekap Keuangan <span class="caret"></span>
				</a>
				<ul class="dropdown-menu width-200">
					<li class="{{ Request::is('*admin/rekap') ? 'active' : '' }}">
						<a href="{{ url('/admin/rekap') }}">
							
							Rekap Harian
 						</a>
					</li>
					<li class="{{ Request::is('*belumlunas*') ? 'active' : '' }}">
						<a href="{{ url('/admin/rekap_belumlunas') }}">
							
							Rekap Belum Lunas
 						</a>
					</li>
					<li class="{{ Request::is('admin/rekap_cetak_skrd*') ? 'active' : '' }}">
						<a href="{{ url('/admin/rekap_cetak_skrd') }}"> 
							Cetak SKRD
 						</a>
					</li> 
					<li class="{{ Request::is('admin/rekap_cetak_tbp*') ? 'active' : '' }}">
						<a href="{{ url('/admin/rekap_cetak_tbp') }}">
							
							Cetak TBP
 						</a>
					</li>
					<li class="{{ Request::is('admin/rekap_cetak_tbp_listrik*') ? 'active' : '' }}">
						<a href="{{ url('/admin/rekap_cetak_tbp_listrik') }}">
							
							Cetak TBP Listrik
 						</a>
					</li>
				</ul> 
			</li> 

			<li class="{{ Request::is('admin/tbp_va*') ? 'active' : '' }}">
				<a href="{{ url('/admin/tbp_va') }}">
					<i class="icon-files-empty2 position-left"></i>
					TBP VA, QRIS, CASH
				 </a>
			</li>

			<li class="{{ Request::is('admin/notifikasi*') ? 'active' : '' }}">
				<a href="{{ url('/admin/notifikasi') }}">
					<i class="icon-phone position-left"></i>
					Broadcast WA
				 </a>
			</li>
        </ul>
    </div>
</div>
<!-- /second navbar -->
