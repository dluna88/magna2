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
                    <div id="a5" class="col square"></div>
                    <div id="a6" class="col square"></div>
                    <div id="a7" class="col square"></div>
                    <div id="a8" class="col square"></div>
                    <div id="a9" class="col square"></div>
                    <div id="a10" class="col square"></div>
                </div>
                <div id="b" class="row g-0">
                    <div id="b1" class="col square"></div>
                    <div id="b2" class="col square"></div>
                    <div id="b3" class="col square"></div>
                    <div id="b4" class="col square"></div>
                    <div id="b5" class="col square"></div>
                    <div id="b6" class="col square"></div>
                    <div id="b7" class="col square"></div>
                    <div id="b8" class="col square"></div>
                    <div id="b9" class="col square"></div>
                    <div id="b10" class="col square"></div>
                </div>
                <div id="c" class="row g-0">
                    <div id="c1" class="col square"></div>
                    <div id="c2" class="col square"></div>
                    <div id="c3" class="col square"></div>
                    <div id="c4" class="col square"></div>
                    <div id="c5" class="col square"></div>
                    <div id="c6" class="col square"></div>
                    <div id="c7" class="col square"></div>
                    <div id="c8" class="col square"></div>
                    <div id="c9" class="col square"></div>
                    <div id="c10" class="col square"></div>
                </div>
                <div id="d" class="row g-0">
                    <div id="d1" class="col square"></div>
                    <div id="d2" class="col square"></div>
                    <div id="d3" class="col square"></div>
                    <div id="d4" class="col square"></div>
                    <div id="d5" class="col square"></div>
                    <div id="d6" class="col square"></div>
                    <div id="d7" class="col square"></div>
                    <div id="d8" class="col square"></div>
                    <div id="d9" class="col square"></div>
                    <div id="d10" class="col square"></div>
                </div>
                <div id="e" class="row g-0">
                    <div id="e1" class="col square"></div>
                    <div id="e2" class="col square"></div>
                    <div id="e3" class="col square"></div>
                    <div id="e4" class="col square"></div>
                    <div id="e5" class="col square"></div>
                    <div id="e6" class="col square"></div>
                    <div id="e7" class="col square"></div>
                    <div id="e8" class="col square"></div>
                    <div id="e9" class="col square"></div>
                    <div id="e10" class="col square"></div>
                </div>
                <div id="f" class="row g-0">
                    <div id="f1" class="col square"></div>
                    <div id="f2" class="col square"></div>
                    <div id="f3" class="col square"></div>
                    <div id="f4" class="col square"></div>
                    <div id="f5" class="col square"></div>
                    <div id="f6" class="col square"></div>
                    <div id="f7" class="col square"></div>
                    <div id="f8" class="col square"></div>
                    <div id="f9" class="col square"></div>
                    <div id="f10" class="col square"></div>
                </div>
                <div id="g" class="row g-0">
                    <div id="g1" class="col square"></div>
                    <div id="g2" class="col square"></div>
                    <div id="g3" class="col square"></div>
                    <div id="g4" class="col square"></div>
                    <div id="g5" class="col square"></div>
                    <div id="g6" class="col square"></div>
                    <div id="g7" class="col square"></div>
                    <div id="g8" class="col square"></div>
                    <div id="g9" class="col square"></div>
                    <div id="g10" class="col square"></div>
                </div>
                <div id="h" class="row g-0">
                    <div id="h1" class="col square"></div>
                    <div id="h2" class="col square"></div>
                    <div id="h3" class="col square"></div>
                    <div id="h4" class="col square"></div>
                    <div id="h5" class="col square"></div>
                    <div id="h6" class="col square"></div>
                    <div id="h7" class="col square"></div>
                    <div id="h8" class="col square"></div>
                    <div id="h9" class="col square"></div>
                    <div id="h10" class="col square"></div>
                </div>
                <div id="i" class="row g-0">
                    <div id="i1" class="col square"></div>
                    <div id="i2" class="col square"></div>
                    <div id="i3" class="col square"></div>
                    <div id="i4" class="col square"></div>
                    <div id="i5" class="col square"></div>
                    <div id="i6" class="col square"></div>
                    <div id="i7" class="col square"></div>
                    <div id="i8" class="col square"></div>
                    <div id="i9" class="col square"></div>
                    <div id="i10" class="col square"></div>
                </div>
                <div id="j" class="row g-0">
                    <div id="j1" class="col square"></div>
                    <div id="j2" class="col square"></div>
                    <div id="j3" class="col square"></div>
                    <div id="j4" class="col square"></div>
                    <div id="j5" class="col square"></div>
                    <div id="j6" class="col square"></div>
                    <div id="j7" class="col square"></div>
                    <div id="j8" class="col square"></div>
                    <div id="j9" class="col square"></div>
                    <div id="j10" class="col square"></div>
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