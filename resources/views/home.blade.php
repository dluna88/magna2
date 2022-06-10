@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mb-3">
        <ul id="stepper" class="list-group list-group-horizontal list-group-numbered">
            <li id="uploadfile" class="list-group-item stepButton active">
                <i class="fa-regular fa-file-lines"></i> Previous Project
            </li>
            <li id="geometry" class="list-group-item stepButton">
                <i class="fa-solid fa-bezier-curve"></i> Geometry stations
            </li>
            <li id="shield" class="list-group-item stepButton">
                <i class="fa-solid fa-shield-halved"></i> Shield stations
            </li>
            <li id="spotting" class="list-group-item stepButton">
                <i class="fa-brands fa-hubspot"></i> Spotting stations
            </li>
            <li id="robots" class="list-group-item stepButton">
                <i class="fa-solid fa-robot"></i> Robots
            </li>
            <li id="buffer" class="list-group-item stepButton">
                <i class="fa-brands fa-buffer"></i> Buffer
            </li>
            <li id="conveyors" class="list-group-item stepButton">
                <i class="fa-solid fa-bandage"></i> Conveyors
            </li>
            <li id="fencing" class="list-group-item stepButton">
                <i class="fa-solid fa-border-none"></i> Fencing
            </li>

        </ul>
    </div>
    <div id="tb-uploadfile"  class="row mb-3 justify-content-center toolbar">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="">
                        @csrf
                        <label for="formFile" class="form-label">
                            <h4><i class="fa-solid fa-paperclip"></i> Attach file (optional)</h4>
                            <p>If you have a previous model or want to enrich with more information, you can upload a file here.</p>
                        </label>
                        <input class="form-control" type="file" id="formFile">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col g-0">
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
        <!-- sidebar -->
        <div class="col-3">
            
            <ul id="tb-geometry" class="list-group d-none toolbar">
                <li id="sometool" class="list-group-item tool">An item</li>
                <li id="anothertool" class="list-group-item tool">A second item</li>
                <li id="athirdtool" class="list-group-item tool">A third item</li>
                <li id="foutrhtool" class="list-group-item tool">A fourth item</li>
                <li id="fifth tool here" class="list-group-item tool">And a fifth one</li>
            </ul>

            <ul id="tb-shield" class="list-group d-none toolbar">
                <li id="sometool" class="list-group-item tool">An item</li>
                <li id="anothertool" class="list-group-item tool">A second item</li>
            </ul>

            <ul id="tb-spotting" class="list-group d-none toolbar">
                <li id="foutrhtool" class="list-group-item tool">A fourth item</li>
                <li id="fifth tool here" class="list-group-item tool">And a fifth one</li>
            </ul>

            <ul id="tb-robots" class="list-group d-none toolbar">
                <li id="sometool" class="list-group-item tool">An item</li>
                <li id="anothertool" class="list-group-item tool">A second item</li>
                <li id="athirdtool" class="list-group-item tool">A third item</li>
                <li id="fifth tool here" class="list-group-item tool">And a fifth one</li>
            </ul>

            <ul id="tb-buffer" class="list-group d-none toolbar">
                <li id="anothertool" class="list-group-item tool">A second item</li>
                <li id="foutrhtool" class="list-group-item tool">A fourth item</li>
                <li id="fifth tool here" class="list-group-item tool">And a fifth one</li>
            </ul>

            <ul id="tb-conveyors" class="list-group d-none toolbar">
                <li id="fifth tool here" class="list-group-item tool">And a fifth one</li>
                <li id="sometool" class="list-group-item tool">An item</li>
                <li id="anothertool" class="list-group-item tool">A second item</li>
            </ul>

            <ul id="tb-fencing" class="list-group d-none toolbar">
                <li id="athirdtool" class="list-group-item tool">A third item</li>
                <li id="sometool" class="list-group-item tool">An item</li>
                <li id="foutrhtool" class="list-group-item tool">A fourth item</li>
                <li id="fifth tool here" class="list-group-item tool">And a fifth one</li>
                <li id="anothertool" class="list-group-item tool">A second item</li>
            </ul>
            
        </div>
        <!-- end sidebars -->
    </div>
</div>

@endsection

@section('js')
<script src="https://kit.fontawesome.com/d1bdffa7aa.js" crossorigin="anonymous"></script>
<script type="text/javascript">

    $(document).ready(function(){
        
        let tool = null;

        $(".tool").click(function(){
            tool = $(this).attr('id');
            $(".tool").removeClass("active")
            $(this).addClass("active")
        })

        $(".square").click(function(){
            id = $(this).attr("id")
            if(tool !== null){
                console.log("I'll put the tool "+tool+" on square: "+id)
            }else{
                console.log("clicked on square: "+id+" but there's no tool selected")
            }
            
        })

        $(".stepButton").click(function(){
            $(".stepButton").removeClass('active')
            tool = null;
            $(".tool").removeClass("active")
            $(this).addClass('active')
            let id = $(this).attr('id')
            $(".toolbar").addClass('d-none')
            $("#tb-"+id).removeClass('d-none')
            if(id != "uploadfile"){ $("#maingrid").removeClass('d-none') }else{ $("#maingrid").addClass('d-none') }
        })
    })

</script>
@endsection