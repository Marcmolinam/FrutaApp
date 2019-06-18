 <aside class="side">
    <!-- sidebar: style can be found in sidebar.less -->
    

        <!-- Sidebar user panel (optional) -->
        <div class="sidebarmenu">
                
                <div>
                    @if (Auth::guest())
                    <h3><b>FrutApp</b></h3>
                    @else
                        <h3><b>{{ Auth::user()->name}}
                        <img src="{{ asset('img/boy.png') }}" width="30" height="30" >
                    </b></h3>
                        
                    @endif
                </div>    
                <div>    
                    <!-- Status -->
                    <h3><b>Online
                        <img src="{{ asset('img/checked.png') }}" width="30" height="30">
                    </b></h3>

                </div>
            
            
            <ul class="list-group" data-widget="tree">
                @include('layouts.menu')
            </ul>
         </div>       <!-- /.sidebar-menu -->
    
</aside>
