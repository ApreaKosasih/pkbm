
<body>
    <div class="row px-0 mx-0">
        <div class="col-md-12 px-0">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="row px-0 mx-0">
              <div class="col-md-10 offset-1">
                <div class="carousel-inner">
                  <?php $no =  1; foreach($slider->result() as $s): ?>
                  <div class="carousel-item <?php echo ($no == 1) ? 'active' : '' ?>">
                    <img src="<?php echo base_url().'uploads/'.$s->img_name ?>" class="d-block w-100" alt="<?php echo $s->alt_img ?>">
                  </div>
                  <?php $no++; endforeach; ?>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </div>
    <div class="bg-light pt-5 pb-5" style="padding: 10px 0; box-shadow: 1px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-header" style="background-color:<?php echo $warnasd->row()->bg_color ?>;color:<?php echo $warnasd->row()->font_color ?>;">
                          <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SD</h4>
                        </div>
                        <div class="card-body p-1">
                          <ul class="list-group list-group-flush">
                            <?php foreach($sd->result() as $d): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $d->jalur_jenjang ?></li>
                            <?php endforeach; ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-header" style="background-color:<?php echo $warnasmp->row()->bg_color ?>;color:<?php echo $warnasmp->row()->font_color ?>;">                   
                        <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SMP</h4>
                        </div>
                        <div class="card-body p-1">
                          <ul class="list-group list-group-flush">
                            <?php foreach($smp->result() as $p): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $p->jalur_jenjang ?></li>
                            <?php endforeach; ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                    </div>
                    <br>
                    <div class="row">
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-header" style="background-color:<?php echo $warnasma->row()->bg_color ?>;color:<?php echo $warnasma->row()->font_color ?>;">
                          <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SMA</h4>
                        </div>
                        <div class="card-body p-1">
                          <ul class="list-group list-group-flush">
                            <?php foreach($sma->result() as $a): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $a->jalur_jenjang ?></li>
                            <?php endforeach; ?>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-header" style="background-color:<?php echo $warnasmk->row()->bg_color ?>;color:<?php echo $warnasmk->row()->font_color ?>;">
                          <p class="mb-0">Pendaftaran Online Jenjang</p>
                          <h4>Jalur SMK</h4>
                        </div>
                        <div class="card-body p-1">
                          <ul class="list-group list-group-flush">
                          <?php foreach($smk->result() as $k): ?>
                            <li class="list-group-item"><i aria-hidden="true" class="fa fa-check-square-o"></i><?php echo $k->jalur_jenjang ?></li>
                            <?php endforeach; ?>
                         </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 form-regist py-3">
                    <div class="card">
                        <div class="card-body">
                            <form id="regForm" action="<?php echo base_url() ?>home/savepd" method="post">
                                <h1>Form Daftar</h1>
                                <div class="tab">
                                    <div class="form-group">
                                      <label for="nis">NIS</label>
                                      <input type="number" placeholder="NIS" class="form-control" name="nis">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                      <label for="nisn">NISN</label>
                                        <input type="number" placeholder="NISN" class="form-control" name="nisn">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                      <label for="nama">Nama</label>
                                        <input type="text" placeholder="Nama" class="form-control" name="nama">
                                    </div>
                                    
                                </div>
                                <div class="tab">
                                  <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                      <input type="text" placeholder="Tempat Lahir" class="form-control" name="tempat_lahir">
                                  </div>
                                  <br>
                                  <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" placeholder="Tanggal Lahir" class="form-control" name="tanggal_lahir">
                                  </div>
                                    <br>
                                    <div class="form-group">
                                      <label for="jk">Jenis Kelamin</label>
                                      <select name="jk" id="jk" class="form-select">
                                        <option value="-">Jenis Kelamin</option>
                                        <option value="laki-laki">Laki - Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                      </select>
                                  </div>
                                    
                                </div>
                                <div class="tab">
                                    <div class="form-group">
                                      <label for="nik">NIK</label>
                                    <input type="number" placeholder="NIK" class="form-control" name="nik">
                                  </div>
                                    <br>
                                    <div class="form-group">
                                      <label for="agama">Agama</label>
                                      <select name="agama" id="agama" class="form-select">
                                        <option value="Islam">Islam</option>
                                        <option value="protestan">Kristen - Protestan</option>
                                        <option value="katholik">Kristen - Katholik</option>
                                        <option value="Hindhu">Hindhu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghuchu">Konghuchu</option>
                                      </select>
                                  </div>
                                  <br>
                                    <div class="form-group">
                                      <label for="nama_ayah">Nama Ibu</label>
                                      <input type="text" placeholder="Nama Ibu" class="form-control" name="nama_ibu">
                                    </div>
                                    
                                </div>
                                <br>
                                <div class="tab">
                                  <div class="form-group">
                                    <label for="nama_ayah">Nama Ayah</label>
                                    <input type="text" placeholder="Nama Ayah" class="form-control" name="nama_ayah">
                                  </div>
                                  <br>
                                  <div class="row">
                                    <label for="nohp">Nomor Pribadi</label>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <input type="text" placeholder="No HP" class="form-control" name="no_hp">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <input type="text" placeholder="No WhatsApp" class="form-control" name="no_wa">
                                        </div>
                                    </div>
                                </div>
                                  <br>
                                  <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="3" placeholder="Alamat"></textarea>
                                </div>
                                <br>
                                </div>
                                <div style="overflow:auto;">
                                    <div style="float:right;">
                                        <button type="button" id="prevBtn" class="btn btn-primary " onclick="nextPrev(-1)">Previous</button>
                                        <button type="button" id="nextBtn" class="btn btn-primary " onclick="nextPrev(1)">Next</button>
                                    </div>
                                </div>
                                <!-- Circles which indicates the steps of the form: -->
                                <div style="text-align:center;margin-top:40px;">
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                    <span class="step"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="container py-5">
        <div class="row">
          <div class="col-md-9">
            <h1 class="text-center">Peta Sekolah</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
          <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $embed_lokasi ?>"></iframe>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-header bg-kontak text-white">Info & Kontak</div>
              <div class="card-body">
                <ul>
                  <?php foreach($kontak->result() as $r): ?>
                  <li><a href="#" style="text-decoration:none"><?= $r->tipe.' - '.$r->kontak ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-light py-5 mb-5">
        <div class="container">
          <div class="row">
            <h3>Postingan Terbaru</h3>
          </div>
        <div class="row mx-0 mt-3">
            <?php foreach($posts->result() as $p): ?>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                  <img src="<?php echo base_url().'uploads/'.$p->image ?>" class="card-img-top" alt="<?php echo $p->alt_img ?>" width="100%" height="140">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $p->title ?></h5>
                    <p>
                      <?php echo word_limiter($p->description,19); ?>
                      <a href="<?php echo base_url().'home/detail_post/'.$p->id_posts.'/'.str_replace(' ','-',strtolower($p->title)) ?>">Selengkapnya</a>
                   </p>
                  </div>
              </div>
            </div>
            <?php endforeach; ?>
        </div>
      </div>
    </div>
    
