@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 g-0">

            <div class="container">
                <div class="row mb-3">
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
                    <div id="tb-geometry" class="btn-group d-none toolbar" role="group">
                        <button type="button" class="btn btn-secondary">Geometry</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>
                    <div id="tb-shield" class="btn-group d-none toolbar" role="group">
                        <button type="button" class="btn btn-secondary">Shield</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>
                    <div id="tb-spotting" class="btn-group d-none toolbar" role="group">
                        <button type="button" class="btn btn-secondary">Spotting</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>
                    <div id="tb-robots" class="btn-group d-none toolbar" role="group">
                        <button type="button" class="btn btn-secondary">Robots</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>
                    <div id="tb-buffer" class="btn-group d-none toolbar" role="group">
                        <button type="button" class="btn btn-secondary">Buffer</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>
                    <div id="tb-conveyors" class="btn-group d-none toolbar" role="group">
                        <button type="button" class="btn btn-secondary">Conveyors</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                    </div>
                    <div id="tb-fencing" class="btn-group d-none toolbar" role="group">
                        <button type="button" class="btn btn-secondary">fencing</button>
                        <button type="button" class="btn btn-secondary">Middle</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
                        <button type="button" class="btn btn-secondary">Right</button>
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
        <div class="col-4 d-flex align-items-start">
            
            <!-- SIDEBAR -->
            <ul id="sidebar" class="list-group">
                <li id="uploadfile" class="list-group-item sidebarButton active">
                    <i class="fa-regular fa-file-lines"></i> Previous Project
                </li>
                <li id="geometry" class="list-group-item sidebarButton">
                    <i class="fa-solid fa-bezier-curve"></i> Geometry stations
                </li>
                <li id="shield" class="list-group-item sidebarButton">
                    <i class="fa-solid fa-shield-halved"></i> Shield stations
                </li>
                <li id="spotting" class="list-group-item sidebarButton">
                    <i class="fa-brands fa-hubspot"></i> Spotting stations
                </li>
                <li id="robots" class="list-group-item sidebarButton">
                    <i class="fa-solid fa-robot"></i> Robots
                </li>
                <li id="buffer" class="list-group-item sidebarButton">
                    <i class="fa-brands fa-buffer"></i> Buffer
                </li>
                <li id="conveyors" class="list-group-item sidebarButton">
                    <i class="fa-solid fa-bandage"></i> Conveyors
                </li>
                <li id="fencing" class="list-group-item sidebarButton">
                    <i class="fa-solid fa-border-none"></i> Fencing
                </li>

            </ul>
            <!-- end SIDEBAR -->

        </div>
    </div>
</div>

@endsection

@section('js')
<script src="https://kit.fontawesome.com/d1bdffa7aa.js" crossorigin="anonymous"></script>
<script type="text/javascript">

    $(document).ready(function(){
        
        

        $(".sidebarButton").click(function(){
            $(".sidebarButton").removeClass('active')
            $(this).addClass('active')
            let id = $(this).attr('id')
            $(".toolbar").addClass('d-none')
            $("#tb-"+id).removeClass('d-none')
            if(id != "uploadfile"){ $("#maingrid").removeClass('d-none') }else{ $("#maingrid").addClass('d-none') }
        })
    })

</script>
@endsection