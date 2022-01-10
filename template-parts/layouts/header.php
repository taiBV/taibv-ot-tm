<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>TMarket - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="assets/uikit-3.9.4/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="assets/uikit-3.9.4/js/uikit.min.js"></script>
    <script src="assets/uikit-3.9.4/js/uikit-icons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="<?= (isset($body))?$body:'' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<?php if (!isset($hidden)): ?>
<div class="header uk-background-default" uk-sticky>
    <div class="uk-container uk-padding-remove">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

            <div class="uk-navbar-left">
                <a href="." class="uk-navbar-item uk-logo"><img src="images/logo-market2.png" alt=""></a>
            </div>

            <div class="uk-navbar-right">

                <ul class="uk-navbar-nav uk-visible@m">
                    <li class="uk-active"><a href="#">Giới thiệu</a></li>
                    <li><a href="timgiaovien.php">Tìm giáo viên</a></li>
                    <li><a href="#">Trở thành giáo viên</a></li>
                    <li><a href="huongdan.php">Hướng dẫn</a></li>
                </ul>
                <div class="uk-navbar-item uk-visible@m">
                    <div class="header__lang" style="--background: url('images/vi_flag.png')">
                        <span>Tiếng Việt - Vnđ</span>
                        <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                    </div>
                    <div class="header__lang__dropdown uk-form-stacked" uk-dropdown="mode: hover;pos: bottom-center;">
                        <div class="header__lang__dropdown__item">
                            <label class="uk-form-label header__lang__dropdown__label" for="form-stacked-text">Ngôn ngữ</label>
                            <div class="uk-form-controls">
                                <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                    <select>
                                        <option value="">Tiếng Việt</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button style="--background: url('images/vi_flag.png')" class="header__lang__dropdown__btnSelect header__lang__dropdown__btnSelect--lang uk-width-1-1 uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="header__lang__dropdown__item">
                            <label class="uk-form-label header__lang__dropdown__label" for="form-stacked-text">Tiền tệ</label>
                            <div class="uk-form-controls">
                                <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                    <select>
                                        <option value="">VNĐ</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button style="--background: url('images/vi_flag.png')" class="header__lang__dropdown__btnSelect uk-width-1-1 uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="dangnhap.php" class="uk-navbar-item header__acc uk-visible@m">
                    Đăng nhập
                </a>
                <a href="dangky.php" class="uk-navbar-item header__acc uk-visible@m">
                    Đăng ký
                </a>
                <a href="" class="uk-navbar-item uk-hidden@m">
                    <div class="header__iconMenu"></div>
                </a>

            </div>

        </nav>
    </div>
</div>
<?php endif; ?>
