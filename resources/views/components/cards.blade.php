<div id="template-card" class="d-none">
    <div class="card text-center">
        <div class="card-header">CARDHEADER</div>
        <div class="card-body">
            <h5 class="card-title">CARDTITLE</h5>
            <p class="card-text">
                CARDBODY
            </p>
            <a href="DETAILURL" target="_blank" class="btn btn-primary">View</a>
            <a href="#" id="compare-OBJECTID" class="btn btn-info" style="display: none;">Compare</a>

        </div>
        <div class="card-footer text-muted">CARDTIME</div>
    </div>
    <script>
        (function(){
            let id = "OBJECTID";
            let type = "OBJECTTYPE";
            let kword = "KEYWORD";
            $(document).ready(function() {
                function openInNewTab(href) {
                    Object.assign(document.createElement('a'), {
                        target: '_blank',
                        href: href,
                    }).click();
                }

                if (!isNaN(id)) {
                    const btnCompare = $("a#compare-" + id);

                    if (type == "SURVEY") {
                        btnCompare.css("display", "");
                    }

                    btnCompare.on("click", function() {
                        const link1 = `https://shopee.co.id/search?keyword=${encodeURIComponent(kword)}`;
                        const link2 = `https://www.lazada.co.id/catalog/?q=${encodeURIComponent(kword)}`;
                        openInNewTab(link1);
                    })
                }
            });
        })();
    </script>
</div>
