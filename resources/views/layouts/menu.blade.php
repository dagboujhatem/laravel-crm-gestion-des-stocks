<li class="{{ Request::is('voitures*') ? 'active' : '' }}">
    <a href="{{ route('voitures.index') }}">
        <i class="fa fa-list"></i>
        <span>{{  __('voiture.menu') }}</span>
    </a>
</li>

<li class="{{ Request::is('jumelles*') ? 'active' : '' }}">
    <a href="{{ route('jumelles.index') }}">
        <i class="fa fa-list"></i>
        <span>{{  __('jumelle.menu') }}</span>
    </a>
</li>

