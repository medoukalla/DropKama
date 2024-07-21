<x-frontend.head />

<div id="load"></div>
    

<script>
    document.onreadystatechange = function () {
    var state = document.readyState
    if (state == 'interactive') {
        // document.getElementById('contents').style.visibility="hidden";
    } else if (state == 'complete') {
        setTimeout(function(){
            document.getElementById('interactive');
            document.getElementById('load').style.visibility="hidden";
            // document.getElementById('contents').style.visibility="visible";
        },1000);
    }
    }
</script>

<style>
    #load{
        width:100%;
        height:100%;
        position:fixed;
        z-index:9999;
        background:url("/loading.gif") no-repeat center center rgba(0,0,0,0.25)
    }
</style>

@yield('header')

@yield('content')

<x-frontend.footer />