@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-9">

            <div class="container">
                <div id="toolbars" class="row mb-3">
                    <div id="toolbar1" class="btn-group d-none" role="group">
                        <button type="button" class="btn btn-outline-primary">Left</button>
                        <button type="button" class="btn btn-outline-primary">Middle</button>
                        <button type="button" class="btn btn-outline-primary">Right</button>
                        <button type="button" class="btn btn-outline-primary">Right</button>
                        <button type="button" class="btn btn-outline-primary">Right</button>
                        <button type="button" class="btn btn-outline-primary">Right</button>
                    </div>
                </div>
            </div>

            <div id="maingrid" class="container d-none">
                <div id="a" class="row g-0">
                    <div id="a1" class="col square"></div>
                    <div id="a2" class="col square"></div>
                    <div id="a3" class="col square"></div>
                    <div id="a4" class="col square"></div>
                </div>
                <div id="b" class="row g-0">
                    <div id="b1" class="col square"></div>
                    <div id="b2" class="col square"></div>
                    <div id="b3" class="col square"></div>
                    <div id="b4" class="col square"></div>
                </div>
                <div id="c" class="row g-0">
                    <div id="c1" class="col square"></div>
                    <div id="c2" class="col square"></div>
                    <div id="c3" class="col square"></div>
                    <div id="c4" class="col square"></div>
                </div>
                <div id="d" class="row g-0">
                    <div id="d1" class="col square"></div>
                    <div id="d2" class="col square"></div>
                    <div id="d3" class="col square"></div>
                    <div id="d4" class="col square"></div>
                </div>
                
            </div>

        </div>
        <div class="col-3 d-flex align-items-start">
            
            <!-- SIDEBAR -->
            <ul id="sidebar" class="list-group">
                <li id="sidebarButton1" class="list-group-item sidebarButton active">An item</li>
                <li id="sidebarButton2" class="list-group-item sidebarButton">A second item</li>
                <li id="sidebarButton3" class="list-group-item sidebarButton">A third item</li>
                <li id="sidebarButton4" class="list-group-item sidebarButton">A fourth item</li>
                <li id="sidebarButton5" class="list-group-item sidebarButton">And a fifth one</li>
            </ul>
            <!-- end SIDEBAR -->

        </div>
    </div>
</div>

@endsection

@section('js')
<script type="text/javascript">

    $(document).ready(function(){
        
        $("#sidebarButton1").click(() => {
            hidegrid()
        })

        $("#sidebarButton2").click(function(){
            showgrid()
        })

        $(".sidebarButton").click(function(){ $(".sidebarButton").removeClass("active"); $(this).addClass("active"); })
        
        const showgrid = () => { $("#maingrid").removeClass("d-none"); $("#maingrid").addClass("d-block") }
        const hidegrid = () => { $("#maingrid").removeClass("d-block"); $("#maingrid").addClass("d-none") }
    })

</script>
@endsection