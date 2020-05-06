<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <ul class="sidebar-menu" data-widget="tree">

            <li class="treeview {{  Route::currentRouteName() == ('landClass.create') || Route::currentRouteName() == ('landClass.index') || Route::currentRouteName() == ('landClass.edit') || Route::currentRouteName() == ('landClass.show')
                                ||  Route::currentRouteName() == ('landType.create') || Route::currentRouteName() == ('landType.index') || Route::currentRouteName() == ('landType.edit') || Route::currentRouteName() == ('landType.show')
                                ||  Route::currentRouteName() == ('texture.create') ||Route::currentRouteName() == ('texture.index') || Route::currentRouteName() == ('texture.edit') || Route::currentRouteName() == ('texture.show')
                                ||  Route::currentRouteName() == ('cultivationType.create') ||Route::currentRouteName() == ('cultivationType.index') || Route::currentRouteName() == ('cultivationType.edit') || Route::currentRouteName() == ('cultivationType.show')
                                ||  Route::currentRouteName() == ('state.create') ||Route::currentRouteName() == ('state.index') || Route::currentRouteName() == ('state.edit') || Route::currentRouteName() == ('state.show')
                                    ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Configuration</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">

                    {{--land class--}}
                        <li class="treeview {{  Route::currentRouteName() == ('landClass.create') || Route::currentRouteName() == ('landClass.index') || Route::currentRouteName() == ('landClass.edit') || Route::currentRouteName() == ('landClass.show') ? 'active' : '' }}">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i> Land Class<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                </a>
                            <ul class="treeview-menu">
                                    <li class="{{  Route::currentRouteName() == ('landClass.create') ? 'active' : '' }}"><a href="{{route('landClass.create')}}"><i class="fa fa-circle-o"></i> Add Land Class</a></li>
                                    <li class="{{  Route::currentRouteName() == ('landClass.index') || Route::currentRouteName() == ('landClass.edit') || Route::currentRouteName() == ('landClass.show') ? 'active' : '' }}"><a href="{{route('landClass.index')}}"><i class="fa fa-circle-o"></i> Land Class List </a></li>
                            </ul>
                        </li>




                    <li class="treeview {{  Route::currentRouteName() == ('landType.create') || Route::currentRouteName() == ('landType.index') || Route::currentRouteName() == ('landType.edit') || Route::currentRouteName() == ('landType.show') ? 'active' : '' }}">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> Land Type<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{  Route::currentRouteName() == ('landType.create') ? 'active' : '' }}"><a href="{{route('landType.create')}}"><i class="fa fa-circle-o"></i> Add Land Type</a></li>
                            <li class="{{  Route::currentRouteName() == ('landType.index') || Route::currentRouteName() == ('landType.edit') || Route::currentRouteName() == ('landType.show') ? 'active' : '' }}"><a href="{{route('landType.index')}}"><i class="fa fa-circle-o"></i> Land Type List</a></li>
                        </ul>
                    </li>


                    <li class="treeview {{Route::currentRouteName() == ('texture.create') ||Route::currentRouteName() == ('texture.index') || Route::currentRouteName() == ('texture.edit') || Route::currentRouteName() == ('texture.show') ? 'active' : '' }}">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> Texture<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{  Route::currentRouteName() == ('texture.create') ? 'active' : '' }}"><a href="{{route('texture.create')}}"><i class="fa fa-circle-o"></i> Add Texture</a></li>
                            <li class="{{  Route::currentRouteName() == ('texture.index') || Route::currentRouteName() == ('texture.edit') || Route::currentRouteName() == ('texture.show') ? 'active' : '' }}"><a href="{{route('texture.index')}}"><i class="fa fa-circle-o"></i> Texture List</a></li>
                        </ul>
                    </li>



                    <li class="treeview {{Route::currentRouteName() == ('cultivationType.create') ||Route::currentRouteName() == ('cultivationType.index') || Route::currentRouteName() == ('cultivationType.edit') || Route::currentRouteName() == ('cultivationType.show') ? 'active' : '' }}">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> Cultivation Type<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{  Route::currentRouteName() == ('cultivationType.create') ? 'active' : '' }}"><a href="{{route('cultivationType.create')}}"><i class="fa fa-circle-o"></i>Add Cultivation Type</a></li>
                            <li class="{{  Route::currentRouteName() == ('cultivationType.index') || Route::currentRouteName() == ('cultivationType.edit') || Route::currentRouteName() == ('cultivationType.show') ? 'active' : '' }}"><a href="{{route('cultivationType.index')}}"><i class="fa fa-circle-o"></i>Cultivation Type List</a></li>
                        </ul>
                    </li>

                    <li class="treeview {{Route::currentRouteName() == ('state.create') ||Route::currentRouteName() == ('state.index') || Route::currentRouteName() == ('state.edit') || Route::currentRouteName() == ('state.show') ? 'active' : '' }}">
                        <a href="#">
                            <i class="fa fa-circle-o"></i>  State<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{  Route::currentRouteName() == ('state.create') ? 'active' : '' }}"><a href="{{route('state.create')}}"><i class="fa fa-circle-o"></i>Add State</a></li>
                            <li class="{{  Route::currentRouteName() == ('state.index') || Route::currentRouteName() == ('state.edit') || Route::currentRouteName() == ('state.show') ? 'active' : '' }}"><a href="{{route('state.index')}}"><i class="fa fa-circle-o"></i>State List</a></li>
                        </ul>
                    </li>
                </ul>

            </li>

            <li class="treeview {{Route::currentRouteName() == ('soilNutrition.create') ||Route::currentRouteName() == ('soilNutrition.index') || Route::currentRouteName() == ('soilNutrition.edit') || Route::currentRouteName() == ('soilNutrition.show') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-share"></i> <span>Properties</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview {{Route::currentRouteName() == ('soilNutrition.create') ||Route::currentRouteName() == ('soilNutrition.index') || Route::currentRouteName() == ('soilNutrition.edit') || Route::currentRouteName() == ('soilNutrition.show') ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-circle-o"></i> Soil Nutrition
                            <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{{  Route::currentRouteName() == ('soilNutrition.create') ? 'active' : '' }}"><a href="{{route('soilNutrition.create')}}"><i class="fa fa-circle-o"></i> Add Soil Nutrition</a></li>
                            <li class="{{  Route::currentRouteName() == ('soilNutrition.index') || Route::currentRouteName() == ('soilNutrition.edit') || Route::currentRouteName() == ('soilNutrition.show') ? 'active' : '' }}"><a href="{{route('soilNutrition.index')}}"><i class="fa fa-circle-o"></i> Soil Nutrition List </a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
