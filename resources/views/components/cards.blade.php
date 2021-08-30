<div id="template-card" class="d-none">
    <div class="card text-center" id="box-OBJECTID">
        <div class="card-header">CARDHEADER</div>
        <div class="card-body">
            <h5 class="card-title"> <i class="fas" id="icon-OBJECTID"></i></i> CARDTITLE</h5>
            <p class="card-text">
                CARDBODY
            </p>
            <a onclick="deleteMe('box-OBJECTID')" class="btn btn-warning">Remove</a>
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
                        $("i#icon-" + id).addClass("fas fa-seedling");
                    } else {
                        $("i#icon-" + id).addClass("fas fa-user-alt");
                    }

                    btnCompare.on("click", function() {
                        const link1 = `https://shopee.co.id/search?keyword=${encodeURIComponent(kword)}`;
                        const link2 = `https://www.lazada.co.id/catalog/?q=${encodeURIComponent(kword)}`;
                        openInNewTab(link1);
                    })
                }
            });
        })();

        function deleteMe(id) {
            $("div#"+id).remove();
        }
    </script>
</div>
