<script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script>
    function deletedata(table, colname, id) {

        if (confirm(table, colname, id)) {
            document.getElementById("tr" + id).style.display = "none";

            if (table == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "<?php echo base_url() ?>admin/products/delete?table=" + table + "&idcolom=" + colname + "&id=" + id, true);
            xmlhttp.send();
        } else {
            return false;
        }
    }
</script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-users"></i> Products Options
            <small>Edit Details</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->



                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <?php
                    $attributes = array('id' => 'editproducts', 'method' => 'post', 'class' => 'form_horizontal');
                    echo form_open_multipart('admin/products/editproducts/', $attributes);
                    ?>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="role">Select Course Category</label>
                                    <select class="form-control required" id="role" name="role" onchange="return subcategory(this.value)" required>

                                        <?php
                                        $subcat = $training_data['cat_id'];
                                        if (!empty($cat_data)) {
                                            foreach ($cat_data as $rl) {
                                        ?>
                                                <option value="<?php echo $rl['id']; ?>" <?php if ($rl['id'] == $subcat) {
                                                                                                echo "selected=selected";
                                                                                            } ?>><?php echo $rl['cat_name']; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="role">Select Subcatagory</label>
                                    <select class="form-control required" id="ajaxvalue" name="subcatid" required>


                                        <option value="<?php echo $training_data['subcat_id']; ?>"><?php echo $training_data['subcat_name']; ?></option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control required" value="<?php echo $training_data['title']; ?>" id="title" name="title">
                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label>Products Images</label>
                                        <input type="file" name="productimages[]" multiple />
                                        <?php foreach ($training_dataa as $img) : ?>
                                            <div class="form-group" id="tr<?= $img['id'] ?>">
                                                <img src="<?php echo base_url() . 'uploads/products/' . $img['productimages']; ?>" width="100" height="80"> <a class="delete" onclick="deletedata('tbl_products_img','id','<?= $img['id'] ?>')"><i class="fa fa-trash"></i></a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control required" value="<?php echo $training_data['price']; ?>" id="price" name="price">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="shorttitle">shortDescription</label>
                                    <textarea class="form-control required" id="shorttitle" name="shorttitle"><?php echo $training_data['shorttitle']; ?></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control required " id="description" name="description"><?php echo $training_data['description']; ?></textarea>

                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <input type="text" class="form-control required" value="<?php echo $training_data['type']; ?>" id="type" name="type" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">E no.</label>
                                    <input type="text" class="form-control required" value="<?php echo $training_data['eno']; ?>" id="eno" name="eno" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="casno">CAS NO.</label>
                                    <input type="text" class="form-control required" value="<?php echo $training_data['casno']; ?>" id="casno" name="casno" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="qty">QTY</label>
                                    <input type="text" class="form-control required" value="<?php echo $training_data['qty']; ?>" id="qty" name="qty" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="minorder">Minorder</label>
                                    <input type="text" class="form-control required" value="<?php echo $training_data['minorder']; ?>" id="minorder" name="minorder" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="packaging">Packaging</label>
                                    <input type="text" class="form-control required" value="<?php echo $training_data['packaging']; ?>" id="packaging" name="packaging" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="certi1">Certi1</label>
                                    <input type="file" class="form-control required " id="certi1" name="c1image">
                                    <img src="<?php echo base_url() . 'uploads/certi/' . $training_data['certi1']; ?>" width="100" height="80">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="c2image">Certi2</label>
                                    <input type="file" class="form-control required " id="c2image" name="c2image">
                                    <img src="<?php echo base_url() . 'uploads/certi/' . $training_data['certi2']; ?>" width="100" height="80">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Certi3">Certi3</label>
                                    <input type="file" class="form-control required " id="Certi3" name="c3image">
                                    <img src="<?php echo base_url() . 'uploads/certi/' . $training_data['certi3']; ?>" width="100" height="80">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="specs">Specification</label>
                                    <textarea class="form-control required" id="specs" name="specs"><?php echo $training_data['specs']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="faq">FAQ</label>
                                    <textarea class="form-control required" id="faq" name="faq"><?php echo $training_data['faq']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Submit" name="submit" />
                        <input type="reset" class="btn btn-default" value="Reset" />
                        <input type="hidden" value="<?php echo $training_data['id']; ?>" name="id" />

                    </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                $this->load->helper('form');
                $error = $this->session->flashdata('error');
                if ($error) {
                ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php } ?>
                <?php
                $success = $this->session->flashdata('success');
                if ($success) {
                ?>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php } ?>

                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>



<script type="text/javascript">
    CKEDITOR.replace('description');
</script>
<script type="text/javascript">
    CKEDITOR.replace('shorttitle');
</script>


<script>
    function subcategory(catid) {
        var formData = {
            catid: catid
        }; //Array 

        $.ajax({
            url: "<?= base_url() ?>admin/course_subcategory2/subcatdata",
            type: "POST",
            data: formData,
            success: function(data, textStatus, jqXHR) {
                $("#ajaxvalue").html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {

            }
        });

    }
</script>