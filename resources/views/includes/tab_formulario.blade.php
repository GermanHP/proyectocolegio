<script>
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script>

<script>
    $('#myTabs a[href="#estudiante"]').tab('show') // Select tab by name
    $('#myTabs a:first').tab('show') // Select first tab
    $('#myTabs a:last').tab('show') // Select last tab
    $('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)
</script>

<script>
    $('a[id="btn_add"]').on('hide.bs.btn_add', function (e) {
        e.target.hidden
        e.relatedTarget
    })
</script>
