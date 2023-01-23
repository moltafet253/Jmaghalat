<?php include_once __DIR__ . '/header.php'; ?>
<?php
if (isset($_GET['ArticleWrongFileSize>10485760'])):
    ?>
    <section class="content">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center">حجم فایل مقاله بالاتر از 10 مگابایت است</h3>
            </div>
        </div>
    </section>
<?php elseif (isset($_GET['ArticleWrongFileSize0'])): ?>
    <section class="content">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center">حجم فایل مقاله نا معتبر می باشد</h3>
            </div>
        </div>
    </section>
<?php elseif (isset($_GET['ArticleWrongExtension'])): ?>
    <section class="content">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center">پسوند مقاله نامعتبر است</h3>
            </div>
        </div>
    </section>
<?php elseif (isset($_GET['ArticleSubmitted'])): ?>
    <section class="content">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center">مقالات با موفقیت در سیستم ثبت شدند</h3>
            </div>
        </div>
    </section>
<?php elseif (isset($_GET['ArticleFinded'])): ?>
    <section class="content">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center">فایل مقاله تکراری می باشد</h3>
            </div>
        </div>
    </section>
<?php elseif (isset($_GET['EmptyArticleFile'])): ?>
    <section class="content">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center">فایل مقاله خالی وارد شده است</h3>
            </div>
        </div>
    </section>
<?php elseif (isset($_GET['WrongFileSize>10485760'])): ?>
    <section class="content">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center">حجم فایل نسخه نشریه بالاتر از 10 مگابایت می باشد</h3>
            </div>
        </div>
    </section>
<?php elseif (isset($_GET['WrongFileSize0'])): ?>
    <section class="content">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center">حجم فایل نسخه نشریه نامعتبر می باشد</h3>
            </div>
        </div>
    </section>
<?php elseif (isset($_GET['WrongExtension'])): ?>
    <section class="content">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center">پسوند فایل نسخه نشریه معتبر نیست.</h3>
            </div>
        </div>
    </section>
<?php elseif (isset($_GET['VersionAdded'])): ?>
    <section class="content">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center">
                    نسخه نشریه
                     <?php echo $_GET['version_name'] ?>
                    با موفقیت اضافه شد.
                </h3>
            </div>
        </div>
    </section>
<?php elseif (isset($_GET['finded'])): ?>
    <section class="content">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center">نسخه نشریه تکراری می باشد</h3>
            </div>
        </div>
    </section>
<?php elseif (isset($_GET['EmptyFile'])): ?>
    <section class="content">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title" style="text-align: center">فایل نسخه نشریه انتخاب نشده است</h3>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">ثبت نسخه نشریه</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form role="form" method="post" action="build/php/inc/Add_Version.php" onsubmit="return sub_mag_version();"
              enctype="multipart/form-data">
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
                                    $query = mysqli_query($connection_mag, 'select * from mag_info order by name asc');
                                    foreach ($query as $mag_items):
                                        ?>
                                        <option value="<?php echo $mag_items['id'] ?>"><?php echo $mag_items['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>شماره دوره انتشار (سال)*</th>
                            <td>
                                <input title="شماره دوره انتشار (سال)" type="number" class="form-control"
                                       id="publication_period_year"
                                       placeholder="شماره دوره انتشار (سال) را وارد کنید. (به عنوان مثال: سال 24)"
                                       name="publication_period_year">
                            </td>
                        </tr>
                        <tr>
                            <th>شماره دوره نشریه در سال*</th>
                            <td>
                                <input title="شماره دوره نشریه در سال" type="number" class="form-control"
                                       id="publication_period_number" placeholder="مثلا شماره 2"
                                       name="publication_period_number">
                            </td>
                        </tr>
                        <tr>
                            <th>شماره نسخه نشریه*</th>
                            <td>
                                <input title="شماره نسخه نشریه" type="text" class="form-control" id="publication_number"
                                       placeholder="شماره نسخه نشریه را وارد کنید" name="publication_number">
                            </td>
                        </tr>
                        <tr>
                            <th>سال انتشار*</th>
                            <td>
                                <input title="سال انتشار" type="number" class="form-control" id="publication_year"
                                       placeholder="سال انتشار نشریه را وارد کنید" name="publication_year">
                            </td>
                        </tr>
                        <tr>
                            <th>شمارگان صفحه*</th>
                            <td>
                                <input title="شمارگان صفحه" type="number" class="form-control" id="number_of_pages"
                                       placeholder="شمارگان صفحه نشریه را وارد کنید" name="number_of_pages">
                            </td>
                        </tr>
                        <tr>
                            <th>تعداد مقالات*</th>
                            <td>
                                <input title="تعداد مقالات" type="number" class="form-control" id="number_of_articles"
                                       placeholder="تعداد مقاله نشریه را وارد کنید" name="number_of_articles">
                            </td>
                        </tr>
                        <tr>
                            <th>فایل جلد نشریه*</th>
                            <td>
                                <div class="custom-file">
                                    <input title="فایل جلد نشریه" accept=".jpg,.jpeg" type="file"
                                           class="custom-file-input" id="cover_url" name="cover_url">
                                    <label id="cover_url_label" class="custom-file-label">انتخاب فایل</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>فایل نشریه*</th>
                            <td>
                                <div class="custom-file">
                                    <input title="فایل نشریه" accept="application/pdf,.doc,.docx" type="file"
                                           class="custom-file-input" id="file_url" name="file_url">
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
        <form role="form" method="post" onsubmit="return countWords()">
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
                                    $query = mysqli_query($connection_mag, 'select mag_versions.id,mag_info.name,mag_info.publication_period,mag_versions.publication_number,mag_versions.publication_year from mag_versions inner join mag_info on mag_versions.mag_info_id=mag_info.id where mag_versions.file_url is not null and mag_versions.article_submitted=0 order by mag_info.name asc');
                                    foreach ($query as $mag_items):
                                        ?>
                                        <option <?php if (@$_POST['mag_version'] == $mag_items['id']) echo 'selected'; ?>
                                                value="<?php echo $mag_items['id'] ?>"><?php echo $mag_items['name']; ?>
                                            - <?php echo $mag_items['publication_period']; ?> -
                                            شماره <?php echo $mag_items['publication_number']; ?> -
                                            سال <?php echo $mag_items['publication_year']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td width="10%">
                                <button name="Select_Mag_Version" type="submit" class="btn btn-primary">ثبت مقاله
                                </button>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </form>
        <?php if (isset($_POST['Select_Mag_Version'])): ?>
        <form role="form" method="post" action="build/php/inc/Add_Article.php" onsubmit="return ValidateForm()"
              enctype="multipart/form-data">
            <?php
            @$mag_version = $_POST['mag_version'];
            $query = mysqli_query($connection_mag, "select * from mag_versions where id='$mag_version' and article_submitted=0");
            foreach ($query as $version_items) {
            }
            @$number_of_articles = $version_items['number_of_articles'];
            for ($i = 1; $i <= $number_of_articles; $i++):
                ?>
                <center>
                    <p style="background-color: #007bff;color: white;padding: 8px;font-size: 20px"><?php echo 'مقاله ' . $i; ?></p>
                    <table style="width: 80%" class="table table-bordered">
                        <tr>
                            <th>عنوان مقاله*</th>
                            <td>
                                <input title="عنوان مقاله" type="text" class="form-control"
                                       id="subject_<?php echo $i; ?>"
                                       placeholder="عنوان مقاله را وارد کنید" name="subject_<?php echo $i; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>نوع مقاله*</th>
                            <td>
                                <select class="form-control select2" title="نوع مقاله را انتخاب کنید"
                                        id="type_<?php echo $i; ?>"
                                        name="type_<?php echo $i; ?>">
                                    <option disabled selected>انتخاب کنید</option>
                                    <option>علمی پژوهشی</option>
                                    <option>علمی ترویجی</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>گروه علمی 1*</th>
                            <td>
                                <select class="form-control select2" title="گروه علمی مقاله را انتخاب کنید"
                                        name="scientific_group1_<?php echo $i; ?>"
                                        id="scientific_group_1_<?php echo $i; ?>">
                                    <option disabled selected>انتخاب کنید</option>
                                    <?php
                                    $query = mysqli_query($connection_maghalat, 'select * from scientific_group order by name asc');
                                    foreach ($query as $group_items):
                                        ?>
                                        <option value="<?php echo $group_items['name'] ?>"><?php echo $group_items['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>گروه علمی 2</th>
                            <td>
                                <select class="form-control select2" title="گروه علمی مقاله را انتخاب کنید"
                                        name="scientific_group2_<?php echo $i; ?>"
                                        id="scientific_group_2_<?php echo $i; ?>">
                                    <option disabled selected>انتخاب کنید</option>
                                    <?php
                                    $query = mysqli_query($connection_maghalat, 'select * from scientific_group order by name asc');
                                    foreach ($query as $group_items):
                                        ?>
                                        <option value="<?php echo $group_items['name'] ?>"><?php echo $group_items['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>شماره صفحه در نشریه (از)*</th>
                            <td>
                                <input title="شماره صفحه در نشریه (از)" type="number" class="form-control"
                                       id="number_of_page_in_mag_from_<?php echo $i; ?>"
                                       placeholder="شماره صفحه در نشریه (از) را وارد کنید"
                                       name="number_of_page_in_mag_from_<?php echo $i; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>شماره صفحه در نشریه (تا)*</th>
                            <td>
                                <input title="شماره صفحه در نشریه (تا)" type="number" class="form-control"
                                       id="number_of_page_in_mag_to_<?php echo $i; ?>"
                                       placeholder="شماره صفحه در نشریه (تا) را وارد کنید"
                                       name="number_of_page_in_mag_to_<?php echo $i; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>زبان*</th>
                            <td>
                                <select class="form-control select2" title="زبان نشریه را انتخاب کنید"
                                        id="language_<?php echo $i; ?>" name="language_<?php echo $i; ?>">
                                    <option disabled selected>انتخاب کنید</option>
                                    <option>فارسی</option>
                                    <option>عربی</option>
                                    <option>انگلیسی</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>فایل مقاله (PDF)*</th>
                            <td>
                                <div class="custom-file">
                                    <input title="فایل جلد نشریه" accept="application/pdf" type="file"
                                           class="custom-file-input" id="article_file_url_<?php echo $i; ?>"
                                           name="article_file_url_<?php echo $i; ?>">
                                    <label id="article_file_url_<?php echo $i; ?>" class="custom-file-label">انتخاب
                                        فایل</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>چکیده*</th>
                            <td>
                                <textarea title="چکیده" onkeyup="countWords(this.value,<?php echo $i; ?>)"
                                          class="form-control"
                                          rows="3" placeholder="حداکثر 250 کلمه" id="article_body_<?php echo $i; ?>"
                                          name="body_<?php echo $i; ?>"></textarea>
                                <p style="text-align: left" id="show_<?php echo $i; ?>">0/250</p>
                            </td>
                        </tr>
                        <tr>
                            <th>نویسنده</th>
                            <td>
                                <input type="text" style="width: 49%; display: inherit" class="form-control"
                                       id="author_name_<?php echo $i; ?>"
                                       placeholder="نام و نام خانوادگی"
                                       name="author_name_<?php echo $i; ?>">
                                <input type="number" style="width: 50%; display: inherit" class="form-control"
                                       id="author_national_code_<?php echo $i; ?>"
                                       placeholder="کد ملی"
                                       name="author_national_code_<?php echo $i; ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>نوع همکاری</th>
                            <td>
                                <select class="form-control select2" title="نوع همکاری را انتخاب کنید"
                                        onchange="displayrow(this.value,<?php echo $i; ?>)"
                                        id="cooperation_type_<?php echo $i; ?>"
                                        name="cooperation_type_<?php echo $i; ?>">
                                    <option disabled selected>انتخاب کنید</option>
                                    <option>فردی</option>
                                    <option>گروهی</option>
                                </select>
                            </td>
                        </tr>
                        <tr style="display: none" id="display_row_<?php echo $i; ?>">
                            <th>همکاران</th>
                            <td>
                                <?php
                                for ($j = 1; $j <= 6; $j++):
                                    ?>
                                    <input type="text" style="width: 49%; display: inherit" class="form-control"
                                           id="info_cooperator_<?php echo $i . '_' . $j; ?>"
                                           placeholder="نام و نام خانوادگی"
                                           name="info_cooperator_<?php echo $i . '_' . $j; ?>">
                                    <input type="number" style="width: 50%; display: inherit" class="form-control"
                                           id="national_code_cooperator_<?php echo $i . '_' . $j; ?>"
                                           placeholder="کد ملی"
                                           name="national_code_cooperator_<?php echo $i . '_' . $j; ?>">
                                    <br/><br/>
                                <?php endfor; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>انتخاب اثر برای شرکت در جشنواره</th>
                            <td>
                                <input name="select_for_jm_<?php echo $i; ?>" type="checkbox" class="radio"
                                       id="select_for_jm_<?php echo $i; ?>">
                                <label for="select_for_jm_<?php echo $i; ?>">شرکت در جشنواره مقالات</label>
                            </td>
                        </tr>
                    </table>
                </center>
            <?php endfor; ?>

    </div>
    <!-- /.card-body -->
    <center>
        <div class="card-footer">
            <input type="hidden" value="<?php echo $mag_version ?>" name="mag_version">
            <input type="hidden" value="<?php echo $number_of_articles ?>" name="number_of_articles">
            <button name="Sub_Articles"
                    onclick="return confirm('آیا از صحت اطلاعات وارد شده مطمئن هستید؟ مقالات وارد شده پس از ثبت، به نشریه انتخاب شده اختصاص می یابند. این عملیات قابل بازگشت نیست!');"
                    type="submit" class="btn btn-primary">ثبت مقالات در نشریه
            </button>
        </div>
    </center>
    </form>
    <?php else: ?>
        <p style="background-color: #dc3545;color: white;padding: 8px;font-size: 20px;text-align: center"><?php echo 'نشریه ای انتخاب نشده است '; ?></p>
    <?php endif; ?>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->
<!--not completed-->
<script>
    function countWords(article_body, ShowID) {
        var count = 0;
        var split = article_body.split(' ');
        for (var i = 0; i < split.length; i++) {
            if (split[i] != "") {
                count++;
            }
        }
        document.getElementById("show_" + ShowID).innerHTML = count + '/250';
        if (count >= 251) {
            alert("چکیده بیشتر از 250 کلمه می باشد");
        }
    }
</script>
<script>
    function
</script>
<script>
    function ValidateForm() {
        <?php for ($i = 1;$i <= $number_of_articles;$i++): ?>
        var subject_<?php echo $i ?> = document.getElementById("subject_<?php echo $i ?>").value;
        var type_<?php echo $i ?> = document.getElementById("type_<?php echo $i ?>").value;
        var scientific_group_1_<?php echo $i ?> = document.getElementById("scientific_group_1_<?php echo $i ?>").value;
        var number_of_page_in_mag_from_<?php echo $i ?> = document.getElementById("number_of_page_in_mag_from_<?php echo $i ?>").value;
        var number_of_page_in_mag_to_<?php echo $i ?> = document.getElementById("number_of_page_in_mag_to_<?php echo $i ?>").value;
        var language_<?php echo $i ?> = document.getElementById("language_<?php echo $i ?>").value;
        var article_file_url_<?php echo $i ?> = document.getElementById("article_file_url_<?php echo $i ?>").value;
        var article_body_<?php echo $i ?> = document.getElementById("article_body_<?php echo $i ?>").value;
        var author_name_<?php echo $i ?> = document.getElementById("author_name_<?php echo $i ?>").value;
        var author_national_code_<?php echo $i ?> = document.getElementById("author_national_code_<?php echo $i ?>").value;
        var cooperation_type_<?php echo $i ?> = document.getElementById("cooperation_type_<?php echo $i ?>").value;
        <?php endfor; ?>

        <?php for ($i = 1;$i <= $number_of_articles;$i++): ?>
        document.getElementById("subject_<?php echo $i ?>").style.backgroundColor = 'white';
        document.getElementById("type_<?php echo $i ?>").style.backgroundColor = 'white';
        document.getElementById("scientific_group_1_<?php echo $i ?>").style.backgroundColor = 'white';
        document.getElementById("number_of_page_in_mag_from_<?php echo $i ?>").style.backgroundColor = 'white';
        document.getElementById("number_of_page_in_mag_to_<?php echo $i ?>").style.backgroundColor = 'white';
        document.getElementById("language_<?php echo $i ?>").style.backgroundColor = 'white';
        document.getElementById("article_file_url_<?php echo $i ?>").style.backgroundColor = 'white';
        document.getElementById("article_body_<?php echo $i ?>").style.backgroundColor = 'white';
        document.getElementById("author_name_<?php echo $i ?>").style.backgroundColor = 'white';
        document.getElementById("author_national_code_<?php echo $i ?>").style.backgroundColor = 'white';
        document.getElementById("cooperation_type_<?php echo $i ?>").style.backgroundColor = 'white';
        <?php endfor; ?>


        if (subject_1 == '') {
            alert('عنوان مقاله خالی است');
            document.getElementById("subject_1").style.backgroundColor = 'yellow';
            return false;
        } else if (type_1 == 'انتخاب کنید') {
            alert('نوع مقاله انتخاب نشده است');
            document.getElementById("type_1").style.backgroundColor = 'yellow';
            return false;
        } else if (scientific_group_1_1 == 'انتخاب کنید') {
            alert('گروه علمی اول انتخاب نشده است');
            document.getElementById("scientific_group_1_1").style.backgroundColor = 'yellow';
            return false;
        } else if (number_of_page_in_mag_from_1 == '') {
            alert('شماره صفحه در نشریه (از) وارد نشده است');
            document.getElementById("number_of_page_in_mag_from_1").style.backgroundColor = 'yellow';
            return false;
        } else if (number_of_page_in_mag_to_1 == '') {
            alert('شماره صفحه در نشریه (تا) وارد نشده است');
            document.getElementById("number_of_page_in_mag_to_1").style.backgroundColor = 'yellow';
            return false;
        } else if (language_1 == 'انتخاب کنید') {
            alert('زبان انتخاب نشده است');
            document.getElementById("language_1").style.backgroundColor = 'yellow';
            return false;
        } else if (article_file_url_1 == '') {
            alert('فایل مقاله انتخاب نشده است');
            document.getElementById("article_file_url_1").style.backgroundColor = 'yellow';
            return false;
        } else if (article_body_1 == '') {
            alert('چکیده مقاله وارد نشده است');
            document.getElementById("article_body_1").style.backgroundColor = 'yellow';
            return false;
        } else if (author_name_1 == '') {
            alert('نام و نام خانوادگی نویسنده وارد نشده است');
            document.getElementById("author_name_1").style.backgroundColor = 'yellow';
            return false;
        } else if (author_national_code_1 == '') {
            alert('کد ملی نویسنده وارد نشده است');
            document.getElementById("author_national_code_1").style.backgroundColor = 'yellow';
            return false;
        } else if (cooperation_type_1 == 'انتخاب کنید') {
            alert('نوع همکاری وارد نشده است');
            document.getElementById("cooperation_type_1").style.backgroundColor = 'yellow';
            return false;
        } else if (number_of_page_in_mag_from_1 > number_of_page_in_mag_to_1) {
            alert('آخرین شماره صفحه مقاله از اولین شماره کمتر می باشد');
            document.getElementById("number_of_page_in_mag_from_1").style.backgroundColor = 'yellow';
            document.getElementById("number_of_page_in_mag_to_1").style.backgroundColor = 'yellow';
            return false;
        }

        <?php for ($i = 2;$i <= $number_of_articles;$i++): ?>
        else if (subject_<?php echo $i ?>== '') {
            alert('عنوان مقاله خالی است');
            document.getElementById("subject_<?php echo $i ?>").style.backgroundColor = 'yellow';
            return false;
        } else if (type_<?php echo $i ?>== 'انتخاب کنید') {
            alert('نوع مقاله انتخاب نشده است');
            document.getElementById("type_<?php echo $i ?>").style.backgroundColor = 'yellow';
            return false;
        } else if (scientific_group_1_<?php echo $i ?>== 'انتخاب کنید') {
            alert('گروه علمی اول انتخاب نشده است');
            document.getElementById("scientific_group_1_<?php echo $i ?>").style.backgroundColor = 'yellow';
            return false;
        } else if (number_of_page_in_mag_from_<?php echo $i ?>== '') {
            alert('شماره صفحه در نشریه (از) وارد نشده است');
            document.getElementById("number_of_page_in_mag_from_<?php echo $i ?>").style.backgroundColor = 'yellow';
            return false;
        } else if (number_of_page_in_mag_to_<?php echo $i ?>== '') {
            alert('شماره صفحه در نشریه (تا) وارد نشده است');
            document.getElementById("number_of_page_in_mag_to_<?php echo $i ?>").style.backgroundColor = 'yellow';
            return false;
        } else if (language_<?php echo $i ?>== 'انتخاب کنید') {
            alert('زبان انتخاب نشده است');
            document.getElementById("language_<?php echo $i ?>").style.backgroundColor = 'yellow';
            return false;
        } else if (article_file_url_<?php echo $i ?>== '') {
            alert('فایل مقاله انتخاب نشده است');
            document.getElementById("article_file_url_<?php echo $i ?>").style.backgroundColor = 'yellow';
            return false;
        } else if (article_body_<?php echo $i ?>== '') {
            alert('چکیده مقاله وارد نشده است');
            document.getElementById("article_body_<?php echo $i ?>").style.backgroundColor = 'yellow';
            return false;
        } else if (author_name_<?php echo $i ?> == '') {
            alert('نام و نام خانوادگی نویسنده وارد نشده است');
            document.getElementById("author_name_<?php echo $i ?>").style.backgroundColor = 'yellow';
            return false;
        } else if (author_national_code_<?php echo $i ?> == '') {
            alert('کد ملی نویسنده وارد نشده است');
            document.getElementById("author_national_code_<?php echo $i ?>").style.backgroundColor = 'yellow';
            return false;
        } else if (cooperation_type_<?php echo $i ?> == 'انتخاب کنید') {
            alert('نوع همکاری وارد نشده است');
            document.getElementById("cooperation_type_<?php echo $i ?>").style.backgroundColor = 'yellow';
            return false;
        } else if (number_of_page_in_mag_from_<?php echo $i ?> > number_of_page_in_mag_to_<?php echo $i ?>) {
            alert('آخرین شماره صفحه مقاله از اولین شماره کمتر می باشد');
            document.getElementById("number_of_page_in_mag_from_<?php echo $i ?>").style.backgroundColor = 'yellow';
            document.getElementById("number_of_page_in_mag_to_<?php echo $i ?>").style.backgroundColor = 'yellow';
            return false;
        }
        <?php endfor; ?>

    }
</script>
<script>
    function displayrow(SelectionValue, trID) {
        var valuegroup = 'گروهی';
        if (SelectionValue == valuegroup) {
            document.getElementById("display_row_" + trID).style = '';
        } else {
            document.getElementById("display_row_" + trID).style.display = 'none';
        }
    }
</script>
<script src="build/js/Set_Mag_Version_Scripts.js"></script>
<script src="build/js/SearchInMagManagerTable.js"></script>

<?php include_once __DIR__ . '/footer.php'; ?>
