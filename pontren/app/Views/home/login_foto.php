<?= $this->extend('template/default');?>
<?= $this->section('content');?>
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Pontren Darul Muttaqin</div>
        <div class="masthead-heading text-uppercase">Ahlan Wa Sahlan</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Lihat Foto</a>
    </div>
</header>

<section id="services">
    <div class="container">
    <div class="p-3 mb-4 bg-light rounded-3">
      <div class="container-fluid py-3">
      <?php if (session()->getFlashdata('login')):?>
            <div class="alert alert-primary" role="alert">
                <?=session()->getFlashdata('login');?>
            </div>
        <?php endif;?>
        <h1 class="display-5 fw-bold">Fitur Baru Di Pontren Darul Muttaqin</h1>
        <p>Fitur Baru Di Pontren Darul Muttaqin<br>Bagi Santri Yang Ingin Mendownload Foto-Foto Kegiatan Diharap Untuk Login Terlebih Dahulu</p>
        <p>Jika Belum Mempunyai Akun Diharap Untuk Daftar Dengan Email Yang Aktif Untuk Verfikasi</p>
        <p>Jika Para Santri Mengalami Kendala <a href="https://api.whatsapp.com/send/?phone=6283872727929&text=Halo%20Admin%20Pontren" class="text-black"> Hubungi</a>  Azzarnuji Sebagai Admin Website Pontren Darul Muttaqin <a href="https://api.whatsapp.com/send/?phone=6283872727929&text=Halo%20Admin%20Pontren" class="btn btn-primary"> Chat</a></p>
        <button class="btn btn-primary btn-lg" type="button" id="btnLanjut">Login</button>
        <button class="btn btn-primary btn-lg" type="button" id="btnDaftar">Daftar</button>
      </div>
    </div>
        

    </div>
    <div class="container mt-3" id="login" style="display: none;">
        <div class="row justify-content-center">
            <div class="col-8 align-self-center">
                <br>    
                <div class="card">
                    <div class="card-header">
                        <p class="user">LOGIN</p>
                    </div>
                    <div class="card-body">
                        <form action="<?=base_url('/home/request_login');?>" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Input Passsword">
                            </div>
                            <div class="row">
                                <div class="mb-3 d-grid gap-2 col-6 mx-auto">
                                    <button type="submit" class="btn btn-primary me-md-2">Login</button>
                                    
                                </div>
                                <div class="mb-3 d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-primary me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Daftar</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Daftar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('/home/request_add');?>" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Buat Password Anda</label>
                <input type="password" class="form-control" name="password" placeholder="Input Password" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Anda</label>
                <input type="text" class="form-control" name="nama" placeholder="Input Nama" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                <input type="number" class="form-control" name="no_telp" placeholder="Input Nomor Telepon" required>
            </div>
            <div class="row">
                <div class="mb-3 d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary me-md-2">Daftar</button>
                    
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function (){
        $('html, body').animate({
            scrollTop: $("#services").offset().top
        }, 500);
        $("#btnLanjut").click(function (){
            $('#login').css('display','block');
            $('html, body').animate({
                scrollTop: $("#login").offset().top
            }, 500);
        });
    });
    $('#btnDaftar').on('click',function(){
        $('#exampleModal').modal('show');
    })
</script>
<?= $this->endSection();?>
