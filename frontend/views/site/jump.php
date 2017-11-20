<script>
    setTimeout("funjump()", 3000);
    function funjump() {
        window.location = '<?php echo $this->params['jumpUrl']?>';
    }
</script>

<script>
    !function () {
        layer.alert('<?php echo $this->params['message']?>', {
            icon: 1,
            skin: 'layui-layer-rim' //样式类名
            , closeBtn: 0
            , success: function (layero, index) {
                $(document).on('keydown', function (e) {
                    if (e.keyCode == 13) {
                        //layer.close(index);
                        window.location = '<?php echo $this->params['jumpUrl'] ?>';
                    }
                })
            }
        }, function () {
            window.location = '<?php echo $this->params['jumpUrl']?>';

        });
    }();

</script>
