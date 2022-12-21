<?php include_once __DIR__.'/header.php'; ?>

<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">ثبت نسخه نشریه</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="build/php/inc/Add_Journal.php">
            <div class="card-body">
                <center>
                    <table style="width: 80%" class="table table-bordered">
                        <tr>
                            <th>نام نشریه*</th>
                            <td>
                                <select required class="form-control select2" title="نام نشریه را انتخاب کنید"
                                        style="width: 100%;text-align: right" name="mag_name" id="mag_name">
                                    <?php
                                    $query=mysqli_query($connection_mag,'select * from mag_base.mag_info order by name asc');
                                    foreach ($query as $mag_items):
                                        ?>
                                        <option value="<?php echo $mag_items['id'] ?>"><?php echo $mag_items['name'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>شماره مسلسل</th>
                            <td>
                                <input type="number" class="form-control" id="latin_name" placeholder="دوره نشریه را وارد کنید" name="latin_name">
                            </td>
                        </tr>
                        <tr>
                            <th>شماره مسلسل</th>
                            <td>
                                <input type="number" class="form-control" id="latin_name" placeholder="شماره مسلسل نشریه را وارد کنید" name="latin_name">
                            </td>
                        </tr>
                        <tr>
                            <th>تاریخ انتشار</th>
                            <td>
                                <input type="text" class="form-control" id="last_name" placeholder="تاریخ انتشار نشریه را وارد کنید (تاریخ حتما در فرم 1401/07/08 باشد)" name="last_name">
                            </td>
                        </tr>
                        <tr>
                            <th>شمارگان صفحه</th>
                            <td>
                                <input type="number" class="form-control" id="last_name" placeholder="شمارگان صفحه نشریه را وارد کنید" name="last_name">
                            </td>
                        </tr>
                        <tr>
                            <th>تعداد مقاله</th>
                            <td>
                                <input type="number" class="form-control" id="last_name" placeholder="تعداد مقاله نشریه را وارد کنید" name="last_name">
                            </td>
                        </tr>
                        <tr>
                            <th>فایل word نشریه (DOCX,DOC)</th>
                            <td>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>فایل pdf نشریه</th>
                            <td>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </center>

            </div>
            <!-- /.card-body -->
            <center>
                <div class="card-footer">
                    <button name="Add_Journal" type="submit" class="btn btn-primary">ثبت نسخه جدید</button>
                </div>
            </center>

        </form>
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

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">ثبت مقالات</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="build/php/inc/Add_Journal.php">
            <div class="card-body">
                <center>
                    <table class="table table-bordered">
                        <tr>
                            <th width="20%">نسخه نشریه*</th>
                            <td>
                                <select required class="form-control select2" title="نسخه نشریه را انتخاب کنید"
                                        style="width: 100%;text-align: right" name="mag_name" id="mag_name">
                                    <?php
                                    $query=mysqli_query($connection_mag,'select * from mag_versions inner join mag_info on mag_versions.mag_info_id=mag_info.id where mag_versions.number_of_articles is null order by mag_info.name asc');
                                    foreach ($query as $mag_items):
                                        ?>
                                        <option value="<?php echo $mag_items['mag_versions.id'] ?>"><?php echo $mag_items['mag_versions.name'];?> دوره <?php echo $mag_items['mag_versions.publication_period'];?> شماره <?php echo $mag_items['mag_versions.publication_number'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td width="10%">
                                <button name="Add_Journal" type="submit" class="btn btn-primary">ثبت مقاله</button>
                            </td>
                        </tr>
                    </table>

                    <table style="width: 80%" class="table table-bordered">
                    <tr>
                            <th>عنوان مقاله</th>
                            <td>
                                <input type="number" class="form-control" id="latin_name" placeholder="عنوان مقاله را وارد کنید" name="latin_name">
                            </td>
                        </tr>
                        <tr>
                            <th>متن مقاله</th>
                            <td>
                                <input type="text" class="form-control" id="last_name" placeholder="متن مقاله" name="last_name">
                            </td>
                        </tr>
                        <tr>
                            <th>شماره صفحه در نشریه (از)</th>
                            <td>
                                <input type="number" class="form-control" id="last_name" placeholder="شماره صفحه در نشریه (از) را وارد کنید" name="last_name">
                            </td>
                        </tr>
                        <tr>
                            <th>شماره صفحه در نشریه (تا)</th>
                            <td>
                                <input type="number" class="form-control" id="last_name" placeholder="شماره صفحه در نشریه (تا) را وارد کنید" name="last_name">
                            </td>
                        </tr>
                        <tr>
                            <th>زبان</th>
                            <td>
                                <input type="number" class="form-control" id="last_name" placeholder="زبان نشریه را وارد کنید" name="last_name">
                            </td>
                        </tr>
                        <tr>
                            <th>فایل word مقاله (DOCX,DOC)</th>
                            <td>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>فایل pdf مقاله</th>
                            <td>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                </center>

            </div>
            <!-- /.card-body -->
            <center>
                <div class="card-footer">
                    <button name="Add_Journal" type="submit" class="btn btn-primary">ثبت مقالات در نشریه</button>
                </div>
            </center>

        </form>
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

<script src="build/js/SearchInMagManagerTable.js"></script>

<?php include_once __DIR__.'/footer.php'; ?>
