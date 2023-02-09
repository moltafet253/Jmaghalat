<?php include_once __DIR__ . '/header.php'; ?>


<!-- Main content -->
<section class="content">

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">اختصاص اثر به ارزیاب تفصیلی</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered table-striped" id="myTable">
                <tbody>
                <tr style="font-size: 15px">
                    <th>ردیف</th>
                    <th style="width: 200px;">عنوان مقاله</th>
                    <th>گروه علمی ۱</th>
                    <th>گروه علمی ۲</th>
                    <th>زبان</th>
                    <th>بخش ویژه</th>
                    <th>نویسنده</th>
                    <th>نوع همکاری</th>
                    <th>همکاران</th>
                    <th>اختصاص به گروه علمی اول</th>
                    <th>اختصاص به گروه علمی دوم</th>
                </tr>
                <?php
                $a = 1;
                $query = mysqli_query($connection_maghalat, "select * from article where rate_status like '%تفصیلی%' order by festival_id asc ");
                foreach ($query as $Tafsili_list):
                    $id=$Tafsili_list['article_id'];
                $query=mysqli_query($connection_mag,"select * from mag_articles where id='$id'");
                foreach ($query as $article){}
                    ?>
                    <tr>
                        <td>
                            <?php echo $a;
                            $a++; ?>
                        </td>
                        <td>
                            <?php
                            echo $article['subject'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $article['scientific_group_1'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $article['scientific_group_2'];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $article['language'];
                            ?>
                        </td>
                        <td>
                            <?php
                            $special_type = $article['special_type'];
                            $query = mysqli_query($connection_maghalat, "select * from special_type where id='$special_type'");
                            foreach ($query as $Special_Type_Detail) {
                            }
                            echo $Special_Type_Detail['subject'];
                            ?>
                        </td>
                        <td>
                            <?php
                            $author = explode('|', $article['author']);
                            echo $author[0];
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $article['cooperation_type'];
                            ?>
                        </td>
                        <td>
                            <ul>
                                <?php
                                if (isset($Tafsili_list['cooperators'])) {
                                    $cooperators = explode('|', $Tafsili_list['cooperators']);
                                    for ($c = 0; $c < count($cooperators); $c += 2) {
                                        echo '<li style="margin-right: 5px">' . @$cooperators[$c] . '</li>';
                                    }
                                }
                                ?>
                            </ul>
                        </td>
                        <td>
                            <p style="margin-bottom: -1px;margin-right: 5px;font-size: 14px">- ارزیاب اول</p>
                            <select onchange="SetTafsiliGroup1Rater1(this.value,<?php echo $id = $Tafsili_list['id'] ?>)"
                                    id="rater_group_1_1" name="rater_group_1_1" class="form-control select2"
                                    style="width: auto;display: inline-block;margin-bottom: 8px">
                                <option disabled selected>انتخاب کنید</option>
                                <?php
                                $query = mysqli_query($connection_maghalat, "select * from users where type=1 and approved=1");
                                foreach ($query as $raters_info):
                                    ?>
                                    <option <?php
                                    $rater1 = $raters_info['id'];
                                    $query = mysqli_query($connection_maghalat, "select * from article where ejmali1_ratercode_g1='$rater1' and article_id='$id'");
                                    foreach ($query as $rater1_info) {
                                    }
                                    if ($raters_info['id'] == @$rater1_info['ejmali1_ratercode_g1']) {
                                        echo 'selected';
                                    }
                                    ?>
                                            value="<?php echo $raters_info['id'] ?>">
                                        <?php echo $raters_info['name'] . ' ' . $raters_info['family'];

                                        ?>
                                    </option>
                                <?php endforeach;
                                ?>
                            </select>
                            <br/>
                            <p style="margin-bottom: -1px;margin-right: 5px;font-size: 14px">- ارزیاب دوم</p>
                            <select onchange="SetTafsiliGroup1Rater2(this.value,<?php echo $id = $Tafsili_list['id'] ?>)"
                                    id="rater_group_1_2" name="rater_group_1_2" class="form-control select2"
                                    style="width: auto;display: inline-block;margin-bottom: 8px">
                                <option disabled selected>انتخاب کنید</option>
                                <?php
                                $query = mysqli_query($connection_maghalat, "select * from users where type=1 and approved=1");
                                foreach ($query as $raters_info):
                                    ?>
                                    <option <?php
                                    $rater2 = $raters_info['id'];
                                    $query = mysqli_query($connection_maghalat, "select * from article where ejmali2_ratercode_g1='$rater2' and article_id='$id'");
                                    foreach ($query as $rater2_info) {
                                    }
                                    if ($raters_info['id'] == @$rater2_info['ejmali2_ratercode_g1']) {
                                        echo 'selected';
                                    }
                                    ?>
                                            value="<?php echo $raters_info['id'] ?>">
                                        <?php echo $raters_info['name'] . ' ' . $raters_info['family'];
                                        ?>
                                    </option>
                                <?php endforeach;
                                ?>
                            </select>
                            <br/>
                            <p style="margin-bottom: -1px;margin-right: 5px;font-size: 14px">- ارزیاب سوم</p>
                            <select onchange="SetTafsiliGroup1Rater3(this.value,<?php echo $id = $Tafsili_list['id'] ?>)"
                                    id="rater_group_1_3" name="rater_group_1_3" class="form-control select2"
                                    style="width: auto;display: inline-block;margin-bottom: 8px">
                                <option disabled selected>انتخاب کنید</option>
                                <?php
                                $query = mysqli_query($connection_maghalat, "select * from users where type=1 and approved=1");
                                foreach ($query as $raters_info):
                                    ?>
                                    <option <?php
                                    $rater3 = $raters_info['id'];
                                    $query = mysqli_query($connection_maghalat, "select * from article where ejmali3_ratercode_g1='$rater3' and article_id='$id'");
                                    foreach ($query as $rater3_info) {
                                    }
                                    if ($raters_info['id'] == @$rater3_info['ejmali3_ratercode_g1']) {
                                        echo 'selected';
                                    }
                                    ?>
                                            value="<?php echo $raters_info['id'] ?>">
                                        <?php echo $raters_info['name'] . ' ' . $raters_info['family'];
                                        ?>
                                    </option>
                                <?php endforeach;
                                ?>
                            </select>
                        </td>

                            <?php if ($article['scientific_group_2']!=null or $article['scientific_group_2']!=''): ?>
                        <td>
                            <p style="margin-bottom: -1px;margin-right: 5px;font-size: 14px">- ارزیاب اول</p>
                            <select onchange="SetTafsiliGroup2Rater1(this.value,<?php echo $id = $article['id'] ?>)"
                                    id="rater_group_2_1" name="rater_group_2_1" class="form-control select2"
                                    style="width: auto;display: inline-block;margin-bottom: 8px">
                                <option disabled selected>انتخاب کنید</option>
                                <?php
                                $query = mysqli_query($connection_maghalat, "select * from users where type=1 and approved=1");
                                foreach ($query as $raters_info):
                                    ?>
                                    <option <?php
                                    $rater1 = $raters_info['id'];
                                    $query = mysqli_query($connection_maghalat, "select * from article where ejmali1_ratercode_g2='$rater1' and article_id='$id'");
                                    foreach ($query as $rater1_info) {
                                    }
                                    if ($raters_info['id'] == @$rater1_info['ejmali1_ratercode_g2']) {
                                        echo 'selected';
                                    }
                                    ?>
                                            value="<?php echo $raters_info['id'] ?>">
                                        <?php echo $raters_info['name'] . ' ' . $raters_info['family'];

                                        ?>
                                    </option>
                                <?php endforeach;
                                ?>
                            </select>
                            <br/>
                            <p style="margin-bottom: -1px;margin-right: 5px;font-size: 14px">- ارزیاب دوم</p>
                            <select onchange="SetTafsiliGroup2Rater2(this.value,<?php echo $id = $article['id'] ?>)"
                                    id="rater_group_2_2" name="rater_group_2_2" class="form-control select2"
                                    style="width: auto;display: inline-block;margin-bottom: 8px">
                                <option disabled selected>انتخاب کنید</option>
                                <?php
                                $query = mysqli_query($connection_maghalat, "select * from users where type=1 and approved=1");
                                foreach ($query as $raters_info):
                                    ?>
                                    <option <?php
                                    $rater2 = $raters_info['id'];
                                    $query = mysqli_query($connection_maghalat, "select * from article where ejmali2_ratercode_g2='$rater2' and article_id='$id'");
                                    foreach ($query as $rater2_info) {
                                    }
                                    if ($raters_info['id'] == @$rater2_info['ejmali2_ratercode_g2']) {
                                        echo 'selected';
                                    }
                                    ?>
                                            value="<?php echo $raters_info['id'] ?>">
                                        <?php echo $raters_info['name'] . ' ' . $raters_info['family'];
                                        ?>
                                    </option>
                                <?php endforeach;
                                ?>
                            </select>
                            <br/>
                            <p style="margin-bottom: -1px;margin-right: 5px;font-size: 14px">- ارزیاب سوم</p>
                            <select onchange="SetTafsiliGroup2Rater3(this.value,<?php echo $id = $article['id'] ?>)"
                                    id="rater_group_2_3" name="rater_group_2_3" class="form-control select2"
                                    style="width: auto;display: inline-block;margin-bottom: 8px">
                                <option disabled selected>انتخاب کنید</option>
                                <?php
                                $query = mysqli_query($connection_maghalat, "select * from users where type=1 and approved=1");
                                foreach ($query as $raters_info):
                                    ?>
                                    <option <?php
                                    $rater3 = $raters_info['id'];
                                    $query = mysqli_query($connection_maghalat, "select * from article where ejmali3_ratercode_g2='$rater3' and article_id='$id'");
                                    foreach ($query as $rater3_info) {
                                    }
                                    if ($raters_info['id'] == @$rater3_info['ejmali3_ratercode_g2']) {
                                        echo 'selected';
                                    }
                                    ?>
                                            value="<?php echo $raters_info['id'] ?>">
                                        <?php echo $raters_info['name'] . ' ' . $raters_info['family'];
                                        ?>
                                    </option>
                                <?php endforeach;
                                ?>
                            </select>
                        </td>
                            <?php endif; ?>
                    </tr>
                    <?php
                    $rater1_info = null;
                    $rater2_info = null;
                    $rater3_info = null;
                    $raters_info['id']=null;
                    $id = null;
                endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->

<script>
    function SetTafsiliGroup1Rater1(coderater, codeasar) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

            }
        }
        xmlhttp.open("GET", "build/ajax/Set_tafsili/Rater1_Group1.php?coderater=" + coderater + "&codeasar=" + codeasar, true);
        xmlhttp.send();
        codeasar = null;
        coderater = null;
    }
</script>
<script>
    function SetTafsiliGroup1Rater2(coderater, codeasar) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

            }
        }
        xmlhttp.open("GET", "build/ajax/Set_tafsili/Rater2_Group1.php?coderater=" + coderater + "&codeasar=" + codeasar, true);
        xmlhttp.send();
        codeasar = null;
        coderater = null;
    }
</script>
<script>
    function SetTafsiliGroup1Rater3(coderater, codeasar) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

            }
        }
        xmlhttp.open("GET", "build/ajax/Set_tafsili/Rater3_Group1.php?coderater=" + coderater + "&codeasar=" + codeasar, true);
        xmlhttp.send();
        codeasar = null;
        coderater = null;
    }
</script>
<script>
    function SetTafsiliGroup2Rater1(coderater, codeasar) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

            }
        }
        xmlhttp.open("GET", "build/ajax/Set_tafsili/Rater1_Group2.php?coderater=" + coderater + "&codeasar=" + codeasar, true);
        xmlhttp.send();
        codeasar = null;
        coderater = null;
    }
</script>
<script>
    function SetTafsiliGroup2Rater2(coderater, codeasar) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

            }
        }
        xmlhttp.open("GET", "build/ajax/Set_tafsili/Rater2_Group2.php?coderater=" + coderater + "&codeasar=" + codeasar, true);
        xmlhttp.send();
        codeasar = null;
        coderater = null;
    }
</script>
<script>
    function SetTafsiliGroup2Rater3(coderater, codeasar) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

            }
        }
        xmlhttp.open("GET", "build/ajax/Set_tafsili/Rater3_Group2.php?coderater=" + coderater + "&codeasar=" + codeasar, true);
        xmlhttp.send();
        codeasar = null;
        coderater = null;
    }
</script>

<?php include_once __DIR__ . '/footer.php'; ?>
