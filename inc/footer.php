<script>
    $(document).ready(function () {
        $('#p_use').click(function () {
            uni_modal("Privacy Policy", "policy.php", "mid-large")
        })
        window.viewer_modal = function ($src = '') {
            start_loader()
            var t = $src.split('.')
            t = t[1]
            if (t == 'mp4') {
                var view = $("<video src='" + $src + "' controls autoplay></video>")
            } else {
                var view = $("<img src='" + $src + "' />")
            }
            $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
            $('#viewer_modal .modal-content').append(view)
            $('#viewer_modal').modal({
                show: true,
                backdrop: 'static',
                keyboard: false,
                focus: true
            })
            end_loader()

        }
        window.uni_modal = function ($title = '', $url = '', $size = "") {
            start_loader()
            $.ajax({
                url: $url,
                error: err => {
                    console.log()
                    alert("An error occured")
                },
                success: function (resp) {
                    if (resp) {
                        $('#uni_modal .modal-title').html($title)
                        $('#uni_modal .modal-body').html(resp)
                        if ($size != '') {
                            $('#uni_modal .modal-dialog').addClass($size + '  modal-dialog-centered')
                        } else {
                            $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                        }
                        $('#uni_modal').modal({
                            show: true,
                            backdrop: 'static',
                            keyboard: false,
                            focus: true
                        })
                        end_loader()
                    }
                }
            })
        }
        window._conf = function ($msg = '', $func = '', $params = []) {
            $('#confirm_modal #confirm').attr('onclick', $func + "(" + $params.join(',') + ")")
            $('#confirm_modal .modal-body').html($msg)
            $('#confirm_modal').modal('show')
        }
    })
</script>

<!-- Footer-->

<footer class="py-4 bg-gradient-pink">
    <div class="container-fluid">
        <div class="row">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-4 col-xl-3" style="width: 34%">
                    <div><img src="dist/img/qrcode.png" alt="QR" width="40%" height="auto"></div>
                    <h4>Hotline: 1900 636510</h4>
                    <a href="https://www.facebook.com/thegioiskinfood" target="_blank">
                        <img src="dist/img/icon_facebook.png" alt="facebook" width="40" height="40">
                    </a>
                    <a href="http://www.thegioiskinfood.com" target="_blank">
                        <img src="dist/img/icon_link.png" alt="link" width="40" height="40">
                    </a>
                    <a href="https://shopee.vn/thegioiskinfood_flagship_store" target="_blank">
                        <img src="dist/img/icon_shopee.png" alt="link" width="40" height="40">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6 col-md-4 col-xl-3" style="width: 22%">
                    <h4>Nguyễn Trung Hiếu</h4>
                    <p>Mã sinh viên: 20104300379</p>
                    <p>Ngày sinh: 04/04/2002</p>
                    <p>Lớp: DHTI14A2HN</p>
                </div>
                <div class="col-md-4 col-sm-6 col-md-4 col-xl-3" style="width: 22%">
                    <h4>Nguyễn Đức Phúc</h4>
                    <p>Mã sinh viên: 20103100026</p>
                    <p>Ngày sinh: 22/11/2002</p>
                    <p>Lớp: DHTI14A2HN</p>
                </div>
                <div class="col-md-4 col-sm-6 col-md-4 col-xl-3" style="width: 22%">
                    <h4>Trần Thành Đạt</h4>
                    <p>Mã sinh viên: 20103100577</p>
                    <p>Ngày sinh: 06/02/2002</p>
                    <p>Lớp: DHTI14A9HN</p>
                </div>
            </div>
        </div>
    </div>

</footer>


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url ?>plugins/sparklines/sparkline.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- overlayScrollbars -->
<!-- <script src="<?php echo base_url ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
<!-- AdminLTE App -->
<script src="<?php echo base_url ?>dist/js/adminlte.js"></script>
<div class="daterangepicker ltr show-ranges opensright">
    <div class="ranges">
        <ul>
            <li data-range-key="Today">Hôm nay</li>
            <li data-range-key="Yesterday">Hôm qua</li>
            <li data-range-key="Last 7 Days">Trong vòng 7 ngày</li>
            <li data-range-key="Last 30 Days">Trong vòng 30 ngày</li>
            <li data-range-key="This Month">Tháng này</li>
            <li data-range-key="Last Month">Tháng trước</li>
            <li data-range-key="Custom Range">Tùy chỉnh</li>
        </ul>
    </div>
    <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
    </div>
    <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
    </div>
    <div class="drp-buttons"><span class="drp-selected"></span>
        <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button>
        <button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Áp dụng</button>
    </div>
</div>
<div class="jqvmap-label" style="display: none; left: 1093.83px; top: 394.361px;">Idaho</div>