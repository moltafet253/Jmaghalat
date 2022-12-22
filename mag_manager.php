<?php include_once __DIR__.'/header.php'; ?>

<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">ثبت نشریه جدید</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" action="build/php/inc/Add_Journal.php">
            <div class="card-body">
                <center>
                    <table style="width: 80%" class="table table-bordered">
                        <tr>
                            <th colspan="2" style="text-align: center;background-color: #dee2e6">
                                اطلاعات نشریه
                            </th>
                        </tr>
                        <tr>
                            <th>نام نشریه*</th>
                            <td>
                                <input required type="text" class="form-control" id="name" placeholder="نام نشریه را وارد کنید" name="name">
                            </td>
                        </tr>
                        <tr>
                            <th>رتبه علمی مجله*</th>
                            <td>
                                <select required class="form-control select2" title="نسخه نشریه را انتخاب کنید">
                                    <option disabled selected>انتخاب کنید</option>
                                    <option>علمی پژوهشی</option>
                                    <option>علمی ترویجی</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>گروه علمی*</th>
                            <td>
                                <select required class="form-control select2"  multiple="multiple" title="گروه علمی نشریه را انتخاب کنید (با گرفتن کلید ctrl می توانید چند گروه علمی انتخاب نمایید)"
                                        style="width: 100%;text-align: right" name="scientific_group[]" id="scientific_group">
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
                            <th>جایگاه بین المللی*</th>
                            <td>
                                <select required id="international_position" name="international_position" class="form-control select2"  multiple="multiple" title="جایگاه بین المللی را انتخاب کنید (با گرفتن کلید ctrl می توانید چند جایگاه بین المللی انتخاب نمایید)">
                                    <?php
                                    $query=mysqli_query($connection_variables,'select * from international_position order by subject asc');
                                    foreach ($query as $international_position_items):
                                    ?>
                                        <option value="<?php echo $international_position_items['subject'] ?>"><?php echo $international_position_items['subject'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>نوع نشریه*</th>
                            <td>
                                <select required class="form-control" id="type" name="type" title="نوع نشریه را انتخاب کنید">
                                    <option selected disabled>انتخاب کنید</option>
                                    <option>دانشگاهی</option>
                                    <option>حوزوی</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>دوره انتشار*</th>
                            <td>
                                <select required class="form-control" id="publication_period" name="publication_period" title="دوره انتشار نشریه را انتخاب کنید">
                                    <option selected disabled>انتخاب کنید</option>
                                    <?php
                                    $query=mysqli_query($connection_variables,'select * from publication_period order by subject asc');
                                    foreach ($query as $publication_period_items):
                                    ?>
                                        <option value="<?php echo $publication_period_items['subject'] ?>"><?php echo $publication_period_items['subject'];?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>شاپا*</th>
                            <td>
                                <input required type="text" class="form-control" id="ISSN" placeholder="شاپا را وارد کنید" name="ISSN">
                            </td>
                        </tr>
                        <tr>
                            <th>استان*</th>
                            <td>
                                <input required type="text" class="form-control" id="mag_state" placeholder="استان را وارد کنید" name="mag_state">
                            </td>
                        </tr>
                        <tr>
                            <th>شهر*</th>
                            <td>
                                <input required type="text" class="form-control" id="mag_city" placeholder="شهر را وارد کنید" name="mag_city">
                            </td>
                        </tr>
                        <tr>
                            <th>آدرس کامل</th>
                            <td>
                                <textarea class="form-control" rows="3" placeholder="آدرس کامل را وارد نمایید" id="mag_address" name="mag_address"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>تلفن ثابت*</th>
                            <td>
                                <input required type="text" class="form-control" id="mag_phone" placeholder="تلفن ثابت را وارد کنید" name="mag_phone">
                            </td>
                        </tr>
                        <tr>
                            <th>دورنگار</th>
                            <td>
                                <input type="text" class="form-control" id="mag_fax" placeholder="دورنگار را وارد کنید" name="mag_fax">
                            </td>
                        </tr>
                        <tr>
                            <th>ایمیل*</th>
                            <td>
                                <input required type="email" class="form-control" id="mag_email" placeholder="ایمیل را وارد کنید" name="mag_email">
                            </td>
                        </tr>
                        <tr>
                            <th>پایگاه اینترنتی</th>
                            <td>
                                <input type="" class="form-control" id="mag_website" placeholder="پایگاه اینترنتی را وارد کنید" name="mag_website">
                            </td>
                        </tr>
                        <tr>
                            <th>نوع کاربری صاحب امتیاز*</th>
                            <td>
                                <select required class="form-control select2" title="نوع کاربری صاحب امتیاز را انتخاب کنید"
                                        style="width: 100%;text-align: right" name="concessionaire_type" id="concessionaire_type">
                                    <option disabled selected>انتخاب کنید</option>
                                    <option value="حقیقی">حقیقی</option>
                                    <option value="حقوقی">حقوقی</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>صاحب امتیاز*</th>
                            <td>
                                <input required type="text" class="form-control" id="concessionaire" placeholder="اطلاعات صاحب امتیاز را وارد کنید" name="concessionaire">
                            </td>
                        </tr>
                    </table>
                        <br>
                        <div class="row">
                        <div class="col-12">
                            <!-- Custom Tabs -->
                            <div class="card">
                                <div class="card-header" style="background-color: #dee2e6;text-align: center; color: #212529; font-weight: bold ">
                                        اطلاعات مدیران نشریه
                                </div><!-- /.card-header -->
                            </div>
                            <!-- ./card -->
                            <div class="row">
                                <div class="col-12">
                                    <!-- Custom Tabs -->
                                    <div class="card">
                                        <div class="card-header d-flex p-1" style="background-color: transparent; border-bottom: 3px solid #dee2e6">
                                            <!--                                    <h3 class="card-title p-3">تب‌ها</h3>-->
                                            <ul class="nav nav-pills ml-auto p-2">
                                                <li class="nav-item"><a style="background-color: #007bff; color: white" class="nav-link active" href="#tab_1" id="tab1" onclick="ChangeTabs('tab1')" data-toggle="tab">مدیر مسئول</a></li>
                                                <li class="nav-item"><a style="color: #6c757d;" class="nav-link" href="#tab_2" data-toggle="tab" id="tab2" onclick="ChangeTabs('tab2')">سردبیر</a></li>
                                                <li class="nav-item"><a style="color: #6c757d;" class="nav-link" href="#tab_3" data-toggle="tab" id="tab3" onclick="ChangeTabs('tab3')">مدیر اجرایی</a></li>
                                            </ul>
                                        </div><!-- /.card-header -->

                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_1">
                                                    <table style="width: 80%" class="table table-bordered">

                                                        <tr>
                                                            <th>عنوان*</th>
                                                            <td>
                                                                <select required class="form-control select2" title="عنوان مدیر مسئول را انتخاب کنید"
                                                                        style="width: 100%;text-align: right" name="responsible_manager_owner_subject" id="responsible_manager_owner_subject">
                                                                    <option disabled selected>انتخاب کنید</option>
                                                                    <?php
                                                                    $query=mysqli_query($connection_variables,'select * from person_subjects order by subject asc');
                                                                    foreach ($query as $person_subjects_items):
                                                                        ?>
                                                                        <option value="<?php echo $person_subjects_items['subject'] ?>"><?php echo $person_subjects_items['subject'];?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>نام و نام خانوادگی*</th>
                                                            <td>
                                                                <input required type="text" style="width: 49%; display: inherit" class="form-control" id="responsible_manager_owner_name" placeholder="نام" name="responsible_manager_owner_name">
                                                                <input required required type="text" style="width: 50%; display: inherit" class="form-control" id="responsible_manager_owner_family" placeholder="نام خانوادگی" name="responsible_manager_owner_family">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>مدرک*</th>
                                                            <td>
                                                                <select required class="form-control" title="مدرک مدیر مسئول را انتخاب کنید" id="responsible_manager_owner_degree" name="responsible_manager_owner_degree">
                                                                    <option selected disabled>انتخاب کنید</option>
                                                                    <?php
                                                                    $query=mysqli_query($connection_variables,'select * from degree order by subject asc');
                                                                    foreach ($query as $degree_items):
                                                                        ?>
                                                                        <option value="<?php echo $degree_items['subject'] ?>"><?php echo $degree_items['subject'];?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>تلفن ثابت*</th>
                                                            <td>
                                                                <input required type="text" class="form-control" id="responsible_manager_owner_phone" placeholder="تلفن ثابت مدیر مسئول را وارد کنید" name="responsible_manager_owner_phone">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>تلفن همراه*</th>
                                                            <td>
                                                                <input required type="text" class="form-control" id="responsible_manager_owner_mobile" placeholder="تلفن همراه مدیر مسئول را وارد کنید" name="responsible_manager_owner_mobile">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>آدرس</th>
                                                            <td>
                                                                <textarea class="form-control" rows="3" placeholder="آدرس مدیر مسئول را وارد نمایید" id="responsible_manager_owner_address" name="responsible_manager_owner_address"></textarea>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!-- /.tab-pane -->
                                                <div class="tab-pane" id="tab_2">
                                                    <table style="width: 80%" class="table table-bordered">
                                                        <tr>
                                                            <th>عنوان*</th>
                                                            <td>
                                                                <select required class="form-control select2" title="عنوان سردبیر را انتخاب کنید"
                                                                        style="width: 100%;text-align: right" name="chief_editor_subject" id="chief_editor_subject">
                                                                    <option disabled selected>انتخاب کنید</option>
                                                                    <?php
                                                                    $query=mysqli_query($connection_variables,'select * from person_subjects order by subject asc');
                                                                    foreach ($query as $person_subjects_items):
                                                                        ?>
                                                                        <option value="<?php echo $person_subjects_items['subject'] ?>"><?php echo $person_subjects_items['subject'];?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>نام و نام خانوادگی*</th>
                                                            <td>
                                                                <input required type="text" style="width: 49%; display: inherit" class="form-control" id="chief_editor_name" placeholder="نام" name="chief_editor_name">
                                                                <input required type="text" style="width: 50%; display: inherit" class="form-control" id="chief_editor_family" placeholder="نام خانوادگی" name="chief_editor_family">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>مدرک*</th>
                                                            <td>
                                                                <select required class="form-control" title="مدرک سردبیر را انتخاب کنید" id="chief_editor_degree" name="chief_editor_degree">
                                                                    <option selected disabled>انتخاب کنید</option>
                                                                    <?php
                                                                    $query=mysqli_query($connection_variables,'select * from degree order by subject asc');
                                                                    foreach ($query as $degree_items):
                                                                        ?>
                                                                        <option value="<?php echo $degree_items['subject'] ?>"><?php echo $degree_items['subject'];?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>تلفن ثابت*</th>
                                                            <td>
                                                                <input required type="text" class="form-control" id="chief_editor_phone" placeholder="تلفن ثابت سردبیر را وارد کنید" name="chief_editor_phone">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>تلفن همراه*</th>
                                                            <td>
                                                                <input required type="text" class="form-control" id="chief_editor_mobile" placeholder="تلفن همراه سردبیر را وارد کنید" name="chief_editor_mobile">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>آدرس</th>
                                                            <td>
                                                                <textarea class="form-control" rows="3" placeholder="آدرس سردبیر را وارد نمایید" id="chief_editor_address" name="chief_editor_address"></textarea>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!-- /.tab-pane -->
                                                <div class="tab-pane" id="tab_3">
                                                    <table style="width: 80%" class="table table-bordered">
                                                        <tr>
                                                            <th>عنوان*</th>
                                                            <td>
                                                                <select required class="form-control select2" title="عنوان مدیر اجرایی را انتخاب کنید"
                                                                        style="width: 100%;text-align: right" name="administration_manager_subject" id="administration_manager_subject">
                                                                    <option disabled selected>انتخاب کنید</option>
                                                                    <?php
                                                                    $query=mysqli_query($connection_variables,'select * from person_subjects order by subject asc');
                                                                    foreach ($query as $person_subjects_items):
                                                                        ?>
                                                                        <option value="<?php echo $person_subjects_items['subject'] ?>"><?php echo $person_subjects_items['subject'];?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>نام و نام خانوادگی*</th>
                                                            <td>
                                                                <input required type="text" style="width: 49%; display: inherit" class="form-control" id="administration_manager_name" placeholder="نام" name="administration_manager_name">
                                                                <input required type="text" style="width: 50%; display: inherit" class="form-control" id="administration_manager_family" placeholder="نام خانوادگی" name="administration_manager_family">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>مدرک*</th>
                                                            <td>

                                                                <select required class="form-control" title="مدرک مدیر اجرایی را انتخاب کنید" id="administration_manager_degree" name="administration_manager_degree">
                                                                    <option selected disabled>انتخاب کنید</option>
                                                                    <?php
                                                                    $query=mysqli_query($connection_variables,'select * from degree order by subject asc');
                                                                    foreach ($query as $degree_items):
                                                                        ?>
                                                                        <option value="<?php echo $degree_items['subject'] ?>"><?php echo $degree_items['subject'];?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>تلفن ثابت*</th>
                                                            <td>
                                                                <input required type="text" class="form-control" id="administration_manager_phone" placeholder="تلفن ثابت مدیر اجرایی را وارد کنید" name="administration_manager_phone">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>تلفن همراه*</th>
                                                            <td>
                                                                <input required type="text" class="form-control" id="administration_manager_mobile" placeholder="تلفن همراه مدیر اجرایی را وارد کنید" name="administration_manager_mobile">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>آدرس</th>
                                                            <td>
                                                                <textarea class="form-control" rows="3" placeholder="آدرس مدیر اجرایی را وارد نمایید" id="administration_manager_address" name="administration_manager_address"></textarea>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <!-- /.tab-pane -->
                                            </div>
                                            <!-- /.tab-content -->
                                        </div><!-- /.card-body -->
                                    </div>
                                    <!-- ./card -->
                                </div>
                                <!-- /.col -->
                            </div>

                        </div>

                        <!-- /.col -->
                    </div>

                </center>

            </div>
            <!-- /.card-body -->
            <center>
                <div class="card-footer">
                    <button name="Add_Journal" type="submit" class="btn btn-primary">ثبت نشریه جدید</button>
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
<script src="build/js/ChangeTabsInMagManager.js"></script>
<?php include_once __DIR__.'/footer.php'; ?>
