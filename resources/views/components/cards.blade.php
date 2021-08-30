<div id="template-card" class="d-none">
    <div class="card text-center">
        <div class="card-header">CARDHEADER</div>
        <div class="card-body">
            <h5 class="card-title">CARDTITLE</h5>
            <p class="card-text">
                CARDBODY
            </p>
            <a href="DETAILURL" target="_blank" class="btn btn-primary">View</a>
            <a href="#" id="compare-OBJECTID" class="btn btn-info">Compare</a>

        </div>
        <div class="card-footer text-muted">CARDTIME</div>
    </div>
    <script>
        var id = "OBJECTID";
        var type = "OBJECTTYPE";
        $(document).ready(function() {
            if (!isNaN(id)) {
                $("a#compare-"+id).on("click", function() {
                    alert(`Ready ${type} ${id}`);
                })
            }
        });
    </script>
</div>
