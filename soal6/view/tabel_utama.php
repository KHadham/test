<title>Manage user</title>
</head>
<body>
    <div style="padding-right: 0px;" class="container">
      <div class="row">
        <div class="col-md-12">
          <center>
          <h5 class="mt-5">SKILL MANAGER</h5>
          </center>
          <div class="table-responsive-lg">
            <table class="table table-bordered">
            <tbody>
                <tr>
                    <td colspan="2">
                    <form method="POST" action="<?php echo $basepath?>index/name_add">
                        <div class="row">
                          <div class="col-lg-10">
                            <input type="text" class="form-control" name="nama" placeholder="enter your programer nickname">
                          </div>
                          <div class="col-sm-2">
                            <button type="submit" value="submit"  class="btn btn-success btn-md" name="submit">Tambah</button>
                          </div>
                        </div>
                    </form>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>

          <table   class="table table-bordered table-striped">
            
              <?php
              $penampungan_data_sementara  = $mst->SedotDataDiTabelMaster();
              $no=1;
              while($list = $penampungan_data_sementara->FetchRow()){
              foreach($list as $key=>$val){
                  $key=strtolower($key);
                  $$key=$val;
                } 
              ?>
                <tr>
                  <td width="50%"><?php echo $no.'. '.$name ?></td>
                  <td rowspan="2">
                    <form method="POST" action="<?php echo $basepath?>index/skill_add">
                      <div class="row">
                        <div class="col-lg-8">
                          <input type="text" class="form-control" name="namaskill" placeholder="Masukan Kemampuan Programmer">
                          <input type="hidden" class="form-control" name="iduser" value="<?php echo $id ?>">
                        </div>
                        <div class="col-lg-2">
                          <button type="submit" value="tambah_skill"  class="btn btn-primary" name="submit_skill">Tambah</button>
                        </div>
                      </div>
                    </form>
                  </td>
                </tr>
                <tr>
                    <td>
                      <?php

                      $SKILL = "";
                        $dataskill = $skl->tabelskill($id);
                        while($list = $dataskill->FetchRow()){ 
                            $SKILL .= $list['skill_name'].', ';
                        }
                        echo substr($SKILL,0,-2);
                      ?>
                    </td>
                </tr>
            
            <?php $no++; }  ?>
          </table>
          <P ALIGN="right">
              
          </P>
        </div>
      </div>
    </div>
  </body>
</html>
