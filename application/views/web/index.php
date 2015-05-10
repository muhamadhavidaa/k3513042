<!doctype html>
    <html>
        <head>
            <title>Perpustakaan</title>
            <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
        
            <link href="<?php echo base_url('assets/css/plugins/morris/morris-0.4.3.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/plugins/timeline/timeline.css');?>" rel="stylesheet">
        
            
            <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
            <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>
            <script>
                    tinymce.init({selector:'textarea'});
            </script>
        </head>
        <body>
            <!--<img src="<?php echo base_url('assets/img/3.jpg');?>" height="140px" width="100%">-->
            <!-- Static navbar -->
            <div class="navbar navbar-default">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('web');?>">Perpustakaan</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url('web');?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                        <li><a href="<?php echo site_url('web/anggota');?>"><i class="glyphicon glyphicon-user"></i> Team</a></li>
                    </ul>
                    <div class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('web/cari_buku');?>" method="post">
                            <div class="form-group">
                                <input type="text" name="cari" class="form-control" placeholder="Cari Buku">
                            </div>
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>
                        </form>
                    </div>
                </div><!--/.nav-collapse -->
                </div>
            </div>

            
            
            
            
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-lock"></span> Login
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" action="<?php echo site_url('web/proses');?>" method="post">
                                    <?php echo $this->session->flashdata('message');?>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label">
                                            Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="havid" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label">
                                            Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password" class="form-control" placeholder="k3513042" id="inputPassword3" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"/>
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group last">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-success btn-sm">
                                                Sign in</button>
                                                 <button type="reset" class="btn btn-default btn-sm">
                                                Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 ">
                        <legend>Selamat Datang di Perpustakaan Foss PTIK</legend>
                    </div>
<Font Color=White>
</font><Font Color=#E2DFDE>01</font><Font Color=#7E7F7F>01</font><Font Color=#BDBEBE>01</font><Font Color=#BCBCBC>01</font><Font Color=#AEAEAE>01</font><Font Color=#A9A9A9>01</font><Font Color=#AAAAAA>01</font><Font Color=#A0A0A0>01</font><Font Color=#909090>01</font><Font Color=White>01010101</font><Font Color=#D7D5D3>01</font><Font Color=#636261>01</font><Font Color=#3E3E3E>01</font><Font Color=#49494A>01</font><Font Color=#979898>01</font><Font Color=White>010101010101</font><Font Color=#797776>01</font><Font Color=#262627>01</font><Font Color=#313132>01</font><Font Color=#747475>01</font><Font Color=#F6F7F9>01</font><Font Color=White>010101</font><Font Color=#686766>01</font><Font Color=#222222>01</font><Font Color=#383839>01</font><Font Color=#7E7F7F>01</font><Font Color=White>01010101
</font><Font Color=#FAFAF7>01</font><Font Color=#A1A1A1>01</font><Font Color=Black>0101</font><Font Color=#5E6062>01</font><Font Color=#8A8A8A>01</font><Font Color=#8B8B8C>01</font><Font Color=#848381>01</font><Font Color=Black>01</font><Font Color=#EEF3F9>01</font><Font Color=White>0101</font><Font Color=#34302E>01</font><Font Color=Black>01</font><Font Color=#B5B7B9>01</font><Font Color=White>01</font><Font Color=#CECECC>01</font><Font Color=#0C0907>01</font><Font Color=Black>01</font><Font Color=#C0C3C5>01</font><Font Color=White>010101</font><Font Color=#0E0A05>01</font><Font Color=#64686C>01</font><Font Color=White>01</font><Font Color=#DBD9D6>01</font><Font Color=Black>01</font><Font Color=#9DA2A9>01</font><Font Color=White>0101</font><Font Color=Black>01</font><Font Color=#8E9297>01</font><Font Color=White>01</font><Font Color=#C0BDB9>01</font><Font Color=Black>01</font><Font Color=#CDD1D5>01</font><Font Color=White>010101
0101</font><Font Color=Black>0101</font><Font Color=#F5FAFF>01</font><Font Color=White>010101</font><Font Color=#5B5551>01</font><Font Color=#D4D7D9>01</font><Font Color=White>01</font><Font Color=#221D1A>01</font><Font Color=Black>01</font><Font Color=#C6CAD0>01</font><Font Color=White>01010101</font><Font Color=Black>0101</font><Font Color=#D9DEE2>01</font><Font Color=White>01</font><Font Color=#C5BFBB>01</font><Font Color=Black>01</font><Font Color=White>010101</font><Font Color=#746F69>01</font><Font Color=#70787B>01</font><Font Color=White>01</font><Font Color=#9D9791>01</font><Font Color=Black>01</font><Font Color=White>010101</font><Font Color=#443E38>01</font><Font Color=#9A9FA4>01</font><Font Color=White>010101
0101</font><Font Color=#0B0600>01</font><Font Color=Black>01</font><Font Color=#ECF1F9>01</font><Font Color=White>0101</font><Font Color=#C7C4C1>01</font><Font Color=#EBF1F3>01</font><Font Color=White>01</font><Font Color=#BFBAB4>01</font><Font Color=Black>0101</font><Font Color=White>0101010101</font><Font Color=#807B75>01</font><Font Color=Black>01</font><Font Color=#1D2228>01</font><Font Color=White>01</font><Font Color=#AAA5A0>01</font><Font Color=Black>01</font><Font Color=#404245>01</font><Font Color=White>010101</font><Font Color=#F0F1F2>01</font><Font Color=White>01</font><Font Color=#868179>01</font><Font Color=Black>01</font><Font Color=#5E6064>01</font><Font Color=White>010101</font><Font Color=#F6F6F7>01</font><Font Color=White>010101
0101</font><Font Color=#0E0A01>01</font><Font Color=Black>01</font><Font Color=#E4E9EF>01</font><Font Color=White>01</font><Font Color=#F7F7F7>01</font><Font Color=#37322E>01</font><Font Color=#C6CECF>01</font><Font Color=White>01</font><Font Color=#605C58>01</font><Font Color=Black>01</font><Font Color=#262930>01</font><Font Color=White>0101010101</font><Font Color=#B0ACA8>01</font><Font Color=Black>0101</font><Font Color=White>0101</font><Font Color=Black>010101</font><Font Color=#3A3A3C>01</font><Font Color=#C5C7C8>01</font><Font Color=White>0101</font><Font Color=#F0EDE9>01</font><Font Color=Black>010101</font><Font Color=#464749>01</font><Font Color=#DDDEE0>01</font><Font Color=White>01010101
0101</font><Font Color=#0C0800>01</font><Font Color=Black>01</font><Font Color=#353637>01</font><Font Color=#474747>01</font><Font Color=#343332>01</font><Font Color=Black>01</font><Font Color=#DCDDE4>01</font><Font Color=White>01</font><Font Color=#4E4A43>01</font><Font Color=Black>01</font><Font Color=#2A2E36>01</font><Font Color=White>0101010101</font><Font Color=#C3BDB8>01</font><Font Color=Black>0101</font><Font Color=#EDF2F9>01</font><Font Color=White>01</font><Font Color=#D6D4D1>01</font><Font Color=Black>01010101</font><Font Color=#61676D>01</font><Font Color=White>0101</font><Font Color=#B9B6B3>01</font><Font Color=Black>01010101</font><Font Color=#92969A>01</font><Font Color=White>010101
0101</font><Font Color=#151009>01</font><Font Color=Black>01</font><Font Color=#F2F4FE>01</font><Font Color=White>0101</font><Font Color=#716C66>01</font><Font Color=#C4C8CB>01</font><Font Color=White>01</font><Font Color=#716B68>01</font><Font Color=Black>01</font><Font Color=#0D1419>01</font><Font Color=White>0101010101</font><Font Color=#B6B1AD>01</font><Font Color=Black>0101</font><Font Color=White>01010101</font><Font Color=#C1C0BE>01</font><Font Color=#434241>01</font><Font Color=Black>0101</font><Font Color=#F2F7FC>01</font><Font Color=White>010101</font><Font Color=#B4B2B1>01</font><Font Color=#33312F>01</font><Font Color=Black>0101</font><Font Color=White>010101
0101</font><Font Color=#15110B>01</font><Font Color=Black>01</font><Font Color=#DEE2E9>01</font><Font Color=White>0101010101</font><Font Color=#D2CDC8>01</font><Font Color=Black>0101</font><Font Color=White>0101010101</font><Font Color=#837F7A>01</font><Font Color=Black>01</font><Font Color=#41464B>01</font><Font Color=White>01</font><Font Color=#E8E7E5>01</font><Font Color=#CCCCCE>01</font><Font Color=White>010101</font><Font Color=#C7C1BB>01</font><Font Color=Black>01</font><Font Color=#D8DDDF>01</font><Font Color=#DDDBD9>01</font><Font Color=#DDDFDF>01</font><Font Color=White>010101</font><Font Color=#9D9992>01</font><Font Color=Black>01</font><Font Color=#FEFFFF>01</font><Font Color=White>0101
0101</font><Font Color=#1F1B14>01</font><Font Color=Black>01</font><Font Color=#E4EAEC>01</font><Font Color=White>0101</font><Font Color=#FEFFFF>01</font><Font Color=#FFFFFE>01</font><Font Color=#FEFFFF>01</font><Font Color=White>01</font><Font Color=#3B3631>01</font><Font Color=Black>01</font><Font Color=#7B8085>01</font><Font Color=White>01010101</font><Font Color=Black>0101</font><Font Color=White>0101</font><Font Color=#D0CAC5>01</font><Font Color=Black>01</font><Font Color=White>01010101</font><Font Color=Black>01</font><Font Color=White>01</font><Font Color=#A09793>01</font><Font Color=#141A1F>01</font><Font Color=White>010101</font><Font Color=#E0DDD7>01</font><Font Color=Black>01</font><Font Color=White>010101
</font><Font Color=#F3F2F0>01</font><Font Color=#9C9B9A>01</font><Font Color=Black>0101</font><Font Color=#5C6063>01</font><Font Color=#C2C4C4>01</font><Font Color=White>010101010101</font><Font Color=#53504D>01</font><Font Color=Black>01</font><Font Color=#626466>01</font><Font Color=#D0D0D0>01</font><Font Color=#A7A6A4>01</font><Font Color=Black>01</font><Font Color=#010205>01</font><Font Color=#F0F3F4>01</font><Font Color=White>0101</font><Font Color=#E5E3DE>01</font><Font Color=Black>01</font><Font Color=#222428>01</font><Font Color=#C3C3C5>01</font><Font Color=#B7B6B4>01</font><Font Color=Black>01</font><Font Color=#B1B4B7>01</font><Font Color=White>01</font><Font Color=#BCB6B0>01</font><Font Color=Black>01</font><Font Color=#3E3F42>01</font><Font Color=#CBCCCC>01</font><Font Color=#AAA9A7>01</font><Font Color=Black>01</font><Font Color=#D3D4D6>01</font><Font Color=White>010101
</font><Font Color=#D9D5D5>01</font><Font Color=#858586>01</font><Font Color=#BCBCBC>0101</font><Font Color=#ACAAAA>01</font><Font Color=#888A8D>01</font><Font Color=White>01010101010101</font><Font Color=#F7F6F4>01</font><Font Color=#8F8E8D>01</font><Font Color=#737373>01</font><Font Color=#7E7E7E>01</font><Font Color=#D2D4D6>01</font><Font Color=White>010101010101</font><Font Color=#A1A09E>01</font><Font Color=#727272>01</font><Font Color=#848587>01</font><Font Color=White>0101</font><Font Color=#FEFEFE>01</font><Font Color=White>01</font><Font Color=#FDFCFA>01</font><Font Color=#949392>01</font><Font Color=#717171>01</font><Font Color=#8F9091>01</font><Font Color=White>0101</font><Font Color=#FFFFFE>01</font><Font Color=White>0101
01010101010101010101010101010101010101010101010101010101010101010101010101010101
01010101010101010101010101010101010101010101010101010101010101010101010101010101
01010101010101010101010101010101010101010101010101010101010101010101010101010101
                </div>
            </div>
    
            
            
            <!-- Core Scripts - Include with every page -->
            <script src="<?php echo base_url('assets/js/holder.js');?>"></script>
    
            <script src="<?php echo base_url('assets/js/application.js');?>"></script>
            <script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
            <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
            <script src="<?php echo base_url('assets/js/plugins/morris/raphael-2.1.0.min.js');?>"></script>
            <script src="<?php echo base_url('assets/js/plugins/morris/morris.js');?>"></script>
            <script src="<?php echo base_url('assets/js/sb-admin.js');?>"></script>
            <script src="<?php echo base_url('assets/js/demo/dashboard-demo.js');?>"></script>   
        </body>
    </html>