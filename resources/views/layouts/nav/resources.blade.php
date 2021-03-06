<a href="#">
    Resources <span class="caret"></span>
</a>

<ul class="dropdown-menu" role="menu">
    <li><a href="#">$<span id="money">{{ number_format(Auth::user()->nation->resources->money, 2) }}</span></a></li>
    <li class="dropdown">
        <a href="#">Energy <i class="fa fa-caret-right" aria-hidden="true"></i></a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Coal: <span class="pull-right" id="coal">{{ number_format(Auth::user()->nation->resources->coal, 2) }}</span></a></li>
            <li><a href="#">Oil: <span class="pull-right" id="oil">{{ number_format(Auth::user()->nation->resources->oil, 2) }}</span></a></li>
            <li><a href="#">Gas: <span class="pull-right" id="gas">{{ number_format(Auth::user()->nation->resources->gas, 2) }}</span></a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#">Food <i class="fa fa-caret-right" aria-hidden="true"></i></a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Wheat: <span class="pull-right" id="wheat">{{ number_format(Auth::user()->nation->resources->wheat, 2) }}</span></a></li>
            <li><a href="#">Livestock: <span class="pull-right" id="livestock">{{ number_format(Auth::user()->nation->resources->livestock, 2) }}</span></a></li>
            <li><a href="#">Bread: <span class="pull-right" id="bread">{{ number_format(Auth::user()->nation->resources->bread, 2) }}</span></a></li>
            <li><a href="#">Meat: <span class="pull-right" id="meat">{{ number_format(Auth::user()->nation->resources->meat, 2) }}</span></a></li>
            <li><a href="#">Water: <span class="pull-right" id="water">{{ number_format(Auth::user()->nation->resources->water, 2) }}</span></a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#">Construction <i class="fa fa-caret-right" aria-hidden="true"></i></a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Clay: <span class="pull-right" id="clay">{{ number_format(Auth::user()->nation->resources->clay, 2) }}</span></a></li>
            <li><a href="#">Cement: <span class="pull-right" id="cement">{{ number_format(Auth::user()->nation->resources->cement, 2) }}</span></a></li>
            <li><a href="#">Timber: <span class="pull-right" id="timber">{{ number_format(Auth::user()->nation->resources->timber, 2) }}</span></a></li>
            <li><a href="#">Brick: <span class="pull-right" id="brick">{{ number_format(Auth::user()->nation->resources->brick, 2) }}</span></a></li>
            <li><a href="#">Concrete: <span class="pull-right" id="concrete">{{ number_format(Auth::user()->nation->resources->concrete, 2) }}</span></a></li>
            <li><a href="#">Lumber: <span class="pull-right" id="lumber">{{ number_format(Auth::user()->nation->resources->lumber, 2) }}</span></a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a href="#">Military <i class="fa fa-caret-right" aria-hidden="true"></i></a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Rubber: <span class="pull-right" id="rubber">{{ number_format(Auth::user()->nation->resources->rubber, 2) }}</span></a></li>
            <li><a href="#">Iron: <span class="pull-right" id="iron">{{ number_format(Auth::user()->nation->resources->iron, 2) }}</span></a></li>
            <li><a href="#">Steel: <span class="pull-right" id="steel">{{ number_format(Auth::user()->nation->resources->steel, 2) }}</span></a></li>
            <li><a href="#">Bauxite: <span class="pull-right" id="bauxite">{{ number_format(Auth::user()->nation->resources->bauxite, 2) }}</span></a></li>
            <li><a href="#">Aluminum: <span class="pull-right" id="aluminum">{{ number_format(Auth::user()->nation->resources->aluminum, 2) }}</span></a></li>
            <li><a href="#">Lead: <span class="pull-right" id="lead">{{ number_format(Auth::user()->nation->resources->lead, 2) }}</span></a></li>
            <li><a href="#">Ammo: <span class="pull-right" id="ammo">{{ number_format(Auth::user()->nation->resources->ammo, 2) }}</span></a></li>
        </ul>
    </li>
</ul>