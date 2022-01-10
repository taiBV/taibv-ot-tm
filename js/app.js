console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

$(window).on('load', function () {
    function output (data, $output) {
        var result = '<div>input: Object</div>';
        result +=   '<div>slider: Object</div>';
        result +=   '<div>min: ' + data.min + '</div>';
        result +=   '<div>min_pretty: ' + data.min_pretty + '</div>';
        result +=   '<div>max: ' + data.max + '</div>';
        result +=   '<div>max_pretty: ' + data.max_pretty + '</div>';
        result +=   '<div>from: ' + data.from + '</div>';
        result +=   '<div>from_pretty: ' + data.from_pretty + '</div>';
        result +=   '<div>from_percent: ' + data.from_percent.toFixed(2) + '</div>';
        result +=   '<div>from_value: ' + data.from_value + '</div>';
        result +=   '<div>to: ' + data.to + '</div>';
        result +=   '<div>to_pretty: ' + data.to_pretty + '</div>';
        result +=   '<div>to_percent: ' + data.to_percent.toFixed(2) + '</div>';
        result +=   '<div>to_value: ' + data.to_value + '</div>';

        var html = '<div class="uk-grid-small uk-flex-middle" uk-grid>\n' +
            '                                <div class="uk-width-expand">\n' +
            '                                    <div class="timgiaovien__section1__dropdown__label">' + data.from + ' Vnđ</div>\n' +
            '                                </div>\n' +
            '                                <div class="uk-width-auto">\n' +
            '                                    <div class="timgiaovien__section1__dropdown__label">' + data.to + ' Vnđ</div>\n' +
            '                                </div>\n' +
            '                            </div>'

        $output.html(html);
    }
    var $output1 = $(".js-output__d1");
    $(".js-range-slider").ionRangeSlider({
        type: "double",
        min: 0,
        max: 55000,
        from: 45000,
        to: 55000,
        max_postfix: "tr",
        onStart: function (data) {
            output(data, $output1);
            // console.log('onStart');
        },
        onChange: function (data) {
            output(data, $output1);
            // console.log('onChange');
        },
        onFinish: function (data) {
            output(data, $output1);
            // console.log('onFinish');
        },
        onUpdate: function (data) {
            output(data, $output1);
            // console.log('onUpdate');
        }
    });

    UIkit.util.on('.timgiaovien__section1__dropdown,.header__lang__dropdown', 'show', function () {
        // do something
        $('.mask_menu').fadeIn(300);
    });

    UIkit.util.on('.timgiaovien__section1__dropdown,.header__lang__dropdown', 'hide', function () {
        // do something
        $('.mask_menu').stop(true, true).fadeOut(300);
    });
});