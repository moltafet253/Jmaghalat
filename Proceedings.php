<?php include_once __DIR__ . '/header.php'; ?>


<!-- Main content -->
<section class="content">

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">صورتجلسه هیئت داوری و شورای علمی</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form method="post" id="Proceedings_Search">
                <label>دوره</label>
                <select class="form-control select2"
                        data-placeholder="گروه علمی را انتخاب کنید"
                        style="width: 20%;text-align: right" name="festival_id"
                        id="festival_id">
                    <option selected disabled>انتخاب کنید</option>
                    <?php
                    $query = mysqli_query($connection_maghalat, 'select distinct (festival_id) from article order by festival_id asc');
                    foreach ($query as $article_items):
                        $festival = $article_items['festival_id'];
                        $query = mysqli_query($connection_maghalat, "select * from festival where id='$festival'");
                        foreach ($query as $Festival_Info) {
                        }
                        ?>
                        <option <?php if ($Festival_Info['id'] == @$_POST['festival_id']) echo 'selected'; ?>
                                value="<?php echo $Festival_Info['id']; ?>"><?php echo $Festival_Info['name']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label>گروه علمی</label>
                <select class="form-control select2"
                        data-placeholder="گروه علمی را انتخاب کنید"
                        style="width: 30%;text-align: right" name="scientific_group"
                        id="scientific_group">
                    <option selected disabled>انتخاب کنید</option>
                    <?php
                    $query = mysqli_query($connection_maghalat, 'select * from scientific_group order by name asc');
                    foreach ($query as $group_items):
                        ?>
                        <option <?php if ($group_items['id'] == @$_POST['scientific_group']) echo 'selected'; ?>
                                value="<?php echo $group_items['id']; ?>"><?php echo $group_items['name']; ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="submit" class="btn btn-block btn-success" id="submit"
                       style="width: 10%;display: inline-block"
                       value="نمایش" name="submit">
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
<?php
if (@$_POST['festival_id'] and @$_POST['scientific_group']):
    $festival_id = $_POST['festival_id'];
    $scientific_group = $_POST['scientific_group'];
    $query = mysqli_query($connection_maghalat, "select * from festival where id='$festival_id'");
    foreach ($query as $Festival_Items) {
    }
    $query = mysqli_query($connection_maghalat, "select * from scientific_group where id='$scientific_group'");
    foreach ($query as $Group_Items) {
    }
    ?>
    <section class="content">

        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">صورتجلسه هیئت داوری و شورای علمی
                    <?php
                    echo 'دوره ' . $Festival_Items['name'] . ' گروه علمی ' . $Group_Items['name'];
                    ?>
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-striped" id="myTable">
                    <tr>
                        <th>ردیف</th>
                        <th>کد اثر</th>
                        <th>عنوان اثر</th>
                        <th>پدیدآورنده</th>
                        <th>امتیازهای خاص</th>
                        <th>امتیاز نهایی</th>
                        <th>نظر هیئت داوری</th>
                        <th>نوع کاندیداتوری</th>
                        <th>نظر شورای علمی</th>
                        <th>نوع برگزیدگی</th>
                    </tr>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
<?php
endif;
?>
<!-- /.content -->
</div>
<script src="build/js/Proceedings.js"></script>

<!-- /.content-wrapper -->
<?php include_once __DIR__ . '/footer.php'; ?>
