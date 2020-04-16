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

<li class="{{ Request::is('cameras*') ? 'active' : '' }}">
    <a href="{{ route('cameras.index') }}">
        <i class="fa fa-list"></i>
        <span>{{  __('camera.menu') }}</span>
    </a>
</li>

<li class="{{ Request::is('armes*') ? 'active' : '' }}">
    <a href="{{ route('armes.index') }}">
        <i class="fa fa-list"></i>
        <span>{{  __('arme.menu') }}</span>
    </a>
</li>

<li class="{{ Request::is('groupeElectriques*') ? 'active' : '' }}">
    <a href="{{ route('groupeElectriques.index') }}">
        <i class="fa fa-list"></i>
        <span>{{  __('groupeElectrique.menu') }}</span>
    </a>
</li>

