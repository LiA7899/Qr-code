
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pilih Pemeriksaan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pilih Pemeriksaan</li>
                        </ol>
                        <div class="row" align="center">
                            <div class="col-xl-12 col-md-6">
                                <div class="card col-md-8 text-danger mb-4 ease-in" style="border-color: red;">
                                    <div class="card-body" align="center"><b>Silahkan Pilih Beberapa Pemeriksaan Yang Diperlukan!!</b></div>
                                </div>
                            </div>
                        </div>
                        <form action="<?= base_url('pilihperiksa_c/filter_periksa/') ?>" method='post'>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-black mb-4">
                                    <div class="card-body">
	                                  <input type="checkbox" id="periksa1" name="periksa1">&nbsp;&nbsp;
									  <label for="periksa1">Pemeriksaan A</label>
	                                </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-black mb-4">
                                    <div class="card-body">
	                                  <input type="checkbox" id="periksa2" name="periksa2" value="">&nbsp;&nbsp;
									  <label for="periksa2">Pemeriksaan B</label>
	                                </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-black mb-4">
                                    <div class="card-body">
	                                  <input type="checkbox" id="periksa3" name="periska3" value="">&nbsp;&nbsp;
									  <label for="periksa3">Pemeriksaan C</label>
	                                </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-black mb-4">
                                    <div class="card-body">
	                                  <input type="checkbox" id="periksa4" name="periksa4" value="">&nbsp;&nbsp;
									  <label for="periksa4">Pemeriksaan D</label>
	                                </div>
                                </div>
                            </div>
                    		<div class="align-items-center mb-4" align="right">
                                <a class="btn btn-warning" type="reset" style="margin-right: 30px;" href=""><i class="fas fa-rotate-right" style="margin-right: 10px;"></i>Reset</a>
                                 <button class="btn btn-success"><i class="fas fa-arrow-right" style="margin-right: 10px;"></i>Lanjut</button>
                            </div>
                        </div>
                    </form>

                    	
