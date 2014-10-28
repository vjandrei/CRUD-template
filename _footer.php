<script src="app/bower_components/medium-editor/dist/js/medium-editor.js"></script>
<script src="app/bower_components/jquery/dist/jquery.js"></script>
<script>
    var editor = new MediumEditor('.editable');

    $(".btn").click(function(){
        data = $("#useData").html();
        $("#useDataField").val(data);
    });

</script>