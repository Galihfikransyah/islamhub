<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>



<div class="container">
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#add">UPLOAD EBOOK</button><p>
</div>
    
<div id="add" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">UPLOAD EBOOK</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

      <form method="POST" action="<?php echo base_url(); ?>file/insert" enctype="multipart/form-data">
        <fieldset>
            <div class="form-group row">
                <label class="col-md-3 control-label">Judul</label>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="judul" required placeholder="Judul" required="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 control-label">Penulis</label>
                <div class="col-md-9">
                  <input class="form-control" type="text" name="penulis" required placeholder="penulis" required="">
                </div>
            </div>


            <div class="form-group row">
                <label class="col-md-3 control-label">Buku</label>
                <div class="col-md-9">
										<input class="form-control" type="file" name="upload" required placeholder="Buku" required="">
										NOTE : hanya extensi pdf
                </div>
            </div>
        </fieldset>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit">
      <i class="fa fa-save"></i>
      Submit
    </button>
      </form>
      </div>
    </div>
  </div>
</div>

<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">
            <table id="table_id" class="table table-striped table-bordered bgw" cellspacing="0" width="100%">
              <thead>
                <tr>
                    <th style="text-align:center;" require>NO</th>
                    <th style="text-align:center;" require>Judul</th>
                    <th style="text-align:center;" require>Penulis</th>
                    <!-- <th>Buku</th> -->
               <th style="text-align:center;">Aksi</th>
                  </p></th>
                </tr>
              </thead>
              <tbody>
						<?php
						$no = 1;
                        foreach($files as $file){
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $file->judul; ?></td>
                                <td><?php echo $file->penulis; ?></td>
                                <!-- <td><?php echo $file->filename; ?></td> -->
                                <td style="text-align:center;"><a href="<?php echo base_url().'file/download/'.$file->id; ?>" class="btn btn-success btn-sm"><span class="far fa-arrow-alt-circle-down"></a></td>
                                </tr>
                                <?php
                            }
                            ?>

                        </tbody>
            </table>
        </div>
        <script id="cid0020000219487547742" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 200px;height: 300px;">{"handle":"rumahkonsultasi","arch":"js","styles":{"a":"009900","b":100,"c":"FFFFFF","d":"FFFFFF","k":"009900","l":"009900","m":"009900","n":"FFFFFF","p":"10","q":"009900","r":100,"pos":"br","cv":1,"cvbg":"009900","cvw":200,"cvh":30,"ticker":1,"fwtickm":1}}</script>
    </div>
</div>
