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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8 align-self-center">
                <?php if (session()->getFlashdata('login')):?>
                    <div class="alert alert-primary" role="alert">
                        <?=session()->getFlashdata('login');?>
                    </div>
                <?php endif;?>
                <div class="card">
                    <div class="card-header">
                        <p class="user">Verifikasi Akun</p>
                    </div>
                    <div class="card-body">
                        <form action="<?=base_url('/verify/add_verify');?>" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" readonly class="form-control-plaintext" name="email" placeholder="name@example.com" value="<?=$email;?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Buat Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Input Passsword">
                            </div>
                            <div class="row">
                                <div class="mb-3 d-grid gap-2 col-6 mx-auto">
                                    <button type="submit" class="btn btn-primary me-md-2">Verifikasi</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<?= $this->endSection();?>
