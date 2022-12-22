<?php include_once __DIR__.'/header.php'; ?>

<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">ثبت نسخه نشریه</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="build/php/inc/Add_Journal.php" onsubmit="return sub_mag_version();">
            <div class="card-body">
                <center>
                    <table style="width: 80%" class="table table-bordered">
                        <tr>
                            <th>نام نشریه*</th>
                            <td>
                                <select class="form-control select2" title="نام نشریه را انتخاب کنید"
                                        style="width: 100%;text-align: right" name="mag_name" id="mag_name">
                                    <option selected disabled>انتخاب کنید</option>

                                    <?php
                                    $query=mysqli_query($connection_mag,'select * from mag_info order by name asc');
                                    foreach ($query as $mag_items):
                                        ?>
                                        <option value="<?php echo $mag_items['id'] ?>"><?php echo $mag_items['name'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>شماره دوره انتشار (سال)*</th>
                            <td>
                                <input title="شماره دوره انتشار (سال)" type="number" class="form-control" id="publication_period_year" placeholder="شماره دوره انتشار (سال) را وارد کنید. (به عنوان مثال: سال 24)" name="publication_period_year">
                            </td>
                        </tr>
                        <tr>
                            <th>شماره دوره نشریه در سال*</th>
                            <td>
                                <input title="شماره دوره نشریه در سال" type="number" class="form-control" id="publication_period_number" placeholder="مثلا شماره 2" name="publication_period_number">
                            </td>
                        </tr>
                        <tr>
                            <th>شماره نسخه نشریه*</th>
                            <td>
                                <input title="شماره نسخه نشریه" type="text" class="form-control" id="publication_number" placeholder="شماره نسخه نشریه را وارد کنید" name="publication_number">
                            </td>
                        </tr>
                        <tr>
                            <th>سال انتشار*</th>
                            <td>
                                <input title="سال انتشار" type="number" class="form-control" id="publication_year" placeholder="سال انتشار نشریه را وارد کنید" name="publication_year">
                            </td>
                        </tr>
                        <tr>
                            <th>شمارگان صفحه*</th>
                            <td>
                                <input title="شمارگان صفحه" type="number" class="form-control" id="number_of_pages" placeholder="شمارگان صفحه نشریه را وارد کنید" name="number_of_pages">
                            </td>
                        </tr>
                        <tr>
                            <th>تعداد مقالات*</th>
                            <td>
                                <input title="تعداد مقالات" type="number" class="form-control" id="number_of_articles" placeholder="تعداد مقاله نشریه را وارد کنید" name="number_of_articles">
                            </td>
                        </tr>
                        <tr>
                            <th>فایل جلد نشریه*</th>
                            <td>
                                <div class="custom-file">
                                    <input title="فایل جلد نشریه" accept="image/jpeg,.jpg," type="file" class="custom-file-input" id="cover_url" name="cover_url">
                                    <label id="cover_url_label" class="custom-file-label">انتخاب فایل</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>فایل نشریه*</th>
                            <td>
                                <div class="custom-file">
                                    <input title="فایل نشریه" accept="application/pdf,.doc,.docx" type="file" class="custom-file-input" id="file_url" name="file_url">
                                    <label id="file_url_label" class="custom-file-label">انتخاب فایل</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </center>

            </div>
            <!-- /.card-body -->
            <center>
                <div class="card-footer">
                    <button name="Sub_Mag_Version" type="submit" class="btn btn-primary">ثبت نسخه جدید</button>
                </div>
            </center>

        </form>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">ثبت مقالات</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="" onsubmit="return countWords()">
            <div class="card-body">
                <center>
                    <table class="table table-bordered">
                        <tr>
                            <th width="20%">نسخه نشریه*</th>
                            <td>
                                <select required class="form-control select2" title="نسخه نشریه را انتخاب کنید"
                                        style="width: 100%;text-align: right" name="mag_version" id="mag_version">
                                    <option selected disabled>انتخاب کنید</option>
                                    <?php
                                    $query=mysqli_query($connection_mag,'select * from mag_versions inner join mag_info on mag_versions.mag_info_id=mag_info.id where mag_versions.number_of_articles is null order by mag_info.name asc');
                                    foreach ($query as $mag_items):
                                        ?>
                                        <option value="<?php echo $mag_items['mag_versions.id'] ?>"><?php echo $mag_items['mag_versions.name'];?> دوره <?php echo $mag_items['mag_versions.publication_period'];?> شماره <?php echo $mag_items['mag_versions.publication_number'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td width="10%">
                                <button name="Select_Mag_Version" type="submit" class="btn btn-primary">ثبت مقاله</button>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </form>
        <?php if (isset($_POST['Select_Mag_Version'])): ?>
        <form role="form" method="post" action="build/php/inc/Add_Article.php" onsubmit="return countWords()">
                <?php
                    @$mag_version=$_POST['mag_version'];
                    $query=mysqli_query($connection_mag, "select * from mag_versions where id='$mag_version'");
                    foreach ($query as $version_items){}
                    $number_of_articles=4;
                    for ($i=1;$i<=$number_of_articles;$i++):
                ?>
        <center>
            <p style="background-color: #007bff;color: white;padding: 8px;font-size: 20px"><?php echo 'مقاله '.$i; ?></p>
        <table style="width: 80%" class="table table-bordered">
                    <tr>
                            <th>عنوان مقاله*</th>
                            <td>
                                <input title="عنوان مقاله" required type="number" class="form-control" id="subject" placeholder="عنوان مقاله را وارد کنید" name="subject">
                            </td>
                        </tr>
                        <tr>
                            <th>نوع مقاله*</th>
                            <td>
                                <select required class="form-control select2" title="نوع مقاله را انتخاب کنید" id="type" name="type">
                                    <option disabled selected>انتخاب کنید</option>
                                    <option>علمی پژوهشی</option>
                                    <option>علمی ترویجی</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>گروه علمی مقاله*</th>
                            <td>
                                <select required class="form-control select2" title="گروه علمی مقاله را انتخاب کنید" name="scientific_group" id="scientific_group">
                                    <option disabled selected>انتخاب کنید</option>
                                    <?php
                                    $query=mysqli_query($connection_maghalat,'select * from scientific_group order by name asc');
                                    foreach ($query as $group_items):
                                        ?>
                                        <option value="<?php echo $group_items['name'] ?>"><?php echo $group_items['name'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>شماره صفحه در نشریه (از)</th>
                            <td>
                                <input title="شماره صفحه در نشریه (از)" type="number" class="form-control" id="number_of_page_in_mag_from" placeholder="شماره صفحه در نشریه (از) را وارد کنید" name="number_of_page_in_mag_from">
                            </td>
                        </tr>
                        <tr>
                            <th>شماره صفحه در نشریه (تا)</th>
                            <td>
                                <input title="شماره صفحه در نشریه (تا)" type="number" class="form-control" id="number_of_page_in_mag_to" placeholder="شماره صفحه در نشریه (تا) را وارد کنید" name="number_of_page_in_mag_to">
                            </td>
                        </tr>
                        <tr>
                            <th>زبان*</th>
                            <td>
                                <select required class="form-control select2" title="زبان نشریه را انتخاب کنید" id="language" name="language">
                                    <option disabled selected>انتخاب کنید</option>
                                    <option>فارسی</option>
                                    <option>عربی</option>
                                    <option>انگلیسی</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>فایل مقاله (DOCX,DOC,PDF)*</th>
                            <td>
                                <div class="custom-file">
                                    <input title="فایل مقاله" required accept="application/pdf,.doc,.docx" type="file" name="file_url" id="file_url">
                                    <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>چکیده*</th>
                            <td>
                                <textarea title="چکیده" onchange="countWords(this.value)" required class="form-control" rows="3" placeholder="حداکثر 250 کلمه" id="body" name="body"></textarea>
                            </td>
                        </tr>
                    </table>
                </center>
            <?php endfor; ?>

            </div>
            <!-- /.card-body -->
            <center>
                <div class="card-footer">
                    <button name="Sub_Articles" onclick="return confirm('آیا از صحت اطلاعات وارد شده مطمئن هستید؟');" type="submit" class="btn btn-primary">ثبت مقالات در نشریه</button>
                </div>
            </center>
        </form>
    <?php else: ?>
        <p style="background-color: #dc3545;color: white;padding: 8px;font-size: 20px;text-align: center"><?php echo 'نشریه ای انتخاب نشده است '; ?></p>
    <?php endif; ?>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">نمایش و مدیریت نشریات (به ترتیب نام نشریه)</h3>
                    <br>
                    <div class="card-tools-user-manager">
                        <!--                        <div class="input-group input-group-sm" style="width: 150px;">-->
                        <input type="search" name="table_search" class="form-control float-right" placeholder="لطفا برای جستجو، نام نشریه مورد نظر را تایپ نمایید" onkeyup="myFunction()" id="myInput">
                        <!--                        </div>-->
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <!--                    <table class="table table-bordered table-striped" id="myTable">-->
                    <!--                        <tr>-->
                    <!--                            <th>ردیف</th>-->
                    <!--                            <th>کاربر</th>-->
                    <!--                            <th>مشخصات</th>-->
                    <!--                            <th>گروه علمی</th>-->
                    <!--                            <th>شماره همراه</th>-->
                    <!--                            <th>بانک</th>-->
                    <!--                            <th>حساب</th>-->
                    <!--                            <th>شماره کارت</th>-->
                    <!--                            <th>شماره شبا</th>-->
                    <!--                            <th>عملیات</th>-->
                    <!--                        </tr>-->
                    <!--                        --><?php
                    //                        $a=1;
                    //                        $SelectAllUsers=mysqli_query($connection_maghalat,"select * from users order by family asc");
                    //                        foreach ($SelectAllUsers as $users):
                    //                            ?>
                    <!--                            <tr>-->
                    <!--                                <td>--><?php //echo $a;$a++; ?><!--</td>-->
                    <!--                                <td>--><?php //echo $users['username']; ?><!--</td>-->
                    <!--                                <td>--><?php //echo $users['name']. ' ' .$users['family']?><!--</td>-->
                    <!--                                <td >--><?php
                    //                                    $groups=explode('||',$users['scientific_group']);
                    //                                    foreach ($groups as $itemgroups){
                    //                                        echo '<label style="width: 180px">'.'*'.$itemgroups.'</label>'.'<br>';
                    //                                    }
                    //                                    ?><!--</td>-->
                    <!--                                <td>--><?php //echo $users['phone'] ?><!--</td>-->
                    <!--                                <td>--><?php //echo $users['bank_name'] ?><!--</td>-->
                    <!--                                <td>--><?php //echo $users['bank_id'] ?><!--</td>-->
                    <!--                                <td>--><?php //echo $users['debit_card_id'] ?><!--</td>-->
                    <!--                                <td>--><?php //echo $users['shaba'] ?><!--</td>-->
                    <!--                                <td></td>-->
                    <!--                            </tr>-->
                    <!--                        --><?php //endforeach; ?>
                    <!--                    </table>-->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->
<script>
    var mag_version=document.getElementById("mag_version");

    function countWords() {
        var body=document.getElementById("body");
        var bodyvalue=document.getElementById("body").value;
        const arr = bodyvalue.split(' ');
        if (arr.filter(word => word !== '').length>250){
            alert ("چکیده بیشتر از 250 کلمه است!");
            body.style.backgroundColor='yellow';
            return false;
        }
        else{
            return true;
        }
    }

</script>
<script src="build/js/Set_Mag_Version_Scripts.js"></script>
<script src="build/js/SearchInMagManagerTable.js"></script>

<?php include_once __DIR__.'/footer.php'; ?>
