@extends('layout.app')
@section('content')
<script>
var kurs = {{ $kurs->id }};
var tabId = 0;
var maxTabs = 0;
var tabNumber = {{ $order ?? 1}};
var tabObj;
var content = "No Content Loaded";
$.ajax({
    url: location.protocol + '//' + location.host + location.pathname + "/maxtabs",
    success: function(result) {
        
        maxTabs = result;
        
        if(tabNumber > maxTabs && tabNumber < 1) {
            tabNumber = 1;
        }

        if(tabNumber < maxTabs) {
            $('#nextTab').addClass('disable');
            $('#nextTab').attr("disable", true);
        }

        if( tabNumber > 1 && tabNumber >= maxTabs) {
            $('#nextTab').addClass('disable');
            $('#nextTab').attr("disable", false);
            $('#lastTab').attr("disable", true);
        }

        if(maxTabs < 1) {
            console.log("ERROR 404: Doesnt found any Tab");
            location.href = "/kurs";
        }
        loadContent();
    },
    async: false
});

function loadContent() {
    $.ajax({
        url: location.protocol + '//' + location.host + location.pathname + "/tab/"+tabNumber,
        success: function(result) {
            tabObj = $.parseJSON(JSON.stringify(result));
            content = tabObj[0].content;
            $('#kurs-content').html(content);
            if($('#card-img').length) {
                $('#card-img').detach();
            }
            if($('#card-video').length) {
                $('#card-video').detach();
            }
            if(tabObj[0].picturepath != null && (tabObj[0].picturepath)) {
                $('#card-body').prepend('<img id="card-img" class="w-100 h-100" src="/' + tabObj[0].picturepath +'" class="card-img-top" alt="Content Not Loading">')
            } else if(tabObj[0].videopath != null && (tabObj[0].videopath)) {
                $('#card-body').prepend('<video id="card-video" class="embed-responsive-item w-100 h-100" src="/' + tabObj[0].videopath + '" controls> </video>');
            }
            $("#tabDisplay").text(tabNumber + '/' + maxTabs);
            if(!(tabNumber <= 1)) {
                updateQueryStringParam('o', tabNumber);
            } else {
                removeQueryStringParam();
            }
        }
    });
}

function nextTab() {
    if(maxTabs > tabNumber) {
        if(tabNumber == 1) {
            $('#lastTab').attr("disable", false);
        }
        tabNumber++;
        loadContent();
    }
}

function lastTab() {
    if(tabNumber > 1) {
        tabNumber--;
        if(tabNumber == 1) {
            $('#lastTab').attr("disable", true);
        }
        loadContent();
    }
}
</script>
<div class="album py-5 theme-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card mb-4 shadow-sm theme-dark">
                    <div class="card-body">
                        <div id="card-body">
                            <p id="kurs-content" class="card-text"></p>
                           <!-- <pre class="kurs-code">&lt;?php echo "Test"; ?></pre> -->
                            
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center ">
                            <div class="float-left">
                                <a id="tabDisplay" class="text-center align-middle"></a>
                            </div>
                            <div class="float-right">
                                <div class="btn-group">
                                    <button id="lastTab" class="btn theme-dark disabled" onclick="lastTab()" disable="true">Vohreriges</button>
                                    <button id="nextTab" class="btn btn-secondary" onclick="nextTab()">Nächstes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection